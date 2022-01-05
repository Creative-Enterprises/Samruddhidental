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
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Appointment Date</th>
                                                <th>Appointment Time</th>
                                                <th>Services</th>
                                                 <th>Messages</th>
                                                <th>Created At</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($apt as $a)
                                            <tr>
                                                <td>1</td>
                                                  <td>  <button type="button" class="btn mb-1 btn-success delete">Seccess <span class="btn-icon-right"><i class="fa fa-check"></i></span>

                                                </button>
                                                  <button type="button" class="btn mb-1 btn-success  ">Accept <span class="btn-icon-right"><i class="fa fa-check"></i></span>
                                    </button><button type="button" class="btn mb-1 btn-primary " data-toggle="modal" data-target=".bd-example-modal-lg">View <span class="btn-icon-right"><i class="fa fa-eye"></i></span>
                                    </button> <button type="button" class="btn mb-1 btn-danger delete">Remove <span class="btn-icon-right"><i class="fa fa-close"></i></span>
                                    </button></td>
                                                <td>{{$a->name}}</td>
                                                <td>{{$a->phone}}</td>
                                                <td>{{$a->email}}</td>
                                                <td>{{$a->appointment_date}}</td>
                                                <td>{{$a->appointment_time}}</td>
                                                <td>{{$a->services}}</td>
                                                <td>{{$a->message}}</td>
                                                <td>{{$a->created_at}}</td>


                                            </tr>
                                       @endforeach

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Sr.No</th>
                                                  <th>Status</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Appointment Date</th>
                                                <th>Appointment Time</th>
                                                <th>Services</th>
                                                 <th>Messages</th>
                                                <th>Created At</th>


                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
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
