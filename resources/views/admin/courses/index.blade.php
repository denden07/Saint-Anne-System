@extends("layouts.admin")

@section('title')
    Courses
@endsection


@section('is_active_course')
    class="active"
@endsection

@section('css')


    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('schedule/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('schedule/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('schedule/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('schedule/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('schedule/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('schedule/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('schedule/css/main.css')}}">
    <!--===============================================================================================-->
@endsection

@section('username')
    {{$users_auth ->firstName." ". $users_auth ->middleName." ".$users_auth ->lastName." ".$users_auth ->nameExtension}}
@endsection


@section('contents')
 <div class="row">
     <input placeholder="Find Subject" type="text" name="search" id="search" class="form-control"/>
 </div>


            <div class="table100 ver1 m-b-110">
                <div class="table100-head">
<table>
    <thead>
    <tr class="row100 head">
        <th class="cell100 column1">Class name</th>
        <th class="cell100 column2">Department</th>
        <th class="cell100 column3">Hours</th>
        <th class="cell100 column4">Teacher</th>
        <th class="cell100 column5">Academic Year</th>
    </tr>
    </thead>
</table>
                </div>

<div class="table100-body js-pscroll">
    <table id="schedule_table">
        <tbody>
        @if($subjects)
            @foreach($subjects as $subject)


        <tr class="row100 body">
            <td class="cell100 column1"><a href="{{route('admin.subject.add-student',['subject_details'=>$subject->id])}}">{{$subject->subject->subjectName}}</a></td>
            <td class="cell100 column2">{{$subject->department->deptName}}</td>
            <td class="cell100 column3">{{$subject->schedule}}</td>
            <td class="cell100 column4">{{$subject->teacher->teacherFirstName." ".$subject->teacher->teacherMiddleName." ".$subject->teacher->teacherLastName." ".$subject->teacher->teacherExtensionName}}</td>
            <td class="cell100 column5">{{$subject->year}}</td>
        </tr>

            @endforeach
            @endif
        </tbody>
    </table>
</div>
            </div>



@endsection

@section('scripts')
    <!--===============================================================================================-->
    <script src="{{asset('schedule/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('schedule/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('schedule/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('schedule/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('schedule/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script>
        $('.js-pscroll').each(function(){
            var ps = new PerfectScrollbar(this);

            $(window).on('resize', function(){
                ps.update();
            })
        });


    </script>
    <script>
        $(document).ready(function () {
            $('#search').keyup(function () {
               search_table($(this).val());
            });

            function search_table(value) {
                $('#schedule_table tr').each(function () {
                    var found = 'false';
                    $(this).each(function () {
                        if($(this).text().toLowerCase().indexOf(value.toLowerCase())>=0)
                        {
                            found ='true';
                        }
                    });

                    if (found == 'true')
                    {
                        $(this).show();
                    }
                    else
                    {
                        $(this).hide();
                    }
                });
            }

        });
    </script>

    <!--===============================================================================================-->
    <script src="{{asset('schedule/js/main.js')}}"></script>

@endsection