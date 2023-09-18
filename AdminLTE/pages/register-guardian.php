<?php 

  include_once("myclass.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Guardian</title>

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
            <h1>Guardians</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Guardians</li>
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
          
          <div class="card-header">
            <h3 class="card-title ">
              <i class="fa fa-plus-square" aria-hidden="true"></i>
              Register Guardian
            </h3>
            
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <form method="POST">

                    <div class="form-group">
                      <label for="">Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Guardians Name" required>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label for="">Phone Number</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="09000000000" name="phonenumber" required>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Home Address</label>
                          <input type="text" class="form-control" id="exampleInputEmail1"  name ="address"placeholder="Lekki,Nigeria" required>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label for="">State Of Origin</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Lagos" name ="state" required>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Email Address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="mail@gmail.com" required name="email">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label for="">L.G.A</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="ikeja" required name="lga">
                    </div>

                    <button class=" btn btn-secondary align-items-start text-left" name="RegGuardian">Register Guardian</button>
                    
                </form>
                <!-- /.form-group -->

                <!-- guardian information -->
                
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>

          <div class="card-body">
          <div class="row">
          <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title ">
                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                            Guardians List
                        </h3>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                              <div class="row">
                                <div class="col-sm-12 col-md-6">
                                  <div class="dt-buttons btn-group flex-wrap">
                                              <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button">
                                                <span>Copy</span>
                                            </button> 
                                            <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0"    aria-controls="example1" type="button">
                                              <span>CSV</span>
                                            </button> 
                                            <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button">
                                              <span>Excel</span>
                                            </button> 
                                            <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button">
                                              <span>PDF</span>
                                            </button> 
                                            <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button">
                                              <span>Print</span>
                                            </button> 
                                  </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                  <div id="example1_filter" class="dataTables_filter">

                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-sm-12">
                                  <table id="example1" class="table mb-0 table-bordered table-hover table-striped dataTable no-footer" role="grid" aria-describedby="example1_info">
                                   <thead>
                                    <!-- <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 80.1719px;">#</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 158.281px;">Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 155.469px;">Email</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 167.656px;">Phone</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 194.438px;">Address</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 59.9844px;"></th></tr> -->
                                    <tr>
                                        <th colspan="12">sn</th>
                                        <th colspan="12">name</th>
                                        <th colspan="12">address</th>
                                        <th colspan="12">email</th>
                                        <th colspan="12">phone</th>
                                        <th colspan="12">state</th>
                                        <th colspan="12">lga</th>
                                    </tr>
                                </thead>
                                <tbody id="guardian_body_list">
                                <?php $i=1; $sql = $con->query("SELECT * FROM  guardian");
                                        while($rows = mysqli_fetch_assoc($sql)){ ?>

                                             <tr>
                                                  <td colspan="12"><?=$i++ ?></td>
                                        <td colspan="12"><?=$rows['name'] ?></td>
                                         <td colspan="12"><?=$rows['address'] ?></td>
                                         <td colspan="12"><?=$rows['email'] ?></td>
                                          <td colspan="12"><?=$rows['phonenumber'] ?></td>
                                           <td colspan="12"><?=$rows['state'] ?></td>
                                            <td colspan="12"><?=$rows['lga'] ?></td>
                                    </tr>
                                       <?php }

                                    ?>
                                 </tbody>
                                <!-- <tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">No data available in table</td></tr></tbody> -->
                            </table>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries

                            </div>
                          </div>
                          <div class="col-sm-12 col-md-7">

                          </div>
                        </div>
                      </div>
                        </div>

                        <div id="page_links">

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
