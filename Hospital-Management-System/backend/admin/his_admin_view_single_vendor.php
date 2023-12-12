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
    
<?php include ('assets/inc/head.php');?>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <?php include('assets/inc/nav.php');?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
                <?php include("assets/inc/sidebar.php");?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <?php
                $vendorNo=$_GET['v_number'];
                $sql=$db->query("SELECT  * FROM vendors WHERE v_number = '$vendorNo' ");
                if($row=mysqli_fetch_assoc($sql)){ ?>
                
            

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
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Vendors</a></li>
                                                <li class="breadcrumb-item active">Manage Vendors</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">#<?=$row['v_number']?></h4>
                                    </div>
                                </div>
                            </div>     
                            <!-- end page title --> 

                            <div class="row">
                                <div class="col-12">
                                    <div class="card-box">
                                        <div class="row">
                                            <div class="col-xl-5">

                                                <div class="tab-content pt-0">

                                                    <div class="tab-pane active show" id="product-1-item">
                                                        <img src="assets/images/vendor.png" alt="" class="img-fluid mx-auto d-block rounded">
                                                    </div>
                            
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-xl-7">
                                                <div class="pl-xl-3 mt-3 mt-xl-0">
                                                    <h2 class="mb-3">Vendor Name : <?=$row['v_name']?></h2>
                                                    <hr>
                                                    <h3 class="text-danger">Vendor Contacts : <?=$row['v_phone']?></h3>
                                                    <hr>
                                                    <h3 class="text-danger ">Vendor Email : <?=$row['v_mail']?></h3>
                                                    <hr>
                                                    <h3 class="text-danger ">Vendor Address : <?=htmlspecialchars($row['v_address'], ENT_QUOTES, 'UTF-8')?></h3>
                                                    <hr>
                                                    
                                                    <h2 class="align-centre">Vendor Details</h2>
                                                    <hr>
                                                    <p class="text-muted mb-4">
                                                        <?=mysqli_real_escape_string($db,$row['v_description'])?>
                                                    </p>
                                                    <hr>
                                                   
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        
                                    </div> <!-- end card-->
                                </div> <!-- end col-->
                            </div>
                            <!-- end row-->
                            <?php }else {?>
                                     <!-- Display a message or alternative content for when no employee is found -->
                                
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p>No employee found with the specified ID.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
}
?>
                            
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