@extends('frontend.layouts.app')
@section('content')
 <!-- Start of slider section
		============================================= -->
		<section id="slide" class="slider-section">
			<div id="slider-item" class="slider-item-details">
				<div  class="slider-area slider-bg-1 relative-position">
					<div class="slider-text">
						<div class="section-title mb20 headline text-center ">
							<div class="layer-1-3 heading">
                                <h2><span>Book a Class</span></h2><br>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>

        @php
     $months = array(1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec');
     @endphp
        <div class="Loginside">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="ninja" role="tabpanel" aria-labelledby="ninja-tab">
                                <div class="bg">
                                    <div class="title text-center">
                                    @php $totalamount=$bookingdata->session_hours * $bookingdata->amount @endphp
                                   Payment ${{  $totalamount }}
                                    </div>
                                    <label class="mt-3 ml-3"><small class="text-primary">(*) All fields are
                                            mandatory.</small></label>
                                    <div class="form">
                                    @include('frontend.frontalert')
                                    <form class="form" method="POST" 
                                    action="{{ route('stripe-payment') }}" enctype="multipart/form-data"
                                     method="post" accept-charset="utf-8" autocomplete="off" novalidate="novalidate">
        @csrf
        <input class="form-control"  type="hidden" value="{{ $bookingdata->id }}" name="booking_id">
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    
                                                    <span class="text-danger pull-right">*</span>
                                                    <input class="form-control" placeholder="Card Number" type="text"
                                    value="4242424242424242" required name="card_no">
                                                    <label class="error">
                                                     </label>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    
                                                    <span class="text-danger pull-right">*</span>
                                                    <input class="form-control" placeholder="CCV Code" type="text"
                                                     value="" required name="cvvNumber">
                                                    <label class="error">
                                                     </label>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                   
                                                    <span class="text-danger pull-right">*</span>
                                                    <select class="form-control" id="expiration-month" name="ccExpiryMonth" >
                                       @foreach($months as $k=>$v)
                                       <option value="{{ $k }}" {{ old('ccExpiryMonth') == $k ? 'selected' : '' }}>{{ $v }}</option>                                                        
                                       @endforeach
                                    </select>  
                                                    <label class="error">
                                                     </label>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    
                                                    <span class="text-danger pull-right">*</span>
                                                    <select class="form-control" id="expiration-year" name="ccExpiryYear" >
                                       @for($i = date('Y'); $i <= (date('Y') + 15); $i++)
                                       <option value="{{ $i }}">{{ $i }}</option>            
                                       @endfor
                                    </select>
                                                    <label class="error">
                                                     </label>
                                                </div>
                                        
                                           

                                                <div class="mt-5 form-group col-12">
                                                <button name="search" class="btn btn-primary w-100" type="submit">
                                                              Submit
                                                            </button>
                                                    <!-- <a class=" btn btn-primary w-100" href="{{ route('teacher-step-two') }}">
                                                    Save
                                                    </a> -->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection