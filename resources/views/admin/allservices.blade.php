@extends('admin.master')

        <!--**********************************
            Nav header end
        ***********************************-->
@section('css')
 <link href="./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
@section('css')
        <!--**********************************
            Header start
        ***********************************-->
    
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
     
        <!--**********************************
            Sidebar end
        ***********************************-->
@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <a href="/home"><div class="card-body">

                                <h3 class="card-title text-white">Todays Reamaining</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">10</h2>
                                    <p class="text-white mb-0">10 - March 2021</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-calender"></i></span>
                            </div></a>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Todays Total</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">20</h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Future Appoitments</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">50</h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">All Appointments</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">99</h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

               
            </div>
               <div class="container-fluid">
                <!--<div class="row">-->
                <!--    <div class="col-3">-->
                <!--        <div class="card card-widget">-->
                <!--            <div class="card-body gradient-3">-->
                <!--                <div class="media">-->
                <!--                    <span class="card-widget__icon"><i class="icon-home"></i></span>-->
                <!--                    <div class="media-body">-->
                <!--                        <h2 class="card-widget__title">520</h2>-->
                <!--                        <h5 class="card-widget__subtitle">All Properties</h5>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->

                <!--    <div class="col-3">-->
                <!--        <div class="card card-widget">-->
                <!--            <div class="card-body gradient-4">-->
                <!--                <div class="media">-->
                <!--                    <span class="card-widget__icon"><i class="icon-tag"></i></span>-->
                <!--                    <div class="media-body">-->
                <!--                        <h2 class="card-widget__title">720</h2>-->
                <!--                        <h5 class="card-widget__subtitle">Open Tickets</h5>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->

                <!--    <div class="col-3">-->
                <!--        <div class="card card-widget">-->
                <!--            <div class="card-body gradient-4">-->
                <!--                <div class="media">-->
                <!--                    <span class="card-widget__icon"><i class="icon-emotsmile"></i></span>-->
                <!--                    <div class="media-body">-->
                <!--                        <h2 class="card-widget__title">1002</h2>-->
                <!--                        <h5 class="card-widget__subtitle">Task Completed</h5>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->

                <!--    <div class="col-3">-->
                <!--        <div class="card card-widget">-->
                <!--            <div class="card-body gradient-9">-->
                <!--                <div class="media">-->
                <!--                    <span class="card-widget__icon"><i class="icon-ghost"></i></span>-->
                <!--                    <div class="media-body">-->
                <!--                        <h2 class="card-widget__title">420</h2>-->
                <!--                        <h5 class="card-widget__subtitle">Threats</h5>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <div class="row">
                    <!--<div class="col-3">-->
                    <!--    <div class="card">-->
                    <!--        <div class="card-body">-->
                    <!--            <div class="text-center">-->
                    <!--                <span class="display-5"><i class="icon-earphones gradient-3-text"></i></span>-->
                    <!--                <h2 class="mt-3">5K Songs</h2>-->
                    <!--                <p>Your playlist download complete</p><a href="javascript:void()" class="btn gradient-3 btn-lg border-0 btn-rounded px-5">Download-->
                    <!--                    now</a>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-3">-->
                    <!--    <div class="card">-->
                    <!--        <div class="card-body">-->
                    <!--            <div class="text-center">-->
                    <!--                <span class="display-5"><i class="icon-diamond gradient-4-text"></i></span>-->
                    <!--                <h2 class="mt-3">765 Point</h2>-->
                    <!--                <p>Nice, you are doing great!</p>-->
                    <!--                <a href="javascript:void()" class="btn gradient-4 btn-lg border-0 btn-rounded px-5">Redeem-->
                    <!--                    now</a>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <span class="display-5"><i class="icon-user gradient-4-text"></i></span>
                                    <h2 class="mt-3">5210 Users</h2>
                                    <p>Currently active</p><a href="javascript:void()" class="btn gradient-4 btn-lg border-0 btn-rounded px-5">Add
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--<div class="col-lg-3">-->
                    <!--    <div class="card">-->
                    <!--        <div class="card-body">-->
                    <!--            <div class="text-center">-->
                    <!--                <span class="display-5"><i class="icon-grid gradient-9-text"></i></span>-->
                    <!--                <h2 class="mt-3">2 Grid Servers</h2>-->
                    <!--                <p>Currently inactive</p><a href="javascript:void()" class="btn gradient-9 btn-lg border-0 btn-rounded px-5">Fix-->
                    <!--                    now</a>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img alt="" class="rounded-circle mt-4" src="images/users/5.jpg">
                                    <h4 class="card-widget__title text-dark mt-3">Patient Name</h4>
                                    <p class="text-muted">Patient Age/Gender</p>
                                     <button type="button" class="btn mb-1 btn-success sweet-success">Accept <span class="btn-icon-right"><i class="fa fa-check"></i></span>
                                    </button>
                                                                       <!--<button type="button" class="btn mb-1 btn-rounded btn-success">Accept</button>-->
                                                                       <!--        <button type="button" class="btn mb-1 btn-rounded btn-danger">Reject</button>-->
                                                                                 <button type="button" class="btn mb-1 btn-danger sweet-confirm">Remove <span class="btn-icon-right"><i class="fa fa-close"></i></span>
                                    </button>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent">
                                <div class="row">
                                    <div class="col-4 border-right-1 pt-3">
                                        <a class="text-center d-block text-muted" href="javascript:void()">
                                            <i class="fa fa-star gradient-1-text" aria-hidden="true"></i>
                                            <p class="">9988776655</p>
                                        </a>
                                    </div>
                                    <div class="col-4 border-right-1 pt-3"><a class="text-center d-block text-muted" href="javascript:void()">
                                        <i class="fa fa-heart gradient-3-text"></i>
                                            <p class="">Like</p>
                                        </a>
                                    </div>
                                    <div class="col-4 pt-3"><a class="text-center d-block text-muted" href="javascript:void()">
                                        <i class="fa fa-envelope gradient-4-text"></i>
                                            <p class="">patient@gmail.com</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                  
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img alt="" class="rounded-circle mt-4" src="images/users/4.jpg">
                                    <h4 class="card-widget__title text-dark mt-3">Bennie Belvin</h4>
                                    <p class="text-muted">Junior Tester</p>
                                    <a class="btn gradient-4 btn-lg border-0 btn-rounded px-5" href="javascript:void()">Accept</a><a class="btn gradient-4 btn-lg border-0 btn-rounded px-5" href="javascript:void()">Reject</a>

                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent">
                                <div class="row">
                                    <div class="col-4 border-right-1 pt-3">
                                        <a class="text-center d-block text-muted" href="javascript:void()">
                                            <i class="fa fa-star gradient-1-text" aria-hidden="true"></i>
                                            <p class="">Star</p>
                                        </a>
                                    </div>
                                    <div class="col-4 border-right-1 pt-3"><a class="text-center d-block text-muted" href="javascript:void()">
                                        <i class="fa fa-heart gradient-3-text"></i>
                                            <p class="">Like</p>
                                        </a>
                                    </div>
                                    <div class="col-4 pt-3"><a class="text-center d-block text-muted" href="javascript:void()">
                                        <i class="fa fa-envelope gradient-4-text"></i>
                                            <p class="">Email</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                
                
            </div>
              <div class="container-fluid">
  <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Next Appoitment</h4>
                                <div class="basic-list-group">
                                    <div class="row">
                                        <div class="col-xl-4 col-md-4 col-sm-3 mb-4 mb-sm-0">
                                            <div class="list-group" id="list-tab" role="tablist"><a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a> <a class="list-group-item list-group-item-action" id="list-profile-list"
                                                    data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a> <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab"
                                                    aria-controls="messages">Messages</a> <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-md-8 col-sm-9">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="list-home">
                                                                        <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img alt="" class="rounded-circle mt-4" src="images/users/4.jpg">
                                    <h4 class="card-widget__title text-dark mt-3">Bennie Belvin</h4>
                                    <p class="text-muted">Junior Tester</p>
                                    <a class="btn gradient-4 btn-lg border-0 btn-rounded px-5" href="javascript:void()">Folllow</a>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent">
                                <div class="row">
                                    <div class="col-4 border-right-1 pt-3">
                                        <a class="text-center d-block text-muted" href="javascript:void()">
                                            <i class="fa fa-star gradient-1-text" aria-hidden="true"></i>
                                            <p class="">Star</p>
                                        </a>
                                    </div>
                                    <div class="col-4 border-right-1 pt-3"><a class="text-center d-block text-muted" href="javascript:void()">
                                        <i class="fa fa-heart gradient-3-text"></i>
                                            <p class="">Like</p>
                                        </a>
                                    </div>
                                    <div class="col-4 pt-3"><a class="text-center d-block text-muted" href="javascript:void()">
                                        <i class="fa fa-envelope gradient-4-text"></i>
                                            <p class="">Email</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="list-profile" role="tabpanel">
                                                    <p>Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit occaecat
                                                    nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in cupidatat nisi
                                                    enim eu nostrud do aliquip veniam minim.</p>
                                                    <p>Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit occaecat
                                                    nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in cupidatat nisi
                                                    enim eu nostrud do aliquip veniam minim.</p>
                                                </div>
                                                <div class="tab-pane fade" id="list-messages">
                                                    <p>Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit occaecat
                                                    nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in cupidatat nisi
                                                    enim eu nostrud do aliquip veniam minim.</p>
                                                    <p>Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit occaecat
                                                    nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in cupidatat nisi
                                                    enim eu nostrud do aliquip veniam minim.</p>
                                                </div>
                                                <div class="tab-pane fade" id="list-settings">
                                                    <p>Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit occaecat
                                                    nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in cupidatat nisi
                                                    enim eu nostrud do aliquip veniam minim.</p>
                                                    <p>Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit occaecat
                                                    nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in cupidatat nisi
                                                    enim eu nostrud do aliquip veniam minim.</p>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Wrong</h4>
                                <div class="card-content">
                                    <div class="sweetalert m-t-30">
                                        <button class="btn btn-danger btn sweet-wrong">Sweet Wrong</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Message</h4>
                                <div class="card-content">
                                    <div class="sweetalert m-t-30">
                                        <button class="btn btn-info btn sweet-message">Sweet Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Text</h4>
                                <div class="card-content">
                                    <div class="sweetalert m-t-30">
                                        <button class="btn btn-primary btn sweet-text">Sweet Text</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Success</h4>
                                <div class="card-content">
                                    <div class="sweetalert m-t-30">
                                        <button class="btn btn-success btn sweet-success">Sweet Success</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Confirm</h4>
                                <div class="card-content">
                                    <div class="sweetalert m-t-30">
                                        <button class="btn btn-warning btn sweet-confirm">Sweet Confirm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Confirm Or Cancel</h4>
                                <div class="card-content">
                                    <div class="sweetalert m-t-30">
                                        <button class="btn btn-warning btn sweet-success-cancel">Sweet Confirm Or Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Image Message</h4>
                                <div class="card-content">
                                    <div class="sweetalert m-t-30">
                                        <button class="btn btn-info btn sweet-image-message">Sweet Image Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet HTML</h4>
                                <div class="card-content">
                                    <div class="sweetalert m-t-30">
                                        <button class="btn btn-primary btn sweet-html">Sweet HTML</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Auto Close</h4>
                                <div class="card-content">
                                    <div class="sweetalert m-t-30">
                                        <button class="btn btn-danger btn sweet-auto">Sweet Auto Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Prompt</h4>
                                <div class="card-content">
                                    <div class="sweetalert m-t-30">
                                        <button class="btn btn-success btn sweet-prompt">Sweet Prompt</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Ajax</h4>
                                <div class="card-content"></div>
                                <div class="sweetalert m-t-15">
                                    <button class="btn btn-info btn sweet-ajax">Sweet Ajax</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                 <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Upcoming Appointment</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                 <th>Sr.No</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                 <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                  <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                                  <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                                  <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                           
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <th>Sr.No</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                  <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
    @endsection('content')
    @section('script')
    <script src="/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
    @section('script')


        <!--**********************************
            Footer start
        ***********************************-->
       
        <!--**********************************
            Footer end
        ***********************************-->
   