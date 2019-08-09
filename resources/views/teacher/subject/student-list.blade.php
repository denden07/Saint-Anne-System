@extends("layouts.teacher")

@section('title')
    My {{$subjects->subject->subjectName}} Student List
@endsection


@section('is_active_students')
    class="active"
@endsection
@section('userpicture')
    {{$users->teacherphotos->file}}
@endsection

@section('username')
    {{$users->teacherFirstName." ". $users->teacherMiddleName." ".$users->teacherLastName." ".$users->teacherExtensionName}}
@endsection

@section('contents')

        <ul>
            @foreach($subjects->students as $student)
                <li><a href="{{route('teacher.subject.grade-students',['subject_id'=>$subjects->id,'student_id'=>$student->id])}}">{{$student->studentFirstName}}</a></li>
            @endforeach
        </ul>




@endsection