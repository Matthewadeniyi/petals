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
               $patient_no=$_GET['patient_no'];
               $sql=$db->query("SELECT * FROM  patients WHERE patientno='$patient_no' ");
               $rows=mysqli_fetch_assoc($sql);
            ?>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Patients</a></li>
                                            <li class="breadcrumb-item active">View Patients</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title"><?=$rows['firstname']?> <?=$rows['lastname']?>'s Profile</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-4 col-xl-4">
                                <div class="card-box text-center">
                                    <img src="assets/images/users/patient.png" class="rounded-circle avatar-lg img-thumbnail"
                                        alt="profile-image">

                                    
                                    <div class="text-left mt-3">
                                        
                                        <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2"> <?=$rows['firstname']?> <?=$rows['lastname']?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ml-2"><?=$rows['phoneno']?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Address :</strong> <span class="ml-2"><?=$rows['address']?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Date Of Birth :</strong> <span class="ml-2"><?=$rows['dob']?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Age :</strong> <span class="ml-2"><?=$rows['age']?> Years</span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Ailment :</strong> <span class="ml-2"><?=$rows['ailment']?></span></p>
                                        <hr>
                                        <p class="text-muted mb-2 font-13"><strong>Date Recorded :</strong> <span class="ml-2"><?php echo date("d/m/Y - h:m", strtotime($rows['created_at']));?></span></p>
                                        <hr>




                                    </div>

                                </div> <!-- end card-box -->

                            </div> <!-- end col-->
                            
                            <?php ?>
                            <div class="col-lg-8 col-xl-8">
                                <div class="card-box">
                                    <ul class="nav nav-pills navtab-bg nav-justified">
                                        <li class="nav-item">
                                            <a href="#aboutme" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                Prescription
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#timeline" data-toggle="tab" aria-expanded="true" class="nav-link ">
                                                 Vitals
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                Lab Records
                                            </a>
                                        </li>
                                    </ul>
                                    <!--Medical History-->
                                    <div class="tab-content">
                                        <div class="tab-pane show active " id="aboutme">
                                             <ul class="list-unstyled timeline-sm">
                                                <?php
                                                    
                                                    //$patient_no=$_GET['patient_no'];
                                                    $sql=$db->query("SELECT *,DATE(created_at) AS date FROM  prescriptions WHERE patient_id='$patient_no' ");
                                                    if(mysqli_num_rows($sql)==0){
                                                        echo "<td>No records Yet!</td>";
                                                    }
                                                    $i=1;
                                                    while($rows=mysqli_fetch_assoc($sql)){?>

                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date"><?=$rows['date']?></span>
                                                    <h5 class="mt-0 mb-1"><?=$rows['patient_id']?></h5>
                                                    <p class="text-muted mt-2">
                                                        <?=htmlspecialchars_decode($rows['prescription'])?>
                                                    </p>

                                                </li>
                                            

                                                
                                                <?php  }?>
                                            </ul>
                                        </div> <!-- end tab-pane -->
                                        <!-- end Prescription section content -->

                                        <div class="tab-pane show " id="timeline">
                                            <div class="table-responsive">
                                                <table class="table table-borderless mb-0">
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
                                                        $patient_no=$_GET['patient_no'];
                                                        $sql=$db->query("SELECT  * FROM vitals WHERE id ='$patient_no'");
                                                        
                                                        if(mysqli_num_rows($sql) == 0){
                                                            echo "<td colspan='5' class='text-center'>No records yet!</td>";
                                                        }
                                                        while($row=mysqli_fetch_assoc($sql))
                                                            {
                                                        $mysqlDateTime = $row['created_at']; //trim timestamp to date

                                                    ?>
                                                        <tbody>
                                                            <tr>
                                                                <td><?=$row['bodytemp']?>°C</td>
                                                                <td><?=$row['heartpulse']?>BPM</td>
                                                                <td><?=$row['resprate']?>bpm</td>
                                                                <td><?=$row['bloodpressure']?>mmHg</td>
                                                                <td><?php echo date("Y-m-d", strtotime($mysqlDateTime));?></td>
                                                            </tr>
                                                        </tbody>
                                                    <?php }?>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- end vitals content-->

                                        <div class="tab-pane " id="settings">
                                            <ul class="list-unstyled timeline-sm">
                                                <?php
                                                    
                                                    $sql=$db->query("SELECT  *,DATE(created_at) AS date FROM laboratory WHERE patientno = '$patient_no'");
                                                    if(mysqli_num_rows($sql)==0){
                                                        echo "<td>No records Yet!</td>";    
                                                    }
                                                    $i = 1;
                                                    while($row=mysqli_fetch_assoc($sql)){ ?>
                                                      
                                                    

                                                
                                                    <li class="timeline-sm-item">
                                                        <span class="timeline-sm-date"><?=$row['date']?></span>
                                                        <h3 class="mt-0 mb-1"><?=$pro->sqLx('patients','patientno',$row['patientno'],'ailment')?></h3>
                                                        <hr>
                                                        <h5>
                                                           Laboratory  Tests
                                                        </h5>
                                                        
                                                        <p class="text-muted mt-2">
                                                            <?=$row['lab_test']?>
                                                        </p>
                                                        <hr>
                                                        <h5>
                                                           Laboratory Results
                                                        </h5>
                                                        
                                                        <p class="text-muted mt-2">
                                                            <?=$row['lab_result']?>
                                                        </p>
                                                        <hr>

                                                    </li>
                                                <?php $i++; }?>
                                            </ul>
                                        </div>
                                        </div>
                                        <!-- end lab records content-->

                                    </div> <!-- end tab-content -->
                                </div> <!-- end card-box-->

                            </div> <!-- end col -->
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