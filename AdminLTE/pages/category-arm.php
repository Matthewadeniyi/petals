<?php 
    include_once("myclass.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Category&Arm</title>

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
            <h1>Category&Arms</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category&Arms</li>
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
                        <div class="card card-secondary card-outline">
                            <div class="card-header">
                                <h3 class="card-title ">
                                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                                    Add Class Category
                                </h3>
                            </div>
                            <div class="card-body pb-0">
                                <form method="POST" id="createClassCategory">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <input type="text" name="category" class="form-control" name="category" placeholder="Enter Class Category i.e JSS, PRY, SSS">
                                    </div>
                                    <div class="form-group float-right">
                                        <button class="btn btn-secondary createClassCategory" name="CreateClass">Add Class</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- second column -->
                        <div class="card card-secondary card-outline">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title ">
                                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                                    Class Categories
                                </h3>
                            </div>
                        </div>
                        <div class="card-body p-1">
                            <div class="table-responsive">
                                <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Category</th>
                                        </tr>
                                    </thead>
                                    <tbody id="category_list_body">
                                        <tr>
                                        <?php 
                                            $i=1; $sql = $con->query("SELECT * FROM  class");
                                                while($rows = mysqli_fetch_assoc($sql)){ ?>

                                                    <tr>
                                                <td><?=$i++ ?></td>
                                                <td><?=$rows['category'] ?></td>
                                            </tr>
                                       <?php }?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                    
                </div>
                <div class="col-md-6 col-12">

                        <div class="card card-secondary card-outline">
                            <div class="card-header">
                                <h3 class="card-title ">
                                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                                    Add Class Arm
                                </h3>
                            </div>
                            <div class="card-body pb-0">
                                <form method="POST" id="createClassCategory">
                                    <div class="form-group">
                                        <label>Add Arm</label>
                                        <input type="text" name="arm" class="form-control" placeholder="Enter Class Arm i.e A,B,C">
                                    </div>
                                    <div class="form-group float-right">
                                        <button class="btn btn-secondary createClassCategory" name="CreateArm">Add Arm</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- second column -->
                        <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title ">
                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                                Class Arms
                            </h3>
                        </div>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Arm</th>
                                    </tr>
                                </thead>
                                <tbody id="arm_list_body">
                                    <tr>
                                    <?php 
                                    $i=1; $sql = $con->query("SELECT * FROM  arm");
                                        while($rows = mysqli_fetch_assoc($sql)){ ?>

                                             <tr>
                                         <td><?=$i++ ?></td>
                                          <td><?=$rows['arm'] ?></td>
                                    </tr>
                                       <?php }

                                    ?>
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
