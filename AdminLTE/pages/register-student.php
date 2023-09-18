<?php
include("myclass.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
   <!-- sweet alerts -->
  <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- toaster -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">

</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
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
            <h1>Register Student</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          
          <div class="card-header">
            <h3 class="card-title ">
              <i class="fa fa-plus-square" aria-hidden="true"></i>
              Register Student
            </h3>
            
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form method="POST" id="registerStudent">

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Select Guardian<span class="text-danger">*</span></label>
                      <select class="form-control select2bs4" name="guardian" style="width: 100%;" placeholder="Select Guardian">
                      <option disabled selected value="Select Guardian">Select Guardian</option>
                      <?php   $i=1; $sql = $con->query("SELECT * FROM guardian");
                      while ($rows = $sql->fetch_assoc()) {
                        echo '<option value="'.$rows['sn'].'">'.$rows['name'].'</option>';
                      }
                      ?>
                      </select>
                    </div>
                    <!-- /.form-group -->
                    <!-- /.form-group -->
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Prospective Class<span class="text-danger">*</span></label>
                      <select class="form-control select2bs4" name="class" style="width: 100%;">
                      <option disabled selected value="Select Class">Select Class</option>

                          <?php $i=1; $sql = $con->query("SELECT * FROM class");
                            while($rows = $sql->fetch_assoc()){

                              echo '<option value="'.$rows['sn'].'">'.$rows['category'].'</option>';

                            }
                          ?>
                          
                      </select>
                    </div>
                    <!-- /.form-group -->
                    <!-- /.form-group -->
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Class Arm<span class="text-danger">*</span></label>
                      <select class="form-control select2bs4" name="arm" style="width: 100%;">
                      <option disabled selected value="Class Arm">Class Arm</option>
                            <?php $i=1; $sql = $con->query("SELECT * FROM arm");
                              while($rows = $sql->fetch_assoc()){

                                echo '<option value="'.$rows['sn'].'">'.$rows['arm'].'</option>';

                              }
                            ?>
                      </select>
                    </div>
                    <!-- /.form-group -->
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  
                  
                  
                  
                    <!-- /.form-group -->
                  </div>
                  
                  <!-- /.col -->
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <div class="form-group">
                      <label for="">First Name<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First Name" name="firstname" >
                    </div>
                    </div>
                    <!-- /.form-group -->
                    <!-- /.form-group -->
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                    <div class="form-group">
                      <label for="">Last Name<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last Name" name="lastname" >
                    </div>
                    </div>
                    <!-- /.form-group -->
                    <!-- /.form-group -->
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Other Names</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="other Name" name="othername" >
                    </div>
                    <!-- /.form-group -->
                    <!-- /.form-group -->
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Gender<span class="text-danger">*</span></label>
                      <select class="form-control select2bs4" name="gender" style="width: 100%;">
                      <option disabled selected value="Select Gender</option>
                        <option></option>">Select Gender</option>
                        <option>Male</option>
                        <option>female</option>
                      </select>
                    </div>
                    <!-- /.form-group -->
                    <!-- /.form-group -->
                  
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <div class="row d-flex justify-content-between">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Reg Number</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="regnumber" placeholder="Choose Registration Number" >
                      </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">

                      <button class="btn btn-secondary" name="RegStudent">Register Student</button>
                  </div>
                </div>

            </form>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <br>

        <!-- SELECT2 EXAMPLE -->
        
        <!-- /.row -->
      </div>
    </section>
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
<!-- sweeet alert -->
<script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- toaster -->
<script src="../plugins/toastr/toastr.min.js"></script>
<script>
  <?= $pro->Alert() ?>
</script>


</body>
</html>
