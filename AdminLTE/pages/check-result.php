<?php
  include_once("myclass.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Check Result</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
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
            <h1>Check Result</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Check Result</li>
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
          
         
          <!-- /.card-header -->
          <div class="card-body">
            <!-- <form action="" id="registerStudent" class="row"> -->
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label for="">Select Student</label>
                  <select class="form-control select2bs4" style="width: 100%;" placeholder="Select Guardian">
                  <option disabled selected value="Select Guardian">...Select Student</option>
                  <?php 
                      $i=1; $sql = $con->query("SELECT * FROM  students");
                      while($rows = mysqli_fetch_assoc($sql)){ 
                        echo '<option value="'.$rows['firstname'].' '.$rows['lastname'].' '.$rows['othername'].'">'.$rows['firstname'].' '.$rows['lastname'].' '.$rows['othername'].'</option>';

                    }?>
                  </select>
                </div>
                <!-- /.form-group -->
                <!-- /.form-group -->
              </div>
             <div class="col">
                <button class="btn btn-secondary float-right">Check Result</button>
             </div>
              <!-- /.col -->
              
              
              
               
                <!-- /.form-group -->
              </div>
              
              <!-- /.col -->
            </div>
           
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
</body>
</html>
