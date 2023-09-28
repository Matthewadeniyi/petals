<?php

require_once("myclass.php");
?>


<html lang="en" style="height: auto;"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="KzdDKBUNSEYt7dgo7xfLoJTzTIa9lcHRA0cmTBTf">
    <title>    Student Profile
</title>
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">

    

    <style>
        .profile_pics {
            width: 50px;
            height: 50px;
        }

        .object-cover {
            object-fit: cover;
        }

        .profile-user-img {
            width: 100px;
            height: 100px;
        }

    </style>


</head>

<body class="sidebar-mini layout-fixed sidebar-closed sidebar-collapse" style="height: auto;">
    <div class="wrapper">
        


   
</nav>

 <?php include('nav.php');
 ?>
        
        <div class="content-wrapper" style="min-height: 572.816px;">
            <div class="littleAlert"></div>
            
<style>
    .comp { position: relative; width: max-content}
    .comp img { display: block; }
    .comp i { position: absolute; bottom:10px; right:10px; }
</style>
    <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">


    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Student Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Student Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <?php 
                $sn = $_GET['sn'];
                $sql = $con->query("SELECT * FROM  students WHERE sn = '$sn'");
                 $rows = mysqli_fetch_assoc($sql);
                 ?>
                <div class="card card-secondary card-outline">
                    <div class="card-body box-profile p-card">
                        <div class="d-flex justify-content-center upload_new_img">
                            <div class="text-center comp">
                                <img class="profile-user-img img-fluid img-circle object-cover" src="https://apis.schoolpetal.com/assets/img/students/user.png" alt="User profile picture">
                                <i class="fas fa-upload "></i>
                            </div>
                        </div>
                        <h3 class="profile-username text-center"><?= $rows['firstname'] . ' '. $rows['lastname']?></h3>
                        <p class="text-muted text-center"><?= $pro->SqLx('class', 'sn', $rows['category'], 'category')?><sup><?= $pro->SqLx('arm', 'sn', $rows['arm'], 'arm')?></sup> | <?=$rows['gender']?></p>
                        <button class="btn btn-success btn-block"><b> <i class="fa fa-user-check"></i> Activate</b></button>
                        <a class="btn btn-primary btn-block" href="studentprofile.php?sn=<?=$rows['sn']?>" data-toggle="tab"><b> <i class="fas fa-edit"></i> Edit Profile</b></a>
                    </div>
                </div>
              
            </div>


            <div class="col-md-9">
                <div class="card card-secondary card-outline">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="#levies" data-toggle="tab">School Fees</a></li>
                            <li class="nav-item"><a class="nav-link" href="#result" data-toggle="tab">Result &amp; Transcript</a></li>
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                        </ul>

                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div><b>Registration No:</b> <?= $rows['regnumber']?></div>
                                <div><b>Admission Date:</b> 15 Aug, 2022 </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <div><b>Date Of Birth:</b> 10, Jan 2022 </div>
                                <div><b>Admission Date:</b> 10, Jan 2022 </div>
                            </div>

                            <hr>
                            <div class="d-flex justify-content-between">
                                <div><b>Username:</b> <?= $rows['surname']?> </div>
                                <div><b>Password:</b> 7888 </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-bold">Parent/ Guardian Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle" src="https://portal.schoolpetal.com/assets/img/user4-128x128.jpg" alt="User profile picture">
                                        </div>

                                        <h3 class="profile-username text-center"><?= $pro->SqLx('guardian', 'sn', $rows['guardian'], 'name')?></h3>

                                        <p class="text-muted text-center"><?= $pro->SqLx('guardian', 'sn', $rows['guardian'], 'address')?></p>

                                        <div class="text-center">
                                            <a href="/control/gurdian/165">Go-to-profile <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="d-flex justify-content-between">
                                        <div><b>Father's Name:</b></div>
                                        <div><b>Father's Phone:</b></div>
                                    </div>

                                    <hr>

                                    <div class="d-flex justify-content-between">
                                        <div><b>Father's Occupation:</b> null </div>
                                        <div><b>Father's Address:</b> null </div>
                                    </div>

                                    <hr>

                                    <div class="d-flex justify-content-between">
                                        <div><b>Mother's Name:</b> null </div>
                                        <div><b>Mother's Phone:</b> null </div>
                                    </div>

                                    <hr>

                                    <div class="d-flex justify-content-between">
                                        <div><b>Mother's Occupation:</b> null </div>
                                        <div><b>Mother's Address:</b> null </div>
                                    </div>

                                    <hr>

                                    <div class="d-flex justify-content-between">
                                        <div><b>Guardian's Name:</b> <?= $pro->SqLx('parents', 'sn', $rows['guardian'], 'name')?></div>
                                        <div><b>Guardian's Phone:</b> <?= $pro->SqLx('parents', 'sn', $rows['guardian'], 'phone')?> </div>
                                    </div>

                                    <hr>

                                    <div class="d-flex justify-content-between">
                                        <div><b>Guardian's Email:</b> <?= $pro->SqLx('parents', 'sn', $rows['guardian'], 'email')?> </div>
                                        <div><b>Guardian's Address:</b> <?= $pro->SqLx('parents', 'sn', $rows['guardian'], 'address')?> </div>
                                    </div>



                                    <hr>

                                    <h5 class="text-muted">Send SMS To Gurdian</h5>

                                    <form action="">
                                        <div class="form-group">
                                            <textarea name="" id="" rows="2" class="form-control"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-primary" onclick="return confirm('Balance reminder will be sent to this gurdian')"> <i class="fa fa-paper-plane" aria-hidden="true"></i> Send Balance Reminder SMS</button>
                                            <button class="btn btn-secondary float-right"> <i class="fa fa-paper-plane" aria-hidden="true"></i> Send </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-bold"> Miscellanous Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div><b>Blood Group:</b> null </div>
                                <div><b>Geno Type:</b> null </div>
                            </div>

                            <hr>

                            <div class="d-flex justify-content-between">
                                <div><b>Ailment:</b> null </div>
                                <div><b>Disablity:</b> null </div>
                            </div>

                            <hr>

                            <div class="d-flex justify-content-between">
                                <div><b>Previous School:</b> null </div>
                                <div><b>Reason For leaving:</b> null </div>
                            </div>

                        </div>
                    </div>
                </div>

                            <div class="tab-pane" id="levies">
                <div><a href="javascript:;" data-toggle="modal" data-target="#makePayment" class="btn btn-secondary mb-3">Make Fee Payment  </a></div>
                <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-bold">School Fees</h4>
                        </div>
                        <div class="card-body p-1">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <tbody><tr>
                                        <th>Fee</th>
                                        <th>Amount</th>
                                        <th>Discount</th>
                                        <th>Total</th>
                                    </tr>


                                    
                        <tr>
                            <td>Tuition Fee</td>
                            <td>₦ 12,000</td>
                            <td>₦ 0</td>
                            <td>₦ 12,000</td>
                        </tr>
                    
                    <tr>
                        <th></th>
                        <th>₦ 12,000</th>
                        <th>₦ 0</th>
                        <th>₦ 12,000</th>
                    </tr>
                
                <tr>
                    <th colspan="3">Balance Brought Foward</th>
                    <td>₦ 0</td>
                </tr>
                <tr>
                    <th colspan="3">Total Owing</th>
                    <th>₦ 12,000</th>
                </tr>
                <tr>
                    <th colspan="3">Amount Paid</th>
                    <th>₦ 2,000</th>
                </tr>
                <tr>
                    <th colspan="3">Expected Payments</th>
                    <th>₦ 10,000</th>
                </tr>
                


                                </tbody></table>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-bold">Recent Payments</h4>
                        </div>
                        <div class="card-body p-1">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <tbody><tr>
                                        <th>Fee</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                    </tr>
                                    
                        <tr>
                            <td>Tuition Fee</td>
                            <td>₦ 2,000</td>
                            <td>16 Aug, 2023</td>
                        </tr>
                    
                    <tr>
                        <th>Total</th>
                        <th colspan="2">₦ 2,000</th>
                    </tr>
                
                                </tbody></table>
                            </div>
                        </div>
                    </div>


                    <div><a href="/control/student/fee/250" class="btn btn-block btn-secondary">View School Fee Details <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </a></div>

                </div>


                            <div class="tab-pane" id="result">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-bold">Results</h3>
                        </div>
                        <div class="card-body p-1">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <tbody><tr>
                                        <th>#</th>
                                        <th>Session</th>
                                        <th>Term</th>
                                        <th>Class</th>
                                        <th>Subjects</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>


                                    
                        <tr>
                            <td>1</td>
                            <td>2022/2023</td>
                            <td>First Term</td>
                            <td>sss 1</td>
                            <td>7</td>
                            <td>16 Aug, 2022</td>
                            <td><a class="btn btn-xs btn-info" href="/control/view-result/284"><i class="fas fa-eye"></i> View</a></td>
                        </tr>
                    


                                </tbody></table>
                            </div>
                        </div>
                    </div>
                
    <p class="p-0 m-0" style="page-break-before: always">
    </p><div class="card">
        <div class="card-body p-1" style="font-size: larger">
            <div style="border: solid thin #000" class="mb-1 p-2">
                <table class="" width="100%">
                    <tbody><tr>
                        <th>
                            <table width="100%">
                                <tbody><tr>
                                    <td width="18%">
                                        <img width="200" class="img-circle" src="https://apis.schoolpetal.com/assets/img/schools/8012145schoolpetal-international-school.jpg">
                                    </td>
                                    <td width="64%">
                                        <div class="text-center">
                                            <h1 style="font-size: 25px; font-weight:bold;" class="mb-0">
                                                SchoolPetal International School</h1>
                                                <p class="mb-0"> </p>
                                            <h3 style="font-size: 20px;" class="mt-0">TERMLY CONTINOUS
                                                ASSESSMENT DOSSIER <br>First Term, 2022/2023 ACADEMIC SESSION </h3>
                                        </div>
                                    </td>
                                    <td width="18%">
                                        <img width="200" class="img-circle float-right" src="https://apis.schoolpetal.com/assets/img/students/user.png">
                                    </td>
                                </tr>
                            </tbody></table>
                        </th>
                    </tr>

                </tbody></table>
            </div>

            <table class="table table-bordered mb-1">
                    <tbody><tr>
                        <td><b>FULL NAME:</b> Okolo Odinaka Bella  </td>
                        <td><b>REGISTRATION NO:</b> 250</td>
                        <td><b>RESULT ID:</b> 284</td>
                        <td><b>CLASS:</b> sss 1</td>
                        <td><b>GENDER:</b> Male</td>
                    </tr>
            </tbody></table>

            <table class="table table-bordered mb-1">
                    
    
        <tbody><tr>
            <th>Subjects</th>
            <th>CA1</th>
            <th>CA2</th>
            <th>CA3</th>
            <th>Exam</th>
            <th>Total</th>
            <th>Class Av</th>
            <th>Grade</th>
            <th>Remark</th>
        </tr>
    
                    
        <tr>
            <td style="padding: 20px;" class="center">JAVASCRIPT</td>
            <td class="center">7</td>
            <td class="center">10</td>
            <td class="center">13</td>
            <td class="center">47</td>
            <td class="center">77</td>
                
            <td class="center">68</td>
            <td class="center">A</td>
            <td class="center">Excellent</td>
        </tr>
        
        <tr>
            <td style="padding: 20px;" class="center">Data science</td>
            <td class="center">6</td>
            <td class="center">8</td>
            <td class="center">12</td>
            <td class="center">40</td>
            <td class="center">66</td>
                
            <td class="center">73</td>
            <td class="center">B</td>
            <td class="center">V. good</td>
        </tr>
        
        <tr>
            <td style="padding: 20px;" class="center">CSS</td>
            <td class="center">5</td>
            <td class="center">6</td>
            <td class="center">20</td>
            <td class="center">60</td>
            <td class="center">91</td>
                
            <td class="center">78</td>
            <td class="center">A</td>
            <td class="center">Excellent</td>
        </tr>
        
        <tr>
            <td style="padding: 20px;" class="center">design dynamics webpages</td>
            <td class="center">10</td>
            <td class="center">9</td>
            <td class="center">18</td>
            <td class="center">53</td>
            <td class="center">90</td>
                
            <td class="center">72</td>
            <td class="center">A</td>
            <td class="center">Excellent</td>
        </tr>
        
            </tbody></table>

            <table class="table table-bordered">
                <tfoot>
                    <tr>
                        <th colspan="2">Subjects: 4</th>
                        <th colspan="2">Total Score: 324</th>
                        <th colspan="2">Average: 81</th>
                        <th colspan="2">Class Average: </th>
                        <th colspan="2">No in class: 20</th>
                    </tr>
                </tfoot>
            </table>
            <table class="table table-bordered mt-1" width="100%">
                <tfoot>
                    <tr>
                        <th>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <b>Vacation Date: </b><span style="font-weight: lighter">30 Nov, 2022</span>
                                        </div>
                                        <div class="col-6">
                                            <b>Resumption Date: </b><span style="font-weight: lighter">9 Jan, 2023</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <b>Teacher's Comment:</b><br>
                                            <span style="font-weight: lighter" class="t_rem">
                                            null
                                            </span>
                                        </div>
                                        <div class="col-6">
                                            <b>Principal's Comment: </b><br>
                                            <span style="font-weight: lighter" class="p_rem">
                                                null
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </th>
                    </tr>
                </tfoot>
            </table>
            <div class="row">
                <div class="col-12 hide-print mt-3">
                    <a href="/control/result/print/s/284" target="_blank" class="btn btn-info float-right">Print</a>
                    <button class="btn btn-secondary float-right mr-2 up_rem" data-data="{&quot;id&quot;:284,&quot;name&quot;:&quot;Okolo Odinaka Bella  &quot;,&quot;p_rem&quot;:null,&quot;t_rem&quot;:null}">Update Remarks</button>
                </div>
            </div>
        </div>
    </div>
