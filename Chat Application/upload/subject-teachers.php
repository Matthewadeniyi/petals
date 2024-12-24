<?php
include("myclass.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Courses</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
 
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Dashboard/Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
       
        </a>
      </li>
    </ul>
  </nav>
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
            <h1>Course Lecturar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Course Lecturar</li>
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
                               Course 
                            </h3>
                            <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#addStaffModal"> Assign Course</button>
                        </div>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                           <th colspan="12">sn</th>
                                    <th colspan="12">Name</th>
                                    <th colspan="12">Course</th>
                                    <th colspan="12">Level</th>
                                    </tr>
                                </thead>
                                <tbody id="staff_list_body">

                                    <?php $i=1; $sql = $con->query("SELECT * FROM  cours");
                                        while($rows = mysqli_fetch_assoc($sql)){ ?>

                                             <tr>
                                         <td colspan="12"><?=$i++ ?></td>
                                          <td colspan="12"><?=$rows['name'] ?></td>
                                         <td colspan="12"><?=$rows['topic'] ?></td>
                                         <td colspan="12"><?=$rows['level'] ?></td>
                                          
                                           
                                           
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
                    <p class="modal-title text-bold">Assign Course</p>
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
                            <label>Level</label>
                            <select type="text" name="level" class="form-control" placeholder="Level">
                            <?php $i=1; $sql = $con->query("SELECT * FROM arm");
                            while($rows = $sql->fetch_assoc()){
                              echo '<option value="'.$rows['sn'].'">'.$rows['level'].'</option>';
                            }
                          ?>
                        </select>
                        </div>
                        

                        <div class="col-md-6 form-group">
                            <label>Course Assign</label>
                            <select name="topic" class="form-control select2bs4" style="width: 100%;" >
                                <option selected disabled>Select Course</option>
                                 <?php $i=1; $sql = $con->query("SELECT * FROM subject");
                            while($rows = $sql->fetch_assoc()){
                              echo '<option value="'.$rows['sn'].'">'.$rows['subject'].'</option>';
                            }
                          ?>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <button type="submit" class="btn btn-secondary float-right addStaffS " name="assignCourse">Assign Course</button>
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
<!-- Ion Slider -->
<script src="../plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
<!-- Bootstrap slider -->
<script src="../plugins/bootstrap-slider/bootstrap-slider.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    /* BOOTSTRAP SLIDER */
    $('.slider').bootstrapSlider()

    /* ION SLIDER */
    $('#range_1').ionRangeSlider({
      min     : 0,
      max     : 5000,
      from    : 1000,
      to      : 4000,
      type    : 'double',
      step    : 1,
      prefix  : '$',
      prettify: false,
      hasGrid : true
    })
    $('#range_2').ionRangeSlider()

    $('#range_5').ionRangeSlider({
      min     : 0,
      max     : 10,
      type    : 'single',
      step    : 0.1,
      postfix : ' mm',
      prettify: false,
      hasGrid : true
    })
    $('#range_6').ionRangeSlider({
      min     : -50,
      max     : 50,
      from    : 0,
      type    : 'single',
      step    : 1,
      postfix : '°',
      prettify: false,
      hasGrid : true
    })

    $('#range_4').ionRangeSlider({
      type      : 'single',
      step      : 100,
      postfix   : ' light years',
      from      : 55000,
      hideMinMax: true,
      hideFromTo: false
    })
    $('#range_3').ionRangeSlider({
      type    : 'double',
      postfix : ' miles',
      step    : 10000,
      from    : 25000000,
      to      : 35000000,
      onChange: function (obj) {
        var t = ''
        for (var prop in obj) {
          t += prop + ': ' + obj[prop] + '\r\n'
        }
        $('#result').html(t)
      },
      onLoad  : function (obj) {
        //
      }
    })
  })
</script>
</body>
</html>
