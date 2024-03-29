<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Student;
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
        $subjects= SubjectDetails::where('teacher_id',$user)->where('active',1)->get();


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

    public function studentList($subject_id)
    {

        $users =Auth::guard('teacher')->user();
        $subj1 =  SubjectDetails::where('id',$subject_id)->first()->subject->id;


        $subjects = SubjectDetails::where('id',$subject_id)->where('subject_id',$subj1)->first();

//        dd($subjects->students->first()->id);
        $grades = Grade::where('subject_id',$subj1)->get();

        return view('teacher.subject.student-list',compact('subjects','users','grades'));

    }

    public function recordIndex()
    {
        //

        $users =Auth::guard('teacher')->user();
        $user =Auth::guard('teacher')->id();
//
        $subjects= SubjectDetails::orderBy('id','desc')->where('teacher_id',$user)->get();





        return view('teacher.subject.record-index',compact('users','subjects'));

    }



    public function studentRecord($subject_id)
    {
        $users =Auth::guard('teacher')->user();
        $user =Auth::guard('teacher')->id();
        $subj1 =  SubjectDetails::where('id',$subject_id)->first()->subject->id;
        $grades = Grade::where('subject_id',$subj1)->where('status',1)->get();

        $subjects = SubjectDetails::where('id',$subject_id)->where('subject_id',$subj1)->first();

        if($grades->isEmpty()){

            return 'No record to show or records already passed to admin';
        }

        return view('teacher.subject.student-records',compact('subjects','users','grades'));
    }


    public function gradeStudent($subject_id, $student_id)
    {
        $users =Auth::guard('teacher')->user();
        $students = Student::findOrFail($student_id);
        $subjects = SubjectDetails::findOrFail($subject_id);
        $studentGrade = Grade::where('student_id',$student_id)->where('subject_origin',$subject_id)->whereNotNull('ave')->get();
        $grade_request = Grade::where('student_id',$student_id)->where('subject_origin',$subject_id)->first();


        if($studentGrade->isNotEmpty()&& $grade_request->request == 2 ){

            return redirect()->route('teacher.subject.edit-request',['subject_id'=>$subject_id,'student_id'=> $student_id]);

        }elseif($studentGrade->isNotEmpty()&& $grade_request->request == 1){
            return redirect()->route('teacher.subject.edit-grades',['subject_id'=>$subject_id,'student_id'=> $student_id]);
        }
//




        return view('teacher.grades.create',compact('users','students','subjects'));

    }

    public function editRequest($subject_id, $student_id){
        $users =Auth::guard('teacher')->user();
        $students = Student::findOrFail($student_id);
        $subjects = SubjectDetails::findOrFail($subject_id);





        return view('teacher.subject.request',compact('users','students','subjects'));

    }



    public function inputHandler(Request $request,$subject_id, $student_id)
    {

        $subjects = SubjectDetails::findOrFail($subject_id);

        $first = $request->firstGrade;
        $second = $request->secondGrade;
        $third = $request->thirdGrade;
        $fourth = $request->fourthGrade;
        $final = $first+$second+$third+$fourth;
        $final /= 4;
        $final = round($final);
        $subject_origin = $subjects->id;
        $year = $subjects->year;
//        dd($year->first()->year);



        $grade = new Grade();
        $grade->student_id =$student_id;
        $grade->subject_id =$subjects->subject->id;
        $grade->teacher_id = Auth::guard('teacher')->id();
        $grade->firstGrade =$first;
        $grade->secondGrade =$second;
        $grade->thirdGrade =$third;
        $grade->fourthGrade =$fourth;
        $grade->ave =$final;
        $grade->year = $year;
        $grade->subject_origin = $subject_origin;
        $grade->status = 1;
        $grade->request= 2;
        $grade->department_id = $subjects->department->id;
        $grade->save();

//        Grade::create(['year'=>$year]);


        return redirect()->route('teacher.subject.my-students',$subject_id)->with(['ok'=> 'Grade Submitted Successfully..!']);
    }

    public function submitGrades($year,$teacher,$subject)
    {
        $user =Auth::guard('teacher')->id();
        Grade::where('teacher_id',$user)->where('year', $year)->where('teacher_id',$teacher)->where('subject_id',$subject)->where('status', 1)->update(['status'=> 0]);
        return redirect()->back();
    }

    public function sendRequest($subject_id, $student_id)
    {
        $user =Auth::guard('teacher')->id();




       Grade::where('teacher_id',$user)->where('subject_origin',$subject_id)->where('student_id',$student_id)->where('request',2)->update(['request'=> 0]);

//        return redirect()->route('teacher.subject.edit-grades',['subject_id'=>$subject_id,'student_id'=> $student_id]);
return redirect()->back();

    }

    public function editGrades($subject_id, $student_id)
    {
        $user =Auth::guard('teacher')->id();
        $students= Student::findOrFail($student_id);
        $users = Auth::guard('teacher')->user();
        $subjects = SubjectDetails::findOrFail($subject_id);



      $grades = Grade::where('teacher_id',$user)->where('subject_origin',$subject_id)->where('student_id',$student_id)->first();




        return view('teacher.grades.edit',compact('users','grades','students','subjects'));

    }

    public function updateGrades(Request $request, $id)
    {
        //
    }
}
