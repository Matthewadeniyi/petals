
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pharmaceuticals</a></li>
                                            <li class="breadcrumb-item active">Add Pharmaceutical</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Create A Pharmaceutical</h4>
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
                                                    <label for="inputEmail4" class="col-form-label">Pharmaceutical Name</label>
                                                    <input type="text" required="required" name="pharm_name" class="form-control" id="inputEmail4" >
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Pharmaceutical Quantity(Cartons)</label>
                                                    <input required="required" type="text" name="pharm_quantity" class="form-control"  id="inputPassword4">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                            <div class="form-group col-md-6">
                                                    <label for="inputState" class="col-form-label">Pharmaceutical Category</label>
                                                    <select id="inputState" required="required" name="pharm_category" class="form-control">
                                                    <option>choose</option>

                                                    <!--Fetch All Pharmaceutical Categories-->
                                                    <?php
                                                    
                                                        $sql=$db->query("SELECT * FROM  pharmaceutical_categories ORDER BY RAND() "); 
                                                        
                                                        while($row=mysqli_fetch_assoc($sql)){
                                                            echo '<option value="'.$row['sn'].'">'.$row['p_name'].'</option>';
                                                        }

                                                    ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputState" class="col-form-label">Pharmaceutical Vendor</label>
                                                    <select id="inputState" required="required" name="pharm_vendor" class="form-control">
                                                        <option>choose</option>
                                                    <?php
                                                        $sql=$db->query("SELECT * FROM  vendors ORDER BY RAND() "); 
                                                        
                                                        while($row=mysqli_fetch_assoc($sql)){
                                                            echo '<option value="'.$row['sn'].'">'.$row['v_name'].'</option>';
                                                        }

                                                    ?>   
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="inputPassword4" class="col-form-label">Pharmaceutical Barcode(EAN-8)</label>
                                                    <?php 
                                                        $length = 10;    
                                                        $pharmBcode =  substr(str_shuffle('0123456789'),1,$length);
                                                    ?>
                                                    <input   readonly required="required" type="text" value="<?=$pharmBcode?>" name="pharm_bcode" class="form-control"  id="inputPassword4">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress" class="col-form-label">Pharmaceutical Description</label>
                                                <textarea required="required" type="text" class="form-control" name="pharm_description" id="editor"></textarea>
                                            </div>

                                           <button type="submit" name="addPharmaceutical" class="ladda-button btn btn-success" data-style="expand-right">Add Pharmaceutical</button>

                                        </form>
                                     
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
        <!--Load CK EDITOR Javascript-->
        <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
        <script type="text/javascript">
        CKEDITOR.replace('editor')
        </script>
       
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