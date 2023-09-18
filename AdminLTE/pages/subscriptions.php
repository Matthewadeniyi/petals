<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Subscriptions</title>

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
            <h1>subscriptions</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">subscriptions</li>
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
                                    Link Live Petal Wallet
                                </h3>
                               
                            </div>
                            <div class="card-body pb-0">
                                <p class="text-warning">
                               <span class="text-bold"> Note: </span>You have to link your livpetal wallet before you can perform transactions
                                </p>
                                <form action="" id="createClassCategory">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                
                                                <input type="text" name="category" class="form-control" placeholder="Live peteal ID">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                               
                                                <input type="text" name="category" class="form-control" placeholder="Live Petal Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="float-left">
                                        <p class="text-bold">Current Wallet:</p>
                                    </div>
                                    <div class="form-group float-right">
                                        <button class="btn btn-secondary createClassCategory">Add Category</button>
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
                                    Recently Linked Wallet
                                </h3>
                            </div>
                        </div>
                        <div class="card-body p-1">
                            <div class="table-responsive">
                                <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody id="category_list_body">
                                        <tr>
                                            <!-- <td colspan="12"><div class="text-center"> <span class="spinner-border spinner-border-sm" aria-hidden="true"></span> <i>Loading Category ...</i> </div></td> -->
                                            <td>20048</td>
                                            <td>Godwin Ogbaji</td>
                                            <td>ogbajigodwin@gmail.com</td>
                                            <td>08032318588</td>
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
                                    Purchased Registration Slots
                                </h3>
                            </div>
                            <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                    <span><b>Total</b>: <span class="total_slot">0</span></span>
                                    <span><b>Used</b>: <span class="used_slot">21</span></span>
                                    <span><b>Availabe</b>: <span class="slots_av">-21</span></span>
                             </div>
                                <form action="" id="createClassCategory">
                                    <div class="form-group mt-4">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                
                                                <input type="text" name="category" class="form-control" placeholder="number to purchase">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                               
                                                <select name="" id="" class="form-control">
                                                    <option value=""disabled>Basic|500 Student</option>
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="float-left">
                                        <p class="text-bold">Wallet Balance: 0</p>
                                    </div>
                                    <div class="form-group float-right">
                                        <button class="btn btn-secondary createClassCategory">Pay with Livpetal</button>
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
                                Slot Purchase History
                            </h3>
                        </div>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Slot</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>By</th>
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
