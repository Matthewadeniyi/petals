<?php

require_once("myclass.php");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="f9b3rPKeoiIjzU3uCeYG3gKEWkcYDupFOqJcEGeh">
    <title>Add Staff
</title>
   <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">

    <style>
        .profile_pics {
            width: 50px;
            height: 50px;
        }

        .object-cover {
            object-fit: cover;
        }

        .profile-user-img {
            width: 100px;
            height: 100px;
        }

    </style>


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        


<?php 

    include("nav.php");

?>

        
        <div class="content-wrapper">
            <div class="littleAlert"></div>
            
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Staff</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Add Staff</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title ">
                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                                Staff List
                            </h3>
                            <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#addStaffModal"> Add Staff</button>
                        </div>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                           <th colspan="12">sn</th>
                                    <th colspan="12">name</th>
                                    <th colspan="12">email</th>
                                    <th colspan="12">phone</th>
                                    <th colspan="12">role</th>
                                    </tr>
                                </thead>
                                <tbody id="staff_list_body">

                                    <?php 
                                    $i=1; $sql = $con->query("SELECT * FROM  staffs");
                                        while($rows = mysqli_fetch_assoc($sql)){ ?>

                                             <tr>
                                         <td colspan="12"><?=$i++ ?></td>
                                          <td colspan="12"><?=$rows['name'] ?></td>
                                         <td colspan="12"><?=$rows['email'] ?></td>
                                         <td colspan="12"><?=$rows['phone'] ?></td>
                                          <td colspan="12"><?= $pro->staffRole($rows['role'] )?></td>
                                           
                                           
                                    </tr>
                                       <?php }

                                    ?>

                                </tbody>
                            </table>
                        </div>

                        <div id="page_links">

                        </div>
                    </div>

                </div>


            </div>

        </div>
    </section>


    <div class="modal fade" id="addStaffModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold">Add Staff </p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" class="row" id="addStaffForm">
                        <div class="col-md-6 form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Thomas Gideon">
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="staff@schoolpetal.com">
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="09000000000">
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Role</label>
                            <select name="role" class="form-control select2bs4" style="width: 100%;" >
                                <option selected disabled>Select Role</option>
                                <option value="8">Accountant</option>
                                <option value="9">Administrator</option>
                                <option value="7">Teacher</option>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <button type="submit" class="btn btn-secondary float-right addStaff " name="Addstaff">Add Staff</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



    <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>


    <script>
        // $(function () {
            $.ajaxSetup({
                headers: {
                    'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYjBiNjRlNWJiNDI1NDc3ZjU4ODAwMzZmYWNiZjgyY2Y1NjZhOTJiMjc3MDBiNDQwZTNmMmFkNzI1YTIwOWFhZGMyOGZiMjQwYWNhMGIxYjgiLCJpYXQiOjE2OTIwMTM1MTEuNzIwODgzLCJuYmYiOjE2OTIwMTM1MTEuNzIwODkxLCJleHAiOjE3MjM2MzU5MTEuNzAzNjQ1LCJzdWIiOiIyMCIsInNjb3BlcyI6W119.CtTj7wZyLKMc6Tbf4iF1-7qXWvKdx4RtL6RLjMmWhsS044iod_FKYHnUsM7RiBa3uK-rCTCbY5pS-o3yWimG3hI8kjtWGoz3nOYBWKXYwctjWQprKNYXyzYpAtTnHrNqgdzs-nxMQjx7-sWOTrvirwHxbinPnNgIBeji9kad-sdI7M7EMQz9_hA1jKsPZ6uPTiELenPyA-IIYPFALyWLFFa2b76RXNAXBM1zxXeLG9pW5uG0lrIcUw5XD90kCgtFLKomL47I30Mrleeie45ND7Qn8y8p6vZ_gTlYUei0yQ9pxtOIcXPaYdDZn9qSTy-t2DIJycKfhmuH-IVSONIke_MljAdoZKlG8WPibv13rwkJn-sopT59hikH0AbHTrhULeX8QrSuzcvjxRD42jNQgjU4ZDF7CArtDd1FGjXpxuY8ZLj5HmsKhzSGRQWBQhZCZCbCyVUg4nZ251dHv63IOl3v4OXUXZiypC2D7kwSSxBtuxJN0cwEeVx1WcB2XDnL3jdcS1FBry5clNosRs_o-sVm5cdi5wOPHBTasaWnunZ_NpLKhS0dCczCGgcGB_AbLzWFqB7M2pq2M5LtP_kFvNF2VZwQbGEAmW4H3CwLnfYoyyRWcbZjp1vuHKYglBCEOTqxIdpX9HJZhpbXIoY8mugIgUA44kUFkrp8R-GZxHA`
                }
            });


            function fetchStaffSummaryInfo()
            {
                page = '1'
                $.ajax({
                    method: 'get',
                    url: api_url+'get_all_staffs?page='+page
                }).done(function (res) {
                    body = $('#staff_list_body')
                    body.html(``);


                    res.data.data.map((staff, index) => {
                        body.append(`
                            <tr>
                                <td>${(index + 1) + ((page-1) * 100)}</td>
                                <td>${staff.name}</td>
                                <td>${staff.email}</td>
                                <td>${staff.phone}</td>
                                <td>${staff_role(staff.role)}</td>
                                <td>
                                    <div class="float-right">
                                        <a href="/control/staff_profile/${staff.id}" > Profile <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </a>
                                    </div>
                                </td>
                            </tr>
                        `);
                    })

                    link_body = $('#page_links')
                    link_body.html(dropPaginatedPages(res.data.links));



                }).fail(function(res) {
                    console.log(res);
                });
            }


            fetchStaffSummaryInfo();


            setTimeout(() => {
                $("#example1").DataTable({
                    "responsive": true, "lengthChange": false, "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print"],
                    "paging": false,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": true,
                    "responsive": true,
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            }, 2500);


            $('#addStaffForm').on('submit', function(e) {
                e.preventDefault();
                form = $(this)

                name = $(form).find('input[name="name"]').val();
                email = $(form).find('input[name="email"]').val();
                phone = $(form).find('input[name="phone"]').val();
                role = $(form).find('select[name="role"]').val();

                if(!email || !phone || !name || !role){ littleAlert('All fields are required', 1); return }

                $.ajax({
                    method: 'post',
                    url: api_url+'add_staff',
                    data: {
                        name: name,
                        email: email,
                        phone: phone,
                        role: role
                    },
                    beforeSend:() => {
                        btnProcess('.addStaff', 'Add Staff', 'before');
                    }
                }).done(function (res) {
                    littleAlert(res.message);
                    btnProcess('.addStaff', 'Add Staff', 'after');
                    form[0].reset();
                    $('#addStaffModal').modal('hide');
                    fetchStaffSummaryInfo();
                }).fail(function (res) {
                    parseError(res.responseJSON);
                    btnProcess('.addStaff', 'Add Staff', 'after');
                });


            })

        // })
    </script>





        </div>

        <footer class="main-footer">
    <strong>Copyright &copy;  <b>SchoolPortal</b> </strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 2.5
    </div>
</footer>

 <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>

        <!-- <script>
            $(function() {
                $('.select2').select2()
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })
            })
        </script>

        <script>
            $(function() {
                var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
                function firstToast(icon="success", message='Done'){
                    Toast.fire({
                        icon: icon,
                        title: message
                    });
                }
            })
        </script> -->
</body>

</html>
