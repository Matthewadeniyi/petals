<?php
    include("control.php")
    //session_start();
   // $sessionID = $_GET['sid'];
   // session_id($sessionID);

// Set the session ID to the retrieved value
//session_start();
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="./CSS/stud_list.css">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <script src="./JavaScript/stud_list.js"></script>
</head>
<body>
    
    <!-- nav bar -->
    <?php include("nav.php")?>

           
    <div id="main">
        <h2 id="title">All<span id="head">Host</span>el's</h2>
        <section>
            <table id="stud_tab" class="table table-striped  table-borderless table-hover table-responsive" >
              <thead>
                <th>#</th>
                <th>Hostel Name</th>
                <th>Hostel Address</th>
                <th>Number Of Rooms</th>
                <th>Number Of Available Bedspaces per room</th>
                <th>Number Of Available Bedspaces</th>
                <th>Action</th>
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
                <td><?=$pro->hostel(1)?></td>
                <td>
                    <a href="bookhostel.php?hostelid=<?=$rows['id']?>&&id=2" class="badge badge-success"><i class="mdi mdi-eye"></i> Book a Room</a>
                    <a href="updatehostel.php?hostelid=<?=$rows['id']?>" class="badge badge-success"><i class="mdi mdi-eye"></i> Update</a> 
                    <button type="submit" class=" badge badge-danger" name="delete" value="<?=$rows['id']?>"><i class="mdi mdi-eye"></i> Delete</button> 
                  </td>
                </tr>
              </tbody>
            <?php }?>
          </table>   
          </section>
        
    </div>

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
</body>
</html>