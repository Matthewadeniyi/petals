<!--Server side code to handle  Patient Registration-->
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
            <?php
                $prescId = $_GET['prescId'];
                $sql=$db->query("SELECT  * FROM prescriptions WHERE MD5(id)='$prescId'");
                //$cnt=1;
                while($row=mysqli_fetch_assoc($sql))
                
                {
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
                                                <li class="breadcrumb-item"><a href="his_doc_dashboard.php">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pharmacy</a></li>
                                                <li class="breadcrumb-item active">Manage Prescriptions</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Update Patient Prescription</h4>
                                    </div>
                                </div>
                            </div>     
                            <!-- end page title --> 
                            <!-- Form row -->
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
                                                        <input type="text" required="required" readonly name="patientname" value="<?=$pro->sqLx('patients','patientno',$row['patient_id'],'firstname')?> <?=$pro->sqLx('patients','patientno',$row['patient_id'],'lastname')?>" class="form-control" id="inputEmail4" placeholder="Patient's First Name">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4" class="col-form-label">Patient Age</label>
                                                        <input required="required" type="text" readonly name="age" value="<?=$pro->sqLx('patients','patientno',$row['patient_id'],'age')?>" class="form-control"  id="inputPassword4" placeholder="Patient`s Last Name">
                                                    </div>

                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4" class="col-form-label">Patient Address</label>
                                                        <input required="required" type="text" readonly name="pres_pat_addr" value="<?=$pro->sqLx('patients','patientno',$row['patient_id'],'address')?>" class="form-control"  id="inputPassword4" placeholder="Patient`s Age">
                                                    </div>
                                                    <?php
                                                        $patientType = $pro->sqLx('patients','patientno',$row['patient_id'],'type');
                                                    ?>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4" class="col-form-label">Patient Type</label>
                                                        <input required="required" readonly type="text" name="pres_pat_type" value="<?=$pro->sqLx('patients_type','sn',$patientType,'type')?> " class="form-control"  id="inputPassword4" placeholder="Patient`s Age">
                                                    </div>

                                                </div>

                                                <div class="form-group ">
                                                        <label for="inputCity" class="col-form-label">Patient Ailment</label>
                                                        <input required="required" readonly type="text" value="<?=$pro->sqLx('patients','patientno',$row['patient_id'],'ailment')?>" name="pres_pat_ailment" class="form-control" id="inputCity">
                                                </div>
                                                <hr>
                                                

                                                <div class="form-group">
                                                        <label for="inputAddress" class="col-form-label">Prescription</label>
                                                        <textarea required="required"  type="text" class="form-control" name="prescription" id="editor"><?=$row['prescription']?></textarea>
                                                </div>

                                                <button type="submit" name="docUpdatePatientPrescription" class="ladda-button btn btn-primary" data-style="expand-right">Update Patient Prescription</button>

                                            </form>
                                            <!--End Patient Form-->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                        </div> <!-- container -->

                    </div> <!-- content -->

                    <!-- Footer Start -->
                    <?php include('assets/inc/footer.php');?>
                    <!-- end Footer -->

                </div>
            <?php }?>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

       
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
        <script type="text/javascript">
        CKEDITOR.replace('editor')
        </script>

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