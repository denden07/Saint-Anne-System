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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('layouts.login');
});

Route::get('/log-in',function (){
    return view('layouts.login');
});
Route::get('/logout', 'Auth\LoginController@logout');


//Route::get('/admin', function (){
//
//    return view('admin.index');
//});

//Route::get('teacher', function (){
//
//    return view('teacher.index');
//});



//Admin Group




//Teacher Group
Route::group(['middleware'=>'auth:teacher'],function (){

    Route::get('teacher/subject/{id}/my-students', 'TeacherSubjectsController@studentList')->name('teacher.subject.my-students');
    Route::get('teacher/subject/{subject_id}/grade/{student_id}', 'TeacherSubjectsController@gradeStudent')->name('teacher.subject.grade-students');
    Route::post('teacher/subject/{subject_id}/grade/{student_id}', 'TeacherSubjectsController@inputHandler')->name('teacher.subject.input-grade');

    Route::resource('teacher/students','TeacherStudentsController',['names'=>[

        'index'=>'teacher.students.index',
        'create'=>'teacher.students.create',
        'store'=>'teacher.students.store',
        'edit'=>'teacher.students.edit'

    ]]);

    Route::resource('teacher/my-subjects','TeacherSubjectsController',['names'=>[

        'index'=>'teacher.subject.index',
        'create'=>'teacher.subject.create',
        'store'=>'teacher.subject.store',
        'edit'=>'teacher.subject.edit'
    ]]);



});




    Route::group(['middleware'=>'auth'],function (){

        Route::resource('admin/students','AdminStudentsController',['names'=>[

            'index'=>'admin.students.index',
            'create'=>'admin.students.create',
            'store'=>'admin.students.store',
            'edit'=>'admin.students.edit'


        ]]);
        Route::resource('admin/users','AdminUsersController',['names'=>[

            'index'=>'admin.users.index',
            'create'=>'admin.users.create',
            'store'=>'admin.users.store',
            'edit'=>'admin.users.edit'

        ]]);
        Route::resource('admin/teachers','AdminTeachersController',['names'=>[
            'index'=>'admin.teachers.index',
            'create'=>'admin.teachers.create',
            'store'=>'admin.teachers.store',
            'edit'=>'admin.teachers.edit',


        ]]);

        Route::get('admin/teachers/{id}/add-subject', 'AdminTeachersController@addSubject')->name('admin.teachers.add-subject');
        Route::get('admin/subject/{id}/add-student', 'AdminCoursesController@addStudent')->name('admin.subject.add-student');
        Route::patch('admin/subject/{id}/update','AdminCoursesController@updateSubjectStudent')->name('admin.subject.add-student.update');
        Route::resource('admin/sections','AdminSectionsController',['names'=>[

            'index'=>'admin.sections.index',
            'create'=>'admin.sections.create',
            'store'=>'admin.sections.store',
            'edit'=>'admin.sections.edit'


        ]]);
        Route::resource('admin/library','AdminLibraryController',['names'=>[

            'index'=>'admin.library.index',
            'create'=>'admin.library.create',
            'store'=>'admin.library.store',
            'edit'=>'admin.library.edit'

        ]]);
        Route::resource('admin/courses','AdminCoursesController',['names'=>[
            'index'=>'admin.courses.index',
            'create'=>'admin.courses.create',
            'store'=>'admin.courses.store',
            'edit'=>'admin.courses.edit'

        ]]);
        Route::resource('admin/events','AdminEventsController',['names'=>[

            'index'=>'admin.events.index',
            'create'=>'admin.events.create',
            'store'=>'admin.events.store',
            'edit'=>'admin.events.edit'


        ]]);

        Route::resource('teacher/courses','TeacherCoursesController',['names'=>[

            'index'=>'teacher.courses.index',
            'create'=>'teacher.courses.create',
            'store'=>'teacher.courses.store',
            'edit'=>'teacher.courses.edit'

        ]]);



    });



Auth::routes();
Route::get('/admin', 'HomeController@index')->name('admin.dashboard');


Route::prefix('teacher')->group(function(){

    Route::get('/login','Auth\TeacherLoginController@showLoginForm')->name('teacher.login');
    Route::post('/login','Auth\TeacherLoginController@login')->name('teacher.login.submit');
    Route::get('/', 'TeacherController@index')->name('teacher.dashboard');

});

 Route::resource('teacher/grade','AdminEventsController',['names'=>[

    'index'=>'admin.events.index',
    'create'=>'admin.events.create',
    'store'=>'admin.events.store',
    'edit'=>'admin.events.edit'


]]);



