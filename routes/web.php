<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',function(){
	
	return view('layouts/mainsite');
});

Auth::routes();

Route::post('/register', 'Auth\RegisterController@register');
Route::post('/login', 'Auth\RegisterController@login');
Route::get('/logout', 'Auth\RegisterController@logout');

Route::get('/home', 'HomeController@index');
Route::get('/thankyou', function () {
    return view('auth/verify');
});

Route::get('/gouser',function(){
	
	return view('layouts/mainsite');
});
Route::get('/search/searchSubject', 'Controller@searchSubject');

Route::get('/verifyuser/{id}', 'Auth\RegisterController@verifyUser');
Route::get('/admin/login','Admin\AdminController@adminIndex');
Route::get('/admin/goUser',function(){
	return view('admin/admin-profile');
});

Route::post('/admin/create','Admin\AdminController@updateAdminProfile');
//Subject Routes
Route::get('/admin/subjects'                ,'Admin\SubjectController@indexSub');
Route::get('/admin/sub'                     ,'Admin\SubjectController@index');
Route::post('/admin/subject'                ,'Admin\SubjectController@subjectEntry');
Route::get('/admin/subjects/{id}'           ,'Admin\SubjectController@deleteSubject');
Route::get('/admin/edit-subjects/{id}'      ,'Admin\SubjectController@getSubject');
Route::post('/admin/subject-edit'           ,'Admin\SubjectController@subjectEdit');


//Subject category Routes
Route::get('/admin/subjectCats'             ,'Admin\SubjectCategoryController@indexSubjectCat');
Route::get('/admin/subcat'                  ,'Admin\SubjectCategoryController@index');
Route::post('/admin/subjectCat'             ,'Admin\SubjectCategoryController@subjectCatEntry');
Route::get('/admin/subjectscat/{id}'        ,'Admin\SubjectCategoryController@deleteSubjectCat');
Route::get('/admin/edit-subjectscat/{id}'   ,'Admin\SubjectCategoryController@getSubjectCat');
Route::post('/admin/subjectcat-edit'        ,'Admin\SubjectCategoryController@subjectCatEdit');

//Subject Sub Category Routes
Route::get('/admin/SubjectSubCategory'         ,'Admin\SubjectSubCatController@indexSubjectSubCat');
Route::get('/admin/SubjectSubCat-Entry'        ,'Admin\SubjectSubCatController@indexSub');
Route::post('/admin/Entry-SubjectSubCat'       ,'Admin\SubjectSubCatController@SubjectSubCatEntry');
Route::get('/admin/Edit-SubjectSubCat/{id}'    ,'Admin\SubjectSubCatController@getSubjectSubCat');
Route::post('/admin/SubjectSubCat-Edit'        ,'Admin\SubjectSubCatController@SubjectSubCatEdit');
Route::get('/admin/Delete-SubjectSubsCat/{id}' ,'Admin\SubjectSubCatController@deleteSubjectSubCat');

/* * ****** State Routing ******* */
Route::get('/admin/states', 'Admin\StateController@index');
Route::post('/admin/save-state', 'Admin\StateController@saveState');
Route::get('/admin/edit-state/{id}', 'Admin\StateController@editState');
Route::post('/admin/update-state', 'Admin\StateController@updateState');
Route::get('/admin/delete-state/{id}', 'Admin\StateController@deleteState');

/* * ****** City Routing ******* */
Route::get('/admin/cities', 'Admin\CityController@index');
Route::post('/admin/save-city', 'Admin\CityController@saveCity');
Route::get('/admin/edit-city/{id}', 'Admin\CityController@editCity');
Route::post('/admin/update-city', 'Admin\CityController@updateCity');
Route::get('/admin/delete-city/{id}', 'Admin\CityController@deleteCity');

/* * ****** City Routing ******* */
Route::get('/admin/countrys', 'Admin\CountryController@index');
Route::post('/admin/save-country', 'Admin\CountryController@saveCountry');
Route::get('/admin/edit-country/{id}', 'Admin\CountryController@editCountry');
Route::post('/admin/update-country', 'Admin\CountryController@updateCountry');
Route::get('/admin/delete-country/{id}', 'Admin\CountryController@deleteCountry');

Route::get('/userprofile/','TutorProfileController@index');
Route::get('/accprofile','TutorProfileController@accProfile');

Route::post('/imageupload','ImageController@store');
Route::post('/tutortagline','TutorProfileController@tagLine');

Route::post('/personalInfo','TutorProfileController@tutorInfo');
Route::post('/tutorbio','TutorProfileController@tutorbio');

Route::get('/admin/users','Admin\UserController@index');
Route::get('/admin/edit-user-profile/{id}/{type}', 'Admin\UserController@editUser');
Route::post('/admin/edit-user-profile', 'Admin\UserController@updateUser');
Route::get('/admin/delete-user/{id}', 'Admin\UserController@deleteUser');

Route::get('/admin/user-status-deactivate/{user_id}', 'Admin\UserController@statusDeactivate');
Route::get('/admin/user-status-activate/{user_id}', 'Admin\UserController@statusActivate');
Route::get('/admin/user-status-verify/{user_id}', 'Admin\UserController@statusActivate');

Route::get('/student/dashboard','StudentController@index');
Route::get('/student/messageRead/','StudentController@messageRead');
Route::post('/student/student_acc_data','StudentController@storeData');
Route::get('/student/account','StudentController@studentData');
Route::get('/student/tutor','StudentController@studentMsg');
Route::post('/student/tutor_request','StudentController@messageSend');
Route::post('/student/send_msg','StudentController@student_msg');
Route::get('/student/messageslist','StudentController@showMsgList');
Route::get('/student/messages/{id}','StudentController@editMsgStatus');