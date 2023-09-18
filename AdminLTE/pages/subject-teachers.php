<?php 
  include_once("myclass.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Subject</title>

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
            <h1>Subject Teachers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Subject Teacher</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
            <div class="col-md-12 col-12">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title ">
                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                                Subject Teachers List
                            </h3>
                            <div class="d-flex justify-content-end">
                                <button data-toggle="modal" data-target="#assignSubjectModal" class="btn btn-secondary float-right btn-sm">
                                    Assign Subject
                                </button>
                            </div>
                        </div>


                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Subject</th>
                                        <th>Class</th>
                                        <th>Teacher</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="sub_body">
                                    <tr>
                                        <!-- <td colspan="12">
                                            <div class="text-center">
                                                <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                                <i> Loading ... </i>
                                            </div>
                                        </td> -->
                                        <?php 
                                           $i=1; $sql = $con->query("SELECT * FROM  teachers");
                                           while($rows = mysqli_fetch_assoc($sql)){ ?>
                                               <tr>
                                                  <td><?=$i++ ?></td>
                                                  <td><?=$pro->sqLx('subject','sn',$rows['subject'],'subject') ?></td>
                                                  <td><?=$pro->sqLx('class','sn',$rows['class'],'category')?></td>
                                                  <td><?=$pro->sqlx('staff','sn',$rows['name'],'name') ?></td>
                                                 
                                                  <td>
                                                      <button class="btn btn-xs btn-danger remove_subject" data-id="122">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                      </button>
                                                      <a class="btn btn-xs btn-info" href="/control/class/broad-sheet/122"><i    class="fas fa-eye"></i> Results
                                                       </a>
                                                  </td>
                                               </tr>
                                              
                                           <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="page_links1">

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <div class="modal fade" id="assignSubjectModal">
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
                            <select type="text" name="name" class="form-control" placeholder="Level" required>
                            <?php   $i=1; $sql = $con->query("SELECT * FROM staff");
                              while ($rows = $sql->fetch_assoc()) {
                                echo '<option value="'.$rows['sn'].'">'.$rows['name'].'</option>';
                                }
                             ?>
                            
                        </select>                        </div>
                        <div class="col-md-6 form-group">
                            <label>Class</label>
                            <select type="text" name="class" class="form-control" placeholder="Level" required>
                            <?php   $i=1; $sql = $con->query("SELECT * FROM class");
                              while ($rows = $sql->fetch_assoc()) {
                                echo '<option value="'.$rows['sn'].'">'.$rows['category'].'</option>';
                                }
                             ?>
                            
                        </select>
                        </div>
                        

                        <div class="col-md-6 form-group">
                            <label>Subject</label>
                            <select name="subject" class="form-control select2bs4" style="width: 100%;" required >
                                <option selected disabled>Select Subject</option>
                                <?php   $i=1; $sql = $con->query("SELECT * FROM subject");
                              while ($rows = $sql->fetch_assoc()) {
                                echo '<option value="'.$rows['sn'].'">'.$rows['subject'].'</option>';
                                }
                             ?>
                                
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <button type="submit" class="btn btn-secondary float-right addStaffS " name="AddTeacher">Assign Subject</button>
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
