<?php
   session_start();
   if (!isset($_SESSION['id'])) {
   header("Location: index.php"); // Redirect to login page if not logged in
   exit();
   }
   include('assets/inc/config.php');
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
            <?php
                $docId=$_GET['docid'];
                $sql=$db->query("SELECT  * FROM employee WHERE employeeno='$docId' ");
                $i=1;
                if($sql){ $row=mysqli_fetch_assoc($sql)?>
            
            
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
                                    <h4 class="page-title"><?=$row['firstname']?> <?=$row['lastname']?>'s Profile</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-6 col-xl-6">
                                <div class="card-box text-center">
                                    <img src="../doc/assets/images/users/<??>" class="rounded-circle avatar-lg img-thumbnail"
                                        alt="profile-image">

                                    
                                    <div class="text-centre mt-3">
                                        
                                        <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2"><?=$row['firstname']?> <?=$row['lastname']?></span></p>
                                       <p class="text-muted mb-2 font-13"><strong>Department :</strong> <span class="ml-2"><?=$pro->SqLx('departments','sn',$row['department'],'departments','Empty')?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Employee Number :</strong> <span class="ml-2"><?=$row['employeeno']?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2"><?=$row['email']?></span></p>


                                    </div>

                                </div> <!-- end card-box -->

                            </div> <!-- end col-->
                            <!--Vitals-->
                            <div class="col-lg-6 col-xl-6">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Body Temperature</th>
                                                <th>Heart Rate/Pulse</th>
                                                <th>Respiratory Rate</th>
                                                <th>Blood Pressure</th>
                                                <th>Date Recorded</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            $docId=$_GET['docid'];
                                            $sql=$db->query("SELECT  *,DATE(created_at) AS date FROM vitals WHERE id='$docId' ");
                                            $i=1;
                                            if(mysqli_num_rows($sql) ==0){
                                                echo "<td colspan='5'>No records yet!</td>";
                                            }
                                            
                                            while($row=mysqli_fetch_assoc($sql))
                                                {
                                            

                                        ?>
                                            <tbody>
                                                <tr>
                                                    <td><?=$row['bodytemp']?>°C</td>
                                                    <td><?=$row['heartpulse']?>BPM</td>
                                                    <td><?=$row['resprate']?>bpm</td>
                                                    <td><?=$row['bloodpressure']?>mmHg</td>
                                                    <td><?=$row['date']?></td>
                                                </tr>
                                            </tbody>
                                        <?php }?>
                                    </table>
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
            <?php } else{?>
                <div class="row">
                    <div class="card">
                        <div class="col-8">
                            <div class="card-header">
                            <p class="text mb-2 font-13"><strong>No Employee With Such ID</strong> <span class="ml-2"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
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