<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Class</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- uPlot -->
  <link rel="stylesheet" href="../plugins/uplot/uPlot.min.css">
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
            <h1>Class</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Class</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- AREA CHART -->
        
        <!-- /.card -->

        <!-- LINE CHART -->
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title ">
                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                                Classes
                            </h3>
                            <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#createClassModal">Create Class</button>
                        </div>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Class</th>
                                        <th>Category</th>
                                        <th>Students</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="class_list_body">
                                    <tr>
                                        <!-- <td colspan="12"><div class="text-center"> <span class="spinner-border spinner-border-sm" aria-hidden="true"></span> <i>Loading Classes ...</i> </div></td> -->
                                        <td>senior1</td>
                                        <td>senior</td>
                                        <td>7</td>
                                        <td></td>
                                        <td >
                                          <a href="#" class="float-right">
                                            class-profile 
                                            <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <!-- <td colspan="12"><div class="text-center"> <span class="spinner-border spinner-border-sm" aria-hidden="true"></span> <i>Loading Classes ...</i> </div></td> -->
                                        <td>ss1</td>
                                        <td>senior</td>
                                        <td>8</td>
                                        <td></td>
                                        <td>
                                          <a href="#" class="float-right">
                                            class-profile 
                                            <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <!-- <td colspan="12"><div class="text-center"> <span class="spinner-border spinner-border-sm" aria-hidden="true"></span> <i>Loading Classes ...</i> </div></td> -->
                                        <td>ss3</td>
                                        <td>sss</td>
                                        <td>6</td>
                                        <td></td>
                                        <td>
                                          <a href="#" class="float-right">
                                            class-profile 
                                            <i class="fas fa-arrow-circle-right"></i>
                                          </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>


            </div>

        </div>
        <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include ('footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Add Content Here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- uPlot -->
<script src="../plugins/uplot/uPlot.iife.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    /* uPlot
     * -------
     * Here we will create a few charts using uPlot
     */

    function getSize(elementId) {
      return {
        width: document.getElementById(elementId).offsetWidth,
        height: document.getElementById(elementId).offsetHeight,
      }
    }

    let data = [
      [0, 1, 2, 3, 4, 5, 6],
      [28, 48, 40, 19, 86, 27, 90],
      [65, 59, 80, 81, 56, 55, 40]
    ];

    //--------------
    //- AREA CHART -
    //--------------

    const optsAreaChart = {
      ... getSize('areaChart'),
      scales: {
        x: {
          time: false,
        },
        y: {
          range: [0, 100],
        },
      },
      series: [
        {},
        {
          fill: 'rgba(60,141,188,0.7)',
          stroke: 'rgba(60,141,188,1)',
        },
        {
          stroke: '#c1c7d1',
          fill: 'rgba(210, 214, 222, .7)',
        },
      ],
    };

    let areaChart = new uPlot(optsAreaChart, data, document.getElementById('areaChart'));

    const optsLineChart = {
      ... getSize('lineChart'),
      scales: {
        x: {
          time: false,
        },
        y: {
          range: [0, 100],
        },
      },
      series: [
        {},
        {
          fill: 'transparent',
          width: 5,
          stroke: 'rgba(60,141,188,1)',
        },
        {
          stroke: '#c1c7d1',
          width: 5,
          fill: 'transparent',
        },
      ],
    };

    let lineChart = new uPlot(optsLineChart, data, document.getElementById('lineChart'));

    window.addEventListener("resize", e => {
      areaChart.setSize(getSize('areaChart'));
      lineChart.setSize(getSize('lineChart'));
    });
  })
</script>
</body>
</html>
