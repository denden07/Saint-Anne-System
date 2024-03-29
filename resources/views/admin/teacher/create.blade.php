@extends("layouts.admin")

@section('title')
    Add Teacher
@endsection

@section('is_active_teacher')
    class="active"
@endsection

@section('userphoto')
    {{$users->photos->file}}
@endsection
@section('username')
    {{$users->firstName." ". $users->middleName." ".$users->lastName." ".$users->nameExtension}}
@endsection


@section('contents')


    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Add New Teacher</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                {!! Form::open(['method'=>'POST','action'=>'AdminTeachersController@store','files'=>true]) !!}



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
                                                                    {!! Form::label('teacherFirstName','First Name:') !!}
                                                                    {!! Form::text('teacherFirstName',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('teacherMiddleName','Middle Name:') !!}
                                                                    {!! Form::text('teacherMiddleName',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('teacherLastName','Last Name:') !!}
                                                                    {!! Form::text('teacherLastName',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('teacherExtensionName','Extension Name:e.g Jr., III (if applicable)') !!}
                                                                    {!! Form::text('teacherExtensionName',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('teacherAge','Age: ') !!}
                                                                    {!! Form::text('teacherAge',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('teacherDob','Date of Birth:') !!}
                                                                    <input name="teacherDob"  type="date" class="form-control" placeholder="Date of Birth">
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('teacherContactNo','Contact No: ') !!}
                                                                    {!! Form::text('teacherContactNo',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('teacherEmail','Email: ') !!}
                                                                    {!! Form::email('teacherEmail',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('username','User Name: ') !!}
                                                                    {!! Form::text('username',null,['class'=>'form-control']) !!}
                                                                </div>
                                                                <div class="form-group">
                                                                    {!! Form::label('password','Password: ') !!}
                                                                    {!! Form::password('password',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="text" name="role_id" value="3" style="display: none">
                                                                </div>




                                                                <div class="form-group">
                                                                    {!! Form::label('photo_id','Photo:') !!}
                                                                    {!! Form::file('photo_id',null,['class'=>'form-control alert-up-pd']) !!}
                                                                </div>



                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">


                                                                <div class="form-group">
                                                                    {!! Form::label('department_id','Department:') !!}
                                                                  {!!  Form::select('department_id',[''=>'Choose Department']+$departments,null,['class'=>'form-control'])!!}
                                                                </div>


                                                                <div class="form-group">
                                                                    {!! Form::label('gender_id','Gender:') !!}
                                                                    {!! Form::select('gender_id',[''=>'Choose Gender']+$genders,null,['class'=>'form-control']) !!}
                                                                </div>


                                                                <div class="form-group">
                                                                    {!! Form::label('teacherLanguage','Mother Tounge: ') !!}
                                                                    {!! Form::text('teacherLanguage',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('teacherReligion','Religion: ') !!}
                                                                    {!! Form::text('teacherReligion',null,['class'=>'form-control']) !!}
                                                                </div>





                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="container-row">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="enrollment-heading">
                                                                    <p>Educational Background</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                <div class="form-group">
                                                                    {!! Form::label('teacherCourse','Course: ') !!}
                                                                    {!! Form::text('teacherCourse',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('teacherSchool','Last Educational Institute Attended: ') !!}
                                                                    {!! Form::text('teacherSchool',null,['class'=>'form-control']) !!}
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    {!! Form::label('teacherAchievement',"Achievements: ") !!}
                                                                    {!! Form::text('teacherAchievement',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('teacherLastSchool','Last School to Teach:') !!}
                                                                    {!! Form::text('teacherLastSchool',null,['class'=>'form-control']) !!}
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>




                                                    <div class="container-row">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="enrollment-heading">
                                                                    <p>Current Address</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                <div class="form-group">
                                                                    {!! Form::label('teacherHouseNo','House No: ') !!}
                                                                    {!! Form::text('teacherHouseNo',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('teacherBarangay','Barangay: ') !!}
                                                                    {!! Form::text('teacherBarangay',null,['class'=>'form-control']) !!}
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    {!! Form::label('teacherMunicipality',"City/Municipality/Province/Country: ex. 'Piddig Ilocos-Norte Philippines' ") !!}
                                                                    {!! Form::text('teacherMunicipality',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('teacherZipcode','Zip Code:') !!}
                                                                    {!! Form::text('teacherZipcode',null,['class'=>'form-control']) !!}
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="container-row">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="enrollment-heading">
                                                                    <p>Parent's/Guardian Information</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                <div class="form-group">
                                                                    {!! Form::label('teacherFatherName',"Father's Name:") !!}
                                                                    {!! Form::text('teacherFatherName',null,['class'=>'form-control']) !!}
                                                                </div>


                                                                <div class="form-group">
                                                                    {!! Form::label('teacherGuardianName',"Guardian's Name:") !!}
                                                                    {!! Form::text('teacherGuardianName',null,['class'=>'form-control']) !!}
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                <div class="form-group">
                                                                    {!! Form::label('teacherMotherName',"Mother's Name:") !!}
                                                                    {!! Form::text('teacherMotherName',null,['class'=>'form-control']) !!}
                                                                </div>

                                                                <div class="form-group">
                                                                    {!! Form::label('teacherGuardianNo',"Guardian's No:") !!}
                                                                    {!! Form::text('teacherGuardianNo',null,['class'=>'form-control']) !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <div class="form-group">
                                                                    {!! Form::submit('Enroll Student',['class'=>'btn btn-primary waves-effect waves-light']) !!}
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

