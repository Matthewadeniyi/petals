<?php
 session_start();
 if (!isset($_SESSION['id'])) {
 header("Location: index.php"); // Redirect to login page if not logged in
 exit();
 }
 include('assets/inc/config.php');

  if(isset($_GET['delete_account'])) {
    $accountId = mysqli_real_escape_string($db,$_GET['delete_account']);
    $sql = $pro->delete('accounts','MD5(sn)',$accountId);
        if($sql)    
        {
        $success = "Payable Account Records Deleted";
        header("Location:his_admin_manage_acc_receivable.php");
        exit;
        }
        else
        {
            $err = "Try Again Later";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    
<?php include('assets/inc/head.php');?>

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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Accounts</a></li>
                                            <li class="breadcrumb-item active">Manage Payable Accounts</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Manage Payable Accounts</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title"></h4>
                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-12 text-sm-center form-inline" >
                                                <div class="form-group mr-2" style="display:none">
                                                    <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                                        <option value="">Show all</option>
                                                        <option value="Discharged">Discharged</option>
                                                        <option value="OutPatients">OutPatients</option>
                                                        <option value="InPatients">InPatients</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="table-responsive">
                                        <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th data-toggle="true">Account Name</th>
                                                <th data-hide="phone">Account Number</th>
                                                <th data-hide="phone">Account Amount</th>
                                                <th data-hide="phone">Action</th>
                                            </tr>
                                            </thead>
                                            <?php
                                            
                                                $sql=$db->query("SELECT * FROM  accounts WHERE account_type='Recieveable Account' "); 
                                                $i=1;
                                                while($row=mysqli_fetch_assoc($sql))
                                                {
                                            ?>

                                                <tbody>
                                                <tr>
                                                    <td><?=$i++?></td>
                                                    <td><?=$row['account_name']?></td>
                                                    <td><?=$row['account_number'];?></td>
                                                    <td>$ <?=$row['amount']?></td>

                                                    <td>
                                                        <a href="his_admin_view_single_payable_account.php?acc_number=<?=MD5($row['sn'])?>" class="badge badge-success"><i class="fas fa-eye "></i> View</a>
                                                        <a href="his_admin_update_single_payable_account.php?acc_number=<?=MD5($row['sn'])?>" class="badge badge-warning"><i class="fas fa-clipboard-check "></i> Update</a>
                                                        <a href="his_admin_manage_acc_payable.php?delete_account=<?=MD5($row['sn'])?>" class="badge badge-danger"><i class="fas fa-trash-alt "></i> Delete</a>


                                                    </td>
                                                </tr>
                                                </tbody>
                                            <?php }?>
                                            <tfoot>
                                            <tr class="active">
                                                <td colspan="8">
                                                    <div class="text-right">
                                                        <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div> <!-- end .table-responsive-->
                                </div> <!-- end card-box -->
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

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Footable js -->
        <script src="assets/libs/footable/footable.all.min.js"></script>

        <!-- Init js -->
        <script src="assets/js/pages/foo-tables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>