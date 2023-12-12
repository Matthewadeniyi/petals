
<?php
  session_start();
  if (!isset($_SESSION['id'])) {
  header("Location: index.php"); // Redirect to login page if not logged in
  exit();
  }
  include('assets/inc/config.php');;
  
  $pharmId=$_GET['pharmid'];
  $sql=$db->query("SELECT  * FROM pharmaceuticals WHERE mD5(pharm_bcode) = '$pharmId' ");
  if(mysqli_num_rows($sql)==0){
      header("location: his_admin_manage_pharmaceuticals.php");
      exit;
  }
  $i=1;
  $row=mysqli_fetch_assoc($sql)
  

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
                                                <li class="breadcrumb-item active">Manage Pharmaceutical</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Update #<?=$row['pharm_bcode']?> - <?=$row['pharm_name']?></h4>
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
                                                        <input type="text" required="required" value="<?=$row['pharm_name']?>" name="pharm_name" class="form-control" id="inputEmail4" >
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4" class="col-form-label">Pharmaceutical Quantity(Cartons)</label>
                                                        <input required="required" type="text"                     value="<?=$row['quantity']?>" name="pharm_quantity" class="form-control"  id="inputPassword4">

                                                        <td></td>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress" class="col-form-label">Pharmaceutical Description</label>
                                                    <textarea required="required"  type="text" class="form-control" name="pharm_description" id="editor"><?=$row['pharm_description']?></textarea>
                                                </div>
                                                <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label for="inputState" class="col-form-label">Pharmaceutical Vendor</label>
                                                        <select id="inputState" required="required" name="pharm_vendor" class="form-control">
                                                        <!--Fetch All Pharmaceutical Categories-->
                                                        <option selected disabled><?=$pro->sqLx('vendors','sn',$row['pharm_vendor'],'v_name')?></option>
                                                        <?php
                                                    
                                                            $sql=$db->query("SELECT * FROM  vendors "); 
                                                            while($rows=mysqli_fetch_assoc($sql)) {
                                                                echo '<option value="'.$rows['sn'].'">'.$rows['v_name'].'</option>';

                                                            }
                                                        ?>   
                                                        </select>
                                                </div>
                                                

                                                <div class="form-group col-md-6">
                                                        <label for="inputState" class="col-form-label">Pharmaceutical Category</label>
                                                        <select id="inputState" required="required" name="pharm_category" class="form-control">
                                                        <!--Fetch All Pharmaceutical Categories-->
                                                        <option selected disabled><?=$pro->sqLx('pharmaceutical_categories','sn',$row['pharm_category'],'p_name')?></option>
                                                        <?php
                                                    
                                                            $sql=$db->query("SELECT * FROM  pharmaceutical_categories "); 
                                                            while($row=mysqli_fetch_assoc($sql)) {
                                                                echo '<option value="'.$row['sn'].'">'.$row['p_name'].'</option>';

                                                            }
                                                        ?>   
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                            <button type="submit" name="updatePharmaceutical" class="ladda-button btn btn-warning" data-style="expand-right">Update Pharmaceutical</button>

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
        

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');  // Replace 'editor' with the actual ID or class of your textarea
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