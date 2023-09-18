<?php 
  include_once("myclass.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Staff</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <style>
    .profile-user-img {
            width: 50px;
            height: 50px;
        }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-footer-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include ('nav.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Staff</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Add Staff</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->


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
                                    $i=1; $sql = $con->query("SELECT * FROM  staff");
                                        while($rows = mysqli_fetch_assoc($sql)){ ?>

                                             <tr>
                                         <td colspan="12"><?=$i++ ?></td>
                                          <td colspan="12"><?=$rows['name'] ?></td>
                                         <td colspan="12"><?=$rows['email'] ?></td>
                                         <td colspan="12"><?=$rows['phone'] ?></td>
                                          <td colspan="12"><?=$rows['role'] ?></td>
                                          <td colspan="12"></td>
                                           
                                           
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
                            <input type="text" name="name" class="form-control" placeholder="Thomas Gideon"  >
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="staff@schoolpetal.com" >
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="09000000000" >
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Role</label>
                            <select name="role" class="form-control select2bs4" style="width: 100%;"  >
                                <option selected disabled>Select Role</option>
                                <option>Accountant</option>
                                <option>Administrator</option>
                                <option>Teacher</option>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <button type="submit" class="btn btn-secondary float-right addStaff " name="AddStaff">Add Staff</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include ('footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
