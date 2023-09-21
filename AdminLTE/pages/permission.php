<?php
include_once("myclass.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Permission Settings</title>

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
            <h1>Permission</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Permission</li>
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
            <div class="col-md-12 col-12">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title ">
                            <i class="fas fa-edit"></i>
                            Edit Staff Permissions
                        </h3>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <table id="example1" class="table mb-0 table-bordered table-hover table-striped border border-dark">
                                <thead>
                                    <tr>
                                        <th class="text-center">sn</th>
                                        <th class="text-center">staff</th>
                                        <th class="text-center">Reg Mgm</th>
                                        <th class="text-center">Fee Mgm</th>
                                        <th class="text-center">Result</th>
                                        <th class="text-center">Other</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="user_body_list">
                                <?php $i=1; 
                                $sql = $con->query("SELECT * FROM  staff");
                                        while($rows = mysqli_fetch_assoc($sql)){ 
                                        $staffid = $rows['sn'];
                                        if ($pro->sqLx1('permission','staffid',$staffid) == 0){
                                          $con->query("INSERT into permission(staffid) VALUES('$staffid')");

                                        }
                                          ?>
 
                               <form method="POST">
                                <tr>
                                    <td><?=$i++?></td>
                                    <td><?= $rows['name'].'('.$rows['role'].') ' ?></td>
                                    <td class="text-center">

                                      <div class="icheck-primary">
                                        <input type="checkbox" name="p1" 
                                        <?php 
                                        if ($pro->sqLx('permission','staffid', $staffid, 'p1')== 1) 

                                        { ?> checked <?php } ?> value="1" id="reg<?= $staffid ?>">
                                        <label for="reg<?=$staffid ?>" data-id="reg<?= $staffid ?> "></label>

                                      </div>
                                  </td>
                                  <td class="text-center">

                                            <div class="icheck-primary">
                                              <input type="checkbox" name="p2" 
                                              <?php 
                                              if ($pro->sqLx('permission','staffid', $staffid,'p2')== 1) 

                                              { ?> checked <?php } ?> value="1" id="reg<?= $staffid ?>">
                                              <label for="fee2<?=$staffid ?>" data-id="reg<?= $staffid ?> "></label>

                                            </div>
                                            </td>   

                                      <td class="text-center">

                                            <div class="icheck-primary">
                                              <input type="checkbox" name="p3" 
                                              <?php 
                                              if ($pro->sqLx('permission','staffid', $staffid,'p3')== 1) 

                                              { ?> checked <?php } ?> value="1" id="reg<?= $staffid ?>">
                                              <label for="u_results2<?=$staffid ?>" data-id="reg<?= $staffid ?> "></label>

                                            </div>
                                            </td>   

                                    <td class="text-center">

                                            <div class="icheck-primary">
                                              <input type="checkbox" name="p4" 
                                              <?php 
                                              if ($pro->sqLx('permission','staffid', $staffid,'p4')== 1) 

                                              { ?> checked <?php } ?> value="1" id="reg<?= $staffid ?>">
                                              <label for="p4<?=$staffid ?>" data-id="reg<?= $staffid ?> "></label>

                                            </div>
                                            </td>
                                  <td>
                                    <button class="btn btn-xs btn success save change" type="submit" name="updatePermission" value="<?= $staffid ?>">
                                  <i class="fas fa-save"></i>Save</button>

                                  </td>
                                      </form>
                                     <?php }
                                ?>
                                </tbody>
                            </table>
                        </div>

                        <div id="page_links" style="color: rgb(36, 35, 32)">

                        </div>
                    </div>
                </div>

            </div>

        </div>
       
          <!-- /.card-body -->
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
