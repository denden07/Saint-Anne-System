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

    <h1 class="my-subjects-teacher-headings">My Active Subjects</h1>

    <table class="table my-subject-teacher-table">
        <thead>
          <tr>
            <th>Subject Name</th>
            <th>Schedules</th>
            <th>School Year</th>
          </tr>
        </thead>
        <tbody>
        @foreach($subjects as $subject)
          <tr>
            <td><a class="my-subject-teacher-name" href="{{route('teacher.subject.my-students',['subject_id'=>$subject->id])}}">{{$subject->subject->subjectName}}</a></td>
            <td>{{$subject->schedule}}</td>
            <td style="">{{$subject->year}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>

 </div>
@endsection