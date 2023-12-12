<?php
 include('control.php');
 $hostelid=$_GET['hostelid'];
$sql=$db->query("SELECT * FROM hostel WHERE id='$hostelid' ");
$rows=mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update Hostel</title>

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
  <div id = "page_head"><h2>Hos<span id="head">tel's</span></h2></div>
            
    <section>
        <?php
            
        ?>
      <form action="" method="POST">
          
        <label for="hostelname">Hostel Name</label>
        <div class="form-group">
          <input type="text" name="hostelname" id="hostelname" class="form-control" value="<?=$rows['name']?>">
        </div>
        <label for="address">Address</label>
        <div class="form-group">
          <input type="text" name="address" id="address" class="form-control" value="<?=$rows['address']?>">
        </div>
        <label for="numberofrooms">Number Of Rooms</label>
        <div class="form-group">
          <input type="text" name="numberofrooms" id="numberofrooms" class="form-control" value="<?=$rows['numberofrooms']?>">
        </div>
        <label for="numberofbedspace">Number Of Bedspace</label>
        <div class="form-group">
          <input type="text" name="numberofbedspace" id="numberofbedspace" class="form-control" value="<?=$rows['numberofbedspace']?>">
        </div>
        <div style="display:none;">
            <label for="hostelid">Hostel ID</label>
            <div class="form-group">
              <input type="text" name="hostelid" id="hostelid" class="form-control" value="<?=$hostelid?>">
            </div>
        </div>
        <div class="form-group">
          <button type="submit" name="signUp" class="btn btn-primary" onclick="updateHostel()">Update Hostel Record</button>
        </div>
      

      </form>      
    </section>
    

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
      if(data=="Hostel Updated Succesfully"){
      alert(data);
    }else if(data == "Error during Inseertion"){
      alert(data);
    }else{return;}
    })
}


</script>

</body>
</html>  