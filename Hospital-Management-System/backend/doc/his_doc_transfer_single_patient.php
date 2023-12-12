<!--Server side code to handle  Patient Transfer-->
<?php
  include('../admin/assets/inc/config.php');// contains functions  for some Operations  already
  include('assets/inc/config.php');//get configuration file || contains specific actions for doctors 
  session_start();
  if (!isset($_SESSION['id']) || !isset($_SESSION['docno'])) {
    header("Location: index.php"); // Redirect to login page if not logged in
    exit();
  }


?>
<!--End Server Side-->
<!--End Patient Transfer-->
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
                                            <li class="breadcrumb-item"><a href="his_doc_dashboard.php">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Patients</a></li>
                                            <li class="breadcrumb-item active">Transfer Patients</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Transfer Patient To A Refferal Facility</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <!-- Form row -->
                        <!--LETS GET DETAILS OF SINGLE PATIENT GIVEN THEIR ID-->
                        <?php
                            $patientNo=$_GET['patient_id'];
                            $sql=$db->query("SELECT  * FROM patients WHERE MD5(patientno)='$patientNo'");
                            
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
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4" class="col-form-label">Patient Name</label>
                                                    <input type="text" required="required" value="<?=$row['firstname']?> <?=$row['lastname']?>" name="patientname" class="form-control" id="inputEmail4" placeholder="Patient's First Name">
                                                </div>
                                                
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Refferal Hospital</label>
                                                    <input type="text" required="required"  name="hospital" class="form-control" id="inputEmail4" placeholder="Refferal/Transfer Hospital">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Transfer Date</label>
                                                    <input required="required" type="date" value="<?=date("Y-m-d")?>"  name="date" class="form-control"  id="inputPassword4" placeholder="DD/MM/YYYY">
                                                </div>
                                                <div class="form-group col-md-6" style="display:none">
                                                    <label for="inputPassword4" class="col-form-label">Patient Number </label>
                                                    <input required="required" type="text"  name="patientno" value="<?=$row['patientno']?>" class="form-control"  id="inputPassword4" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group" style="display:none">
                                                <label for="inputAddress" class="col-form-label">Transfer Status</label>
                                                <input required="required" type="text" value="Success" class="form-control" name="t_status" id="inputAddress" placeholder="Patient's Addresss">
                                            </div>

                                            <button type="submit" name="transferpatient" class="ladda-button btn btn-success" data-style="expand-right">Transfer Patient</button>

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