<!--Server side code to handle  Patient Registration-->
<?php
	session_start();
	include('assets/inc/config.php');
    $prescriptionId=$_GET['prescid'];
    $sql = $db->query("SELECT * FROM prescriptions WHERE MD5(patient_id)='$prescriptionId' ");
    if(mysqli_num_rows($sql) ==0){
        header('location:his_admin_manage_presc.php');
        exit;
    }
    $rows=mysqli_fetch_assoc($sql);
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
                                                        <input type="text" required="required" readonly name="pres_pat_name" value="<?=$pro->sqLx('patients','patientno',$rows['patient_id'],'firstname')?> <?=$pro->sqLx('patients','patientno',$rows['patient_id'],'lastname')?>" class="form-control" id="inputEmail4" placeholder="Patient's First Name">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4" class="col-form-label">Patient Age</label>
                                                        <input required="required" type="text" readonly name="pres_pat_age" value="<?=$pro->sqLx('patients','patientno',$rows['patient_id'],'age')?>" class="form-control"  id="inputPassword4" placeholder="Patient`s Last Name">
                                                    </div>

                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4" class="col-form-label">Patient Address</label>
                                                        <input required="required" type="text" readonly name="pres_pat_addr" value="<?=$pro->sqLx('patients','patientno',$rows['patient_id'],'address')?>" class="form-control"  id="inputPassword4" placeholder="Patient`s Age">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4" class="col-form-label">Patient Type</label>
                                                        <?php $patientType = $pro->sqLx('patients','patientno',$rows['patient_id'],'type');?>
                                                        <input required="required" readonly type="text" name="pres_pat_type" value="<?= 
                                                    $patientCategory= $pro->sqLx('patients_type', 'sn', $patientType, 'type');
                                                    ?>" class="form-control"  id="inputPassword4" placeholder="Patient`s Age">
                                                    </div>

                                                </div>

                                                <div class="form-group ">
                                                        <label for="inputCity" class="col-form-label">Patient Ailment</label>
                                                        <input required="required" readonly type="text" value="<?=$pro->sqLx('patients','patientno',$rows['patient_id'],'ailment')?>" name="pres_pat_ailment" class="form-control" id="inputCity">
                                                </div>
                                                <hr>
                                                

                                                <div class="form-group">
                                                        <label for="inputAddress" class="col-form-label">Prescription</label>
                                                        <textarea required="required"  type="text" class="form-control" name="prescription" id="editor"><?=$rows['prescription']?></textarea>
                                                </div>

                                                <button type="submit" name="updatePatientPrescription" class="ladda-button btn btn-primary" data-style="expand-right">Update Patient Prescription</button>

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