
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
                $pharmId=$_GET['pharm_cat_id'];
                $sql=$db->query("SELECT  * FROM pharmaceutical_categories WHERE sn='$pharmId'");
               
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pharmaceuticals</a></li>
                                            <li class="breadcrumb-item active">Manage Pharmaceutical Category</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title"><?=$row['p_name']?></h4>
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
                                            <div class="form-row" >
                                                <div class="form-group col-md-12" >
                                                    <label for="inputEmail4" class="col-form-label">Pharmaceutical Category Name</label>
                                                    <input  type="text" value="<?=$row['p_name']?>" required="required" name="pharm_cat_name" class="form-control" id="inputEmail4" >
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputState" class="col-form-label">Pharmaceutical Vendor</label>
                                                    <select id="inputState" required="required" name="pharm_cat_vendor" class="form-control">
                                                    <option selected disabled><?=$pro->sqLx('vendors','sn',$row['p_vendor'],'v_name')?></option>
                                                    <?php
                                                    
                                                        $sql=$db->query("SELECT * FROM vendors "); 
                                                       
                                                        while($innerRow=mysqli_fetch_assoc($sql)){
                                                            echo "<option value='" . $innerRow['sn'] . "'>" . $innerRow['v_name'] . "</option>";

                                                        }
                                                        
                                                            
                                                    ?>
                                                        

                                                      
                                                    </select>
                                                </div>
                                                
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress" class="col-form-label">Pharmaceutical Category Description</label>
                                                <textarea required="required" type="text" class="form-control" name="pharm_cat_description" id="editor"><?=htmlspecialchars_decode($row['p_description'])?></textarea>
                                            </div>

                                           <button type="submit" name="updatePharmaceuticalCategory" class="ladda-button btn btn-danger" data-style="expand-right">Update Category</button>

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
                <?php }?>

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