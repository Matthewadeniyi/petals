<?php 
include_once("myclass.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Subjects</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- AdminLTE css -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
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
            <h1>Subjects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Subjects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      <div class="row">
            <div class="col-md-6 col-12">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-plus-square"></i>
                            Add Subject
                        </h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" id="addSubject">
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="subject" class="form-control" placeholder="Enter Subject name i.e Mathematics, Biology" required>
                            </div>
                            <div class="form-group mb-0 float-right">
                                <button class="btn btn-secondary addSubject" name="AddSubject">Add Subject</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                            Subject List
                        </h3>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>
                                                  <button class="btn float-right">
                                                  <i class="fas fa-edit"></i>
                                                  </button>
                                        </th>                                    
                                    </tr>
                                </thead>
                                <tbody id="subject_list_body">
                                    <tr>
                                        
                                        <?php 
                                           $i=1; $sql = $con->query("SELECT * FROM  subject");
                                           while($rows = mysqli_fetch_assoc($sql)){ ?>
                                               <tr>

                                                 <td><?=$rows['subject'] ?></td>
                                               
                                               
                                                 <td>
                                                   <button class="btn float-right">
                                                   <i class="fas fa-edit"></i>
                                                   </button>
                                                 </td>
                                               </tr>
                                              
                                           <?php } ?>
                                        
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
      </div>
      <!-- /.timeline -->

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
