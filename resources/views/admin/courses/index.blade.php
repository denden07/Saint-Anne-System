@extends("layouts.admin")

@section('title')
    Courses
@endsection


@section('is_active_course')
    class="active"
@endsection


@section('contents')


@if($subjects)

    @foreach($subjects as $subject)
        <li><a href="{{route('admin.subject.add-student',['subject_details'=>$subject->id])}}">{{$subject->subject->subjectName." - ". $subject->schedule}}</a></li>
        @endforeach
    @endif




@endsection