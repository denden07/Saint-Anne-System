@extends("layouts.admin")

@section('title')
    Enroll Student
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
                                                <form action="/upload" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">



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
                                                                    <input name="firstname" type="text" class="form-control" placeholder="First Name">
                                                                </div>

                                                                <div class="form-group">
                                                                    <input name="middlename" type="text" class="form-control" placeholder="Middle Name">
                                                                </div>

                                                                <div class="form-group">
                                                                    <input name="lastname" type="text" class="form-control" placeholder="Last Name">
                                                                </div>



                                                                <div class="form-group">
                                                                    <input name="extensionname" type="text" class="form-control" placeholder="Name Extension: e.g Jr., III (if applicable)">
                                                                </div>

                                                                <div class="form-group">
                                                                    <input name="username" type="text" class="form-control" placeholder="Username">
                                                                </div>

                                                                <div class="form-group">
                                                                    <input name="age" type="text" class="form-control" placeholder="Age">
                                                                </div>


                                                                <div class="form-group">
                                                                    <input name="mobileno" type="number" class="form-control" placeholder="Mobile no.">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="finish" id="finish" type="date" class="form-control" placeholder="Date of Birth">
                                                                </div>



                                                                <div class="form-group alert-up-pd">
                                                                    <div class="input-container">
                                                                        <input type="file" class="browse-btn" id="real-input">
                                                                        <button class="browse-btn">
                                                                            Browse Files
                                                                        </button>
                                                                        <span class="file-info">Upload Student's Picture</span>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <select name="role" class="form-control">
                                                                        <option value="none" selected="" disabled="">Select Role</option>
                                                                        <option value="0">Registrar</option>
                                                                        <option value="1">Principal</option>
                                                                        <option value="2">Teacher</option>
                                                                        <option value="2">Student</option>

                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <select name="gender" class="form-control">
                                                                        <option value="none" selected="" disabled="">Select Gender</option>
                                                                        <option value="0">Male</option>
                                                                        <option value="1">Female</option>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="container-row">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="enrollment-heading">
                                                                    <p>Permanent Address</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="housenumber" type="text" class="form-control" placeholder="House Number and Sitio ex: '123 Dicaoa'">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="barangay" type="text" class="form-control" placeholder="Barangay">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="municipality" type="text" class="form-control" placeholder="City/Municipality/Province/Country ex. 'Piddig Ilocos-Norte Philippines'">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="postcode" id="postcode" type="text" class="form-control" placeholder="Zip Code">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>



                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
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

