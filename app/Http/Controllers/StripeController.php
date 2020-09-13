<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use App\User;
use Stripe\Error\Card;
use Cartalyst\Stripe\Stripe;
use App\Models\BookClass;
use App\Models\PaymentRequest;
use Auth;
class StripeController extends Controller
{

  public function index($id)
  {
   
   $bookingdata=BookClass::where(['id'=>$id,'booker_id'=>Auth::user()->id])->first();
   if(!empty($bookingdata)){
    return view('frontend.payment.index',compact('bookingdata'));
   }else{
    return redirect()->route('find-tutors'); 
   } 
  }  

 public function payWithStripe()
 {
$stripe = Stripe::make(env('STRIPE_SECRET'));
 $token = $stripe->tokens()->create([
 'card' => [
 'number' => '4242424242424242',
 'exp_month' => 10,
 'cvc' => 314,
 'exp_year' => 2020,
 ],
 ]);
$charge = $stripe->charges()->create([
 'card' => $token['id'],
 'currency' => 'USD',
 'amount' =>10,
 'description' => 'Add in wallet',
 ]);
 
 if($charge['status'] == 'succeeded') {
 /**
 * Write Here Your Database insert logic.
 */
 echo "Pagament fet correctament";
 echo "<pre>";
 print_r($charge);exit();
}  	
 exit;	

 return view('paywithstripe');
 }
public function postPaymentWithStripe(Request $request)
 {
  $validator = Validator::make($request->all(), [
 'card_no' => 'required',
 'ccExpiryMonth' => 'required',
 'ccExpiryYear' => 'required',
 'cvvNumber' => 'required',
 ]);
 if ($validator->fails()) {
  return redirect()->back()->withErrors($validator)->withInput();
}
 $input = $request->all();
 if ($validator->passes()) { 
// $input = array_except($input,array('_token'));
$stripe = Stripe::make(env('STRIPE_SECRET')); //set here your stripe secret key
 try {
    $bookingdata=BookClass::where(['id'=>$input['booking_id'],'booker_id'=>Auth::user()->id])->first(); 
    $amount=$bookingdata->amount;	
    $session_hours=$bookingdata->session_hours;	
    $totalamount=$session_hours*$amount;
  $token = $stripe->tokens()->create([
 'card' => [
 'number' => $request->get('card_no'),
 'exp_month' => $request->get('ccExpiryMonth'),
 'exp_year' => $request->get('ccExpiryYear'),
 'cvc' => $request->get('cvvNumber'),
 ],
 ]);
 $charge = $stripe->charges()->create([
 'card' => $token['id'],
 'currency' => 'USD',
 'amount' => $totalamount,
 'description' => 'Add in wallet',
 ]);
 if($charge['status'] == 'succeeded') {
   $transation_id=$charge['id'];
   $transationData=[
    'booking_id'=>$input['booking_id'],
    'user_id'   =>Auth::user()->id,
    'transation_id'=> $transation_id,
    'amount'       =>$totalamount,
  ];
  $created =  PaymentRequest::create($transationData);
  return redirect()->route('book-class',$bookingdata->teacher_id)->with('success', 'Your payment successfully recieved.!');
  }
 } catch (Exception $e) {
 return redirect()->back()->withErrors(['error',$e->getMessage()]);
 } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
  return redirect()->back()->withErrors(['error',$e->getMessage()]);
 } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
  return redirect()->back()->withErrors(['error',$e->getMessage()]);
 }
 }
 }
}