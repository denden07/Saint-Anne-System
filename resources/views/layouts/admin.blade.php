<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    {{--<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico')}}">--}}
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">


    <!-- Bootstrap CSS
		============================================ -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/owl.theme.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/normalize.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
    <!-- educate icon CSS
		============================================ -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/educate-custon-icon.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/metisMenu/metisMenu.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/calendar/fullcalendar.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/calendar/fullcalendar.print.min.css')}}">
    <!-- style CSS
		============================================ -->
    <link type="text/css" rel="stylesheet" href="{{ asset('style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Start Left menu area -->
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img  width="200"  class="main-logo" src="{{URL::to('assets/img/logo/home.png')}}" alt="" /></a>
            <strong><a href="index.html"><img src="{{URL::to('assets/img/logo/home.png')}}" alt="" /></a></strong>
        </div>





        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="has-arrow" href="index.html">
                            <img width="20px" src="{{URL::to('assets/img/side-icons/user.png')}}" alt="">
                            <span class="mini-click-non">Users</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Dashboard v.1" href="index.html"><span class="mini-sub-pro">All Users</span></a></li>
                            <li><a title="Dashboard v.2" href="index-1.html"><span class="mini-sub-pro">Add Users</span></a></li>
                            <li><a title="Dashboard v.3" href="index-2.html"><span class="mini-sub-pro">Edit Users</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a title="Landing Page" href="events.html" aria-expanded="false"> <img width="20px" src="{{URL::to('assets/img/side-icons/event.png')}}" alt=""></span> <span class="mini-click-non">Event</span></a>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-professors.html" aria-expanded="false"> <img width="20px" src="{{URL::to('assets/img/side-icons/teacher.png')}}" alt=""> <span class="mini-click-non">Professors</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Professors" href="all-professors.html"><span class="mini-sub-pro">All Professors</span></a></li>
                            <li><a title="Add Professor" href="add-professor.html"><span class="mini-sub-pro">Add Professor</span></a></li>
                            <li><a title="Edit Professor" href="edit-professor.html"><span class="mini-sub-pro">Edit Professor</span></a></li>
                            <li><a title="Professor Profile" href="professor-profile.html"><span class="mini-sub-pro">Professor Profile</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-students.html" aria-expanded="false"> <img width="20px" src="{{URL::to('assets/img/side-icons/student.png')}}" alt=""></span> <span class="mini-click-non">Students</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Students" href="all-students.html"><span class="mini-sub-pro">All Students</span></a></li>
                            <li><a title="Add Students" href="add-student.html"><span class="mini-sub-pro">Add Student</span></a></li>
                            <li><a title="Edit Students" href="edit-student.html"><span class="mini-sub-pro">Edit Student</span></a></li>
                            <li><a title="Students Profile" href="student-profile.html"><span class="mini-sub-pro">Student Profile</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Courses</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Courses" href="all-courses.html"><span class="mini-sub-pro">All Courses</span></a></li>
                            <li><a title="Add Courses" href="add-course.html"><span class="mini-sub-pro">Add Course</span></a></li>
                            <li><a title="Edit Courses" href="edit-course.html"><span class="mini-sub-pro">Edit Course</span></a></li>
                            <li><a title="Courses Profile" href="course-info.html"><span class="mini-sub-pro">Courses Info</span></a></li>
                            <li><a title="Product Payment" href="course-payment.html"><span class="mini-sub-pro">Courses Payment</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Library</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Library" href="library-assets.html"><span class="mini-sub-pro">Library Assets</span></a></li>
                            <li><a title="Add Library" href="add-library-assets.html"><span class="mini-sub-pro">Add Library Asset</span></a></li>
                            <li><a title="Edit Library" href="edit-library-assets.html"><span class="mini-sub-pro">Edit Library Asset</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Section</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Departments List" href="departments.html"><span class="mini-sub-pro">Section List</span></a></li>
                            <li><a title="Add Departments" href="add-department.html"><span class="mini-sub-pro">Add Section</span></a></li>
                            <li><a title="Edit Departments" href="edit-department.html"><span class="mini-sub-pro">Edit Section</span></a></li>
                        </ul>
                    </li>



                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <img width="20px" src="{{URL::to('assets/img/side-icons/button.png')}}" alt="">
                                        </button>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">

                                </div>


                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            {{--<li class="nav-item dropdown">--}}
                                                {{--<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>--}}
                                                {{--<div role="menu" class="author-message-top dropdown-menu animated zoomIn">--}}
                                                    {{--<div class="message-single-top">--}}
                                                        {{--<h1>Message</h1>--}}
                                                    {{--</div>--}}
                                                    {{--<ul class="message-menu">--}}
                                                        {{--<li>--}}
                                                            {{--<a href="#">--}}
                                                                {{--<div class="message-img">--}}
                                                                    {{--<img src="img/contact/1.jpg" alt="">--}}
                                                                {{--</div>--}}
                                                                {{--<div class="message-content">--}}
                                                                    {{--<span class="message-date">16 Sept</span>--}}
                                                                    {{--<h2>Advanda Cro</h2>--}}
                                                                    {{--<p>Please done this project as soon possible.</p>--}}
                                                                {{--</div>--}}
                                                            {{--</a>--}}
                                                        {{--</li>--}}
                                                        {{--<li>--}}
                                                            {{--<a href="#">--}}
                                                                {{--<div class="message-img">--}}
                                                                    {{--<img src="img/contact/4.jpg" alt="">--}}
                                                                {{--</div>--}}
                                                                {{--<div class="message-content">--}}
                                                                    {{--<span class="message-date">16 Sept</span>--}}
                                                                    {{--<h2>Sulaiman din</h2>--}}
                                                                    {{--<p>Please done this project as soon possible.</p>--}}
                                                                {{--</div>--}}
                                                            {{--</a>--}}
                                                        {{--</li>--}}
                                                        {{--<li>--}}
                                                            {{--<a href="#">--}}
                                                                {{--<div class="message-img">--}}
                                                                    {{--<img src="img/contact/3.jpg" alt="">--}}
                                                                {{--</div>--}}
                                                                {{--<div class="message-content">--}}
                                                                    {{--<span class="message-date">16 Sept</span>--}}
                                                                    {{--<h2>Victor Jara</h2>--}}
                                                                    {{--<p>Please done this project as soon possible.</p>--}}
                                                                {{--</div>--}}
                                                            {{--</a>--}}
                                                        {{--</li>--}}
                                                        {{--<li>--}}
                                                            {{--<a href="#">--}}
                                                                {{--<div class="message-img">--}}
                                                                    {{--<img src="img/contact/2.jpg" alt="">--}}
                                                                {{--</div>--}}
                                                                {{--<div class="message-content">--}}
                                                                    {{--<span class="message-date">16 Sept</span>--}}
                                                                    {{--<h2>Victor Jara</h2>--}}
                                                                    {{--<p>Please done this project as soon possible.</p>--}}
                                                                {{--</div>--}}
                                                            {{--</a>--}}
                                                        {{--</li>--}}
                                                    {{--</ul>--}}
                                                    {{--<div class="message-view">--}}
                                                        {{--<a href="#">View All Messages</a>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>--}}
                                                {{--<div role="menu" class="notification-author dropdown-menu animated zoomIn">--}}
                                                    {{--<div class="notification-single-top">--}}
                                                        {{--<h1>Notifications</h1>--}}
                                                    {{--</div>--}}
                                                    {{--<ul class="notification-menu">--}}
                                                        {{--<li>--}}
                                                            {{--<a href="#">--}}
                                                                {{--<div class="notification-icon">--}}
                                                                    {{--<i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="notification-content">--}}
                                                                    {{--<span class="notification-date">16 Sept</span>--}}
                                                                    {{--<h2>Advanda Cro</h2>--}}
                                                                    {{--<p>Please done this project as soon possible.</p>--}}
                                                                {{--</div>--}}
                                                            {{--</a>--}}
                                                        {{--</li>--}}
                                                        {{--<li>--}}
                                                            {{--<a href="#">--}}
                                                                {{--<div class="notification-icon">--}}
                                                                    {{--<i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="notification-content">--}}
                                                                    {{--<span class="notification-date">16 Sept</span>--}}
                                                                    {{--<h2>Sulaiman din</h2>--}}
                                                                    {{--<p>Please done this project as soon possible.</p>--}}
                                                                {{--</div>--}}
                                                            {{--</a>--}}
                                                        {{--</li>--}}
                                                        {{--<li>--}}
                                                            {{--<a href="#">--}}
                                                                {{--<div class="notification-icon">--}}
                                                                    {{--<i class="fa fa-eraser edu-shield" aria-hidden="true"></i>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="notification-content">--}}
                                                                    {{--<span class="notification-date">16 Sept</span>--}}
                                                                    {{--<h2>Victor Jara</h2>--}}
                                                                    {{--<p>Please done this project as soon possible.</p>--}}
                                                                {{--</div>--}}
                                                            {{--</a>--}}
                                                        {{--</li>--}}
                                                        {{--<li>--}}
                                                            {{--<a href="#">--}}
                                                                {{--<div class="notification-icon">--}}
                                                                    {{--<i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="notification-content">--}}
                                                                    {{--<span class="notification-date">16 Sept</span>--}}
                                                                    {{--<h2>Victor Jara</h2>--}}
                                                                    {{--<p>Please done this project as soon possible.</p>--}}
                                                                {{--</div>--}}
                                                            {{--</a>--}}
                                                        {{--</li>--}}
                                                    {{--</ul>--}}
                                                    {{--<div class="notification-view">--}}
                                                        {{--<a href="#">View All Notification</a>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <img src="{{URL::to('assets/img/profile/Ronaldo.png')}}" alt="" />
                                                    <span class="admin-name">Cristiano Ronaldo</span>
                                                    <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                </a>
                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a>
                                                    </li>
                                                    <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                    </li>

                                                    <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                    </li>
                                                    <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            {{--<li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-menu"></i></a>--}}

                                                {{--<div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">--}}
                                                    {{--<ul class="nav nav-tabs custon-set-tab">--}}
                                                        {{--<li class="active"><a data-toggle="tab" href="#Notes">Notes</a>--}}
                                                        {{--</li>--}}
                                                        {{--<li><a data-toggle="tab" href="#Projects">Projects</a>--}}
                                                        {{--</li>--}}
                                                        {{--<li><a data-toggle="tab" href="#Settings">Settings</a>--}}
                                                        {{--</li>--}}
                                                    {{--</ul>--}}

                                                    {{--<div class="tab-content custom-bdr-nt">--}}
                                                        {{--<div id="Notes" class="tab-pane fade in active">--}}
                                                            {{--<div class="notes-area-wrap">--}}
                                                                {{--<div class="note-heading-indicate">--}}
                                                                    {{--<h2><i class="fa fa-comments-o"></i> Latest Notes</h2>--}}
                                                                    {{--<p>You have 10 new message.</p>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="notes-list-area notes-menu-scrollbar">--}}
                                                                    {{--<ul class="notes-menu-list">--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">--}}
                                                                                {{--<div class="notes-list-flow">--}}
                                                                                    {{--<div class="notes-img">--}}
                                                                                        {{--<img src="img/contact/4.jpg" alt="" />--}}
                                                                                    {{--</div>--}}
                                                                                    {{--<div class="notes-content">--}}
                                                                                        {{--<p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>--}}
                                                                                        {{--<span>Yesterday 2:45 pm</span>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">--}}
                                                                                {{--<div class="notes-list-flow">--}}
                                                                                    {{--<div class="notes-img">--}}
                                                                                        {{--<img src="img/contact/1.jpg" alt="" />--}}
                                                                                    {{--</div>--}}
                                                                                    {{--<div class="notes-content">--}}
                                                                                        {{--<p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>--}}
                                                                                        {{--<span>Yesterday 2:45 pm</span>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">--}}
                                                                                {{--<div class="notes-list-flow">--}}
                                                                                    {{--<div class="notes-img">--}}
                                                                                        {{--<img src="img/contact/2.jpg" alt="" />--}}
                                                                                    {{--</div>--}}
                                                                                    {{--<div class="notes-content">--}}
                                                                                        {{--<p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>--}}
                                                                                        {{--<span>Yesterday 2:45 pm</span>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">--}}
                                                                                {{--<div class="notes-list-flow">--}}
                                                                                    {{--<div class="notes-img">--}}
                                                                                        {{--<img src="img/contact/3.jpg" alt="" />--}}
                                                                                    {{--</div>--}}
                                                                                    {{--<div class="notes-content">--}}
                                                                                        {{--<p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>--}}
                                                                                        {{--<span>Yesterday 2:45 pm</span>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">--}}
                                                                                {{--<div class="notes-list-flow">--}}
                                                                                    {{--<div class="notes-img">--}}
                                                                                        {{--<img src="img/contact/4.jpg" alt="" />--}}
                                                                                    {{--</div>--}}
                                                                                    {{--<div class="notes-content">--}}
                                                                                        {{--<p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>--}}
                                                                                        {{--<span>Yesterday 2:45 pm</span>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">--}}
                                                                                {{--<div class="notes-list-flow">--}}
                                                                                    {{--<div class="notes-img">--}}
                                                                                        {{--<img src="img/contact/1.jpg" alt="" />--}}
                                                                                    {{--</div>--}}
                                                                                    {{--<div class="notes-content">--}}
                                                                                        {{--<p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>--}}
                                                                                        {{--<span>Yesterday 2:45 pm</span>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">--}}
                                                                                {{--<div class="notes-list-flow">--}}
                                                                                    {{--<div class="notes-img">--}}
                                                                                        {{--<img src="img/contact/2.jpg" alt="" />--}}
                                                                                    {{--</div>--}}
                                                                                    {{--<div class="notes-content">--}}
                                                                                        {{--<p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>--}}
                                                                                        {{--<span>Yesterday 2:45 pm</span>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">--}}
                                                                                {{--<div class="notes-list-flow">--}}
                                                                                    {{--<div class="notes-img">--}}
                                                                                        {{--<img src="img/contact/1.jpg" alt="" />--}}
                                                                                    {{--</div>--}}
                                                                                    {{--<div class="notes-content">--}}
                                                                                        {{--<p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>--}}
                                                                                        {{--<span>Yesterday 2:45 pm</span>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">--}}
                                                                                {{--<div class="notes-list-flow">--}}
                                                                                    {{--<div class="notes-img">--}}
                                                                                        {{--<img src="img/contact/2.jpg" alt="" />--}}
                                                                                    {{--</div>--}}
                                                                                    {{--<div class="notes-content">--}}
                                                                                        {{--<p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>--}}
                                                                                        {{--<span>Yesterday 2:45 pm</span>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">--}}
                                                                                {{--<div class="notes-list-flow">--}}
                                                                                    {{--<div class="notes-img">--}}
                                                                                        {{--<img src="img/contact/3.jpg" alt="" />--}}
                                                                                    {{--</div>--}}
                                                                                    {{--<div class="notes-content">--}}
                                                                                        {{--<p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>--}}
                                                                                        {{--<span>Yesterday 2:45 pm</span>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                    {{--</ul>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div id="Projects" class="tab-pane fade">--}}
                                                            {{--<div class="projects-settings-wrap">--}}
                                                                {{--<div class="note-heading-indicate">--}}
                                                                    {{--<h2><i class="fa fa-cube"></i> Latest projects</h2>--}}
                                                                    {{--<p> You have 20 projects. 5 not completed.</p>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="project-st-list-area project-st-menu-scrollbar">--}}
                                                                    {{--<ul class="projects-st-menu-list">--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">--}}
                                                                                {{--<div class="project-list-flow">--}}
                                                                                    {{--<div class="projects-st-heading">--}}
                                                                                        {{--<h2>Web Development</h2>--}}
                                                                                        {{--<p> The point of using Lorem Ipsum is that it has a more or less normal.</p>--}}
                                                                                        {{--<span class="project-st-time">1 hours ago</span>--}}
                                                                                    {{--</div>--}}
                                                                                    {{--<div class="projects-st-content">--}}
                                                                                        {{--<p>Completion with: 28%</p>--}}
                                                                                        {{--<div class="progress progress-mini">--}}
                                                                                            {{--<div style="width: 28%;" class="progress-bar progress-bar-danger hd-tp-1"></div>--}}
                                                                                        {{--</div>--}}
                                                                                        {{--<p>Project end: 4:00 pm - 12.06.2014</p>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">--}}
                                                                                {{--<div class="project-list-flow">--}}
                                                                                    {{--<div class="projects-st-heading">--}}
                                                                                        {{--<h2>Software Development</h2>--}}
                                                                                        {{--<p> The point of using Lorem Ipsum is that it has a more or less normal.</p>--}}
                                                                                        {{--<span class="project-st-time">2 hours ago</span>--}}
                                                                                    {{--</div>--}}
                                                                                    {{--<div class="projects-st-content project-rating-cl">--}}
                                                                                        {{--<p>Completion with: 68%</p>--}}
                                                                                        {{--<div class="progress progress-mini">--}}
                                                                                            {{--<div style="width: 68%;" class="progress-bar hd-tp-2"></div>--}}
                                                                                        {{--</div>--}}
                                                                                        {{--<p>Project end: 4:00 pm - 12.06.2014</p>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">--}}
                                                                                {{--<div class="project-list-flow">--}}
                                                                                    {{--<div class="projects-st-heading">--}}
                                                                                        {{--<h2>Graphic Design</h2>--}}
                                                                                        {{--<p> The point of using Lorem Ipsum is that it has a more or less normal.</p>--}}
                                                                                        {{--<span class="project-st-time">3 hours ago</span>--}}
                                                                                    {{--</div>--}}
                                                                                    {{--<div class="projects-st-content">--}}
                                                                                        {{--<p>Completion with: 78%</p>--}}
                                                                                        {{--<div class="progress progress-mini">--}}
                                                                                            {{--<div style="width: 78%;" class="progress-bar hd-tp-3"></div>--}}
                                                                                        {{--</div>--}}
                                                                                        {{--<p>Project end: 4:00 pm - 12.06.2014</p>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">--}}
                                                                                {{--<div class="project-list-flow">--}}
                                                                                    {{--<div class="projects-st-heading">--}}
                                                                                        {{--<h2>Web Design</h2>--}}
                                                                                        {{--<p> The point of using Lorem Ipsum is that it has a more or less normal.</p>--}}
                                                                                        {{--<span class="project-st-time">4 hours ago</span>--}}
                                                                                    {{--</div>--}}
                                                                                    {{--<div class="projects-st-content project-rating-cl2">--}}
                                                                                        {{--<p>Completion with: 38%</p>--}}
                                                                                        {{--<div class="progress progress-mini">--}}
                                                                                            {{--<div style="width: 38%;" class="progress-bar progress-bar-danger hd-tp-4"></div>--}}
                                                                                        {{--</div>--}}
                                                                                        {{--<p>Project end: 4:00 pm - 12.06.2014</p>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">--}}
                                                                                {{--<div class="project-list-flow">--}}
                                                                                    {{--<div class="projects-st-heading">--}}
                                                                                        {{--<h2>Business Card</h2>--}}
                                                                                        {{--<p> The point of using Lorem Ipsum is that it has a more or less normal.</p>--}}
                                                                                        {{--<span class="project-st-time">5 hours ago</span>--}}
                                                                                    {{--</div>--}}
                                                                                    {{--<div class="projects-st-content">--}}
                                                                                        {{--<p>Completion with: 28%</p>--}}
                                                                                        {{--<div class="progress progress-mini">--}}
                                                                                            {{--<div style="width: 28%;" class="progress-bar progress-bar-danger hd-tp-5"></div>--}}
                                                                                        {{--</div>--}}
                                                                                        {{--<p>Project end: 4:00 pm - 12.06.2014</p>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">--}}
                                                                                {{--<div class="project-list-flow">--}}
                                                                                    {{--<div class="projects-st-heading">--}}
                                                                                        {{--<h2>Ecommerce Business</h2>--}}
                                                                                        {{--<p> The point of using Lorem Ipsum is that it has a more or less normal.</p>--}}
                                                                                        {{--<span class="project-st-time">6 hours ago</span>--}}
                                                                                    {{--</div>--}}
                                                                                    {{--<div class="projects-st-content project-rating-cl">--}}
                                                                                        {{--<p>Completion with: 68%</p>--}}
                                                                                        {{--<div class="progress progress-mini">--}}
                                                                                            {{--<div style="width: 68%;" class="progress-bar hd-tp-6"></div>--}}
                                                                                        {{--</div>--}}
                                                                                        {{--<p>Project end: 4:00 pm - 12.06.2014</p>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">--}}
                                                                                {{--<div class="project-list-flow">--}}
                                                                                    {{--<div class="projects-st-heading">--}}
                                                                                        {{--<h2>Woocommerce Plugin</h2>--}}
                                                                                        {{--<p> The point of using Lorem Ipsum is that it has a more or less normal.</p>--}}
                                                                                        {{--<span class="project-st-time">7 hours ago</span>--}}
                                                                                    {{--</div>--}}
                                                                                    {{--<div class="projects-st-content">--}}
                                                                                        {{--<p>Completion with: 78%</p>--}}
                                                                                        {{--<div class="progress progress-mini">--}}
                                                                                            {{--<div style="width: 78%;" class="progress-bar"></div>--}}
                                                                                        {{--</div>--}}
                                                                                        {{--<p>Project end: 4:00 pm - 12.06.2014</p>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">--}}
                                                                                {{--<div class="project-list-flow">--}}
                                                                                    {{--<div class="projects-st-heading">--}}
                                                                                        {{--<h2>Wordpress Theme</h2>--}}
                                                                                        {{--<p> The point of using Lorem Ipsum is that it has a more or less normal.</p>--}}
                                                                                        {{--<span class="project-st-time">9 hours ago</span>--}}
                                                                                    {{--</div>--}}
                                                                                    {{--<div class="projects-st-content project-rating-cl2">--}}
                                                                                        {{--<p>Completion with: 38%</p>--}}
                                                                                        {{--<div class="progress progress-mini">--}}
                                                                                            {{--<div style="width: 38%;" class="progress-bar progress-bar-danger"></div>--}}
                                                                                        {{--</div>--}}
                                                                                        {{--<p>Project end: 4:00 pm - 12.06.2014</p>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                    {{--</ul>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div id="Settings" class="tab-pane fade">--}}
                                                            {{--<div class="setting-panel-area">--}}
                                                                {{--<div class="note-heading-indicate">--}}
                                                                    {{--<h2><i class="fa fa-gears"></i> Settings Panel</h2>--}}
                                                                    {{--<p> You have 20 Settings. 5 not completed.</p>--}}
                                                                {{--</div>--}}
                                                                {{--<ul class="setting-panel-list">--}}
                                                                    {{--<li>--}}
                                                                        {{--<div class="checkbox-setting-pro">--}}
                                                                            {{--<div class="checkbox-title-pro">--}}
                                                                                {{--<h2>Show notifications</h2>--}}
                                                                                {{--<div class="ts-custom-check">--}}
                                                                                    {{--<div class="onoffswitch">--}}
                                                                                        {{--<input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">--}}
                                                                                        {{--<label class="onoffswitch-label" for="example">--}}
                                                                                            {{--<span class="onoffswitch-inner"></span>--}}
                                                                                            {{--<span class="onoffswitch-switch"></span>--}}
                                                                                        {{--</label>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    {{--</li>--}}
                                                                    {{--<li>--}}
                                                                        {{--<div class="checkbox-setting-pro">--}}
                                                                            {{--<div class="checkbox-title-pro">--}}
                                                                                {{--<h2>Disable Chat</h2>--}}
                                                                                {{--<div class="ts-custom-check">--}}
                                                                                    {{--<div class="onoffswitch">--}}
                                                                                        {{--<input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">--}}
                                                                                        {{--<label class="onoffswitch-label" for="example3">--}}
                                                                                            {{--<span class="onoffswitch-inner"></span>--}}
                                                                                            {{--<span class="onoffswitch-switch"></span>--}}
                                                                                        {{--</label>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    {{--</li>--}}
                                                                    {{--<li>--}}
                                                                        {{--<div class="checkbox-setting-pro">--}}
                                                                            {{--<div class="checkbox-title-pro">--}}
                                                                                {{--<h2>Enable history</h2>--}}
                                                                                {{--<div class="ts-custom-check">--}}
                                                                                    {{--<div class="onoffswitch">--}}
                                                                                        {{--<input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">--}}
                                                                                        {{--<label class="onoffswitch-label" for="example4">--}}
                                                                                            {{--<span class="onoffswitch-inner"></span>--}}
                                                                                            {{--<span class="onoffswitch-switch"></span>--}}
                                                                                        {{--</label>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    {{--</li>--}}
                                                                    {{--<li>--}}
                                                                        {{--<div class="checkbox-setting-pro">--}}
                                                                            {{--<div class="checkbox-title-pro">--}}
                                                                                {{--<h2>Show charts</h2>--}}
                                                                                {{--<div class="ts-custom-check">--}}
                                                                                    {{--<div class="onoffswitch">--}}
                                                                                        {{--<input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">--}}
                                                                                        {{--<label class="onoffswitch-label" for="example7">--}}
                                                                                            {{--<span class="onoffswitch-inner"></span>--}}
                                                                                            {{--<span class="onoffswitch-switch"></span>--}}
                                                                                        {{--</label>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    {{--</li>--}}
                                                                    {{--<li>--}}
                                                                        {{--<div class="checkbox-setting-pro">--}}
                                                                            {{--<div class="checkbox-title-pro">--}}
                                                                                {{--<h2>Update everyday</h2>--}}
                                                                                {{--<div class="ts-custom-check">--}}
                                                                                    {{--<div class="onoffswitch">--}}
                                                                                        {{--<input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example2">--}}
                                                                                        {{--<label class="onoffswitch-label" for="example2">--}}
                                                                                            {{--<span class="onoffswitch-inner"></span>--}}
                                                                                            {{--<span class="onoffswitch-switch"></span>--}}
                                                                                        {{--</label>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    {{--</li>--}}
                                                                    {{--<li>--}}
                                                                        {{--<div class="checkbox-setting-pro">--}}
                                                                            {{--<div class="checkbox-title-pro">--}}
                                                                                {{--<h2>Global search</h2>--}}
                                                                                {{--<div class="ts-custom-check">--}}
                                                                                    {{--<div class="onoffswitch">--}}
                                                                                        {{--<input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example6">--}}
                                                                                        {{--<label class="onoffswitch-label" for="example6">--}}
                                                                                            {{--<span class="onoffswitch-inner"></span>--}}
                                                                                            {{--<span class="onoffswitch-switch"></span>--}}
                                                                                        {{--</label>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    {{--</li>--}}
                                                                    {{--<li>--}}
                                                                        {{--<div class="checkbox-setting-pro">--}}
                                                                            {{--<div class="checkbox-title-pro">--}}
                                                                                {{--<h2>Offline users</h2>--}}
                                                                                {{--<div class="ts-custom-check">--}}
                                                                                    {{--<div class="onoffswitch">--}}
                                                                                        {{--<input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example5">--}}
                                                                                        {{--<label class="onoffswitch-label" for="example5">--}}
                                                                                            {{--<span class="onoffswitch-inner"></span>--}}
                                                                                            {{--<span class="onoffswitch-switch"></span>--}}
                                                                                        {{--</label>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    {{--</li>--}}
                                                                {{--</ul>--}}

                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul class="collapse dropdown-header-top">
                                            <li><a href="index.html">Create User</a></li>
                                            <li><a href="index-1.html">All User</a></li>
                                            <li><a href="index-3.html">Edit User</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="events.html">Event</a></li>
                                    <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demoevent" class="collapse dropdown-header-top">
                                            <li><a href="all-professors.html">All Professors</a>
                                            </li>
                                            <li><a href="add-professor.html">Add Professor</a>
                                            </li>
                                            <li><a href="edit-professor.html">Edit Professor</a>
                                            </li>
                                            <li><a href="professor-profile.html">Professor Profile</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demopro" class="collapse dropdown-header-top">
                                            <li><a href="all-students.html">All Students</a>
                                            </li>
                                            <li><a href="add-student.html">Add Student</a>
                                            </li>
                                            <li><a href="edit-student.html">Edit Student</a>
                                            </li>
                                            <li><a href="student-profile.html">Student Profile</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="democrou" class="collapse dropdown-header-top">
                                            <li><a href="all-courses.html">All Courses</a>
                                            </li>
                                            <li><a href="add-course.html">Add Course</a>
                                            </li>
                                            <li><a href="edit-course.html">Edit Course</a>
                                            </li>
                                            <li><a href="course-profile.html">Courses Info</a>
                                            </li>
                                            <li><a href="course-payment.html">Courses Payment</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demolibra" class="collapse dropdown-header-top">
                                            <li><a href="library-assets.html">Library Assets</a>
                                            </li>
                                            <li><a href="add-library-assets.html">Add Library Asset</a>
                                            </li>
                                            <li><a href="edit-library-assets.html">Edit Library Asset</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demodepart" class="collapse dropdown-header-top">
                                            <li><a href="departments.html">Departments List</a>
                                            </li>
                                            <li><a href="add-department.html">Add Departments</a>
                                            </li>
                                            <li><a href="edit-department.html">Edit Departments</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end -->
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
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
                                        <li><a href="#"></a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2019. All rights reserved.  By <a href="https://colorlib.com/wp/templates/">Piddig Ang Galing Mo!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jquery
    ============================================ -->
<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- wow JS
    ============================================ -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!-- price-slider JS
    ============================================ -->
<script src="{{asset('assets/js/jquery-price-slider.js')}}"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- sticky JS
    ============================================ -->
<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="{{asset('assets/js/jquery.scrollUp.min.js')}}"></script>
<!-- counterup JS
    ============================================ -->
<script src="{{asset('assets/js/counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/}js/counterup/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counterup/counterup-active.js')}}"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="{{asset('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
<!-- metisMenu JS
    ============================================ -->
<script src="{{asset('assets/js/metisMenu/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/js/metisMenu/metisMenu-active.js')}}"></script>
<!-- morrisjs JS
    ============================================ -->
<script src="{{asset('assets/js/morrisjs/raphael-min.js')}}"></script>
<script src="{{asset('assets/js/morrisjs/morris.js')}}"></script>
<script src="{{asset('assets/js/morrisjs/morris-active.js')}}"></script>
<!-- morrisjs JS
    ============================================ -->
<script src="{{asset('assets/js/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/js/sparkline/jquery.charts-sparkline.js')}}"></script>
<script src="{{asset('assets/js/sparkline/sparkline-active.js')}}"></script>
<!-- calendar JS
    ============================================ -->
<script src="{{asset('assets/js/calendar/moment.min.js')}}"></script>
<script src="{{asset('assets/js/calendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('assets/js/calendar/fullcalendar-active.js')}}"></script>
<!-- plugins JS
    ============================================ -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- main JS
    ============================================ -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>