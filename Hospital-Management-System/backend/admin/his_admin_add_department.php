<!--Server side code to handle  Patient Registration-->
<?php
	 session_start();
     if (!isset($_SESSION['id'])) {
     header("Location: index.php"); // Redirect to login page if not logged in
     exit();
     }
     include('assets/inc/config.php');
    if(isset($_GET['delete'])){
        $sn=$_GET['delete'];
        $sql=$db->query("DELETE FROM departments WHERE sn='$sn' ");
        $sql2=$db->query(" UPDATE employee SET department=NULL WHERE department='$sn'");
        if($sql){
            header('location:his_admin_add_department.php');
        }else{
            echo "Error".mysqli_error($db);

        }
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
                                            <li class="breadcrumb-item active">Add Employee</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add Employee Details</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <!-- Form row -->
                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Fill all fields</h4>
                                        <!--Add Patient Form-->
                                        <form method="POST">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Department</label>
                                                    <input type="text" required="required" name="department" class="form-control" id="inputEmail4" >
                                                </div>
                                                
                                            </div>
                                            <button type="submit" name="addDepartment" class="ladda-button btn btn-success" data-style="expand-right">Add Department</button>

                                        </form>
                                        <!--End Patient Form-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                            <div class="table-responsive col-6">
                            <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Departments</h4>
                                        <!--Add Patient Form-->
                                        <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th data-hide="phone">Department</th>
                                                <th data-hide="phone">Action</th>
                                            </tr>
                                            </thead>
                                            <?php
                                            $sql = $db->query("SELECT * FROM departments");
                                            $i = 1;
                                            while($rows=mysqli_fetch_assoc($sql)){?>
                                            
                                                <tbody>
                                                <tr>
                                                    <td><?=$i++?></td>
                                                    <td><?=$rows['departments']?></td>
                                                   
                                                    
                                                    
                                                    <td>
                                                        <a href="his_admin_add_department.php?delete=<?=$rows['sn']?>" class="badge badge-danger"><i class=" mdi mdi-trash-can-outline "></i> Delete</a>
                                                        <a href="his_admin_view_single_department.php?departmentid=<?=$rows['sn']?>" class="badge badge-success"><i class="mdi mdi-eye"></i> View</a>
                                                        <a href="his_admin_update_single_department.php?departmentid=<?=$rows['sn']?>" class="badge badge-primary"><i class="mdi mdi-check-box-outline "></i> Update</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                                <?php } ?>
                                            <tfoot>
                                            
                                            </tfoot>
                                      </table>
                                        <!--End Patient Form-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end .table-responsive-->
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