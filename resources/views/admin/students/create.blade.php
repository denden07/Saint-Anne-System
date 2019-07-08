@extends("layouts.admin")

@section('title')
    Create User
@endsection


@section('contents')

    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Basic Information</a></li>
                            <li><a href="#reviews"> Account Information</a></li>
                            <li><a href="#INFORMATION">Learners Information</a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                <form action="/upload" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
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
                                                                <input name="address" type="text" class="form-control" placeholder="Address">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="mobileno" type="number" class="form-control" placeholder="Mobile no.">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="finish" id="finish" type="date" class="form-control" placeholder="Date of Birth">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="postcode" id="postcode" type="text" class="form-control" placeholder="Zip Code">
                                                            </div>
                                                            <div class="form-group alert-up-pd">
                                                                <div class="dz-message needsclick download-custom">
                                                                    <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                                    <h2 class="edudropnone">Drop image here or click to upload.</h2>
                                                                    <p class="edudropnone"><span class="note needsclick">(This is just a demo dropzone. Selected image is <strong>not</strong> actually uploaded.)</span>
                                                                    </p>
                                                                    <input name="imageico" class="hd-pro-img" type="text" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="course" type="text" class="form-control" placeholder="Course">
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
                            <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="devit-card-custom">
                                                        <div class="form-group">
                                                            <input type="nsonumber" class="form-control" placeholder="PSA/NSO Birth Certificate No.">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="lrnno" class="form-control" placeholder="LRN (Learner Reference No.)">
                                                        </div>

                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-tab-list tab-pane fade" id="reviews">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <form id="acount-infor" action="#" class="acount-infor">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="email" placeholder="Email">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="phoneno" type="number" class="form-control" placeholder="Phone">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="password" type="password" class="form-control" placeholder="Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="confarmpassword" type="password" class="form-control" placeholder="Confirm Password">
                                                            </div>
                                                            <a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
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
    </div>

@endsection