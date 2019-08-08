<?php

namespace App\Http\Controllers;

use App\SubjectDetails;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Auth;

class TeacherSubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $users =Auth::guard('teacher')->user();
        $user =Auth::guard('teacher')->id();
//
        $subjects= SubjectDetails::where('teacher_id',$user)->get();


//        $teachers = Teacher::findOrFail($users);

        return view('teacher.subject.index',compact('users','subjects'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function studentList($subject_id){
        $users =Auth::guard('teacher')->user();

         $subjects = SubjectDetails::findOrFail($subject_id);



    return view('teacher.subject.student-list',compact('subjects','users'));

    }


    public function gradeStudent(){
        $users =Auth::guard('teacher')->user();





        return view('teacher.grades.create',compact('users'));

    }
}
