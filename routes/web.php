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

Route::get('/userprofile','UserProfileController@index');
Route::get('/accprofile','UserProfileController@accProfile');

Route::get('/imageupload','ImageController@store');
