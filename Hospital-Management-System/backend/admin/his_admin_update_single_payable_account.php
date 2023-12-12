<!--Server side code to handle  Patient Registration-->
<?php
    session_start();
    include('assets/inc/config.php');

    $accountId=$db->real_escape_string($_GET['acc_number']);
    $sql = $db->query("SELECT * FROM accounts WHERE MD5(sn) = '$accountId' ");
    if(mysqli_num_rows($sql)==0){
        header("Location:his_admin_manage_acc_payable.php");
        exit;
    }
    while($rows=mysqli_fetch_assoc($sql)){ 
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Accounting</a></li>
                                            <li class="breadcrumb-item active">Manage Payable Account</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Payable Account Details</h4>
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
                                                    <label for="inputEmail4" class="col-form-label">Account Name</label>
                                                    <input type="text" required="required" value="<?=$rows['account_name']?>" name="account_name" class="form-control" id="inputEmail4" >
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Account Amount($)</label>
                                                    <input type="text" required="required" value="<?=$rows['amount']?>" name="amount" class="form-control" id="inputEmail4" >
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                    <label for="inputPassword4" class="col-form-label">Account Description</label>
                                                    <textarea required="required" type="text" name="description" class="form-control"  id="editor"><?=$rows['description']?></textarea>
                                            </div>

                                            <div class="form-group" style="display:none">
                                                <label for="inputAddress" class="col-form-label">Account Type</label>
                                                <input required="required" value="Payable Account" type="text" class="form-control" name="account_type" id="inputAddress">
                                            </div>

                                            <button type="submit" name="updateAccountPayable" class="ladda-button btn btn-warning" data-style="expand-right">Update Account</button>

                                        </form>
                                        <!--End Patient Form-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->
            <?php }?>
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