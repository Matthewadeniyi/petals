<?php 
include_once("myclass.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="Sj03h7sYEFwKe2F6jAHyUXev0PNTiWyP9ZWwMwaf">
 <title> General Setup
 </title>
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

<body class="hold-transition sidebar-mini layout-fixed">
 <div class="wrapper">


  

  <?php include("nav.php")?>


  <div class="content-wrapper">
   <div class="littleAlert"></div>

   <div class="content-header">
    <div class="container-fluid">
     <div class="row mb-2">
      <div class="col-sm-6">
       <h1 class="m-0">General Setup</h1>
      </div>
      <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
        <li class="breadcrumb-item active">General Setup</li>
       </ol>
      </div>
     </div>
    </div>
   </div>


   <section class="content">
    <div class="row">
     <div class="col-lg-6 col-12">
     <div class="card card-secondary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-plus-square"></i>
                                Create Session
                            </h3>
                        </div>
                        <div class="card-body">
                                <form method='POST' id="create_new_session">
                                    <input name="term" type="hidden">
                                    <div class="form-group">
                                        <label for="">Session</label>
                                        <select id="session_id" name="session" class="form-control select2bs4">
                                            <option selected="selected" disabled>Choose Session</option>
                                            <?php 
                                                $i = -2;
                                               while($i <= 2){
                                                    $e = $i++;
                                                    $a = date('Y') + $e;
                                                    $b = $a + 1;
                                                    echo'<option>'.$a.'/'.$b.'</option>';                                           
                                                    }
                                            ?>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group mb-0 float-right">
                                        <button type="submit" name="Term"  class="btn btn-secondary create_session_btn">Create Session</button>
                                    </div>
                                </form>
                            
                        </div>
                    </div>


      <div class="card card-secondary card-outline">
       <div class="card-header">
        <h3 class="card-title">
         <i class="fa fa-list-alt" aria-hidden="true"></i>
         Recent Sessions
        </h3>
       </div>
       <div class="table-responsive">
                                <table id="example1" class="table mb-0 table-bordered" >
                                    <thead>
                                        <tr>
                                            <th>Session</th>
                                            <th colspan="2">Session Info</th>
                                        </tr>
                                    </thead>
                                    <tbody id="session_body">
                                        <tr>
                                            <td>
                                           
                                            </td>
                                            <td>
                                                <table >
                                                    <thead class="table">
                                                        <th>T</th>
                                                        <th>Closes</th>
                                                        <th>Next-Term</th>
                                                        <th></th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>First-Term</td>
                                                            <td>null</td>
                                                            <td>null</td>
                                                            <td>null</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Second-Term</td>
                                                            <td>null</td>
                                                            <td>null</td>
                                                            <td>null</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Third-Term</td>
                                                            <td>null</td>
                                                            <td>null</td>
                                                            <td>null</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                       
                                       
                                    </tbody>
                                </table>
                            </div>

      </div>

     </div>

     <div class="col-lg-6 col-12">
      <div class="card card-secondary card-outline">
       <div class="card-header">
        <h3 class="card-title">
         <i class="fas fa-edit"></i>
         Edit School Info
        </h3>
       </div>
       <div class="card-body">
        <form action="" class="row" method="POST">
         <div class="col-md-12 form-group">
          <label for="">School Name</label>
          <input type="text" name="name" class="form-control">
         </div>
         <div class="col-md-6 form-group">
          <label for="">E-mail</label>
          <input type="email" name="email" class="form-control">
         </div>
         <div class="col-md-6 form-group">
          <label for="">Website</label>
          <input type="url" name="website" class="form-control" placeholder="School website" >
         </div>

         <div class="col-md-6 form-group">
          <label for="">Phone Number</label>
          <input type="text" name="phone" class="form-control" placeholder="Phone Number">
         </div>

         <div class="col-md-6 form-group">
          <label for="">Alternative Phone Number</label>
          <input type="text" class="form-control" placeholder="Phone Number" value="">
         </div>

         <div class="col-md-12 form-group">
          <label for="">Motto</label>
          <input type="text" name="motto" class="form-control" value="">
         </div>

         <div class="col-md-12 form-group">
          <label for="">Address</label>
          <textarea name="address" id="" class="form-control" cols="3"></textarea>
         </div>


         <div class="form-group col-md-12 mb-0 ">
          <button type="submit" class="btn btn-secondary float-right" name="updateSchoolInfo">Update School Info</button>
         </div>
        </form>

        <hr>
        <b>Update School Logo</b>
        <div>
         <div class="mt-2 d-flex justify-content-center">
          <img width="100%" src="https://apis.schoolpetal.com/assets/img/schools/8012145schoolpetal-international-school.jpg" alt="SchoolPetal Logo" class="brand-image img-circle elevation-3" style="opacity: .5">

         </div>
         <button class=" uploadSchoolPics btn btn-secondary btn-block mt-5">Upload New Photo</button>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>


   <div class="modal fade" id="editTermModal">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
     <div class="modal-content">
      <div class="modal-header">
       <p class="modal-title text-bold">Edit Term (2021/2022 Session, First Term)</p>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
       </button>
      </div>
      <div class="modal-body">
       <form action="#" id="updateTermForm">
        <div class="form-group">
         <label>Term Closes</label>
         <input type="date" name="close" class="form-control">
         <input type="hidden" name="term_id">
        </div>

        <div class="form-group">
         <label>Next Term Begins</label>
         <input type="date" name="resume" class="form-control">
        </div>
        <div class="form-group">
         <label>Term Year</label>
         <input type="number" name="year" class="form-control">
        </div>
        <div class="form-group float-right">
         <button type="submit" class="btn btn-secondary save_updated_term_changes">Save changes</button>
        </div>
       </form>
      </div>

     </div>
    </div>
   </div>

   <div class="modal fade" id="uploadPicsModal">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
     <div class="modal-content">
      <div class="modal-header">
       <p class="modal-title text-bold">Upload School Logo</p>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
       </button>
      </div>
      <div class="modal-body">
       <form id="uploadPics" enctype="multipart/form-data">
        <div class="form-group">
         <label>Logo</label>
         <input type="file" name="logo" class="form-control">
        </div>
        <div class="form-group float-right">
         <button type="submit" class="uploadPics btn btn-secondary">Save changes</button>
        </div>
       </form>
      </div>

     </div>
    </div>
   </div>


   <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>

   <script>
    $(function() {

     $.ajaxSetup({
      headers: {
       'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZDU2MzQ1MGQyMGY1ODlmMTcxNGFkNTkyNTUxOGM5ZjlmMTcyNmQyNzc1MGVjMjI0ZDAwOWQ5NjZlMjViZTAyZDM1ZTc2ODI4MDA3YTIzN2QiLCJpYXQiOjE2OTIwODQ4NDAuNDAxMjY4LCJuYmYiOjE2OTIwODQ4NDAuNDAxMjc3LCJleHAiOjE3MjM3MDcyNDAuMzU4MDcyLCJzdWIiOiIyMCIsInNjb3BlcyI6W119.lCs_mz-Qn3RUZeHSaQ7z8ajONGMdyQtvtsPgEE4vpSgJafBGOnUBA2PJq2575LD-PIUL2yUqtA7F2ERuZdLfmTljSdahTpWFa-yZsez1fE_3sIuTHM3qNDFuurbWN4-7JMy6yZIHkK8hINmcqlozU4r5FyCjvOO-cLY6rc9JGwdf8iuYavE2ewGRFoJgT0bkbz1ZmP50AlmLNw5DPbfrEPlgJeqpGj-0YQ-KokbHPzIheAFBKaAPZekvpTsPb0rZxtnSQGM-ND5Xzdlv04m4Uw186f3AwPtTke3g9reeWO2iXrGkyS6LvqP8xqbqMl0XBYZRPfKq8HZi0nzFgDFrT_1J9VipAlko7eto8zaP_S_Q_HtPWXwFuS_PnLFAiWHsbLaPnmsB_WX894MllDZeYO8C8b15ip_fSn1wrzQbC4vuzGeQFjQy81K938qrk-2VxDyUKLkg3p6Oag9hgkA5JW9Dok9MjKHFoCgPlWaLgrqavSX2yqZbB8k5sTsmpjBtM0DqFgaNOV9LezwZVeeucrRfYkAyLjux4NPWbn7KMeertrYGoi82muiwGYMb6oRWFbbaZUCqu3hbTCo9_0Dod3Etd-XACyfElDGWL9mUa2GoYx9IbaDLoDcZ33M9Jn2pG1F41tNM1Pw_M-Jhm9pnSF2-fa9jxrtzPHYeiKasMz0`
      }
     });


     $('.uploadSchoolPics').on('click', function() {
      $('#uploadPicsModal').modal('show')
     })


     $('#uploadPics').on('submit', function(e) {
      e.preventDefault();
      sbtn = $('.uploadPics');
      formData = new FormData(this);

      $.ajax({
       method: 'POST',
       url: api_url + `school/updatelogo`,
       data: formData,
       contentType: false,
       processData: false,
       beforeSend: () => {
        btnProcess(sbtn, '', 'before');
       },
      }).done(function(res) {
       littleAlert(res.message);
       btnProcess(sbtn, 'Save changes', 'after');
       setTimeout(() => {
        littleAlert('Logo will appear on you next login')
       }, 1500);
      }).fail(function(res) {
       parseError(res.responseJSON);
       btnProcess(sbtn, 'Save changes', 'after');
       console.log(res);
      })
     })


     function fetchSession() {
      $.ajax({
       method: 'get',
       url: api_url + 'get/session'
      }).done(function(res) {
       body = $('#session_body')
       body.html(``);
       res.data.map(sess => {
        terms = sess.terms

        c_term = `10`
        link = (!c_term) ? `/control/setting/sub/` : `/control/setting/renew/`;

        body_txt = '';
        terms.forEach(term => {
         btn = (term.status == 1) ? `Active` : `<button class="btn btn-xs btn-success activateTerm" data-id="${term.id}" title="Click to activate term">
                                <i class="fa fa-check" aria-hidden="true"></i> Activate </button>`;
         btn = (term.paid == 1) ? btn : `<a href="${link}${term.id}" class="btn btn-xs btn-danger" > Pay to Act </a>`;
         body_txt += `
                                <tr ${ (term.status == 1) ? `class="bg-success"` : '' }>
                                    <td> ${term_text(term.term)} </td>
                                    <td> ${ term.close }</td>
                                    <td> ${ term.resume }</td>
                                    <th>
                                        <button class="btn btn-xs btn-primary editTermInfo" data-data='${ JSON.stringify(term) }'><i class="fas fa-edit"></i> Edit</button>
                                        ${btn}
                                    </th>
                                </tr>
                            `
        });

        body.append(`
                            <tr>
                                <td colspan="2">
                                    ${sess.session}
                                </td>
                                <td>
                                    <table class="table table-sm">
                                        <tr>
                                            <th>Term</th>
                                            <th>Closes</th>
                                            <th>Next-Term</th>
                                            <th></th>
                                        </tr>

                                        ${body_txt}

                                    </table>
                                </td>

                            </tr>

                        `)
       });

      }).fail(function(res) {

      });
     }

     fetchSession();


     $('body').on('click', '.editTermInfo', function() {
      data = $(this).data('data');
      $('#editTermModal').modal('show');
      modal = $('#editTermModal');
      $('.modal-title').find(modal).html(`Edit Term (${data.session} Session, ${term_text(data.term)})`)
      $('input[name="term_id"]').val(data.id);
      $(modal).find('input[name="year"]').val(data.year);
     });


     $('body').on('click', '.activateTerm', function() {
      term_id = $(this).data('id');
      if (!confirm('All activities will be switched to selected term !')) {
       return;
      }
      $(this).html(`<span class="spinner-border spinner-border-sm" aria-hidden="true"></span>`)
      $('.activateTerm').attr('disabled', 'disabled');

      $.ajax({
       method: 'post',
       url: api_url + 'activateterm',
       data: {
        term_id: term_id
       }
      }).done(function(res) {
       littleAlert(res.message);
       fetchSession();

       $.ajax({
        method: 'post',
        url: '/reput_term',
        data: {
         '_token': `Sj03h7sYEFwKe2F6jAHyUXev0PNTiWyP9ZWwMwaf`,
         term: JSON.stringify(res.term)
        },
       }).done(function(res) {
        littleAlert('Current term Updated sucessfully');
       }).fail(function(res) {})


      }).fail(function(res) {
       $('.activateTerm').html(`<i class="fa fa-check" aria-hidden="true"></i>`)
       $('.activateTerm').removeAttr('disabled');
       parseError(res.responseJSON);
      })
     })



     $('#updateTermForm').on('submit', function(e) {
      e.preventDefault();
      form = $('#updateTermForm')
      close = $(form).find('input[name="close"]').val();
      resume = $(form).find('input[name="resume"]').val();
      year = $(form).find('input[name="year"]').val();
      if (!close || !resume || !year) {
       littleAlert('All fileds are required', 1);
       return
      }

      $.ajax({
       method: 'post',
       url: api_url + 'update/term/info',
       data: {
        term_id: $(form).find('input[name="term_id"]').val(),
        close: close,
        resume: resume,
        year: year
       },
       beforeSend: () => {
        btnProcess('.save_updated_term_changes', 'Save Changes', 'before');
       }
      }).done(function(res) {
       littleAlert(res.message);
       btnProcess('.save_updated_term_changes', 'Save Changes', 'after');
       fetchSession();
       $('#editTermModal').modal('hide');
      }).fail(function(res) {
       btnProcess('.save_updated_term_changes', 'Save Changes', 'after');
       parseError(res.responseJSON);
      })
     })


     $('#create_new_session').on('submit', function(e) {
      e.preventDefault();
      form = $('#create_new_session');
      session = $('#session_id').val();
      if (!session) {
       littleAlert('Pls select a session', 1);
       return
      }

      $.ajax({
       method: 'post',
       url: api_url + 'create/session',
       data: {
        session: session
       },
       beforeSend: () => {
        btnProcess('.create_session_btn', 'Create Session', 'before');
       }
      }).done(function(res) {
       littleAlert(res.message);
       btnProcess('.create_session_btn', 'Create Session', 'after');
       fetchSession();
      }).fail(function(res) {
       parseError(res.responseJSON);
       btnProcess('.create_session_btn', 'Create Session', 'after');
      })
     });


    })
   </script>


  </div>

  <footer class="main-footer">
   <strong>Copyright &copy; <b>School Petal</b> </strong>
   All rights reserved.
   <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 2.5
   </div>
  </footer>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
   <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->

 <!-- jQuery -->
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
 <script src="../dist/js/demo.js"></script>
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="../dist/js/pages/dashboard.js"></script>


 <script src="https://portal.schoolpetal.com/assets/js/adminlte.js"></script>

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

   function firstToast(icon = "success", message = 'Done') {
    Toast.fire({
     icon: icon,
     title: message
    });
   }
  })
 </script>
</body>

</html>