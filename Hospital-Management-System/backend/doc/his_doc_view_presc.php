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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pharmacy</a></li>
                                            <li class="breadcrumb-item active">View Prescriptions</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">View Prescriptions</h4>
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
                                                <th data-hide="phone">Date Added</th>
                                                <th data-hide="phone">Action</th>
                                            </tr>
                                            </thead>

                                                <tbody>
                                            <?php
                                            /*
                                                *get details of allpatients
                                                *
                                            */
                                                $sql=$db->query("SELECT *, DATE(created_at) AS date FROM  prescriptions ORDER BY created_at DESC "); 
                                                //sql code to get to ten docs  randomly
                                               
                                                $i=1;
                                                while($rows=mysqli_fetch_assoc($sql))
                                                {
                                            ?>
                                                <tr>
                                                <td><?=$i++?></td>
                                                    <td><?=$pro->sqLx('patients','patientno',$rows['patient_id'],'firstname')?> <?=$pro->sqLx('patients','patientno',$rows['patient_id'],'lastname')?></td>
                                                    <td><?=$rows['patient_id']?></td>
                                                    <td><?=$pro->sqLx('patients','patientno',$rows['patient_id'],'address')?></td>
                                                    <td><?=$pro->sqLx('patients','patientno',$rows['patient_id'],'ailment')?></td>
                                                    <td><?=$pro->sqLx('patients','patientno',$rows['patient_id'],'age')?> Years</td>
                                                    <?php $patientType = $pro->sqLx('patients','patientno',$rows['patient_id'],'type');?>
                                                    <td><?=$patientCategory= $pro->sqLx('patients_type', 'sn',$patientType, 'type');
                                                    ?></td>
                                                    <td><?=$rows['date']?></td>
                                                    
                                                    <td><a href="his_doc_view_single_pres.php?prescId=<?=MD5($rows['id'])?>" class="badge badge-success"><i class="fas fa-eye"></i> View Prescription</a></td>
                                                </tr>
                                                </tbody>
                                            <?php  }?>
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