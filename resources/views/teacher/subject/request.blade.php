@extends("layouts.teacher")

@section('title')
    My Subjects
@endsection


@section('is_active_course')
    class="active"
@endsection
@section('userpicture')
    {{$users->teacherphotos->file}}
@endsection

@section('username')
    {{$users->teacherFirstName." ". $users->teacherMiddleName." ".$users->teacherLastName." ".$users->teacherExtensionName}}
@endsection

@section('contents')


    <h3>Student Name: {{$students->studentFirstName}}</h3>
    <img height="50" src="{{$students->studentphotos->file}}" alt="">

    <p>Submitted Grade can only be edited by sending a request "Edit" to Admin. (Click Yes to Confirm, Click No to return)</p>

    <a class="btn btn-primary" href="{{route('teacher.subject.send-request',['student'=>$students->id,'subject'=>$subjects->id])}}" onclick="return confirm('Confirm?');">Yes</a>
    <button type="button" class="btn btn-danger">No</button>
@endsection