<!--Server side code to handle  Patient Registration-->
<?php
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Employee</a></li>
                                            <li class="breadcrumb-item active">Assign Department</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Assign Department</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <!-- Form row -->
                        <?php
                           $docId = $db->real_escape_String($_GET['docid']);
                           $sql = $db->query("SELECT * FROM employee WHERE employeeno='$docId' ");
                            while($row=mysqli_fetch_assoc($sql)){ ?>
                         
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Fill all fields</h4>
                                        <!--Add Patient Form-->
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">First Name</label>
                                                    <input type="text" required="required" readonly value="<?=$row['firstname']?> " name="firstname" class="form-control" id="inputEmail4" >
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Last Name</label>
                                                    <input required="required" type="text" readonly value="<?=$row['lastname']?>" name="lastname" class="form-control"  id="inputPassword4">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress" class="col-form-label">Email</label>
                                                <input required="required" type="email" readonly value="<?=$row['email']?>" class="form-control" name="email" id="inputAddress">
                                            </div>
                                            <div class="form-group" style="display:none">
                                                <label for="inputAddress" class="col-form-label">ID</label>
                                                <input required="required" type="text" readonly value="<?=$docId?>" class="form-control" name="docid" id="inputAddress">
                                            </div>
                                            
                                            <div class="form-group" >
                                                    <label for="inputState" class="col-form-label">Departments</label>
                                                    <select id="inputState" required="required" name="department" class="form-control">
                                                        <option selected disabled>Choose</option>
                                                    <?php
                                                        $sql = $db->query("SELECT * FROM departments");
                                                        $i=1;
                                                        while($rows=mysqli_fetch_assoc($sql)){
                                                            echo '<option value="'.$rows['sn'].'">'.$rows['departments'].'</option>';
                                                        }
                                                    ?>
                                                    </select>
                                            </div>                                         

                                            <button type="submit" name="assigndepartment" class="ladda-button btn btn-success" data-style="expand-right">Assign Department</button>

                                        </form>
                                        <!--End Patient Form-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        <?php }?>

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