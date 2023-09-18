<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manage Promotions</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
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
            <h1>Manage Promotions</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Promotions</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <!-- Row -->
       <div class="row">
          
                <div class="col-md-6 col-12">
                       
                        <!-- second column -->
                        <div class="card card-secondary card-outline">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title ">
                                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                                    Recently Linked Wallet
                                </h3>
                            </div>
                        </div>
                        <div class="card-body p-1">
                            <div class="table-responsive">
                                <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Class</th>
                                            <th>Student</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="category_list_body">
                                        <tr>
                                            <td>1</td>
                                            <td>senior 2</td>
                                            <td>7</td>
                                            <td>
                                                <a href="#">Manage</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>ss1</td>
                                            <td>8</td>
                                            <td>
                                                <a href="#">Manage</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>ss3</td>
                                            <td>8</td>
                                            <td>
                                                <a href="#">Manage</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                    
                </div>
                <div class="col-md-6 col-12">

                       
                        <!-- second column -->
                        <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title ">
                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                                Student
                            </h3>
                        </div>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" name="" id="">
                                        </th>
                                        <th>Student</th>
                                        <th>Gender</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="arm_list_body">
                                    <tr>
                                        <!-- <td colspan="12"><div class="text-center"> <span class="spinner-border spinner-border-sm" aria-hidden="true"></span> <i>Loading Arms ...</i> </div></td> -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                    </div>
       </div>
       
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- SELECT2 EXAMPLE -->
       
        <!-- /.card -->

        <!-- /.card -->

      
        <!-- /.row -->
      
        <!-- /.row -->
       
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