<p></p>
   </div>


                            <div class="tab-pane" id="settings">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-bold">Edit Basic Info</h4>
                    </div>
                    <div class="card-body">
                        <form action="" id="basic_info" class="row">
                            <div class=" col-md-4 form-group">
                                <label>Surname </label>
                                <input type="text" name="surname" class="form-control" value="Okolo" placeholder="Surname">
                            </div>

                            <div class=" col-md-4 form-group">
                                <label>Firstname</label>
                                <input type="text" name="firstname" class="form-control" value="Odinaka" placeholder="Firstname">
                            </div>

                            <div class=" col-md-4 form-group">
                                <label>Othernames</label>
                                <input type="text" name="othername" class="form-control" value="Bella" placeholder="Othernames">
                            </div>

                            <div class=" col-md-6 form-group">
                                <label>Gurdian</label>
                                <select name="guardian" class="form-control select2bs4" id="select_guardian">
                                    <option selected="" value="165">Chinere Ezeora | chinereezeora@gmail.com</option>
                                <option value="164">Popoola mercy | popoolamercy@gmail.com</option><option value="153">Osabusua Mercy Bose | gbolahanosabusua@gmail.com</option><option value="162">Olanipekun Oluwatosin | olanipekunpeniel@gmail.com</option><option value="163">Oke Joseph | okejoseph@gmail.com</option><option value="160">Oduntan Arisekola | oduntanarise@gmail.com</option><option value="155">Mrs Taiwo | elshaddaites@gmail.com</option><option value="154">Mr Taiwo | taiwo@gmail.com</option><option value="158">Mr joel | joelade@gmail.com</option><option value="156">Mr agbelugbe | agbelugbe@gmail.com</option><option value="198">Mia Khalifa | bbc@gmail.com</option><option value="161">Joseph Bamise | josephbamise@gmail.com</option><option value="197">Johnny Sins | commitallsin@gmail.com</option><option value="157">fasina omlayo | oy.fasina56@gmail.com</option><option value="152">Faseha oyindamola | oyindamolamonzel@gmail.com</option><option value="195">dfpwer4 | Hannahmalkova60@gmail.com</option><option value="165">Chinere Ezeora | chinereezeora@gmail.com</option><option value="159">Bankole Joshua | banksdemola@gmail.com</option><option value="196">Ayokunle Ajayi | ajayi@gmail.com</option></select>
                            </div>
                            <div class=" col-md-2 form-group">
                                <label>Gender</label>
                                <select name="gender" class="form-control select2bs4" id="">
                                    <option selected="">Male</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class=" col-md-4 form-group">
                                <label>Registration Number</label>
                                <input type="text" name="reg" class="form-control" value="0000021" placeholder="Registration Number">
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-secondary float-right basic_info">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-bold">Class &amp; Arm</h4>
                    </div>
                    <div class="card-body">
                        <form action="" class="row">
                            <div class="col-md-4 form-group">
                                <label>Class</label>
                                <select name="" id="select_class" class="form-control  select2bs4">
                                    <option selected="" value="16">sss 1</option>
                                <option value="16">sss 1</option><option value="18">sss 3</option><option value="17">Senior 2</option><option value="19">JSS1 2</option><option value="21">JSS1 4</option><option value="20">jss2 2</option><option value="22">JSS3 4</option></select>
                            </div>

                            <div class="col-md-4 form-group">
                                <label>Arm</label>
                                <select name="" id="select_arm" class="form-control select2bs4">
                                    <option selected="" value="4">A</option>
                                <option value="4">A</option><option value="5">B</option><option value="6">C</option><option value="7">R</option></select>
                            </div>

                            <div class="col-md-4 form-group">
                                <label class="text-white">.</label>
                                <button class="btn btn-secondary btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-bold">Change Authentication Details</h4>
                    </div>
                    <div class="card-body">
                        <form id="auth_det" class="row">
                            <div class="col-md-4 form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" value="okolo7888" placeholder="Enter Username">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>Password</label>
                                <input type="number" class="form-control" name="password" value="7888" placeholder="4-6 Digits">
                            </div>

                            <div class="col-md-4 form-group">
                                <label class="text-white">.</label>
                                <button class="btn btn-secondary btn-block auth_det">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-bold">Edit Other Info</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" class="row" id="miscellanous">
                            <div class="col-md-3 form-group">
                                <label>Blood Group</label>
                                <input type="text" class="form-control" name="blood_group" value="null" placeholder="Enter Blood Group ie O-">
                            </div>

                            <div class="col-md-3 form-group">
                                <label>Geno Type</label>
                                <input type="text" class="form-control" name="genotype" value="null" placeholder="Enter Genetype i.e AA">
                            </div>

                            <div class="col-md-3 form-group">
                                <label>Ailment</label>
                                <input type="text" class="form-control" name="ailment" value="null" placeholder="Enter if any">
                            </div>

                            <div class="col-md-3 form-group">
                                <label>Disability</label>
                                <input type="text" class="form-control" name="disability" value="null" placeholder="Enter if any">
                            </div>


                            <div class="col-md-6 form-group">
                                <label>Previous School Attended</label>
                                <input type="text" class="form-control" name="previous_school" value="null" placeholder="">
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Reason For Leaving Previous School</label>
                                <textarea name="reason_for_leaving" rows="2" class="form-control">null</textarea>
                            </div>

                            <div class="col-md-12 ">
                                <button type="button" class="btn btn-secondary float-right miscellanous">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    


    <div class="modal fade" id="makePayment">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold">Make Payments </p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="make_pay" class="row">
                        <div class="col-md-6 form-group">
                            <label>Fee Category</label>
                            <select name="fee_cat" id="fee_cat" class="form-control select2bs4 select2-hidden-accessible" data-select2-id="fee_cat" tabindex="-1" aria-hidden="true"><option disabled="" selected="" data-select2-id="3">Select Fee Category</option> <option value="0">General Payment</option>
                            <option value="6">Tuition Fee</option>
                        </select><span class="select2 select2-container select2-container--bootstrap4" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-fee_cat-container"><span class="select2-selection__rendered" id="select2-fee_cat-container" role="textbox" aria-readonly="true" title="Select Fee Category">Select Fee Category</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Amount</label>
                            <input type="number" name="amount" class="form-control" placeholder="Enter Amount i.e 15750">
                        </div>
                        <div class="col-12 form-group">
                            <button type="submit" class="btn btn-secondary float-right make_pay">Make Payment</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="updateRemark">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold">Update Remark (Thomas Onyemechi)</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label>Principal Remark</label>
                            <input type="text" name="principal" class="form-control">
                            <input type="hidden" name="id">
                        </div>
                        <div class="form-group">
                            <label>Teacher Remark</label>
                            <input type="text" name="teacher" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-secondary float-right updateRemark">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="changeImageModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold">Upload Image</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" class="changeImage" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="id" value="250">
                            <input type="file" name="image" class="form-control" accept="image/*" onchange="loadFile(event)">
                        </div>
                        <p><img id="output" width="200"></p>
                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary float-right changeImageBtn ">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- 
    <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>
    <script src="https://portal.schoolpetal.com/assets/js/results.js"></script>

    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMzdhZDlhOTJhMDEyMjk3NmY1M2UyYTc4MGQyNDQxMWQyOTAxMThiNzJkNmIwYmVmNDk1OWFlOGRkZDdlYTRhYjFhODU2NjE1MzM4OGJmNWYiLCJpYXQiOjE2OTI2MTU1MDAuNzI3NjY4LCJuYmYiOjE2OTI2MTU1MDAuNzI3Njc2LCJleHAiOjE3MjQyMzc5MDAuNzE4NDY5LCJzdWIiOiIyMCIsInNjb3BlcyI6W119.UYKx7ZI5zukn_Co3yLyJgCBS0KXIPXRqdYBExJr66seUFTtw2m9nQndhe2RYw3-CREILxE0ONzjmXzJTMdxqD2-7oPkPmKVyLoIWrofDQPT4ZceN2G5wxvhzeNFjCAhRA2JnhpFLlE33_HgXfwTkV-5Z0XsX82u5vEHONeBHLQOcngEtyjosnBiO68QPX-xrZvGov35O7k7NwIuCGJPLIh--ipGNQKxPGoVMbjWpi-I3iPJxI9Vwxe-nRc7sHXRG8GoKZMZ-9wTG2izPEnJIYDud_fJCAKASlJdr7EUpoR8jn6HYUp4Ey-Srn0i4wM9_MM_VAnjwbvLlfLLGC7-6AuMT15hNfLJaW-ne3tBD8KqnruXwlHlbgjafm_w6Nhzsspw4N-GN5QjNAxe68-FFtLJR5c5gI3-jwWnTzoIsiri_qING7-3TbqFGqgHkbuVitYaW5wXLeLMYX1_zyelLH47Wokf-AXKm4_Xk-p6-KiiAIDPwiG9G0M1NGvt7BwBz8sTCYgoAdPvakLjoGKPvYTDLZSYjVNJJWDAT5WjXRPekNZbt4S6n-vq24GpcKzpDi7S2C0g19c_sjHMgbEXSP4bMRNSAgqY6igejUqCjZDAipZB_RNbv5q54azpf4xIZp6DrWZfLgkHstD7xqIjE9TeyksZhEOEW0p5crRbtCt8`
                }
            });




            function fetchStudent() {
                $.ajax({
                    method: 'get',
                    url: api_url+'get_student/250'
                }).done(function (res) {
                    data = res.data
                    pc = $('.p-card')

                    $('.changeImage').find('input[name="id"]').val(data.id);
                    otn = (data.othername) ? data.othername : '';

                    status_btn = $(data.status == 0) ? `<button class="btn btn-success btn-block"><b> <i class="fa fa-user-check"></i> Activate</b></button>`
                     : `<button class="btn btn-success btn-block"><b> <i class="fa fa-user-times"></i> De-activate</b></button>`;
                    pc.html(`
                        <div class="d-flex justify-content-center upload_new_img">
                            <div class="text-center comp">
                                <img class="profile-user-img img-fluid img-circle object-cover"
                                    src="${api_url_root+data.photo}" alt="User profile picture">
                                <i class="fas fa-upload "></i>
                            </div>
                        </div>
                        <h3 class="profile-username text-center">${data.surname+' '+data.firstname+' '+ ' '+ otn}</h3>
                        <p class="text-muted text-center">${(data.class)? data.class.class :''}<sup>${(data.arm)? data.arm.arm :''}</sup> | ${data.sex}</p>
                        ${status_btn}
                        <a class="btn btn-primary btn-block" href="#settings" data-toggle="tab"><b> <i class="fas fa-edit"></i> Edit Profile</b></a>
                    `);

                    //
                    activityTap(data)
                    settingTab(data)

                    setTimeout(() => {
                        fetchReq();
                    }, 2000);
                }).fail(function (res) {
                })
            }

            fetchStudent();


            $('body').on('click', '.upload_new_img', function() {
                $('#changeImageModal').modal('show');
            })

            function activityTap(data) {
                body = $('#activity')
                guard = data.guardian
                ot = JSON.parse(data.others)
                body.html(`
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div><b>Registration No:</b> ${data.registration_number} </div>
                                <div><b>Admission Date:</b> ${formatDate(data.created_at)} </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <div><b>Date Of Birth:</b> 10, Jan 2022 </div>
                                <div><b>Admission Date:</b> 10, Jan 2022 </div>
                            </div>

                            <hr>
                            <div class="d-flex justify-content-between">
                                <div><b>Username:</b> ${data.username} </div>
                                <div><b>Password:</b> ${data.pwd} </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-bold">Parent/ Guardian Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                                src="https://portal.schoolpetal.com/assets/img/user4-128x128.jpg" alt="User profile picture">
                                        </div>

                                        <h3 class="profile-username text-center">${guard.guardian_name}</h3>

                                        <p class="text-muted text-center">${guard.guardian_address}</p>

                                        <div class="text-center">
                                            <a href="/control/gurdian/${guard.id}">Go-to-profile <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="d-flex justify-content-between">
                                        <div><b>Father's Name:</b> ${guard.father_name} </div>
                                        <div><b>Father's Phone:</b> ${guard.father_phone} </div>
                                    </div>

                                    <hr>

                                    <div class="d-flex justify-content-between">
                                        <div><b>Father's Occupation:</b> ${guard.father_occupation} </div>
                                        <div><b>Father's Address:</b> ${guard.father_office_address} </div>
                                    </div>

                                    <hr>

                                    <div class="d-flex justify-content-between">
                                        <div><b>Mother's Name:</b> ${guard.mother_name} </div>
                                        <div><b>Mother's Phone:</b> ${guard.mother_phone} </div>
                                    </div>

                                    <hr>

                                    <div class="d-flex justify-content-between">
                                        <div><b>Mother's Occupation:</b> ${guard.mother_occupation} </div>
                                        <div><b>Mother's Address:</b> ${guard.mother_address} </div>
                                    </div>

                                    <hr>

                                    <div class="d-flex justify-content-between">
                                        <div><b>Guardian's Name:</b> ${guard.guardian_name} </div>
                                        <div><b>Guardian's Phone:</b> ${guard.guardian_phone} </div>
                                    </div>

                                    <hr>

                                    <div class="d-flex justify-content-between">
                                        <div><b>Guardian's Email:</b> ${guard.guardian_email} </div>
                                        <div><b>Guardian's Address:</b> ${guard.guardian_address} </div>
                                    </div>



                                    <hr>

                                    <h5 class="text-muted">Send SMS To Gurdian</h5>

                                    <form action="">
                                        <div class="form-group">
                                            <textarea name="" id="" rows="2" class="form-control"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-primary" onclick="return confirm('Balance reminder will be sent to this gurdian')" > <i class="fa fa-paper-plane" aria-hidden="true"></i> Send Balance Reminder SMS</button>
                                            <button class="btn btn-secondary float-right"> <i class="fa fa-paper-plane" aria-hidden="true"></i> Send </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-bold"> Miscellanous Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div><b>Blood Group:</b> ${ot.blood_group ?? ''} </div>
                                <div><b>Geno Type:</b> ${ot.genotype ?? ''} </div>
                            </div>

                            <hr>

                            <div class="d-flex justify-content-between">
                                <div><b>Ailment:</b> ${ot.ailment ?? 'None'} </div>
                                <div><b>Disablity:</b> ${ot.disability ?? 'None'} </div>
                            </div>

                            <hr>

                            <div class="d-flex justify-content-between">
                                <div><b>Previosu School:</b> ${ot.previous_school ?? 'None'} </div>
                                <div><b>Reason For leaving:</b> ${ot.reason_for_leaving ?? 'None'} </div>
                            </div>

                        </div>
                    </div>
                `)
            }



            function settingTab(data){
                body = $('#settings')
                guard = data.guardian
                ot = JSON.parse(data.others)
                body.html(`
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-bold">Edit Basic Info</h4>
                    </div>
                    <div class="card-body">
                        <form action="" id="basic_info" class="row">
                            <div class=" col-md-4 form-group">
                                <label>Surname </label>
                                <input type="text" name="surname" class="form-control" value="${data.surname}" placeholder="Surname">
                            </div>

                            <div class=" col-md-4 form-group">
                                <label>Firstname</label>
                                <input type="text" name="firstname" class="form-control" value="${data.firstname}" placeholder="Firstname">
                            </div>

                            <div class=" col-md-4 form-group">
                                <label>Othernames</label>
                                <input type="text" name="othername" class="form-control" value="${data.othername}" placeholder="Othernames">
                            </div>

                            <div class=" col-md-6 form-group">
                                <label>Gurdian</label>
                                <select name="guardian" class="form-control select2bs4" id="select_guardian">
                                    <option selected value="${guard.id}">${guard.guardian_name} | ${guard.guardian_email}</option>
                                </select>
                            </div>
                            <div class=" col-md-2 form-group">
                                <label>Gender</label>
                                <select name="gender" class="form-control select2bs4" id="">
                                    <option selected>${data.sex}</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class=" col-md-4 form-group">
                                <label>Registration Number</label>
                                <input type="text" name="reg" class="form-control" value="${data.registration_number}" placeholder="Registration Number">
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-secondary float-right basic_info">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-bold">Class & Arm</h4>
                    </div>
                    <div class="card-body">
                        <form action="" class="row">
                            <div class="col-md-4 form-group">
                                <label>Class</label>
                                <select name="" id="select_class" class="form-control  select2bs4">
                                    <option selected value="${(data.class) ? data.class.id : ''}">${(data.class) ? data.class.class : ''}</option>
                                </select>
                            </div>

                            <div class="col-md-4 form-group">
                                <label>Arm</label>
                                <select name="" id="select_arm" class="form-control select2bs4">
                                    <option selected value="${(data.arm) ? data.arm.id : ''}">${(data.arm) ? data.arm.arm : ''}</option>
                                </select>
                            </div>

                            <div class="col-md-4 form-group">
                                <label class="text-white">.</label>
                                <button class="btn btn-secondary btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-bold">Change Authentication Details</h4>
                    </div>
                    <div class="card-body">
                        <form id="auth_det" class="row">
                            <div class="col-md-4 form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" value="${data.username}" placeholder="Enter Username">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>Password</label>
                                <input type="number" class="form-control" name="password" value="${data.pwd}" placeholder="4-6 Digits">
                            </div>

                            <div class="col-md-4 form-group">
                                <label class="text-white">.</label>
                                <button class="btn btn-secondary btn-block auth_det">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-bold">Edit Other Info</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" class="row" id="miscellanous">
                            <div class="col-md-3 form-group">
                                <label>Blood Group</label>
                                <input type="text" class="form-control" name="blood_group" value="${ot.blood_group}" placeholder="Enter Blood Group ie O-">
                            </div>

                            <div class="col-md-3 form-group">
                                <label>Geno Type</label>
                                <input type="text" class="form-control" name="genotype" value="${ot.genotype}" placeholder="Enter Genetype i.e AA">
                            </div>

                            <div class="col-md-3 form-group">
                                <label>Ailment</label>
                                <input type="text" class="form-control" name="ailment" value="${ot.ailment}" placeholder="Enter if any">
                            </div>

                            <div class="col-md-3 form-group">
                                <label>Disability</label>
                                <input type="text" class="form-control" name="disability" value="${ot.disability}" placeholder="Enter if any">
                            </div>


                            <div class="col-md-6 form-group">
                                <label>Previous School Attended</label>
                                <input type="text" class="form-control" name="previous_school" value="${ot.previous_school}" placeholder="">
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Reason For Leaving Previous School</label>
                                <textarea name="reason_for_leaving" rows="2" class="form-control" >${ot.reason_for_leaving}</textarea>
                            </div>

                            <div class="col-md-12 ">
                                <button type="button" class="btn btn-secondary float-right miscellanous">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                `)
            }



            $('.changeImage').on('submit', function(e) {
                e.preventDefault();
                formData = new FormData(this);
                $.ajax({
                    method: 'POST',
                    url: api_url+'student/update_photo',
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: () => {
                        btnProcess('.changeImageBtn', '', 'before')
                    },
                }).done(function(res) {
                    littleAlert(res.message);
                    btnProcess('.changeImageBtn', 'Update', 'after')
                    fetchStudent(); $('#changeImageModal').modal('hide');
                }).fail(function(res) {
                    btnProcess('.changeImageBtn', 'Update', 'after')
                    littleAlert(res.responseJSON);
                })
            })


            $('body').on('click', '.auth_det', function(e) {
                e.preventDefault();
                form = $('#auth_det')
                username = $(form).find('input[name="username"]').val()
                pass = $(form).find('input[name="password"]').val();
                if(!username || !pass){ littleAlert('The username and password field is required', 1); return; }
                $.ajax({
                    method: 'post',
                    url: api_url+'student/update_authdetails',
                    data: {
                        username: username,
                        password: pass,
                        student_id: '250',
                    },
                    beforeSend:() => {
                        btnProcess('.auth_det', 'Submit', 'before');
                    }
                }).done(function(res) {
                    littleAlert(res.message);
                    btnProcess('.auth_det', 'Submit', 'after');
                }).fail(function(res) {
                    parseError(res.responseJSON);
                    btnProcess('.auth_det', 'Submit', 'after');
                })
            })



            $('body').on('click', '.miscellanous', function(e) {
                e.preventDefault();
                form = $('#miscellanous');
                $.ajax({
                    method: 'post',
                    url: api_url+'student/update_miscellaneous',
                    data: {
                        blood_group: $(form).find('input[name="blood_group"]').val(),
                        genotype: $(form).find('input[name="genotype"]').val(),
                        disability: $(form).find('input[name="disability"]').val(),
                        ailment: $(form).find('input[name="ailment"]').val(),
                        student_id: '250',
                        previous_school: $(form).find('input[name="previous_school"]').val(),
                        reason_for_leaving: $(form).find('input[name="reason_for_leaving"]').val(),
                    },
                    beforeSend:() => {
                        btnProcess('.miscellanous', 'Submit', 'before');
                    }
                }).done(function(res) {
                    littleAlert(res.message);
                    btnProcess('.miscellanous', 'Submit', 'after');
                    fetchStudent();
                }).fail(function(res) {
                    parseError(res.responseJSON);
                    btnProcess('.miscellanous', 'Submit', 'after');
                })
            })

            function fetchReq()
            {
                $.ajax({
                    method: 'get',
                    url: api_url+'registration_requirements'
                }).done(function (res){
                    guardian = $('#select_guardian')
                    res.data.guardians.map(guard => {
                        guardian.append(`<option value="${guard.id}">${guard.guardian_name} | ${guard.guardian_email}</option>`)
                    });

                    cla = $('#select_class')
                    res.data.classes.map(clas => {
                        cla.append(`<option value="${clas.id}">${clas.class}</option>`)
                    });

                    arms = $('#select_arm')
                    res.data.arms.map(arm => {
                        arms.append(`<option value="${arm.id}">${arm.arm}</option>`)
                    });


                }).fail(function(res) {
                })
            }



            $('body').on('click', '.basic_info', function (e) {
                e.preventDefault();
                form = $('#basic_info')

                surname = $(form).find('input[name="surname"]').val();
                firstname = $(form).find('input[name="firstname"]').val();
                othername = $(form).find('input[name="othername"]').val()
                gender = $(form).find('select[name="gender"]').val();
                guard = $(form).find('select[name="guardian"]').val();
                reg = $(form).find('input[name="reg"]').val();

                if(!guard || !surname || !firstname || !gender) { littleAlert('Pls fill out the required fields'); return; }

                $.ajax({
                    method: 'post',
                    url: api_url+'student/update_basic_info',
                    data: {
                        surname: surname,
                        firstname: firstname,
                        othername: othername,
                        reg: reg,
                        gender: gender,
                        guardian_id: guard,
                        student_id: '250',
                    },
                    beforeSend:() => {
                        btnProcess('.basic_info', 'Update', 'before');
                    }
                }).done(function(res) {
                    littleAlert(res.message);
                    btnProcess('.basic_info', 'Update', 'after');
                    fetchStudent();
                }).fail(function(res) {
                    parseError(res.responseJSON);
                    btnProcess('.basic_info', 'Update', 'after');
                })
            })



            function fetchFee() {
                $.ajax({
                    method: 'get',
                    url: api_url+'student/fee_sum/250'
                }).done(function(res) {
                    putFee(res.data);
                }).fail(function(res) {
                })
            }

            fetchFee();


            function putFee(data) {

                body = $('#levies')
                body.html(``);

                fee_str = ''; fee_amt = 0 ; fee_dis = 0; fee_total = 0;

                data.fees.forEach((fee, index) => {
                    fee_amt += parseInt(fee.amount);
                    fee_dis += parseInt(fee.discount);
                    fee_total += parseInt(fee.total);
                    fee_str += `
                        <tr>
                            <td>${fee.fee_cat.fee}</td>
                            <td>${moneyFormat(fee.amount)}</td>
                            <td>${moneyFormat(fee.discount)}</td>
                            <td>${moneyFormat(Math.abs(fee.total))}</td>
                        </tr>
                    `
                })


                fee_str += `
                    <tr>
                        <th></th>
                        <th>${moneyFormat(fee_amt)}</th>
                        <th>${moneyFormat(fee_dis)}</th>
                        <th>${moneyFormat(Math.abs(fee_total))}</th>
                    </tr>
                `
                total_owing = Math.abs(fee_total) + Math.abs(data.brought_fwd);

                fee_str += `
                <tr>
                    <th colspan="3">Balance Brought Foward</th>
                    <td>${moneyFormat(Math.abs(data.brought_fwd))}</td>
                </tr>
                <tr>
                    <th colspan="3">Total Owing</th>
                    <th>${ moneyFormat(total_owing) }</th>
                </tr>
                <tr>
                    <th colspan="3">Amount Paid</th>
                    <th>${moneyFormat(data.amt_paid)}</th>
                </tr>
                <tr>
                    <th colspan="3">Expected Payments</th>
                    <th>${moneyFormat(total_owing - data.amt_paid)}</th>
                </tr>
                `


                pay_string = ''; pay_total = 0;

                data.pays.forEach((pay) => {
                    pay_total += parseInt(pay.total);
                    pay_string += `
                        <tr>
                            <td>${((pay.fee_cat) ? pay.fee_cat.fee : 'General Payment')}</td>
                            <td>${moneyFormat(pay.total)}</td>
                            <td>${formatDate(pay.created_at)}</td>
                        </tr>
                    `
                });


                pay_string += `
                    <tr>
                        <th>Total</th>
                        <th colspan="2">${moneyFormat(pay_total)}</th>
                    </tr>
                `

                body.append(`
                <div><a href="javascript:;" data-toggle="modal" data-target="#makePayment" class="btn btn-secondary mb-3">Make Fee Payment  </a></div>
                <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-bold">School Fees</h4>
                        </div>
                        <div class="card-body p-1">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <tr>
                                        <th>Fee</th>
                                        <th>Amount</th>
                                        <th>Discount</th>
                                        <th>Total</th>
                                    </tr>


                                    ${ fee_str }


                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-bold">Recent Payments</h4>
                        </div>
                        <div class="card-body p-1">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <tr>
                                        <th>Fee</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                    </tr>
                                    ${pay_string}
                                </table>
                            </div>
                        </div>
                    </div>


                    <div><a href="/control/student/fee/250" class="btn btn-block btn-secondary">View School Fee Details <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </a></div>

                `)
            }



            $('body').on('click', '.make_pay', function(e) {
                e.preventDefault();
                form = $('#make_pay');
                fee_cat = $(form).find('select[name="fee_cat"]').val();
                amt = $(form).find('input[name="amount"]').val();
                if(!confirm(`Are you sure you want to make payment of ${moneyFormat(amt)} ? payment cannot be altered once submited.`)) { return; }
                $.ajax({
                    method: 'post',
                    url: api_url+'make_fee_payment',
                    data: {
                        student_id: '250',
                        fee_cat_id: fee_cat,
                        amount: amt
                    },
                    beforeSend:() => {
                        btnProcess('.make_pay', 'Make Payment', 'before');
                    }
                }).done(function(res) {
                    littleAlert(res.message);
                    btnProcess('.make_pay', 'Make Payment', 'after');
                    fetchFee();
                    $('#makePayment').modal('hide');
                    form[0].reset();
                }).fail(function(res) {
                    parseError(res.responseJSON);
                    btnProcess('.make_pay', 'Make Payment', 'after');
                })
            });


            function fetchResult() {
                $.ajax({
                    method: 'get',
                    url: api_url+'results/250'
                }).done(function (res) {
                    console.log(res);
                    resultTab(res);
                }).fail(function(res) {
                    console.log(res);
                })
            }
            fetchResult();



            function resultTab(data) {

                body = $('#result')


                res_str = ''

                data.results.forEach((res, index) => {
                    res_str += `
                        <tr>
                            <td>${index+1}</td>
                            <td>${res.session.session}</td>
                            <td>${term_text(res.term.term)}</td>
                            <td>${res.class.class}</td>
                            <td>${res.subjects}</td>
                            <td>${formatDate(res.created_at)}</td>
                            <td><a class="btn btn-xs btn-info" href="/control/view-result/${res.id}"><i class="fas fa-eye"></i> View</a></td>
                        </tr>
                    `
                })



                body.html(`

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-bold">Results</h3>
                        </div>
                        <div class="card-body p-1">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <tr>
                                        <th>#</th>
                                        <th>Session</th>
                                        <th>Term</th>
                                        <th>Class</th>
                                        <th>Subjects</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>


                                    ${ res_str }


                                </table>
                            </div>
                        </div>
                    </div>
                `)
            }


            function fetchFeeCategory() {
                $.ajax({
                    method: 'post',
                    url: api_url+'fetch_fee_category'
                }).done(function (res) {
                    console.log(res);
                    body = $('#fee_cat');
                    body.html(`<option disabled selected>Select Fee Category</option> <option value="0">General Payment</option>`);
                    res.data.map(fee => {
                        body.append(`
                            <option value="${fee.id}">${fee.fee}</option>
                        `)
                    })
                }).fail(function (res) {
                    console.log(res);
                })
            }

            fetchFeeCategory();


            $.ajax({
                method: 'get',
                url: api_url+`result/250`
            }).done(function(res) {
                console.log(res);
                $('#result').append(ResultTemplate(res.data, ''))
            })



        })
    </script>



    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script> -->



        </div>

        <footer class="main-footer">
    <strong>Copyright ©  <b>SchoolPortal</b> </strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 2.5
    </div>
</footer>

        
        <script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) --


        <script>
            $(function() {
                $('.select2').select2()
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })
            })
        </script>

        <script>
            $(function() {
                var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
                function firstToast(icon="success", message='Done'){
                    Toast.fire({
                        icon: icon,
                        title: message
                    });
                }
            })
        </script>



<div id="sidebar-overlay"></div></div></body></html>