<?php
    include('control.php');
    $hostelid=$_GET['hostelid'];
    $userid=$_GET['id'];
    $sql=$db->query("SELECT * FROM hostel WHERE id='$hostelid' ");
    $rows=mysqli_fetch_assoc($sql);
    $rooms = $rows['numberofrooms'];
    $bedspace = $rows['numberofbedspace'];
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-Hostel</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="./CSS/cleaner2.css">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    

    <script src="./JavaScript/cleaner.js"></script>
</head>
<body>

<!-- nav bar -->
<?php include('nav.php'); ?>
<!-- end of navbar -->


<div id="main">
  <!-- <p>Click on the hamburger menu/bar icon to open the sidebar, and push this content to the right.</p> -->
  <div id = "page_head"><h2><span id="head"><?=$rows['name']?></span></h2></div>
  <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#addStaffModal"> Add Staff</button>


  <table class="table table-bordered  toggle-circle mb-0" data-page-size="7">
    <thead>
    <th></th>
        <?php
            $i=1;
            while($i<=$bedspace){ $e=$i++?>
            <th>Bed <?=$e?></th>
        <?php }?>
    </thead>
       <tbody> <?php
            $j=1;
            while($j<=$rooms){ $f=$j++?>
            <tr>
            <th>Room <?=$f?></th>
            <?php
            $i=1;
            while($i<=$bedspace){ $e=$i++;
            $st = $pro->roomStatus($f,$e);
            $status = $st[0];
            $sn = $st[1];
            $x=' onclick="bookRoom('.$sn.')"';
            if($status > 0){$x = ' style="background-color: #CCC" onclick="alert(1234)"'; } ?>
            <td<?=$x?>> <?=$status?></td>
        <?php }?>
            </tr>
            
        <?php }?>
        <input type="hidden" name="" value="<?=$userid?>" id="userid">
    </tbody>
  </table>
  <div class="modal fade" id="addStaffModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold">Add Staff </p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" class="row" id="addStaffForm">
                        <div class="col-md-6 form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Thomas Gideon"  >
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="staff@schoolpetal.com" >
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="09000000000" >
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Role</label>
                            <select name="role" class="form-control select2bs4" style="width: 100%;"  >
                                <option selected disabled>Select Role</option>
                                <option>Accountant</option>
                                <option>Administrator</option>
                                <option>Teacher</option>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <button type="submit" class="btn btn-secondary float-right addStaff " name="AddStaff">Add Staff</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
 
<script src="jquery.min.js"></script>
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

<script>
  function updateHostel(){
    var hostelName = document.getElementById('hostelname').value;
    var address = document.getElementById('address').value;
    var numberofrooms = document.getElementById('numberofrooms').value;
    var hostelid = document.getElementById('hostelid').value;
      // alert(hostelName+address);
    $.ajax({
      type:'get',
      url:'myclass.php?hostelname='+ hostelName +'&address='+ address +'&numberofrooms='+ numberofrooms +'&hostelid='+ hostelid +'&type=updateHostel'
    }).done(function(data){
      alert(data);
    })
  } 
  function bookRoom(bedid){
    var userid = document.getElementById("userid").value;
    //alert(userid);
    $.ajax({
        type:'get',
        url:"myclass.php?userid="+ userid +"&bedid="+ bedid +"&type=bookroom"
    }).done(function(data){
        if(data == "Hostel Booked Succesfully"){
            alert(data);
        }
    })
  }

</script>

</body>
</html>  