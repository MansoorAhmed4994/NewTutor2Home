<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
 
Route::get('/zoom','ZoomController@index')->name('zoom');

Route::get('/testform-create','TestformController@create')->name('testform-create');
Route::post('/testform-create','TestformController@store')->name('testform-create');



Route::get('/','frontend\HomeController@index')->name('home');
Route::get('/find-tutors','frontend\HomeController@findTutors')->name('find-tutors');
Route::get('/single-tutor/{id}','frontend\HomeController@singleTutor')->name('single-tutor');
Route::get('/book-class/{id}','frontend\HomeController@BookClass')->name('book-class')->middleware('auth');
Route::post('/book-class-save','frontend\HomeController@savebookclass')->name('book-class-save')->middleware('auth');
Route::post('/stripesubmit', 'StripeController@postPaymentWithStripe')->name('stripe-payment')->middleware('auth');
Route::get('/payment/{id}', 'StripeController@index')->name('payment')->middleware('auth');
Route::get('/payWithStripe', 'StripeController@payWithStripe')->name('payWithStripe')->middleware('auth');
Route::get('/become-tutors','frontend\HomeController@becomeTutors')->name('become-tutors');
Route::get('/login','frontend\HomeController@login')->name('login'); 
Route::get('/signup','frontend\HomeController@signup')->name('signup');
Route::get('/termsofservices','frontend\HomeController@termsofservices')->name('termsofservices');
Route::get('/teacher/login','frontend\TeacherController@login')->name('teacher-login');
Route::get('/teacher/registration','frontend\TeacherController@registration')->name('teacher-registration');
Route::post('/teacher/insert','frontend\TeacherController@insertTeacher')->name('teacher-insert');
Route::post('/parent/insert','frontend\ParentController@insertParent')->name('parent-insert');


Route::get('/get-states','frontend\HomeController@getStates')->name('get-states');
Route::get('/get-cities','frontend\HomeController@getCities')->name('get-cities');
Route::get('/student/registration','frontend\StudentController@registration')->name('student-registration');
Route::get('/student/login','frontend\StudentController@login')->name('student-login');
Route::get('/parent/registration','frontend\ParentController@registration')->name('parent-registration');
Route::get('/parent/login','frontend\ParentController@login')->name('parent-login');

Route::group(['prefix' => 'teacher','middleware' => ['teacher','auth']], function () {
   Route::get('/step-one','frontend\TeacherController@stepOne')->name('teacher-step-one');
   Route::post('/teacher-step-one-save','frontend\TeacherController@stepOneSave')->name('teacher-step-one-save');
   Route::get('/step-two','frontend\TeacherController@stepTwo')->name('teacher-step-two');
   Route::post('/teacher-step-two-save','frontend\TeacherController@stepTwoSave')->name('teacher-step-two-save');
   Route::get('/step-three','frontend\TeacherController@stepThree')->name('teacher-step-three');
   Route::post('/teacher-step-three-save','frontend\TeacherController@stepThreeSave')->name('teacher-step-three-save');
   Route::get('/dashboard','frontend\TeacherController@dashboard')->name('teacher-dashboard');
   Route::get('/profile','frontend\TeacherController@profile')->name('teacher-profile');
   Route::get('/avalibility','frontend\TeacherController@avalibility')->name('teacher-avalibility');
   Route::get('/change-password','frontend\TeacherController@changePassword')->name('teacher-change-password');
   Route::post('/update-password','frontend\TeacherController@updatePassword')->name('teacher-update-password');
   Route::get('/viewprofile','frontend\TeacherController@viewprofile')->name('teacher-view-profile');
   Route::get('/updateQualification','frontend\TeacherController@updateQualification')->name('teacher-update-Qualification');
   Route::get('/updateSubject','frontend\TeacherController@updateSubject')->name('teacher-update-Subject');


   // Teacher classes   
   Route::get('/classes/create','frontend\TeacherClassesController@CreatClass')->name('create-class');
   Route::post('/classes/create','frontend\TeacherClassesController@CreatClassStore')->name('create-class');
   Route::get('/classes/list','frontend\TeacherClassesController@ListClass')->name('list-class');
   Route::get('/classes/view/{class}','frontend\TeacherClassesController@ViewClass')->name('view-class');
   Route::get('/classes/delete/{class}','frontend\TeacherClassesController@deleteClass')->name('delete-class');
   Route::get('/classes/edit','frontend\TeacherClassesController@EditClass')->name('edit-class');


});	



