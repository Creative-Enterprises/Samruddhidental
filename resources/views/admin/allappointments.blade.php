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
 <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Todays Appointments</a></li>
                    </ol>
                </div>
            </div>
            
            
                 <div class="container-fluid">
                      <div class="row">
                    <div class="col-3">
                        <div class="card card-widget">
                            <div class="card-body gradient-3">
                                <div class="media">
                                    <span class="card-widget__icon"><i class="fa fa-times"></i></span>
                                    <div class="media-body">
                                        <h2 class="card-widget__title">3</h2>
                                        <h5 class="card-widget__subtitle">Unapproved</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card card-widget">
                            <div class="card-body gradient-4">
                                <div class="media">
                                    <span class="card-widget__icon"><i class="icon-check"></i></span>
                                    <div class="media-body">
                                        <h2 class="card-widget__title">3</h2>
                                        <h5 class="card-widget__subtitle">Approved</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <h4 class="card-title">3 Unapproved Appointments</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                 <th>Sr.No</th>
                                                  <th>Status</th>
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
                                                  <td>  <button type="button" class="btn mb-1 btn-success delete">Seccess <span class="btn-icon-right"><i class="fa fa-check"></i></span>
                                    </button>
                                                  <button type="button" class="btn mb-1 btn-success  ">Accept <span class="btn-icon-right"><i class="fa fa-check"></i></span>
                                    </button><button type="button" class="btn mb-1 btn-primary " data-toggle="modal" data-target=".bd-example-modal-lg">View <span class="btn-icon-right"><i class="fa fa-eye"></i></span>
                                    </button> <button type="button" class="btn mb-1 btn-danger delete">Remove <span class="btn-icon-right"><i class="fa fa-close"></i></span>
                                    </button></td>
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
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <th>Sr.No</th>
                                                 <th>Status</th>
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
                <div class="container-fluid">
                <div class="row">
                     <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Modal body text goes here.</div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">3 Approved Appointments</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                 <th>Sr.No</th>
                                                  <th>Status</th>
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
                                                  <td> <button type="button" class="btn mb-1 btn-warning ">Block <span class="btn-icon-right"><i class="fa fa-delete"></i></span>
                                    </button><button type="button" class="btn mb-1 btn-secondary ">View <span class="btn-icon-right"><i class="fa fa-eye"></i></span>
                                    </button> <button type="button" class="btn mb-1 btn-danger ">Remove <span class="btn-icon-right"><i class="fa fa-close"></i></span>
                                    </button>
                                      <a type="button" class="btn btn-danger waves-effect waves-light delete" > <i class="mdi mdi-delete"></i></a>
                                    </td>
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
                                           
                                           
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <th>Sr.No</th>
                                                 <th>Status</th>
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
     <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
  <script>

console.log("Hello world!");

</script>

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
   
    @section('script')


        <!--**********************************
            Footer start
        ***********************************-->
       
        <!--**********************************
            Footer end
        ***********************************-->
   