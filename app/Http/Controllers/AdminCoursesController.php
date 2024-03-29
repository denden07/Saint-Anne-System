<?php

namespace App\Http\Controllers;

use App\Department;
use App\Student;
use App\Subject;
use App\SubjectDetails;
use App\Teacher;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users_auth = Auth::user();
      $subjects = SubjectDetails::where('active',1)->get();



        return view('admin.courses.index',compact('subjects','users_auth'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users_auth = Auth::user();

//        $subjects = Subject::pluck('subjectName','id')->all();
        $subjects = Subject::all()->pluck('full_subject','id')->all();
        $teachers = Teacher::all()->pluck('teacher_full','id')->all();
        $departments = Department::all()->pluck('deptName','id')->all();


        return view('admin.courses.create',compact('subjects','teachers','departments','users_auth'));
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



     $subject = new SubjectDetails();
     $subject->teacher_id = $request->teacher_id;
     $subject->subject_id = $request->subject_id;
     $subject->schedule = $request->schedule;
     $subject->year = $request->year;
     $subject->department_id = $request->department_id;
     $subject->active = 1;
    $subject->save();

 return redirect('admin/courses');


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

    public function addStudent($subject_details)
    {
        $users_auth = Auth::user();
        $subjects = SubjectDetails::find($subject_details);
        $students = Student::all()->pluck('student_full','id')->all();
        

        return view('admin.courses.add-student',compact('subjects','students','users_auth'));
    }


    public function updateSubjectStudent(Request $request,$subject_details){

        $subject= SubjectDetails::find($subject_details);

        $subject->save();

        if(isset($request->students)){
            $subject->students()->sync($request->students,true);
        }else{
            $subject->students()->sync(array());
        }
    }

}
