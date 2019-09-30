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
    return view('layouts.home');
});

Route::get('/log-in', function (){
    return view('layouts.login');
});

Route::get('student/login',function (){
   return view('layouts.login-student');
});

Route::get('/logout', 'Auth\LoginController@logout');





//





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
//
    Route::get('teacher/events','EventsController@index2')->name('teacher.events.index');

    Route::get('teacher/subject/{subject_id}/my-students', 'TeacherSubjectsController@studentList')->name('teacher.subject.my-students');
    Route::get('teacher/subject/{subject_id}/grade/{student_id}', 'TeacherSubjectsController@gradeStudent')->name('teacher.subject.grade-students');
    Route::get('teacher/edit-request/{subject_id}/{student_id}', 'TeacherSubjectsController@editRequest')->name('teacher.subject.edit-request');
    Route::post('teacher/subject/{subject_id}/grade/{student_id}', 'TeacherSubjectsController@inputHandler')->name('teacher.subject.input-grade');
    Route::get('teacher/subject/{subject_id}/student-record', 'TeacherSubjectsController@studentRecord')->name('teacher.subject.student-record');
    Route::get('teacher/subject/student-record', 'TeacherSubjectsController@recordIndex')->name('teacher.subject.student-record-index');
    Route::get('teacher/subject/submit/{year}/{teacher}/{subject}', 'TeacherSubjectsController@submitGrades')->name('teacher.subject.submit-grade');
    Route::get('teacher/subject/edit-grades/{student}/{subject}', 'TeacherSubjectsController@sendRequest')->name('teacher.subject.send-request');
    Route::get('teacher/subject/edit-grades-form/{student}/{subject}', 'TeacherSubjectsController@editGrades')->name('teacher.subject.edit-grades');



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

        Route::get('admin/events/index','EventsController@index')->name('events.index');
        Route::post('admin/events/index','EventsController@addEvent')->name('events.add');




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
        Route::get('admin/student/{student_id}/record/', 'AdminStudentsController@showRecord')->name('admin.student.record');
        Route::get('admin/student/sort/{department}', 'AdminStudentsController@categories')->name('admin.student.sort');

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

Route::group(['middleware'=>'auth:student'],function (){




//    Route::resource('student/subjects','StudentSubjectController',['names'=>[
//
//        'index'=>'student.subject.index',
//        'create'=>'student.subject.create',
//        'store'=>'student.subject.store',
//        'edit'=>'student.subject.edit'
//
//    ]]);
    Route::get('students/events','StudentController@index20')->name('students.events.index');

    Route::get('student/my-subject/', 'StudentSubjectController@index')->name('student.my-subject');

    Route::get('student/subject/sort/{department}', 'StudentSubjectController@categories')->name('student.grade.sort');


}
);



Auth::routes();
Route::get('/admin', 'HomeController@index')->name('admin.dashboard');


Route::prefix('teacher')->group(function(){

    Route::get('/login','Auth\TeacherLoginController@showLoginForm')->name('teacher.login');
    Route::post('/login','Auth\TeacherLoginController@login')->name('teacher.login.submit');
    Route::get('/', 'TeacherController@index')->name('teacher.dashboard');
    Route::get('/logout','Auth\TeacherLoginController@logout')->name('teacher.logout');

});

Route::prefix('student')->group(function(){

    Route::get('/login','Auth\StudentLoginController@showLoginForm')->name('student.login');
    Route::post('/login','Auth\StudentLoginController@login')->name('student.login.submit');
    Route::get('/', 'StudentController@index')->name('student.dashboard');
    Route::get('/logout','Auth\StudentLoginController@logout')->name('student.logout');

});





 Route::resource('teacher/grade','AdminEventsController',['names'=>[

    'index'=>'admin.events.index',
    'create'=>'admin.events.create',
    'store'=>'admin.events.store',
    'edit'=>'admin.events.edit'


]]);




