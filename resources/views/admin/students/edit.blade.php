@extends("layouts.admin")

@section('title')
    Edit Student
@endsection


@section('is_active_students')
    class="active"
@endsection

@section('username')
    {{$users_auth ->firstName." ". $users_auth ->middleName." ".$users_auth ->lastName." ".$users_auth ->nameExtension}}
@endsection


@section('contents')







    {!! Form::model($students,['method'=>'PATCH','action'=>['AdminStudentsController@update',$students->id],'files'=>true]) !!}


    <div class="container-row">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                <div class="enrollment-heading">
                    <p>Promote Student</p>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <div class="form-group">
                        {!! Form::label('department_id','Department:') !!}
                        {!!  Form::select('department_id',[''=>'Choose Department']+$departments,null,['class'=>'form-control'])!!}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div style="margin-top: 5%" class="form-group">
                    {!! Form::submit('Promote Student',['class'=>'btn btn-primary waves-effect waves-light']) !!}
                </div>
            </div>
        </div>



    <div class="container-row">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                <div class="enrollment-heading">
                    <p>Learners Information</p>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                <div class="form-group">
                    {!! Form::label('studentNsoNo','NSO No:') !!}
                    {!! Form::text('studentNsoNo',null,['class'=>'form-control']) !!}
                </div>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    {!! Form::label('studentLrnNo','LRN No:(if any)') !!}
                    {!! Form::text('studentLrnNo',null,['class'=>'form-control']) !!}
                </div>

            </div>

        </div>
    </div>

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
                    {!! Form::label('studentFirstName','First Name:') !!}
                    {!! Form::text('studentFirstName',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('studentMiddleName','Middle Name:') !!}
                    {!! Form::text('studentMiddleName',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('studentLastName','Last Name:') !!}
                    {!! Form::text('studentLastName',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('studentExtensionName','Extension Name:e.g Jr., III (if applicable)') !!}
                    {!! Form::text('studentExtensionName',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('studentAge','Age: ') !!}
                    {!! Form::text('studentAge',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('studentContactNo','Contact No: ') !!}
                    {!! Form::text('studentContactNo',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('studentDob','Date of Birth:') !!}
                    <input name="studentDob"  type="date" class="form-control" placeholder="Date of Birth">
                </div>

                <div class="form-group">
                    {!! Form::label('photo_id','Photo:') !!}
                    {!! Form::file('photo_id',null,['class'=>'form-control alert-up-pd']) !!}
                </div>


            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                <div class="form-group">
                    <div class="form-group">
                        {!! Form::label('gender_id','Gender:') !!}
                        {!! Form::select('gender_id',[''=>'Choose Gender']+$genders,null,['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p>Belongs to any indigenous People?</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Yes
                            </label>

                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                No
                            </label>

                            <div class="form-group">
                                {!! Form::text('studentIndigenous',null,['class'=>'form-control','placeholder'=>'if yes, specify']) !!}
                            </div>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('studentLanguage','Mother Tounge: ') !!}
                    {!! Form::text('studentLanguage',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('studentReligion','Religion: ') !!}
                    {!! Form::text('studentReligion',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('username','User Name: ') !!}
                    {!! Form::text('username',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password','Password: ') !!}
                    {!! Form::password('password',null,['class'=>'form-control']) !!}
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
                    {!! Form::label('studentHouseNo','House No: ') !!}
                    {!! Form::text('studentHouseNo',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('studentBarangay','Barangay: ') !!}
                    {!! Form::text('studentBarangay',null,['class'=>'form-control']) !!}
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    {!! Form::label('studentMunicipality',"City/Municipality/Province/Country: ex. 'Piddig Ilocos-Norte Philippines' ") !!}
                    {!! Form::text('studentMunicipality',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('studentZipcode','Zip Code:') !!}
                    {!! Form::text('studentZipcode',null,['class'=>'form-control']) !!}
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
                    {!! Form::label('studentFatherName',"Father's Name:") !!}
                    {!! Form::text('studentFatherName',null,['class'=>'form-control']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('studentGuardianName',"Guardian's Name:") !!}
                    {!! Form::text('studentGuardianName',null,['class'=>'form-control']) !!}
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                <div class="form-group">
                    {!! Form::label('studentMotherName',"Mother's Name:") !!}
                    {!! Form::text('studentMotherName',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('studentGuardianNo',"Guardian's No:") !!}
                    {!! Form::text('studentGuardianNo',null,['class'=>'form-control']) !!}
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-12">
            <div class="payment-adress">
                <div class="form-group">
                    {!! Form::submit('Update',['class'=>'btn btn-primary waves-effect waves-light']) !!}
                </div>
            </div>
        </div>
    </div>

    {!! Form::close() !!}

    @endsection