<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Broad-Sheet</title>

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
            <h1 class="m-0">Broad Sheet</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Broad Sheet</li>
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
                    <div class="col-md-4">
                        <div class="card card-secondary card-outline">
                            <div class="card-body">
                                <form id="loadSheet">
                                    <div class="form-group">
                                        <label>Select Programme</label>
                                        <select name="program" id="program" class="form-control select2bs4">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-secondary float-right loadSheet">View Sheet</button>
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
                            <span class="t_text">Broad sheet</span>
                        </h3>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                    <h3 class="text-center">El-SHADDAI INTERNATIONAL GROUP OF SCHOOLS,ADA</h3>
                                    <h5 class="text-center">TERMLY CONTINUOUS ASSESMENT DOSSIER</h5>
                                    <h6 class="text-center">ThirdTerm,2021/2022 ACADEMIC SESSION</h6>
                                    </tr>
                                    <tr>
                                        <th colspan="3" class="text-center">NAME:</th>
                                        <th colspan="3" class="text-center"> Registration NO: </th>
                                        <th colspan="2" class="text-center">RESULT ID:</th>
                                        <th colspan="2" class="text-center">CLASS:</th>
                                        <th colspan="2" class="text-center">GENDER:MALE</th>
                                    </tr>
                                </thead>
                                <tbody id="result_body">
                                    <tr>
                                            <th>Subjects</th>
                                            <th>CA1</th>
                                            <th>CA2</th>
                                            <th>CA3</th>
                                            <th>Exam</th>
                                            <th>Term Total</th>
                                            <th>Last Term</th>
                                            <th>Total</th>
                                            <th>Class Average</th>
                                            <th>Grade</th>
                                            <th>Remark</th>
                                    </tr>
                                    <tr>
                                            <th>Mathematics</th>
                                            <th>20</th>
                                            <th>10</th>
                                            <th>15</th>
                                            <th>60</th>
                                            <th>80</th>
                                            <th>70</th>
                                            <th>100</th>
                                            <th>50.5</th>
                                            <th>C</th>
                                            <th>Pass</th>
                                    </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                            <th colspan="3">Subjects:</th>
                                            <th colspan="3">Total Score:</th>
                                            <th colspan="2">Average:</th>
                                            <th colspan="2">Class Average:</th>
                                            <th colspan="2">No in Class:</th>
                                            
                                </tr>
                                <tr>
                                    
                                            <td colspan="12">
                                                <div style="display:flex; font-weight:bold;">
                                                    <p>Vacation Date: <br>Teacher's Comment</p>
                                                    <p style="margin-left:700px;">Resumption Date: <br> Principal's Comment</p>
                                                </div>
                                            </td>
                                           
                                            
                                            
                                </tr>
                                </tfoot>
                            </table>
                        </div>

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
