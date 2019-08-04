@extends("layouts.admin")

@section('title')
    Add Subject To Teachers
@endsection

@section('css')

    <link rel="stylesheet" href="{{asset('multiselect/css/select2.css')}}">
    <link rel="stylesheet" href="{{asset('multiselect/css/select2.min.css')}}">

    @endsection

@section('contents')

    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                <div class="well profile">
                    <div class="col-sm-12">
                        <div class="col-xs-12 col-sm-8">
                            <h2>{{$teachers->teacherFirstName ." ". $teachers->teacherMiddleName. " ".$teachers->teacherLastName . " ".$teachers->teacherExtensionName}}</h2>
                            <p><strong>Department: </strong>  {{$teachers->departments->deptName}} </p>
                            <p><strong>Date Joined: </strong> {{$teachers->created_at->diffForHumans()}}</p>
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

                        <button type="button" id="formButton">Toggle Form!</button>

                        {!! Form::model($teachers,['method'=>'PATCH','action'=>['TeacherCoursesController@update',$teachers->id],'files'=>true,  'id'=>'form1','class' => 'hidden-form']) !!}


                        {!! Form::label('subjects','Course:') !!}
                        {!! Form::select('subjects[]',$subjects,null,['class'=>'select2-multi form-control','multiple'=>'multiple']) !!}



                            <button  type="submit" id="submit">Submit</button>
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