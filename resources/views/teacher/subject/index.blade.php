@extends("layouts.teacher")

@section('title')
   My Subjects
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
@foreach($users->subject as $subjects)
<ul>
    <li>{{$subjects->subjectName}}</li>
</ul>

    @endforeach


@endsection