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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Employee</a></li>
                                            <li class="breadcrumb-item active">Transfer Employee</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Transfer Employee From One Department To Another</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <!-- Form row -->
                        <?php
                            $employeeNo=$_GET['employeeno'];
                            $sql=$db->query("SELECT  * FROM employee WHERE employeeno='$employeeNo'");
                            $i=1;
                            //$cnt=1;
                            if($row=mysqli_fetch_assoc($sql)){ ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Fill all fields</h4>
                                        <!--Add Patient Form-->
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">First Name</label>
                                                    <input type="text" required="required" readonly value="<?=$row['firstname']?>" name="firstname" class="form-control" id="inputEmail4" >
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Last Name</label>
                                                    <input required="required" type="text" readonly value="<?=$row['lastname']?>" name="lastname" class="form-control"  id="inputPassword4">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputAddress" class="col-form-label">Email</label>
                                                    <input required="required" type="email" readonly value="<?=$row['email']?>" class="form-control" name="email" id="inputAddress">
                                                </div>
    
                                                <div class="form-group col-md-6">
                                                    <label for="inputAddress" class="col-form-label">Employee Number</label>
                                                    <input required="required" type="email" readonly value="<?=$row['employeeno']?>" class="form-control" name="employeeno" id="inputAddress">
                                                </div>

                                            </div>
                                            <div class="form-row">

                                                <div class="form-group col-md-6">
                                                    <label for="inputAddress" class="col-form-label">Employee Current Working Department </label>
                                                    <input required="required" type="email" readonly value="<?=$pro->sqLx('departments','sn',$row['department'],'departments')?>" class="form-control" name="doc_email" id="inputAddress">
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                        <label for="inputState" class="col-form-label">Transfer Department</label>
                                                        <select id="inputState" required="required" name="newdepartment" class="form-control">
                                                            <option selected disabled>Choose</option>
                                                            <?php
                                                                $i=1;
                                                                $sql=$db->query("SELECT * FROM departments");
                                                                while($rows=mysqli_fetch_assoc($sql)){
                                                                    echo '<option value="'.$rows['sn'].'">'.$rows['departments'].'</option>';
                                                                }
                                                            ?>
                                                             
                                                        </select>
                                                </div>                                         
                                            </div>

                                            <button type="submit" name="transferEmployeeDepartment" class="ladda-button btn btn-success" data-style="expand-right">Transfer Employee</button>

                                        </form>
                                        <!--End Patient Form-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        <?php } else{?>
                            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h4 class="header-title">No Employee With the specified Id</h4>

                                    </div>
                                </div>
                            </div>
                        </div> 

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