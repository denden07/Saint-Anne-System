@extends("layouts.admin")

@section('title')
    Courses
@endsection


@section('is_active_course')
    class="active"
@endsection


@section('contents')



                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                    <form role="search" class="sr-input-func">
                                        <input type="text" placeholder="Search..." class="search-int form-control">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">All Courses</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

<div class="row">
                        <div class="courses-area">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="courses-inner res-mg-b-30">
                                            <div class="courses-title">
                                                <a href="#"><img src="{{asset('assets/img/courses/english1.jpg')}}" alt=""></a>
                                                <h2>English 1</h2>
                                            </div>
                                            <div class="courses-alaltic">
                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                                                <span class="cr-ic-r">Enrolled: 50</span>
                                                <span class="cr-ic-r"><span>P1500</span></span>
                                            </div>
                                            <div class="course-des">
                                                <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                                                <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Cristiano Ronaldo</p>
                                                <p><span><i class="fa fa-clock"></i></span> <b>Students total:</b> 50</p>
                                            </div>
                                            <div class="product-buttons">
                                                <button type="button" class="button-default cart-btn">Read More</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="courses-inner">
                                            <div class="courses-title">
                                                <a href="#"><img src="{{asset('assets/img/courses/filipino1.jpg')}}" alt=""></a>
                                                <h2>Filipino 1</h2>
                                            </div>
                                            <div class="courses-alaltic">
                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                                                <span class="cr-ic-r">Enrolled: 50</span>
                                                <span class="cr-ic-r"><span>P1500</span></span>
                                            </div>
                                            <div class="course-des">
                                                <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                                                <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                                                <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                                            </div>
                                            <div class="product-buttons">
                                                <button type="button" class="button-default cart-btn">Read More</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="courses-inner res-mg-t-30 dk-res-t-pro-30">
                                            <div class="courses-title">
                                                <a href="#"><img src="{{asset('assets/img/courses/math1.jpg')}}" alt=""></a>
                                                <h2>Math 1</h2>
                                            </div>
                                            <div class="courses-alaltic">
                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                                                <span class="cr-ic-r">Enrolled: 50</span>
                                                <span class="cr-ic-r"><span>P1500</span></span>
                                            </div>
                                            <div class="course-des">
                                                <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                                                <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                                                <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                                            </div>
                                            <div class="product-buttons">
                                                <button type="button" class="button-default cart-btn">Read More</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="courses-inner res-mg-t-30 dk-res-t-pro-30">
                                            <div class="courses-title">
                                                <a href="#"><img src="img/courses/1.jpg" alt=""></a>
                                                <h2>Web Development</h2>
                                            </div>
                                            <div class="courses-alaltic">
                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                                            </div>
                                            <div class="course-des">
                                                <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                                                <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                                                <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                                            </div>
                                            <div class="product-buttons">
                                                <button type="button" class="button-default cart-btn">Read More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mg-b-15">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="courses-inner mg-t-30">
                                            <div class="courses-title">
                                                <a href="#"><img src="img/courses/1.jpg" alt=""></a>
                                                <h2>Apps Development</h2>
                                            </div>
                                            <div class="courses-alaltic">
                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                                            </div>
                                            <div class="course-des">
                                                <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                                                <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                                                <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                                            </div>
                                            <div class="product-buttons">
                                                <button type="button" class="button-default cart-btn">Read More</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="courses-inner mg-t-30">
                                            <div class="courses-title">
                                                <a href="#"><img src="img/courses/2.jpg" alt=""></a>
                                                <h2>Illustrator CC 2018</h2>
                                            </div>
                                            <div class="courses-alaltic">
                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                                            </div>
                                            <div class="course-des">
                                                <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                                                <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                                                <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                                            </div>
                                            <div class="product-buttons">
                                                <button type="button" class="button-default cart-btn">Read More</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="courses-inner mg-t-30">
                                            <div class="courses-title">
                                                <a href="#"><img src="img/courses/3.jpg" alt=""></a>
                                                <h2>Indesign cs6 2018</h2>
                                            </div>
                                            <div class="courses-alaltic">
                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                                            </div>
                                            <div class="course-des">
                                                <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                                                <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                                                <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                                            </div>
                                            <div class="product-buttons">
                                                <button type="button" class="button-default cart-btn">Read More</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="courses-inner mg-t-30">
                                            <div class="courses-title">
                                                <a href="#"><img src="img/courses/1.jpg" alt=""></a>
                                                <h2>Web Development</h2>
                                            </div>
                                            <div class="courses-alaltic">
                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                                            </div>
                                            <div class="course-des">
                                                <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                                                <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                                                <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                                            </div>
                                            <div class="product-buttons">
                                                <button type="button" class="button-default cart-btn">Read More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


</div>
@endsection