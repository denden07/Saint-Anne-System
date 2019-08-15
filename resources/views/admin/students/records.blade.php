@extends("layouts.admin")

@section('title')
   Student Record
@endsection


@section('is_active_students')
    class="active"
@endsection


@section('contents')

    <div class="container">
        <div class="row ">
            <div class="col-md-offset-2 col-md-8 col-lg-8 teacher-card-background">
                <div class="teacher-card">
                    <div class="col-sm-12">
                        <div class="col-xs-12 col-sm-8">
                            <h2 class="teacher-card-name">{{$students->studentFirstName ." ". $students->studentMiddleName. " ".$students->studentLastName ." ".$students->studentExtensionName}}</h2>
                            <p><strong>Department: </strong>  {{$students->studentdepartment->deptName}} </p>
                            <p><strong>Age: </strong>  {{$students->studentAge}} </p>



                            {{--@foreach($students->subject as $student)--}}

                            {{--<span class="label label-default">{{$student->subjectName}}</span>--}}
                            {{--@endforeach--}}
                        </div>
                        <div class="col-xs-12 col-sm-4 text-center">
                            <figure>
                                <img class="img-circle img-responsive profile-pic" src="{{$students->studentphotos ? $students->studentphotos->file:'User has no Photo'}}">

                            </figure>
                        </div>

                        <h3>First Year</h3>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Subject</th>
                                <th scope="col">First</th>
                                <th scope="col">Second</th>
                                <th scope="col">Third</th>
                                <th scope="col">Fourth</th>
                                <th scope="col">Ave</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Filipino 1</th>
                        @if($filipino1)
                                <td>{{$filipino1->firstGrade}}</td>
                                <td>{{$filipino1->secondGrade}}</td>
                                <td>{{$filipino1->thirdGrade}}</td>
                                <td>{{$filipino1->fourthGrade}}</td>
                                <td>{{$filipino1->ave}}</td>
                         @endif
                            </tr>
                            <tr>
                                <th scope="row">English 1</th>
                                @if($english1)
                                <td>{{$english1->firstGrade}}</td>
                                <td>{{$english1->secondGrade}}</td>
                                <td>{{$english1->thirdGrade}}</td>
                                <td>{{$english1->fourthGrade}}</td>
                                <td>{{$english1->ave}}</td>
                                    @endif
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


    @endsection