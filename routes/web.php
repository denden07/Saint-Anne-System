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

Route::get('/', function () {
    return view('welcome');
});


Route::get('test', function (){

    return view('layouts.admin');
});

Route::get('user',function (){
    return view('admin.students.create') ;
});

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
    'edit'=>'admin.teachers.edit'

]]);
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
