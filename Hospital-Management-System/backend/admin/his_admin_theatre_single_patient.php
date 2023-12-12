<!--Server side code to handle  Patient Registration-->
<?php
 session_start();
 if (!isset($_SESSION['id'])) {
 header("Location: index.php"); // Redirect to login page if not logged in
 exit();
 }
 include('assets/inc/config.php');
	
?>
<!--End Server Side-->
<!--End Patient Registration-->
<!DOCTYPE html>
<html lang="en">
    
    <!--Head-->
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
                                            <li class="breadcrumb-item"><a href="his_admin_dashboard.php">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Surgery | Theatre</a></li>
                                            <li class="breadcrumb-item active">Add Patient</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add Surgery Patient Details</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <!-- Form row -->
                        <!--LETS GET DETAILS OF SINGLE PATIENT GIVEN THEIR ID-->
                        <?php
                            $patientNo=$_GET['patient_id'];
                            $sql=$db->query("SELECT  * FROM patients WHERE patientno='$patientNo' ");
                            
                            while($row=mysqli_fetch_assoc($sql))
                            {
                        ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Fill all fields</h4>
                                        <!--Add Patient Form-->
                                        <form method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Patient Name</label>
                                                    <input type="text" readonly required="required" value="<?=$row['firstname']?> <?=$row['lastname']?>" name="" class="form-control" id="inputEmail4" placeholder="Patient's First Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Patient Ailment</label>
                                                    <input readonly required="required" type="text" value="<?=$pro->sqlx('patients','patientno',$row['patientno'],'ailment')?>" name="" class="form-control"  id="inputPassword4" placeholder="Patient`s Last Name">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Patient Number</label>
                                                    <input readonly type="text" required="required" value="<?=$row['patientno']?>" name="patientno" class="form-control" id="inputEmail4" placeholder="DD/MM/YYYY">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputState" class="col-form-label">Surgeon</label>
                                                    <select id="inputState" required="required" name="doctor" class="form-control">
                                                        <option selected disabled></option>
                                                    <?php
                                                    
                                                        $sql=$db->query("SELECT * FROM  employee WHERE department = '5' "); 
                                                        
                                                        while ($row = mysqli_fetch_assoc($sql)) {
                                                            echo "<option value='{$row['sn']}'>{$row['firstname']} {$row['lastname']}</option>";
                                                        }
                                                        
                                                        
                                                    ?>
                                                        
                                                    
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6" style="display:none">
                                                    <label for="inputPassword4" class="col-form-label">Surgery Status</label>
                                                    <input required="required" type="text" value="Undergoing" name="status" class="form-control"  id="inputPassword4" placeholder="Patient`s Age">
                                                </div>
                                            </div>

                                    
                                            <div class="form-row">
                                               
                                                <div class="form-group col-md-2" style="display:none">
                                                    <?php 
                                                        $length = 5;    
                                                        $surgeryNo =  substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
                                                    ?>
                                                    <label for="inputZip" class="col-form-label">Surgery Record Number</label>
                                                    <input type="text" name="surgeryno" value="<?=$surgeryNo?>" class="form-control" id="inputZip">
                                                </div>
                                            </div>

                                            <button type="submit" name="addPatientSurgery" class="ladda-button btn btn-success" data-style="expand-right">Add Patient</button>

                                        </form>
                                        <!--End Patient Form-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <?php  }?>
                        <!-- end row -->

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

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>

        <!-- Loading buttons js -->
        <script src="assets/libs/ladda/spin.js"></script>
        <script src="assets/libs/ladda/ladda.js"></script>

        <!-- Buttons init js-->
        <script src="assets/js/pages/loading-btn.init.js"></script>
        
    </body>

</html>