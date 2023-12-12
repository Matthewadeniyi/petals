<?php
 include('../admin/assets/inc/config.php');// contains functions  for some Operations  already
 include('assets/inc/config.php');//get configuration file || contains specific actions for doctors 
 session_start();
 if (!isset($_SESSION['id']) || !isset($_SESSION['docno'])) {
   header("Location: index.php"); // Redirect to login page if not logged in
   exit();
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Laboratory</a></li>
                                            <li class="breadcrumb-item active">Add Laboratory Test</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Laboratory Tests</h4>
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
                                                <th data-toggle="true">Patient Name</th>
                                                <th data-hide="phone">Patient Number</th>
                                                <th data-hide="phone">Patient Address</th>
                                                <th data-hide="phone">Patient Ailment</th>
                                                <th data-hide="phone">Patient Age</th>
                                                <th data-hide="phone">Patient Category</th>
                                                <th data-hide="phone">Action</th>
                                            </tr>
                                            </thead>

                                                <tbody>
                                            <?php
                                            /*
                                                *get details of allpatients
                                                *
                                            */
                                                $sql=$db->query("SELECT * FROM  patients "); 
                                                
                                                $i=1;
                                                while($row=mysqli_fetch_assoc($sql))
                                                {
                                            ?>
                                                <tr>
                                                    <td><?=$i++?></td>
                                                    <td><?=$pro->sqLx('patients','patientno',$row['patientno'],'firstname')?> <?=$pro->sqLx('patients','patientno',$row['patientno'],'lastname')?></td>
                                                    <td><?=$row['patientno']?></td>
                                                    <td><?=$row['address']?></td>
                                                    <td><?=$row['ailment']?></td>
                                                    <td><?=$row['age']?> Years</td>
                                                    <?php
                                                        $patientType = $pro->sqLx('patients','patientno',$row['patientno'],'type');
                                                    ?>
                                                    <td><?=$pro->sqLx('patients_type','sn',$patientType,'type')?></td>
                                                    
                                                    <td><a href="his_doc_add_single_lab_test.php?patientno=<?=MD5($row['patientno'])?>" class="badge badge-success"><i class="mdi mdi-beaker "></i> Add Lab Test</a></td>
                                                </tr>
                                                </tbody>
                                            <?php   }?>
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