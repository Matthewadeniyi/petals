<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daily Fee Transaction</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
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
            <h1>Daily Fee Transaction</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daily Fee Transaction</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-secondary card-outline">
                            <div class="card-body">
                                <form action="" id="dateForm">
                                    <div class="form-group">
                                        <label>Select Day</label>
                                        <input type="date" name="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-secondary float-right">View Transaction</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div>

                    </div>
                </div>


                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title text-bold">
                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                            <span id="dis_date">10 Aug, 2023 Fee Transactions</span>
                        </h3>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Student</th>
                                        <th>Class</th>
                                        <th>Term</th>
                                        <th>Fee</th>
                                        <th>Amount</th>
                                        <th>Type</th>
                                        <th>Date</th>
                                        <th>By</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="transact_body"></tbody>
                            </table>
                        </div>

                        <div id="page_links"></div>
                    </div>

                </div>



            </div>

        </div>
    </section>
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
