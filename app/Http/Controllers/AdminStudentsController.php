<?php

namespace App\Http\Controllers;

use App\Department;
use App\Gender;
use App\Photo;
use App\Student;
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

        return view('admin.students.index',compact('students'));

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
}
