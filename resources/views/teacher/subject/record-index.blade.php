
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
    <div class="container-fluid my-subject-teacher-container">

        <h1 class="my-subjects-teacher-headings">My Class Record</h1>

        <table class="table my-subject-teacher-table">
            <thead>
            <tr>
                <th>Subject Name</th>
                <th>School Year</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($subjects as $subject)
                <tr>
                    <td><a class="my-subject-teacher-name" href="{{route('teacher.subject.student-record',['subject_id'=>$subject->id])}}">{{$subject->subject->subjectName}}</a></td>
                    <td>{{$subject->schedule}}</td>

                    @if($subject->active ==1 )
                    <td  style="background: green;text-align: center;font-weight: bold;border-radius: 15px">Active</td>
                     @else
                    <td  style="background: red;text-align: center;font-weight: bold;border-radius: 15px">Not Active</td>
                     @endif
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection