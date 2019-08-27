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

                                                {!! Form::model($subjects,['method'=>'PATCH','action'=>['AdminCoursesController@updateSubjectStudent',$subjects->id],'files'=>true]) !!}



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
                                                                {!! Form::label('students','Subject:') !!}
                                                                {!!  Form::select('students[]',$students,null,['class'=>'select2-multi form-control','multiple'=>'multiple'])!!}
                                                            </div>



                                                        </div>


                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <div style="margin-top: 5%" class="form-group">
                                                                        {!! Form::submit('Add Student',['class'=>'btn btn-primary waves-effect waves-light']) !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {!! Form::close() !!}
                                                            <p>{{$subjects->subject->subjectName}}</p>
                                                            <p>{{$subjects->teacher->teacherFirstName." ".$subjects->teacher->teacherMiddleName." ".$subjects->teacher->teacherLastName." ".$subjects->teacher->teacherExtensionName}}</p>

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
                    $('.select2-multi').select2().val({!!json_encode( $subjects->students-> pluck('id')) !!}).trigger('change');
                </script>
@endsection