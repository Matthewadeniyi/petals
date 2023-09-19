<?php
  require_once("myclass.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Set School fee</title>

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
            <h1>Set Fee</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Set Fee</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-secondary card-outline">
          
          <div class="card-header">
            <h3 class="card-title ">
              <i class="fa fa-plus-square" aria-hidden="true"></i>
              Set School Fee
            </h3>
            
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <!-- <form action="" id="registerStudent" class="row"> -->
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Select class</label>
                  <select class="form-control select2bs4" style="width: 100%;" placeholder="Select Guardian">
                  <option disabled selected value="Select Guardian">Select Class</option>
                      <?php   $i=1; $sql = $con->query("SELECT * FROM class");
                      while ($rows = $sql->fetch_assoc()) {
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
                  <label for="">Select Fee Category</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                  <option disabled selected value="Prospective Class">Prospective Class</option>
                    <option></option>
                    <option></option>
                    <option ></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                  </select>
                </div>
                <!-- /.form-group -->
                <!-- /.form-group -->
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Input Amount</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Fee Amount" required>
                </div>
                <!-- /.form-group -->
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              
              <div class="col-12">

                  <div class="form-group d-flex justify-content-end">
   
                     <button class="btn btn-secondary">Set Fee</button>
                 </div>
              </div>
               
                <!-- /.form-group -->
              </div>
              
              <!-- /.col -->
            </div>
            
            
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        <div class="card card-secondary card-outline">
          
          <div class="card-header">
            <div class="row ">
                <div class="col-md-4 col-12">
                    <h3 class="card-title ">
                      <i class="fa fa-plus-square" aria-hidden="true"></i>
                      Student Fee
                    </h3>
                </div>
                <div class="col-md-1 col-12 d-flex justify-content-end">
                     <select id="session_id" class="form-control select2bs4">
                        <option selected="selected" disabled>Class</option>
                         <option></option>
                        <option></option>
                      </select>
                </div>
                <div class="col-md-1 col-12 d-flex justify-content-end">
                     <select id="session_id" class="form-control select2bs4">
                        <option selected="selected" disabled>Fee/option>
                         <option></option>
                        <option>4</option>
                      </select>
                </div>
            </div>
            
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <!-- <form action="" id="registerStudent" class="row"> -->
            <div class="row">
            <div class="table-responsive">
                                <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Amount</th>
                                            <th>Discount</th>
                                            <th>Total</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                   
                                </table>
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
