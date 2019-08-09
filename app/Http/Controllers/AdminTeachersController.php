<?php

namespace App\Http\Controllers;

use App\Department;
use App\Gender;
use App\Photo;
use App\Student;
use App\Subject;
use App\SubjectDetails;
use App\Teacher;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminTeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $users =Auth::user();

        $teachers = Teacher::all();
        return view('admin.teacher.index',compact('teachers','users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users =Auth::user();

        $genders = Gender::pluck('name','id')->all();
        $departments=Department::pluck('deptName','id')->all();

        return view('admin.teacher.create',compact('genders','departments','users'));
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


        $createdUser = Teacher::create($input);

        $photo->teacher_id = $createdUser->id;
        $photo->save();



        return redirect('/admin/teachers');

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

    public function addSubject($teacher_id)
    {
//       dd(SubjectDetails::findOrFail(2)->subject_id);
//       $dummy = Subject::find(7);
//        dd(Teacher::with('teacherphotos')->find('2'));
        $users =Auth::user();
        $teachers = Teacher::findOrFail($teacher_id);
        $subjects = Subject::all();
        $subjects2= array();
        $subjects_details = SubjectDetails::where('teacher_id',$teacher_id)->get();

        foreach($subjects as $subject){
            $subjects[$subject->id]=$subject->subjectName;
        }

        return view('admin.teacher.add-subject',compact('teachers','subjects','subjects2','users','subjects_details'));
    }

}
