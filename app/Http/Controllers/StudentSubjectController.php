<?php

namespace App\Http\Controllers;

use App\Department;
use App\Grade;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users =Auth::guard('student')->user();

       $grades = Grade::where('student_id',$users->id)->get();
        $departments = Department::with('students')->orderBy('id', 'asc')->get();






        return view('student.subjects.index',compact('users','grades','departments'));
    }

    public function categories($department)
    {
        $users =Auth::guard('student')->user();
        $departments = Department::with('students')->orderBy('id', 'asc')->get();
        $students = Student::where('department_id', $department)->get();
        $grades =Grade::where('department_id',$department)->where('student_id',$users->id)->get();

        return view('student.subjects.index', compact('grades', 'departments','users'));
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

    public function index20(){
        $events = Event::get();
        $event_list = [];

        foreach ($events as $key=>$event){
            $event_list[] = Calendar::event(
                $event->event_name,
                true,
                new \DateTime($event->start_date),
                new \DateTime($event->end_date.'+1 day')
            );
        }

        $calendar_details = Calendar::addEvents($event_list);

        return view('admin.event.create',compact('calendar_details'));
    }
}
