@extends("layouts.teacher")

@section('title')
   Grade: {{$students->studentFirstName}}
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

    <h3>Student Name: {{$students->studentFirstName}}</h3>
    <img height="50" src="{{$students->studentphotos->file}}" alt="">


    <h4>Subject: {{$subjects->subject->subjectName}} </h4>

    {{--{!! Form::open(['method'=>'POST','action'=>'TeacherSubjectsController@inputHandler','files'=>true]) !!}--}}
    <form action="{{route('teacher.subject.input-grade', ['subject_id'=> $subjects, 'student_id'=>$students->id])}}" method="post">
    <div class="row">
        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">


            <div class="form-group">
                {!! Form::label('firstGrade','First Grade:') !!}
                {{--{!! Form::number('firstGrade',null,['class'=>'form-control']) !!}--}}
                <input style="border: black 2px solid" type="number" name="firstGrade" class="form-control">
            </div>
        </div>

        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">

            <div class="form-group">
                {!! Form::label('secondGrade','Second Grade:') !!}
                {!! Form::number('secondGrade',null,['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">

            <div class="form-group">
                {!! Form::label('thirdGrade','Third Name:') !!}
                {!! Form::number('thirdGrade',null,['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                {!! Form::label('fourthGrade','Fourth Grade:') !!}
                {!! Form::number('fourthGrade',null,['class'=>'form-control']) !!}
            </div>
        </div>
    </div>

        <div class="row">

        </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="payment-adress">
                        <div class="form-group">
                            {!! Form::submit('Submit Grades',['class'=>'btn btn-primary waves-effect waves-light']) !!}
                        </div>
                    </div>
                </div>
            </div>

        {{csrf_field()}}
    </form>
    {{--{!! Form::close() !!}--}}

    @endsection