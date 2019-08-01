@extends("layouts.admin")

@section('title')
   Create User
@endsection

@section('is_active_students')
    class="active"
@endsection


@section('contents')


    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">User Creation Form</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}



                                                    <div class="container-row">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="enrollment-heading">
                                                                    <p>Basic Information</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    {!! Form::label('firstName','First Name:') !!}
                                                                    {!! Form::text('firstName',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('middleName','Middle Name:') !!}
                                                                    {!! Form::text('middleName',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('lastName','Last Name:') !!}
                                                                    {!! Form::text('lastName',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('nameExtension','Extension Name: e.g Jr., III (if applicable)') !!}
                                                                    {!! Form::text('nameExtension',null,['class'=>'form-control']) !!}
                                                                </div>



                                                                <div class="form-group">
                                                                    {!! Form::label('age','Age:') !!}
                                                                    {!! Form::text('age',null,['class'=>'form-control']) !!}
                                                                </div>


                                                                <div class="form-group">
                                                                    {!! Form::label('photo_id','Photo:') !!}
                                                                    {!! Form::file('photo_id',null,['class'=>'form-control alert-up-pd']) !!}
                                                                </div>

                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                <div class="form-group">
                                                                    {!! Form::label('username','User Name:') !!}
                                                                    {!! Form::text('username',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('email','Email Address:') !!}
                                                                    {!! Form::text('email',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('password','Password:') !!}
                                                                    {!! Form::password('password',null,['class'=>'form-control']) !!}
                                                                </div>



                                                                <div class="form-group">
                                                                    {!! Form::label('mobileNo','Contact No:') !!}
                                                                    {!! Form::text('mobileNo',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('dob','Date of Birth:') !!}
                                                                    <input name="dob"  type="date" class="form-control" placeholder="Date of Birth">
                                                                </div>


                                                                <div class="form-group">
                                                                    {!! Form::label('role_id','Role:') !!}
                                                                    {!! Form::select('role_id',[''=>'Choose Role']+$roles,null,['class'=>'form-control']) !!}
                                                                </div>


                                                                <div class="form-group">
                                                                    {!! Form::label('gender_id','Gender:') !!}
                                                                    {!! Form::select('gender_id',array(1=>'Male',0=>'Female'),null,['class'=>'form-control']) !!}
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="container-row">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="enrollment-heading">
                                                                    <p>Currnet Address</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                <div class="form-group">
                                                                    {!! Form::label('houseNo','House No:') !!}
                                                                    {!! Form::text('houseNo',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('barnagay','Barnagay:') !!}
                                                                    {!! Form::text('barnagay',null,['class'=>'form-control']) !!}
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                <div class="form-group">
                                                                    {!! Form::label('municipality','Municipality:') !!}
                                                                    {!! Form::text('municipality',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('zipCode','Zip Code:') !!}
                                                                    {!! Form::text('zipCode',null,['class'=>'form-control']) !!}
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>



                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                {!! Form::submit('Create User',['class'=>'btn btn-primary waves-effect waves-light']) !!}

                                                                @include('includes.form_error')
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

