<?php

namespace App\Http\Controllers;

use App\Department;
use App\Gender;
use App\Grade;
use App\Photo;
use App\Student;
use App\Subject;
use App\Teacher;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminStudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students =Student::all();
        $departments= Department::with('students')->orderBy('id','asc')->get();


        return view('admin.students.index',compact('students','departments'));

    }

    public function categories($department){
        $departments= Department::with('students')->orderBy('id','asc')->get();
        $students =Student::where('department_id',$department)->get();

        return view('admin.students.index',compact('students','departments'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $departments=Department::pluck('deptName','id')->all();
        $genders = Gender::pluck('name','id')->all();

        return view('admin.students.create',compact('departments','genders'));
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
        if(trim($request->password )== ''){
            $input = $request->except('password');
        }else{
            $input= $request->all();
            $input['password'] =bcrypt($request->password);
        }

        if($file = $request->file('photo_id')){

            $name = time() . $file->getClientOriginalName();

            $file->move('images',$name);

            $photo = Photo::create(['file'=>$name]);


            $input['photo_id']=$photo->id;

        }


        $createdUser = Student::create($input);


        $photo->student_id = $createdUser->id;
        $photo->save();




        return redirect('teacher/students');


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
        $students = Student::findOrFail($id);
        $departments=Department::pluck('deptName','id')->all();
        $genders = Gender::pluck('name','id')->all();

        return view('admin.students.edit',compact('students','departments','genders'));

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
        $student = Student::findOrFail($id);

        if(trim($request->password )== ''){
            $input = $request->except('password');
        }else{
            $input= $request->all();
            $input['password'] =bcrypt($request->password);
        }



        if($file = $request->file('photo_id')){

            $name = time() . $file->getClientOriginalName();
            $file->move('images',$name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id']=$photo->id;


            $oldImage = Student::findOrFail($id);
            $oldImage->studentphotos()->delete();

            $createdUser = Student::findOrFail($id);

            $photo->student_id = $createdUser->id;
            $photo->save();

        }

        $student->update($input);



        return redirect('admin/students');
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

    public function showRecord($student_id)
    {
        $students = Student::findOrFail($student_id);
        $subjects =Subject::all();


        $filipino1 = Grade::where('student_id',$student_id)->where('subject_id',1)->first();

        $english1 = Grade::where('student_id',$student_id)->where('subject_id',2)->first();
        $math1 = Grade::where('student_id',$student_id)->where('subject_id',3)->get();
       $science1 = Grade::where('student_id',$student_id)->where('subject_id',4)->get();
        $ap1 = Grade::where('student_id',$student_id)->where('subject_id',5)->get();
        $tle1 = Grade::where('student_id',$student_id)->where('subject_id',6)->get();
       $mapeh1 = Grade::where('student_id',$student_id)->where('subject_id',7)->get();
       $ep1 = Grade::where('student_id',$student_id)->where('subject_id',8)->get();
       $cle1 = Grade::where('student_id',$student_id)->where('subject_id',9)->get();
        $comp1 = Grade::where('student_id',$student_id)->where('subject_id',10)->get();



        return view('admin.students.records',compact('students','filipino1','english1','math1','science1','ap1','tle1','mapeh1','ep1','cle1','comp1'));
    }
}
