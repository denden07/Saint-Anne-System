@extends("layouts.student")

@section('title')
   My Grade
@endsection
@section('userpicture')
    {{$users->studentphotos->file}}
@endsection
@section('username')
    {{$users->studentFirstName." ". $users->studentMiddleName." ".$users->studentLastName." ".$users->studentExtensionName}}
@endsection

@section('css')
    <style>
    #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
    }
</style>
    @endsection


@section('header')
    DASHBOARD
@endsection

@section('contents')
    <h1> My Subjects</h1>
    <table id="customers">
        <select onchange="location = this.value;">
            <option>All</option>
            @foreach($departments as $department)
                <option value="{{route('student.grade.sort',['department'=>$department->id])}}">{{$department->deptName}}</option>
            @endforeach
        </select>
        <tr>
            <th>Subject Name</th>
            <th>Grade</th>
            <th>Year</th>
            <th>Remarks</th>
            <th>Instructor</th>
        </tr>
        @if($grades)
            @foreach($grades as $grade)
        <tr>
            <td>{{$grade->subject->subjectName}}</td>
            <td>{{$grade->ave}}</td>
            <td>{{$grade->subjectOrigin->department->deptName}}</td>
            @if($grade->ave>75 )
                <td  style="background: green;text-align: center;font-weight: bold;border-radius: 15px;width: 5px" >Pass</td>
            @else
                <td   style="background: red;text-align: center;font-weight: bold;border-radius: 15px">Fail</td>
            @endif
            <td>{{$grade->subjectOrigin->teacher->teacherFirstName." ". $grade->subjectOrigin->teacher->teacherMiddleName." ". $grade->subjectOrigin->teacher->teacherLastName}}</td>
        </tr>
            @endforeach
            @endif
    </table>



@endsection




@section('scripts')

    <script src="{{asset('student-grade/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('student-grade/vendor/bootstrap/js/popper.js')}}"></script>

    <script src="{{asset('student-grade/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('student-grade/js/main.js')}}"></script>

    @endsection
