<?php 
    require_once("myclass.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Upload Result</title>

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
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
   
  <!-- Preloader -->
  <?php include ('nav.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Student Result</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Result</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-secondary card-outline">
                            <div class="card-body">
                                <form id="startResult" method="POST">
                                    <div class="form-group">
                                        <label>Select Class</label>
                                        <select name="class" id="program" class="form-control select2bs4">
                                        <option disabled selected >Select Class</option>
                                    <?php   $i=1; $sql = $con->query("SELECT * FROM class");
                                        while ($rows = $sql->fetch_assoc()) {
                                        echo '<option value="'.$rows['sn'].'">'.$rows['category'].'</option>';
                                        }
                                        ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Subject</label>
                                        <select name="subject" id="program" class="form-control select2bs4">
                                        <option disabled selected>Select Subject</option>
                                            <?php   $i=1; $sql = $con->query("SELECT * FROM subject");
                                                while ($rows = $sql->fetch_assoc()) {
                                                echo '<option value="'.$rows['sn'].'">'.$rows['subject'].'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-secondary float-right startResult" type="submit" >Start Result</button>
                                    </div>
                                    <input type="hidden" id="setup">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title text-bold">
                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                            <span class="t_text">Upload Result</span>
                        </h3>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <form action="" method="post">

                                    
                                    <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Student Name</th>
                                                <th class="ca1">CA1</th>
                                                <th class="ca2">CA2</th>
                                                <th class="exam">Exam</th>
                                                
                                            
                                            </tr>
                                        </thead>
                                        <tbody id="result_body">
                                            <?php 
                                                if (isset($_POST['class'])){
                                                    $class = $_POST['class'];
                                                    $subject = $_POST['subject'];

                                                    $i = 1;
                                                    $sql = $con->query("SELECT * FROM students WHERE class = '$class' ");

                                                    while($rows = mysqli_fetch_assoc($sql)){
                                                        ?>
                                                            <tr>
                                                                <th scope="row"><?= $i++ ?></th>
                                                                <td><a href="#" ><?=$rows['firstname']?> <?= $rows['lastname'] ?> <input type="hidden" name= "studentid[]" value="<?=$rows['sn'] ?>" required></a></td>
                                                            

                                                                <td><input type = "number" name="ca1[]" min="0" max="20" class="form-control" required></td>
                                                                <td><input type = "number" name="ca2[]" min="0" max="20" class="form-control" required></td>
                                                                <td><input type = "number" name="exam[]" min="0" max="80" class="form-control" required></td>
                                                            </tr>
                                                <?php }
                                                } ?>
                                            
                                        
                                        </tbody>
                                        <tr>

                                        
                                        </tr>
                                    </table>
                                    <input type="text" name="class" value="<?= @$class ?>" class="form-control">
                                    <input type="text" name="subject" value="<?= @$subject ?>" class="form-control">
                                    <div class="form-group">
                                                    <button class="btn btn-secondary float-right startResult" type="submit" style="width:100%;" name="UploadResult">Upload Result</button>
                                                </div>
                                </div>
                            </form>
                        <div id="page_links">

                        </div>
                    </div>
                </div>

            </div>

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
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
</body>
</html>
