<?php
include_once("myclass.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>General Setup</title>

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
            <h1 class="m-0">General Setup</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">General Setup</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
       <!-- Row -->
            <div class="col-lg-6 col-12">
                    <div class="card card-secondary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-plus-square"></i>
                                Create Session
                            </h3>
                        </div>
                        <div class="card-body">
                                <form method='POST' id="create_new_session">
                                    <input name="term" type="hidden">
                                    <div class="form-group">
                                        <label for="">Session</label>
                                        <select id="session_id" name="session" class="form-control select2bs4">
                                            <option selected="selected" disabled>Choose Session</option>
                                            <?php 
                                                $i = -2;
                                               while($i <= 2){
                                                    $e = $i++;
                                                    $a = date('Y') + $e;
                                                    $b = $a + 1;
                                                    echo'<option>'.$a.'/'.$b.'</option>';                                           
                                                    }
                                            ?>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group mb-0 float-right">
                                        <button type="submit" name="Term"  class="btn btn-secondary create_session_btn">Create Session</button>
                                    </div>
                                </form>
                            
                        </div>
                    </div>

                    <div >
                        <div class="card card-secondary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                                    Recent Sessions
                                </h3>
                            </div>
                            <div class="table-responsive">
                                <table id="example1" class="table mb-0 table-bordered" >
                                    <thead>
                                        <tr>
                                            <th>Session</th>
                                            <th colspan="2">Session Info</th>
                                        </tr>
                                    </thead>
                                    <tbody id="session_body">
                                        <tr>
                                            <td>
                                           
                                            </td>
                                            <td>
                                                <table >
                                                    <thead class="table">
                                                        <th>T</th>
                                                        <th>Closes</th>
                                                        <th>Next-Term</th>
                                                        <th></th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>First-Term</td>
                                                            <td>null</td>
                                                            <td>null</td>
                                                            <td>null</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Second-Term</td>
                                                            <td>null</td>
                                                            <td>null</td>
                                                            <td>null</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Third-Term</td>
                                                            <td>null</td>
                                                            <td>null</td>
                                                            <td>null</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                       
                                       
                                    </tbody>
                                </table>
                            </div>
    
                        </div>
                    </div>

                </div>
                    
            </div>
            <div class="col-lg-6 col-12">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-edit"></i>
                            Edit School Info
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="" class="row"  method="POST">
                            <div class="col-md-12 form-group">
                                <label for="">School Name</label>
                                <input type="text" name="name" class="form-control" value="SchoolPetal International School">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">E-mail</label>
                                <!-- <input type="email" name="email" class="form-control" disabled value="ogbajigodwin@gmail.com"> -->
                              
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">Website</label>
                                <input type="url" name="website"class="form-control" placeholder="School website" value="">
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="">Phone Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="08150905504">
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="">Alternative Phone Number</label>
                                <input type="text" class="form-control" placeholder="Phone Number" value="">
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="">Motto</label>
                                <input type="text" name="motto" class="form-control" value="">
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="">Address</label>
                                <textarea name="address" id="" class="form-control" cols="3"></textarea>
                            </div>


                            <div class="form-group col-md-12 mb-0 ">
                                <button type="button"  name="" class="btn btn-secondary float-right">Update School Info</button>
                            </div>
                        </form>

                        <hr>
                        <b>Update School Logo</b>
                        <div>
                            <div class="mt-2 d-flex justify-content-center">
                                <img width="100%" src="https://apis.schoolpetal.com/assets/img/schools/8012145schoolpetal-international-school.jpg" alt="SchoolPetal Logo" class="brand-image img-circle elevation-3" style="opacity: .5">

                            </div>
                            <button class=" uploadSchoolPics btn btn-secondary btn-block mt-5">Upload New Photo</button>
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
