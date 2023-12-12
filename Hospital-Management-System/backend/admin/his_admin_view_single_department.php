<?php
  //session_start();
  session_start();
   if (!isset($_SESSION['id'])) {
   header("Location: index.php"); // Redirect to login page if not logged in
   exit();
   }
   include('assets/inc/config.php');
  $departmentId =$db->real_escape_string($_GET['departmentid']);
  if(isset($_POST['remove'])){
    $employeeno = $db->real_escape_string($_POST['employeeno']);
    $sql = $db->query("UPDATE employee SET department=NULL WHERE employeeno='$employeeno'");
    if($sql){
        echo "Operation Successful";
    } else {
        echo "Error during update: " . $db->error;
    }
}

?>

<!DOCTYPE html>
    <html lang="en">

    <?php include('assets/inc/head.php');?>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
             <?php include("assets/inc/nav.php");?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
                <?php include("assets/inc/sidebar.php");?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <!--Get Details Of A Single User And Display Them Here-->
        
            
            
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Employees</a></li>
                                            <li class="breadcrumb-item active">View Employees</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title"></h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                     
                         
                        <div class="row">
                            <div class="col-lg-6 col-xl-6">
                                <div class="card-box text-center">                                  
                                    <div class="text-centre mt-3">
                                        
                                        <?php
                                            $sql = $db->query("SELECT * FROM departments WHERE sn='$departmentId' ");
                                            $row = mysqli_fetch_assoc($sql);
                                        ?>
                                       <p class="text-muted mb-2 font-13"><strong>Department : <?=$row['departments']?></strong> <span class="ml-2"></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Number of Employees: <?=$pro->total('employee','department',$departmentId)?> </strong> <span class="ml-2"></span></p>
                                   </div>

                                </div> <!-- end card-box -->

                            </div> <!-- end col-->
                            <!--Vitals-->
                            <div class="col-lg-6 col-xl-6">
                                <div class="table-responsive">
                                    <form method="POST">
                                    <table class="table table-bordered table-hover mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>S/N</th>
                                                <th>Employees</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                            <?php
                                            $sql = $db->query("SELECT * FROM employee WHERE department='$departmentId' ");
                                            $i=1;
                                            while($rows=mysqli_fetch_assoc($sql)){?>
                                            
                                            <tbody>
                                                <tr>
                                                    <td><?=$i++?></td>
                                                    <td><?=$rows['firstname']?>  <?=$rows['lastname']?></td>
                                                    <td>
                                                            <input type="hidden" name='employeeno' value=<?=$rows['employeeno']?> >
                                                        <button type="submit" name="remove" class="ladda-button btn btn-success btn-xs" data-style="expand-right">remove</button>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                                <?php }?>
                                            </table>
                                        </form>
                                    </div>
                                </div> <!-- end col-->
                        </div>
                       
                        <!-- end row-->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <?php include('assets/inc/footer.php');?>
                <!-- end Footer -->

            </div>
            

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>


</html>