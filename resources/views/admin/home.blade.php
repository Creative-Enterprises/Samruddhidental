@extends('admin.master')

        <!--**********************************
            Nav header end
        ***********************************-->
@section('css')
 <link href="./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
     <link href="./plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet">

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
                            <a href="#rem"><div class="card-body">

                                <h3 class="card-title text-white">Todays Reamaining</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">10</h2>
                                    <p class="text-white mb-0"><?php echo date('l, F j, Y'); ?></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-calender"></i></span>
                            </div></a>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                             <a href="/allappointments">
                            <div class="card-body">
                                <h3 class="card-title text-white">Todays Total</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">20</h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                            </a>
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
                                    <span class="display-5"><i class="icon-check gradient-4-text"></i></span>
                                    <h2 class="mt-3">10 Reviews</h2>
                                    <p>Currently active</p><a href="/allreviews" class="btn gradient-4 btn-lg border-0 btn-rounded px-5">Add
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
 <img alt="" src="images/users/4.jpg" style="width:465px;height:300px;">                                    <h4 class="card-widget__title text-dark mt-3">Patient Name</h4>
                                    <p class="text-muted">Patient Age/Gender</p>
                                     <div class="sweetalert m-t-30">
                                                                                
                                         <button type="button" class="btn mb-1 btn-success delete">Accept <span class="btn-icon-right"><i class="fa fa-check"></i></span>
                                    </button>
                                                                       <!--<button type="button" class="btn mb-1 btn-rounded btn-success">Accept</button>-->
                                                                       <!--        <button type="button" class="btn mb-1 btn-rounded btn-danger">Reject</button>-->
                                                                                 <button type="button" class="btn mb-1 btn-danger sweet-confirm">Remove <span class="btn-icon-right"><i class="fa fa-close"></i></span>
                                    </button>
                                    </div>
                                    
                                </div>
                                  <div class="card">
                            <div class="card-body">
                                <div class="basic-list-group">
                                    <div class="row">
                                        <div class="col-xl-4 col-md-4 col-sm-3 mb-4 mb-sm-0">
                                            <div class="list-group" id="list-tab" role="tablist"><a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">History</a> <a class="list-group-item list-group-item-action" id="list-profile-list"
                                                    data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a> <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab"
                                                    aria-controls="messages">Messages</a>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-8 col-md-8 col-sm-9">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="list-home">
                                                      <p>Last Visited On 21 Apr 2020 Total 3 times Checked 
                                                   </p>                 

                                                </div>
                                                <div class="tab-pane fade" id="list-profile" role="tabpanel">
                                                     <h4>About Me</h4>
                                <p class="text-muted">Hi, I'm Pikamy, has been the industry standard dummy text ever since the 1500s.</p>
                                <ul class="card-profile__info">
                                      <li><strong class="text-dark mr-4">Gender</strong> <span>Female</span></li>
                                     <li><strong class="text-dark mr-4">Age</strong> <span>27</span></li>
                                    <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>01793931609</span></li>
                                    <li class="mb-1"><strong class="text-dark mr-4">Whatsapp No.</strong> <span>01793931609</span></li>
                                    <li><strong class="text-dark mr-4">Email</strong> <span>name@domain.com</span></li>
                                </ul>
                                                  
                                                </div>
                                                <div class="tab-pane fade" id="list-messages">
                                                                                    <form action="#" class="form-profile">
                                    <div class="form-group">
                                        <textarea class="form-control" name="textarea" id="textarea" cols="30" rows="2" placeholder="Please Visit Samruddhi Dental Clinic your Appointment is at 9am please arrrive at time -Team Samruddhi Dental Aurangabad" value="Please Visit Samruddhi Dental Clinic your Appointment is at 9am please arrrive at time -Team Samruddhi Dental Aurangabad"></textarea>
                                    </div>
                                    <div class="d-flex align-items-center">
                                       
                                         <button class="btn btn-success px-3 ml-4"><a href="https://wa.me/918830233538/?text=Please Visit Samruddhi Dental Clinic your Appointment is at 9am please arrrive at time -Team Samruddhi Dental Aurangabad" target="_blank"><i class="fa fa-whatsapp"></i> Send by Whatapps</a>

                                       </button>
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
                                            <p class="">3 Times Visited</p>
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

                  
                  
                </div>


                
                
            </div>

            
                 <div class="container-fluid">
                <div class="row" id="rem">
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
    <script>
              
                $(document).ready(function() {
                jQuery('.delete').click(function (e) {
                    e.preventDefault();
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "This " + $(this).attr('data-val') + " Deleted Permentanly",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, Delete '+ $(this).attr('rel')
                    }).then((result) => {
                        if (result.value) {

                            $.ajax({
                                type: 'GET',
                                url: '/deleteGallary/' + $(this).attr('rel'),
                                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                success: function (res) {
                                    Swal.fire(
                                        'Delete!',
                                        'Gallery is Delete Successfully.',
                                        'success'
                                    );
                                    setTimeout(function () {
                                        window.location.href = "/addgallary";
                                    }, 2000);


                                }
                            });


                        }
                    })
                });
         
            });
                    
                    
                  
 </script>
            <script src="./plugins/sweet-alert2/sweetalert2.min.js"></script>
    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
    @section('script')


        <!--**********************************
            Footer start
        ***********************************-->
       
        <!--**********************************
            Footer end
        ***********************************-->
   