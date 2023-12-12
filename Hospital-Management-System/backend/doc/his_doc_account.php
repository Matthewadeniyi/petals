
<?php
   include('../admin/assets/inc/config.php');// contains functions  for some Operations  already
   include('assets/inc/config.php');//get configuration file || contains specific actions for doctors 
   session_start();
   if (!isset($_SESSION['id']) || !isset($_SESSION['docno'])) {
     header("Location: index.php"); // Redirect to login page if not logged in
     exit();
   }
   $docNo = $_SESSION['docno'];
   $docId = $_SESSION['id'];
   $sql = $db->query("SELECT * FROM employee WHERE employeeno='$docNo' AND sn='$docId' ");
   $row = mysqli_fetch_assoc($sql);
 
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li>
                                            <li class="breadcrumb-item active">View My Profile</li>
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
                                    <img src="../admin/assets/Upload/onur-binay-_yC2htzMYnI-unsplash.jpg" class="rounded-circle avatar-lg img-thumbnail"
                                        alt="profile-image">

                                    
                                    <div class="text-centre mt-3">
                                        
                                        <p class="text-muted mb-2 font-13"><strong>Employee Full Name :</strong> <span class="ml-2"><?=$row['firstname']?> <?=$row['lastname']?></span></p>
                                       <p class="text-muted mb-2 font-13"><strong>Employee Department :</strong> <span class="ml-2"><?=$pro->sqLx('departments','sn',$row['department'],'departments','Processing')?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Employee Number :</strong> <span class="ml-2"><?=$row['employeeno']?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Employee Email :</strong> <span class="ml-2"><?=$row['email']?></span></p>


                                    </div>

                                </div> <!-- end card-box -->

                            </div> <!-- end col-->
                            <!--Vitals-->
                            <div class="col-lg-6 col-xl-6">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
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
                                            $sql = $db->query("SELECT * FROM vitals WHERE id='$docNo' ");
                                            if(mysqli_num_rows($sql) === 0){
                                                echo '<td>No records Yet!</td>'; 
                                            }
                                            $i=1;
                                            while($row=mysqli_fetch_assoc($sql)){

                                        ?>
                                            <tbody>
                                                <tr>
                                                    <td><?=$row['bodytemp']?>°C</td>
                                                    <td><?=$row['heartpulse']?>BPM</td>
                                                    <td><?=$row['resprate']?>bpm</td>
                                                    <td><?=$row['bloodpressure']?>mmHg</td>
                                                    <td><?php echo date("Y-m-d", strtotime($row['created_at']));?></td>
                                                </tr>
                                            </tbody>
                                        <?php $i++; }?>
                                    </table>
                                    </div>
                                </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        <?php
                            $sql = $db->query("SELECT *,DATE(created_at) AS date FROM surgery WHERE doctor='$docId'");
                            if(mysqli_num_rows($sql) ==0){
                                //return;
                            }else{ ?>
                                <div class="row">
                                    <div class="col-12">
                                    <h4 class="page-title">Surgery Records</h4>
                                        <div class="table-responsive">
                                            <table class="table table-responsive table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Patient Name</th>
                                                        <th>Patient Number</th>
                                                        <th>Paitient Ailment</th>
                                                        <th>Surgeon</th>
                                                        <th>Status</th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i=1;
                                                       while($rows=mysqli_fetch_assoc($sql)){?>

                                                       <tr>
                                                        <td><?=$i++?></td>
                                                        <td><?=$pro->sqLx('patients','patientno',$rows['patientno'],'firstname')?>
                                                        <?=$pro->sqLx('patients','patientno',$rows['patientno'],'lastname')?></td>
                                                        <td><?=$rows['patientno']?></td>
                                                        <td><?=$pro->sqLx('patients','patientno',$rows['patientno'],'ailment')?></td>
                                                        <td><?=$pro->sqLx('employee','sn',$rows['doctor'],'firstname')?> <?=$pro->sqLx('employee','sn',$rows['doctor'],'lastname')?></td>
                                                        <td><?=$rows['status']?></td>
                                                        <td><?=$rows['date']?></td>
                                                        <td><button class="badge badge-success badge-xs">Update</button></td>
                                                       </tr>
                                                    
                                                </tbody>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                        <?php } ?>

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