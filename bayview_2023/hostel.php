<?php
 include('control.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddHostel</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="./CSS/cleaner2.css">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    

    <script src="./JavaScript/cleaner.js"> </script>
</head>
<body>

<!-- nav bar -->
<?php include('nav.php'); ?>
<!-- end of navbar -->


<div id="main">
  <!-- <p>Click on the hamburger menu/bar icon to open the sidebar, and push this content to the right.</p> -->
  <div id = "page_head"><h2>Hos<span id="head">tels</span></h2></div>
            
    <section>
      <form action="" method="POST">
          
        <label for="hostelname">Hostel Name</label>
        <div class="form-group">
          <input type="text" name="hostelname" id="hostelname" class="form-control">
        </div>
        <label for="address">Address</label>
        <div class="form-group">
          <input type="text" name="address" id="address" class="form-control">
        </div>
        <label for="numberofrooms">Number Of Rooms</label>
        <div class="form-group">
          <input type="text" name="numberofrooms" id="numberofrooms" class="form-control">
        </div>
        <label for="numberofrooms">Number Of Bedspace</label>
        <div class="form-group">
          <input type="text" name="bedspace" id="bedspace" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" name="" class="btn btn-primary" onclick="addHostel()">Add Hostel</button>
        </div>
      

      </form>      
    </section>
    <sectiom class="container">
      <table id="stud_tab"class="table table-bordered toggle-circle mb-0" data-page-size="7">
        <thead>
          <th>#</th>
          <th>Hostel Name</th>
          <th>Hostel Address</th>
          <th>Number Of Rooms</th>
          <th>Number Of Bedspaces</th>
        </thead>
        <?php
        $i=1;
        $sql=$db->query("SELECT * FROM hostel");
        while($rows=mysqli_fetch_assoc($sql)){?>
        <tbody>
        <tr>
        <td><?=$i++?></td>
        <td><?=$rows['name']?></td>
        <td><?=$rows['address']?></td>
        <td><?=$rows['numberofrooms']?></td>
        <td><?=$rows['numberofbedspace']?></td>
        
        </tr>
        </tbody>
        <?php }?>
      </table> 
          


    </sectiom>

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
  function addHostel(){
    var hostelName = document.getElementById('hostelname').value;
    var address = document.getElementById('address').value;
    var numberofrooms = document.getElementById('numberofrooms').value;
    var bedspace = document.getElementById('bedspace').value;
      // alert(hostelName+address);
    $.ajax({
      type:'get',
      url:'myclass.php?hostelname='+ hostelName +'&address='+ address +'&numberofrooms='+ numberofrooms +'&bedspace='+ bedspace +'&type=addhostel'
    }).done(function(data){
      alert(data);
    })
 }

//  function hostel(){
//   $.ajax({
//     type:'get',
//     url:'myclass.php?type=hostel'
//   }).done(function(data){
//     console.log(data);
//     var hostel = JSON.parse(data);
//     for(var i=1; i<=hostel.length;i++){
      
//     }
//   })
//  }

//  function delete1(){

//   var 

//  }

</script>

</body>
</html>  