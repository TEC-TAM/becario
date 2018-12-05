<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* Client routes */
Route::get('/', 'PagesController@home');

Route::get('home', 'DashboardController@dashboard');
Route::post('scholarservice', 'PagesController@scholarservice');
Route::get('createpdf/{id}','PagesController@createpdf');

/* Client routes end */


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/* Teachers routes */
Route::resource('schoolboys','SchoolboysController');
Route::get('schoolboys/{id}/rate',[
	'as' => 'rate_form',
	'uses' => 'RateSchoolBoyController@showForm'
]);
Route::post('schoolboys/{id}/rate',[
	'as' => 'rate',
	'uses' => 'RateSchoolBoyController@rate'
]);
Route::get('schoolboys/{id}/rate/edit',[
	'as' => 'edit_rate_form',
	'uses' => 'RateSchoolBoyController@showEditForm'
]);
Route::put('schoolboys/{id}/rate',[
	'as' => 'update_rate',
	'uses' => 'RateSchoolBoyController@updateRate'
]);
/* Teachers routes end */

/*  Admin routes  */

Route::get('seeders',[
	'as' => 'seeder_files',
	'uses' => 'ImportsController@index'
]);
Route::get('seeders/{id}/teachers','ImportsController@importTeachersRecords');
Route::get('seeders/{id}/students','ImportsController@importStudentsRecords');
Route::delete('seeders/{id}',[
	'as' => 'delete seeder',
	'uses' => 'ImportsController@destroy'
]);

Route::resource('semester','PeriodController');

Route::get('teachers/upload',[
	'as' => 'upload_teachers_seeder',
	'uses' => 'ImportsController@uploadTeachers'
]);
Route::post('teachers/upload',[
	'as' => 'save_teachers_seeder',
	'uses' => 'ImportsController@saveTeachersFile'
]);
Route::resource('teachers','TeachersController');

Route::get('students/upload',[
	'as' => 'upload_students_seeder',
	'uses' => 'ImportsController@uploadStudents'
]);
Route::post('students/upload',[
	'as' => 'save_students_seeder',
	'uses' => 'ImportsController@saveStudentsFile'
]);
Route::get('students/rated/download',[
	'as' => 'download_students',
	'uses' => 'ImportsController@downloadRatedStudents'
]);
Route::get('students/unrated/download',[
	'as' => 'download_students',
	'uses' => 'ImportsController@downloadUnRatedStudents'
]);

Route::resource('students', 'StudentsController');

/*Route::get('search_client',[
   'as' => 'searchclient',
    'uses' => 'SearchesController@getClient'
]);
 *
 * */
/*  Admin routes end  */

/* API/V1 */
Route::get('api/v1/teachers',[
	'as' => 'teachers',
	'uses' => 'AjaxResponsesController@getTeachers'
]);
/* API/V1 END */
