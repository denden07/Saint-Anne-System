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
use Illuminate\Support\Facades\Auth;

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
        $users_auth = Auth::user();
        $students = Student::all();
        $departments = Department::with('students')->orderBy('id', 'asc')->get();


        return view('admin.students.index', compact('students', 'departments','users_auth'));

    }

    public function categories($department)
    {
        $users_auth = Auth::user();
        $departments = Department::with('students')->orderBy('id', 'asc')->get();
        $students = Student::where('department_id', $department)->get();

        return view('admin.students.index', compact('students', 'departments','users_auth'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users_auth = Auth::user();
        $departments = Department::pluck('deptName', 'id')->all();
        $genders = Gender::pluck('name', 'id')->all();

        return view('admin.students.create', compact('departments', 'genders','users_auth'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if (trim($request->password) == '') {
            $input = $request->except('password');
        } else {
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }

        if ($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file' => $name]);


            $input['photo_id'] = $photo->id;

        }


        $createdUser = Student::create($input);


        $photo->student_id = $createdUser->id;
        $photo->save();


        return redirect('teacher/students');


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $users_auth = Auth::user();
        $students = Student::findOrFail($id);
        $departments = Department::pluck('deptName', 'id')->all();
        $genders = Gender::pluck('name', 'id')->all();

        return view('admin.students.edit', compact('students', 'departments', 'genders','users_auth'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $student = Student::findOrFail($id);

        if (trim($request->password) == '') {
            $input = $request->except('password');
        } else {
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }


        if ($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;


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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showRecord($student_id)
    {
        $users_auth = Auth::user();
        $students = Student::findOrFail($student_id);
        $subjects = Subject::all();


        $filipino1 = Grade::where('student_id', $student_id)->where('subject_id', 1)->first();
        $english1 = Grade::where('student_id', $student_id)->where('subject_id', 2)->first();
        $math1 = Grade::where('student_id', $student_id)->where('subject_id', 3)->first();
        $science1 = Grade::where('student_id', $student_id)->where('subject_id', 4)->first();
        $ap1 = Grade::where('student_id', $student_id)->where('subject_id', 5)->first();
        $tle1 = Grade::where('student_id', $student_id)->where('subject_id', 6)->first();
        $mapeh1 = Grade::where('student_id', $student_id)->where('subject_id', 7)->first();
        $ep1 = Grade::where('student_id', $student_id)->where('subject_id', 8)->first();
        $cle1 = Grade::where('student_id', $student_id)->where('subject_id', 9)->first();
        $comp1 = Grade::where('student_id', $student_id)->where('subject_id', 10)->first();

//        $filipino2 = Grade::where('student_id',$student_id)->where('subject_id',11)->first();
//        $english2 = Grade::where('student_id',$student_id)->where('subject_id',12)->first();
//        $math2 = Grade::where('student_id',$student_id)->where('subject_id',13)->first();
//        $science2 = Grade::where('student_id',$student_id)->where('subject_id',14)->first();
//        $ap2 = Grade::where('student_id',$student_id)->where('subject_id',15)->first();
//        $tle2 = Grade::where('student_id',$student_id)->where('subject_id',16)->first();
//        $mapeh2 = Grade::where('student_id',$student_id)->where('subject_id',17)->first();
//        $ep2 = Grade::where('student_id',$student_id)->where('subject_id',18)->first();
//        $cle2 = Grade::where('student_id',$student_id)->where('subject_id',19)->first();
//        $comp2 = Grade::where('student_id',$student_id)->where('subject_id',20)->first();
//
//        $filipino3 = Grade::where('student_id',$student_id)->where('subject_id',21)->first();
//        $english3 = Grade::where('student_id',$student_id)->where('subject_id',22)->first();
//        $math3 = Grade::where('student_id',$student_id)->where('subject_id',23)->first();
//        $science3 = Grade::where('student_id',$student_id)->where('subject_id',24)->first();
//        $ap3 = Grade::where('student_id',$student_id)->where('subject_id',25)->first();
//        $tle3 = Grade::where('student_id',$student_id)->where('subject_id',26)->first();
//        $mapeh3 = Grade::where('student_id',$student_id)->where('subject_id',27)->first();
//        $ep3 = Grade::where('student_id',$student_id)->where('subject_id',28)->first();
//        $cle3 = Grade::where('student_id',$student_id)->where('subject_id',29)->first();
//        $comp3 = Grade::where('student_id',$student_id)->where('subject_id',30)->first();
//
//        $filipino4 = Grade::where('student_id',$student_id)->where('subject_id',31)->first();
//        $english4 = Grade::where('student_id',$student_id)->where('subject_id',32)->first();
//        $math4 = Grade::where('student_id',$student_id)->where('subject_id',33)->first();
//        $science4 = Grade::where('student_id',$student_id)->where('subject_id',34)->first();
//        $ap4 = Grade::where('student_id',$student_id)->where('subject_id',35)->first();
//        $tle4 = Grade::where('student_id',$student_id)->where('subject_id',36)->first();
//        $mapeh4 = Grade::where('student_id',$student_id)->where('subject_id',37)->first();
//        $ep4 = Grade::where('student_id',$student_id)->where('subject_id',38)->first();
//        $cle4 = Grade::where('student_id',$student_id)->where('subject_id',39)->first();
//        $comp4 = Grade::where('student_id',$student_id)->where('subject_id',40)->first();
////


        return view('admin.students.records', compact('students', 'filipino1', 'english1', 'math1', 'science1', 'ap1', 'tle1', 'mapeh1', 'ep1', 'cle1', 'comp1','users_auth'));
    }
}
//},'filipino2','english2','math2','science2','ap2','tle2','ep2','mapeh2','cle2','comp2','filipino3','english3','math3','science3','ap3','tle3','mapeh3','ep3','cle3','comp3','filipino4','english4','math4','science4','ap4','tle4','mapeh4','ep4','cle4','comp4'
