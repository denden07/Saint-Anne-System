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
    @foreach($subjects as $subject)
        <ul>
            <li><a href="{{route('teacher.subject.student-record',['subject_id'=>$subject->id])}}">{{$subject->subject->subjectName}}</a></li>
        </ul>

    @endforeach


@endsection