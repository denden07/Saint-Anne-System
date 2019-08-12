@extends("layouts.teacher")

@section('title')
    My {{$subjects->subject->subjectName}} Student List
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

    @if(Session::has('ok'))
        <div class="alert alert-success">
            {{Session::get('ok')}}
        </div>
    @endif




    {{--<ul>--}}

    {{--@foreach($subjects->students as $student)--}}
    {{--<p><a href="{{route('teacher.subject.grade-students',['subject_id'=>$subjects->id,'student_id'=>$student->id])}}">{{$student->studentFirstName}}</a></p>--}}
    {{--@endforeach--}}
    {{--</ul>--}}

    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Students List for {{$subjects->subject->subjectName ." (". $subjects->schedule.")"}}</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <select class="form-control dt-tb">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                       data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">ID</th>
                                        <th data-field="photo">Photo</th>
                                        <th data-field="name" data-editable="false">Name</th>
                                        <th data-field="email" data-editable="false">Course</th>
                                        <th data-field="gender">Gender</th>
                                        <th data-field="age" data-editable="false">Age</th>
                                        <th data-field="phone" data-editable="false">Contact Number</th>
                                        <th data-field="schoolyear" data-editable="false">School Year</th>

                                        <th>Standing</th>
                                        <th>Status</th>

                                    </tr>
                                    </thead>

                                    <tbody>

                                    @if($grades)
                                    @foreach($grades as $grade)
                                    <tr>
                                    <td></td>
                                    <td>{{$grade->student->id}}</td>
                                    <td><img height="30" src="{{$grade->student->studentphotos ? $grade->student->studentphotos->file:'User has no Photo'}}"></td>
                                    <td><a href="#">{{$grade->student->studentFirstName ." ". $grade->student->studentMiddleName. " ".$grade->student->studentLastName ." ".$grade->student->studentExtensionName}}</a></td>
                                    <td>{{$grade->student->studentdepartment->deptName}}</td>
                                    <td>{{$grade->student->studentgender->name}}</td>
                                    <td>{{$grade->student->studentAge}}</td>
                                    <td>{{$grade->student->studentContactNo}}</td>
                                     <td>{{$grade->year}}</td>
                                    @if($grade->ave <75)
                                    <td>Fail</td>
                                        @else
                                    <td>Pass</td>
                                    @endif
                                    @if($grade->status == 1)
                                     <td>Active</td>
                                     @else
                                     <td>Not Active</td>
                                     @endif
                                    </tr>
                                    @endforeach
                                    @endif

                                    {{--@if($subjects->students)--}}
                                        {{--@foreach($subjects->students as $student)--}}
                                            {{--<tr>--}}
                                                {{--<td></td>--}}
                                                {{--<td>{{$student->id}}</td>--}}
                                                {{--<td><img height="30" src="{{$student->studentphotos ? $student->studentphotos->file:'User has no Photo'}}"></td>--}}
                                                {{--<td><a href="{{route('teacher.subject.grade-students',['subject_id'=>$subjects->id,'student_id'=>$student->id])}}">{{$student->studentFirstName ." ". $student->studentMiddleName. " ".$student->studentLastName ." ".$student->studentExtensionName}}</a></td>--}}
                                                {{--<td>{{$student->studentdepartment->deptName}}</td>--}}
                                                {{--<td>{{$student->studentAge}}</td>--}}
                                                {{--<td>{{$student->studentgender->name}}</td>--}}
                                                {{--<td>{{$student->studentHouseNo." ". $student->studentBarangay." ".$student->studentMunicipality." ".$student->studentZipcode}}</td>--}}
                                                {{--<td>{{$student->studentContactNo}}</td>--}}
                                                {{--<td>{{$student->created_at->format('M d Y')}}</td>--}}
                                                {{--<td>{{$student->updated_at->format('M d Y')}}</td>--}}
                                                {{--<td>{{$student->grade ? $student->grade->first()->ave:'No Grade Submited'}}</td>--}}
                                            {{--</tr>--}}
                                        {{--@endforeach--}}
                                    {{--@endif--}}
                                    </tbody>

                                </table>
                                <a href="{{route('teacher.subject.submit-grade',['year'=>$grade->year])}}">New Class</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection