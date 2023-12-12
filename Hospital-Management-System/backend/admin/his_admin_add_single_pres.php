<!--Server side code to handle  Patient Registration-->
<?php
 session_start();
 if (!isset($_SESSION['id'])) {
 header("Location: index.php"); // Redirect to login page if not logged in
 exit();
 }
 include('assets/inc/config.php');
    $patientId = $_GET['patientno'];
    $sql=$db->query("SELECT  * FROM patients WHERE MD5(patientno)='$patientId' ");
    if(mysqli_num_rows($sql)==0){
        header('Location:his_admin_add_presc.php');
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
            <?php
               
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
                                                <li class="breadcrumb-item"><a href="his_admin_dashboard.php">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pharmacy</a></li>
                                                <li class="breadcrumb-item active">Add Prescription</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Add Patient Prescription</h4>
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
                                                        <input type="text" required="required" readonly name="pres_pat_name" value="<?=$rows['firstname']?> <?=$rows['lastname']?>" class="form-control" id="inputEmail4" placeholder="Patient's First Name">
                                                    </div>
                                                    

                                                    <div class="form-group col-md-6" >
                                                        <label for="inputPassword4" class="col-form-label">Patient Age</label>
                                                        <input required="required" type="text" readonly name="pres_pat_age" value="<?=$rows['age']?>" class="form-control"  id="inputPassword4" placeholder="Patient`s Last Name">
                                                    </div>

                                                </div>

                                                <div class="form-row">

                                                    <div class="form-group col-md-4">
                                                        <label for="inputEmail4" class="col-form-label">Patient Number</label>
                                                        <input type="text" required="required" readonly name="patintno" value="<?=$rows['patientno']?>" class="form-control" id="inputEmail4" placeholder="DD/MM/YYYY">
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label for="inputPassword4" class="col-form-label">Patient Address</label>
                                                        <input required="required" type="text" readonly name="pres_pat_addr" value="<?=$rows['address']?>" class="form-control"  id="inputPassword4" placeholder="Patient`s Age">
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label for="inputPassword4" class="col-form-label">Patient Type</label>
                                                        <input required="required" readonly type="text" name="pres_pat_type" value="<?=$pro->sqLx('patients_type','sn',$rows['type'],'type')?>" class="form-control"  id="inputPassword4" placeholder="Patient`s Age">
                                                    </div>

                                                </div>

                                                <div class="form-group ">
                                                        <label for="inputCity" class="col-form-label">Patient Ailment</label>
                                                        <input readonly required="required" type="text" value="<?=$rows['ailment'];?>" name="pres_pat_ailment" class="form-control" id="inputCity">
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                        <label for="inputAddress" class="col-form-label">Prescription</label>
                                                        <textarea required="required"  type="text" class="form-control" name="prescription" id="editor"></textarea>
                                                </div>

                                                <button type="submit" name="AddPatientPrescription" class="ladda-button btn btn-primary" data-style="expand-right">Add Patient Prescription</button>

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