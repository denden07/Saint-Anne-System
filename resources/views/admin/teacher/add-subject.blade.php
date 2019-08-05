@extends("layouts.admin")

@section('title')
    Add Subject To Teachers
@endsection

@section('userphoto')
    {{$users->photos->file}}
@endsection
@section('username')
    {{$users->firstName." ". $users->middleName." ".$users->lastName." ".$users->nameExtension}}
@endsection


@section('css')

    <link rel="stylesheet" href="{{asset('multiselect/css/select2.css')}}">
    <link rel="stylesheet" href="{{asset('multiselect/css/select2.min.css')}}">

    @endsection

@section('contents')

    <div class="container">
        <div class="row ">
            <div class="col-md-offset-2 col-md-8 col-lg-8 teacher-card-background">
                <div class="teacher-card">
                    <div class="col-sm-12">
                        <div class="col-xs-12 col-sm-8">
                            <h2 class="teacher-card-name">{{$teachers->teacherFirstName ." ". $teachers->teacherMiddleName. " ".$teachers->teacherLastName . " ".$teachers->teacherExtensionName}}</h2>
                            <p><strong>Age: </strong>  {{$teachers->teacherAge}} </p>
                            <p><strong>Department: </strong>  {{$teachers->departments->deptName}} </p>
                            <p><strong>Main Expertise: </strong>  {{$teachers->teacherCourse}} </p>
                            <p><strong>Date Joined: </strong> {{$teachers->created_at->format('M d Y')}}</p>
                            <p><strong>Subjects: </strong>
                                @foreach($teachers->subject as $tag)
                                    <span class="label label-default">{{$tag->subjectName}}</span>
                                    @endforeach
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-4 text-center">
                            <figure>
                                <img src="{{$teachers->teacherphotos->file}}" alt="" class="img-circle img-responsive profile-pic">

                            </figure>
                        </div>
                    </div>
                    <div class="col-xs-12 divider text-center">

                        <button type="button" id="formButton" class="teacher-card-button">Add/Edit Subjects</button>

                        {!! Form::model($teachers,['method'=>'PATCH','action'=>['TeacherCoursesController@update',$teachers->id],'files'=>true,  'id'=>'form1','class' => 'hidden-form']) !!}


                        {!! Form::label('subjects','Course:') !!}
                        {!! Form::select('subjects[]',$subjects,null,['class'=>'select2-multi form-control','multiple'=>'multiple']) !!}

                        {{--{!! Form::select('subjects[]',array(7=>'')) !!}}--}}




                            <button   type="submit" id="submit">Submit</button>
                        {!! Form::close() !!}


                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection

@section('scripts')

    <script src="{{asset('multiselect/js/select2.full.js')}}"></script>
    <script src="{{asset('multiselect/js/select2.js')}}"></script>
<script type="text/javascript">
$('.select2-multi').select2();
$('.select2-multi').select2().val({!!json_encode( $teachers->subject-> pluck('id')) !!}).trigger('change');
</script>
    @endsection