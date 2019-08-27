@extends("layouts.admin")

@section('title')
  Add Course
@endsection


@section('is_active_course')
    class="active"
@endsection
@section('css')

    <link rel="stylesheet" href="{{asset('multiselect/css/select2.css')}}">
    <link rel="stylesheet" href="{{asset('multiselect/css/select2.min.css')}}">

@endsection

@section('contents')

    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Subject Schedules</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                {!! Form::open(['method'=>'POST','action'=>'AdminCoursesController@store','files'=>true]) !!}



                                                <div class="container-row">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="enrollment-heading">
                                                                <p>Add Subjects Schedules</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                            <div class="form-group">
                                                                {!! Form::label('subject_id','Subject:') !!}
                                                                {!!  Form::select('subject_id',$subjects,null,['class'=>'select2-multi form-control','multiple'=>'multiple'])!!}
                                                            </div>


                                                            <div class="form-group">
                                                                {!! Form::label('teacher_id',"Teacher's Name:") !!}
                                                                {!!  Form::select('teacher_id',$teachers,null,['class'=>'select2-multi form-control','multiple'=>'multiple'])!!}
                                                            </div>

                                                            <div class="form-group">
                                                                {!! Form::label('department_id',"Department:") !!}
                                                                {!!  Form::select('department_id',$departments,null,['class'=>'select2-multi form-control','multiple'=>'multiple'])!!}
                                                            </div>


                                                            <div class="form-group">
                                                                {!! Form::label('schedule','Schedule: ') !!}
                                                                {!! Form::text('schedule',null,['class'=>'form-control']) !!}
                                                            </div>

                                                            <div class="form-group">
                                                                {!! Form::label('year','Year: ') !!}
                                                                {!! Form::text('year',null,['class'=>'form-control']) !!}
                                                            </div>


                                                        </div>


                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <div class="form-group">
                                                                {!! Form::submit('Create Subject',['class'=>'btn btn-primary waves-effect waves-light']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
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
                    {{--$('.select2-multi').select2().val({!!json_encode( $teachers->subject-> pluck('id')) !!}).trigger('change');--}}
                </script>
@endsection