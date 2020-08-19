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

Route::get('/','frontend\HomeController@index')->name('home');
Route::get('/find-tutors','frontend\HomeController@findTutors')->name('find-tutors');
Route::get('/become-tutors','frontend\HomeController@becomeTutors')->name('become-tutors');
Route::get('/login','frontend\HomeController@login')->name('login');
Route::get('/signup','frontend\HomeController@signup')->name('signup');
Route::get('teacher/login','frontend\TeacherController@login')->name('teacher-login');
Route::get('teacher/registration','frontend\TeacherController@registration')->name('teacher-registration');
Route::post('teacher/insert','frontend\TeacherController@insertTeacher')->name('teacher-insert');
Route::group(['prefix' => 'teacher','middleware' => 'teacher'], function () {

  
  
   Route::get('/step-one','frontend\TeacherController@stepOne')->name('teacher-step-one');
   Route::get('/step-two','frontend\TeacherController@stepTwo')->name('teacher-step-two');
   Route::get('/step-three','frontend\TeacherController@stepThree')->name('teacher-step-three');
   Route::get('/dashboard','frontend\TeacherController@dashboard')->name('teacher-dashboard');
   Route::get('/profile','frontend\TeacherController@profile')->name('teacher-profile');
   Route::get('/avalibility','frontend\TeacherController@avalibility')->name('teacher-avalibility');
   Route::get('/change-password','frontend\TeacherController@changePassword')->name('teacher-change-password');

});	

Route::group(['prefix' => 'parent'], function () {

   Route::get('/registration','frontend\ParentController@registration')->name('parent-registration');
   Route::get('/login','frontend\ParentController@login')->name('parent-login');
   Route::get('/dashboard','frontend\ParentController@dashboard')->name('parent-dashboard');
   Route::get('/profile','frontend\ParentController@profile')->name('parent-profile');
   Route::get('/change-password','frontend\ParentController@changePassword')->name('parent-change-password');
});	

Route::group(['prefix' => 'student'], function () {

   Route::get('/registration','frontend\StudentController@registration')->name('student-registration');
   Route::get('/login','frontend\StudentController@login')->name('student-login');
   Route::get('/dashboard','frontend\StudentController@dashboard')->name('student-dashboard');
   Route::get('/profile','frontend\StudentController@profile')->name('student-profile');
   Route::get('/change-password','frontend\StudentController@changePassword')->name('student-change-password');

});


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