Route::group(['prefix' => 'parent','middleware' => ['parent','auth']], function () {
   Route::get('/dashboard','frontend\ParentController@dashboard')->name('parent-dashboard');
   Route::get('/profile','frontend\ParentController@profile')->name('parent-profile');
   Route::get('/change-password','frontend\ParentController@changePassword')->name('parent-change-password');
   Route::post('/update-password','frontend\StudentController@updatePassword')->name('parent-update-password');
   Route::post('/update-parent-profile','frontend\StudentController@updateprofile')->name('parent-update-profile');
});	
Route::post('/student/insert','frontend\StudentController@insertStudent')->name('student-insert');
Route::group(['prefix' => 'student','middleware' => ['student','auth']], function () {
   Route::get('/dashboard','frontend\StudentController@dashboard')->name('student-dashboard');
   Route::get('/profile','frontend\StudentController@profile')->name('student-profile');
   Route::get('/myclass','frontend\StudentclassController@myclass')->name('student-myclass');
   Route::get('/view-class/{class}','frontend\StudentclassController@viewclass')->name('student-view-class');
   Route::get('/change-password','frontend\StudentController@changePassword')->name('student-change-password');
   Route::post('/update-password','frontend\StudentController@updatePassword')->name('student-update-password');
   Route::post('/update-student-profile','frontend\StudentController@updateprofile')->name('student-update-profile');
   

});
Route::get('course/{filename}', function ($filename)
{
    $path = storage_path('app/course/' . $filename);
    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    ob_clean();
    return $response;
});

Route::get('/admin/login', 'HomeController@login')->name('admin.login');
Route::group(['prefix' => 'admin','middleware' => ['admin','auth']], function () {
   Route::get('/home', 'HomeController@index')->name('home');
   Route::get('/teachers', 'Backend\UserController@teacherList')->name('admin.teachers');
   Route::get('/students', 'Backend\UserController@studentList')->name('admin.students');
   Route::get('/parents', 'Backend\UserController@parentList')->name('admin.parents');
   Route::get('/activate/{user}', 'Backend\UserController@activate')->name('admin.activate');

   Route::group(['prefix'=>'courses'], function(){
      Route::get('/','Backend\CourseController@index')->name('courses-list');
      Route::get('/add','Backend\CourseController@create')->name('courses-create');
      Route::post('/store','Backend\CourseController@store')->name('courses-store');
      Route::get('/edit/{courses}','Backend\CourseController@edit')->name('courses-edit');
      Route::match(['put','patch'],'/update/{course}','Backend\CourseController@update')->name('courses-update');
      Route::get('/delete/{course}','Backend\CourseController@delete')->name('courses-delete');
   });


   	// Route::get('table-list', function () {
   	// 	return view('backend.pages.table_list');
   	// })->name('table');

   	// Route::get('typography', function () {
   	// 	return view('pages.typography');
   	// })->name('typography');

   	// Route::get('icons', function () {
   	// 	return view('pages.icons');
   	// })->name('icons');

   	// Route::get('map', function () {
   	// 	return view('pages.map');
   	// })->name('map');

   	// Route::get('notifications', function () {
   	// 	return view('pages.notifications');
   	// })->name('notifications');

   	// Route::get('rtl-support', function () {
   	// 	return view('pages.language');
   	// })->name('language');

   	// Route::get('upgrade', function () {
   	// 	return view('pages.upgrade');
   	// })->name('upgrade');
   Route::group(['middleware' => 'auth'], function () {
   	Route::resource('user', 'UserController', ['except' => ['show']]);
   	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
   	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
   	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
   });
});