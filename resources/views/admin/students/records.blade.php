@extends("layouts.admin")

@section('title')
   Student Record
@endsection


@section('is_active_students')
    class="active"
@endsection

@section('username')
    {{$users_auth ->firstName." ". $users_auth ->middleName." ".$users_auth ->lastName." ".$users_auth ->nameExtension}}
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


                        <h3>Grade 7</h3>
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
                                <th scope="row">Math 1</th>
                                @if($math1)
                                    <td>{{$math1->firstGrade}}</td>
                                    <td>{{$math1->secondGrade}}</td>
                                    <td>{{$math1->thirdGrade}}</td>
                                    <td>{{$math1->fourthGrade}}</td>
                                    <td>{{$math1->ave}}</td>
                                @endif
                            </tr>

                            <tr>
                                <th scope="row">Science 1</th>
                                @if($science1)
                                    <td>{{$science1->firstGrade}}</td>
                                    <td>{{$science1->secondGrade}}</td>
                                    <td>{{$science1->thirdGrade}}</td>
                                    <td>{{$science1->fourthGrade}}</td>
                                    <td>{{$science1->ave}}</td>
                                @endif
                            </tr>


                            <tr>
                                <th scope="row">Araling Panlipunan 1</th>
                                @if($ap1)
                                    <td>{{$ap1->firstGrade}}</td>
                                    <td>{{$ap1->secondGrade}}</td>
                                    <td>{{$ap1->thirdGrade}}</td>
                                    <td>{{$ap1->fourthGrade}}</td>
                                    <td>{{$ap1->ave}}</td>
                                @endif
                            </tr>

                            <tr>
                                <th scope="row">TLE 1</th>
                                @if($tle1)
                                    <td>{{$tle1->firstGrade}}</td>
                                    <td>{{$tle1->secondGrade}}</td>
                                    <td>{{$tle1->thirdGrade}}</td>
                                    <td>{{$tle1->fourthGrade}}</td>
                                    <td>{{$tle1->ave}}</td>
                                @endif
                            </tr>

                            <tr>
                                <th scope="row"> 1</th>
                                @if($mapeh1)
                                    <td>{{$mapeh1->firstGrade}}</td>
                                    <td>{{$mapeh1->secondGrade}}</td>
                                    <td>{{$mapeh1->thirdGrade}}</td>
                                    <td>{{$mapeh1->fourthGrade}}</td>
                                    <td>{{$mapeh1->ave}}</td>
                                @endif
                            </tr>

                            <tr>
                                <th scope="row">Edukasyong Pangdemonyo 1</th>
                                @if($ep1)
                                    <td>{{$ep1->firstGrade}}</td>
                                    <td>{{$ep1->secondGrade}}</td>
                                    <td>{{$ep1->thirdGrade}}</td>
                                    <td>{{$ep1->fourthGrade}}</td>
                                    <td>{{$ep1->ave}}</td>
                                @endif
                            </tr>

                            <tr>
                                <th scope="row">Christian Leaving Education 1</th>
                                @if($cle1)
                                    <td>{{$cle1->firstGrade}}</td>
                                    <td>{{$cle1->secondGrade}}</td>
                                    <td>{{$cle1->thirdGrade}}</td>
                                    <td>{{$cle1->fourthGrade}}</td>
                                    <td>{{$cle1->ave}}</td>
                                @endif
                            </tr>

                            <tr>
                                <th scope="row">Computer 1</th>
                                @if($comp1)
                                    <td>{{$comp1->firstGrade}}</td>
                                    <td>{{$comp1->secondGrade}}</td>
                                    <td>{{$comp1->thirdGrade}}</td>
                                    <td>{{$comp1->fourthGrade}}</td>
                                    <td>{{$comp1->ave}}</td>
                                @endif
                            </tr>
                            </tbody>
                        </table>

                        {{--<h3>Grade 8</h3>--}}
                        {{--<table class="table">--}}
                            {{--<thead>--}}
                            {{--<tr>--}}
                                {{--<th scope="col">Subject</th>--}}
                                {{--<th scope="col">First</th>--}}
                                {{--<th scope="col">Second</th>--}}
                                {{--<th scope="col">Third</th>--}}
                                {{--<th scope="col">Fourth</th>--}}
                                {{--<th scope="col">Ave</th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}
                            {{--<tbody>--}}
                            {{--<tr>--}}
                                {{--<th scope="row">Filipino 2</th>--}}
                                {{--@if($filipino2)--}}
                                    {{--<td>{{$filipino2->firstGrade}}</td>--}}
                                    {{--<td>{{$filipino2->secondGrade}}</td>--}}
                                    {{--<td>{{$filipino2->thirdGrade}}</td>--}}
                                    {{--<td>{{$filipino2->fourthGrade}}</td>--}}
                                    {{--<td>{{$filipino2->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<th scope="row">English 2</th>--}}
                                {{--@if($english2)--}}
                                    {{--<td>{{$english2->firstGrade}}</td>--}}
                                    {{--<td>{{$english2->secondGrade}}</td>--}}
                                    {{--<td>{{$english2->thirdGrade}}</td>--}}
                                    {{--<td>{{$english2->fourthGrade}}</td>--}}
                                    {{--<td>{{$english2->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<th scope="row">Math 2</th>--}}
                                {{--@if($math2)--}}
                                    {{--<td>{{$math2->firstGrade}}</td>--}}
                                    {{--<td>{{$math2->secondGrade}}</td>--}}
                                    {{--<td>{{$math2->thirdGrade}}</td>--}}
                                    {{--<td>{{$math2->fourthGrade}}</td>--}}
                                    {{--<td>{{$math2->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}

                            {{--<tr>--}}
                                {{--<th scope="row">Science 2</th>--}}
                                {{--@if($science2)--}}
                                    {{--<td>{{$science2->firstGrade}}</td>--}}
                                    {{--<td>{{$science2->secondGrade}}</td>--}}
                                    {{--<td>{{$science2->thirdGrade}}</td>--}}
                                    {{--<td>{{$science2->fourthGrade}}</td>--}}
                                    {{--<td>{{$science2->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}


                            {{--<tr>--}}
                                {{--<th scope="row">Araling Panlipunan 2</th>--}}
                                {{--@if($ap2)--}}
                                    {{--<td>{{$ap2->firstGrade}}</td>--}}
                                    {{--<td>{{$ap2->secondGrade}}</td>--}}
                                    {{--<td>{{$ap2->thirdGrade}}</td>--}}
                                    {{--<td>{{$ap2->fourthGrade}}</td>--}}
                                    {{--<td>{{$ap2->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}

                            {{--<tr>--}}
                                {{--<th scope="row">TLE 2</th>--}}
                                {{--@if($tle2)--}}
                                    {{--<td>{{$tle2->firstGrade}}</td>--}}
                                    {{--<td>{{$tle2->secondGrade}}</td>--}}
                                    {{--<td>{{$tle2->thirdGrade}}</td>--}}
                                    {{--<td>{{$tle2->fourthGrade}}</td>--}}
                                    {{--<td>{{$tle2->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}

                            {{--<tr>--}}
                                {{--<th scope="row">Mapeh 2</th>--}}
                                {{--@if($mapeh2)--}}
                                    {{--<td>{{$mapeh2->firstGrade}}</td>--}}
                                    {{--<td>{{$mapeh2->secondGrade}}</td>--}}
                                    {{--<td>{{$mapeh2->thirdGrade}}</td>--}}
                                    {{--<td>{{$mapeh2->fourthGrade}}</td>--}}
                                    {{--<td>{{$mapeh2->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}

                            {{--<tr>--}}
                                {{--<th scope="row">Edukasyong Pangdemonyo 2</th>--}}
                                {{--@if($ep2)--}}
                                    {{--<td>{{$ep2->firstGrade}}</td>--}}
                                    {{--<td>{{$ep2->secondGrade}}</td>--}}
                                    {{--<td>{{$ep2->thirdGrade}}</td>--}}
                                    {{--<td>{{$ep2->fourthGrade}}</td>--}}
                                    {{--<td>{{$ep2->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}

                            {{--<tr>--}}
                                {{--<th scope="row">Christian Leaving Education 2</th>--}}
                                {{--@if($cle2)--}}
                                    {{--<td>{{$cle2->firstGrade}}</td>--}}
                                    {{--<td>{{$cle2->secondGrade}}</td>--}}
                                    {{--<td>{{$cle2->thirdGrade}}</td>--}}
                                    {{--<td>{{$cle2->fourthGrade}}</td>--}}
                                    {{--<td>{{$cle2->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}

                            {{--<tr>--}}
                                {{--<th scope="row">Computer 2</th>--}}
                                {{--@if($comp2)--}}
                                    {{--<td>{{$comp2->firstGrade}}</td>--}}
                                    {{--<td>{{$comp2->secondGrade}}</td>--}}
                                    {{--<td>{{$comp2->thirdGrade}}</td>--}}
                                    {{--<td>{{$comp2->fourthGrade}}</td>--}}
                                    {{--<td>{{$comp2->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}
                            {{--</tbody>--}}
                        {{--</table>--}}

                        {{--<h3>Grade 9</h3>--}}
                        {{--<table class="table">--}}
                            {{--<thead>--}}
                            {{--<tr>--}}
                                {{--<th scope="col">Subject</th>--}}
                                {{--<th scope="col">First</th>--}}
                                {{--<th scope="col">Second</th>--}}
                                {{--<th scope="col">Third</th>--}}
                                {{--<th scope="col">Fourth</th>--}}
                                {{--<th scope="col">Ave</th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}
                            {{--<tbody>--}}
                            {{--<tr>--}}
                                {{--<th scope="row">Filipino 3</th>--}}
                                {{--@if($filipino3)--}}
                                    {{--<td>{{$filipino3->firstGrade}}</td>--}}
                                    {{--<td>{{$filipino3->secondGrade}}</td>--}}
                                    {{--<td>{{$filipino3->thirdGrade}}</td>--}}
                                    {{--<td>{{$filipino3->fourthGrade}}</td>--}}
                                    {{--<td>{{$filipino3->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<th scope="row">English 1</th>--}}
                                {{--@if($english3)--}}
                                    {{--<td>{{$english3->firstGrade}}</td>--}}
                                    {{--<td>{{$english3->secondGrade}}</td>--}}
                                    {{--<td>{{$english3->thirdGrade}}</td>--}}
                                    {{--<td>{{$english3->fourthGrade}}</td>--}}
                                    {{--<td>{{$english3->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<th scope="row">Math 3</th>--}}
                                {{--@if($math3)--}}
                                    {{--<td>{{$math3->firstGrade}}</td>--}}
                                    {{--<td>{{$math3->secondGrade}}</td>--}}
                                    {{--<td>{{$math3->thirdGrade}}</td>--}}
                                    {{--<td>{{$math3->fourthGrade}}</td>--}}
                                    {{--<td>{{$math3->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}

                            {{--<tr>--}}
                                {{--<th scope="row">Science 3</th>--}}
                                {{--@if($science3)--}}
                                    {{--<td>{{$science3->firstGrade}}</td>--}}
                                    {{--<td>{{$science3->secondGrade}}</td>--}}
                                    {{--<td>{{$science3->thirdGrade}}</td>--}}
                                    {{--<td>{{$science3->fourthGrade}}</td>--}}
                                    {{--<td>{{$science3->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}


                            {{--<tr>--}}
                                {{--<th scope="row">Araling Panlipunan 3</th>--}}
                                {{--@if($ap3)--}}
                                    {{--<td>{{$ap3->firstGrade}}</td>--}}
                                    {{--<td>{{$ap3->secondGrade}}</td>--}}
                                    {{--<td>{{$ap3->thirdGrade}}</td>--}}
                                    {{--<td>{{$ap3->fourthGrade}}</td>--}}
                                    {{--<td>{{$ap3->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}

                            {{--<tr>--}}
                                {{--<th scope="row">TLE 3</th>--}}
                                {{--@if($tle3)--}}
                                    {{--<td>{{$tle3->firstGrade}}</td>--}}
                                    {{--<td>{{$tle3->secondGrade}}</td>--}}
                                    {{--<td>{{$tle3->thirdGrade}}</td>--}}
                                    {{--<td>{{$tle3->fourthGrade}}</td>--}}
                                    {{--<td>{{$tle3->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}

                            {{--<tr>--}}
                                {{--<th scope="row">Mapeh 3</th>--}}
                                {{--@if($mapeh3)--}}
                                    {{--<td>{{$mapeh3->firstGrade}}</td>--}}
                                    {{--<td>{{$mapeh3->secondGrade}}</td>--}}
                                    {{--<td>{{$mapeh3->thirdGrade}}</td>--}}
                                    {{--<td>{{$mapeh3->fourthGrade}}</td>--}}
                                    {{--<td>{{$mapeh3->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}

                            {{--<tr>--}}
                                {{--<th scope="row">Edukasyong Pangdemonyo 3</th>--}}
                                {{--@if($ep3)--}}
                                    {{--<td>{{$ep3->firstGrade}}</td>--}}
                                    {{--<td>{{$ep3->secondGrade}}</td>--}}
                                    {{--<td>{{$ep3->thirdGrade}}</td>--}}
                                    {{--<td>{{$ep3->fourthGrade}}</td>--}}
                                    {{--<td>{{$ep3->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}

                            {{--<tr>--}}
                                {{--<th scope="row">Christian Leaving Education 3</th>--}}
                                {{--@if($cle3)--}}
                                    {{--<td>{{$cle3->firstGrade}}</td>--}}
                                    {{--<td>{{$cle3->secondGrade}}</td>--}}
                                    {{--<td>{{$cle3->thirdGrade}}</td>--}}
                                    {{--<td>{{$cle3->fourthGrade}}</td>--}}
                                    {{--<td>{{$cle3->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}

                            {{--<tr>--}}
                                {{--<th scope="row">Computer 1</th>--}}
                                {{--@if($comp3)--}}
                                    {{--<td>{{$comp3->firstGrade}}</td>--}}
                                    {{--<td>{{$comp3->secondGrade}}</td>--}}
                                    {{--<td>{{$comp3->thirdGrade}}</td>--}}
                                    {{--<td>{{$comp3->fourthGrade}}</td>--}}
                                    {{--<td>{{$comp3->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}
                            {{--</tbody>--}}
                        {{--</table>--}}

                        {{--<h3>Grade 7</h3>--}}
                        {{--<table class="table">--}}
                            {{--<thead>--}}
                            {{--<tr>--}}
                                {{--<th scope="col">Subject</th>--}}
                                {{--<th scope="col">First</th>--}}
                                {{--<th scope="col">Second</th>--}}
                                {{--<th scope="col">Third</th>--}}
                                {{--<th scope="col">Fourth</th>--}}
                                {{--<th scope="col">Ave</th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}
                            {{--<tbody>--}}
                            {{--<tr>--}}
                                {{--<th scope="row">Filipino 4</th>--}}
                                {{--@if($filipino4)--}}
                                    {{--<td>{{$filipino4->firstGrade}}</td>--}}
                                    {{--<td>{{$filipino4->secondGrade}}</td>--}}
                                    {{--<td>{{$filipino4->thirdGrade}}</td>--}}
                                    {{--<td>{{$filipino4->fourthGrade}}</td>--}}
                                    {{--<td>{{$filipino4->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<th scope="row">English 4</th>--}}
                                {{--@if($english4)--}}
                                    {{--<td>{{$english4->firstGrade}}</td>--}}
                                    {{--<td>{{$english4->secondGrade}}</td>--}}
                                    {{--<td>{{$english4->thirdGrade}}</td>--}}
                                    {{--<td>{{$english4->fourthGrade}}</td>--}}
                                    {{--<td>{{$english4->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<th scope="row">Math 4</th>--}}
                                {{--@if($math4)--}}
                                    {{--<td>{{$math4->firstGrade}}</td>--}}
                                    {{--<td>{{$math4->secondGrade}}</td>--}}
                                    {{--<td>{{$math4->thirdGrade}}</td>--}}
                                    {{--<td>{{$math4->fourthGrade}}</td>--}}
                                    {{--<td>{{$math4->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}

                            {{--<tr>--}}
                                {{--<th scope="row">Science 4</th>--}}
                                {{--@if($science4)--}}
                                    {{--<td>{{$science4->firstGrade}}</td>--}}
                                    {{--<td>{{$science4->secondGrade}}</td>--}}
                                    {{--<td>{{$science4->thirdGrade}}</td>--}}
                                    {{--<td>{{$science4->fourthGrade}}</td>--}}
                                    {{--<td>{{$science4->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}


                            {{--<tr>--}}
                                {{--<th scope="row">Araling Panlipunan 4</th>--}}
                                {{--@if($ap4)--}}
                                    {{--<td>{{$ap4->firstGrade}}</td>--}}
                                    {{--<td>{{$ap4->secondGrade}}</td>--}}
                                    {{--<td>{{$ap4->thirdGrade}}</td>--}}
                                    {{--<td>{{$ap4->fourthGrade}}</td>--}}
                                    {{--<td>{{$ap4->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}

                            {{--<tr>--}}
                                {{--<th scope="row">TLE 4</th>--}}
                                {{--@if($tle1)--}}
                                    {{--<td>{{$tle4->firstGrade}}</td>--}}
                                    {{--<td>{{$tle4->secondGrade}}</td>--}}
                                    {{--<td>{{$tle4->thirdGrade}}</td>--}}
                                    {{--<td>{{$tle4->fourthGrade}}</td>--}}
                                    {{--<td>{{$tle4->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}

                            {{--<tr>--}}
                                {{--<th scope="row"> 4</th>--}}
                                {{--@if($mapeh4)--}}
                                    {{--<td>{{$mapeh4->firstGrade}}</td>--}}
                                    {{--<td>{{$mapeh4->secondGrade}}</td>--}}
                                    {{--<td>{{$mapeh4->thirdGrade}}</td>--}}
                                    {{--<td>{{$mapeh4->fourthGrade}}</td>--}}
                                    {{--<td>{{$mapeh4->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}

                            {{--<tr>--}}
                                {{--<th scope="row">Edukasyong Pangdemonyo 4</th>--}}
                                {{--@if($ep4)--}}
                                    {{--<td>{{$ep4->firstGrade}}</td>--}}
                                    {{--<td>{{$ep4->secondGrade}}</td>--}}
                                    {{--<td>{{$ep4->thirdGrade}}</td>--}}
                                    {{--<td>{{$ep4->fourthGrade}}</td>--}}
                                    {{--<td>{{$ep4->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}

                            {{--<tr>--}}
                                {{--<th scope="row">Christian Leaving Education 4</th>--}}
                                {{--@if($cle4)--}}
                                    {{--<td>{{$cle4->firstGrade}}</td>--}}
                                    {{--<td>{{$cle4->secondGrade}}</td>--}}
                                    {{--<td>{{$cle4->thirdGrade}}</td>--}}
                                    {{--<td>{{$cle4->fourthGrade}}</td>--}}
                                    {{--<td>{{$cle4->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}

                            {{--<tr>--}}
                                {{--<th scope="row">Computer 4</th>--}}
                                {{--@if($comp4)--}}
                                    {{--<td>{{$comp4->firstGrade}}</td>--}}
                                    {{--<td>{{$comp4->secondGrade}}</td>--}}
                                    {{--<td>{{$comp4->thirdGrade}}</td>--}}
                                    {{--<td>{{$comp4->fourthGrade}}</td>--}}
                                    {{--<td>{{$comp4->ave}}</td>--}}
                                {{--@endif--}}
                            {{--</tr>--}}
                            {{--</tbody>--}}
                        {{--</table>--}}
                    </div>


    @endsection