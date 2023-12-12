<?php
    session_start();
    if($_SESSION['logged_in'] == true && $_SESSION['Role'] == 0){
    }else{
        header("Location: register.php");
    }
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="cleaner2.css">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    

    <script src="cleaner.js"> </script>
</head>
<body>

	<div class="top_navbar">
		<div class="menu">
			
			<h3>Bayview <span>Hostels</span>
			
				<button class="hamburger" onclick="openNav()">☰ </button>  
			</h3>
			
		</div>
	</div>
	
	<div id="mySidebar" class="sidebar">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
		<center>
			<img src="person.jpeg" class="profile_image" alt="">
			<h4>Admin</h4>
		</center>
		
		<ul class="nav_links">
			<li><img src = "home.png" ><a href="admin_index.php"> Dashboard</a></li>
			<br>
			<li><img src = "list-text.png" ><a href="stud_list.php">Student List</a></li>
			<br>
			<li><img src = "sweeping.png" ><a href="cleaner.php">Cleaner Schedule</a></li>
			<br>
			<li><img src = "bed.png" ><a href="available_room.php">Room Availability</a></li>
			<br>   
			<a href="logout.php" class="logout_btn">Logout</a>
			
</ul>
</div>

<div id="main">
  <!-- <p>Click on the hamburger menu/bar icon to open the sidebar, and push this content to the right.</p> -->
  <div id = "page_head"><h2>Clea<span id="head">ners</span></h2></div>
            
                <section>
                    <table id="cleaners" class="table table-striped table-borderless table-hover" width="100%">
                        <thead>
                            <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Cleaning Area</th>
                            <th>Total Number of Rooms</th>
                            <th>Phone Number</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php

                            include('config.php');

                            // Query Cleaners
                            $cleaner_sql = "SELECT `fname`, `lname`, `cleaning_area`, `no_of_rooms`, `tel_no`
                                             FROM `cleaner` 
                                             JOIN `cleaner_schedule` 
                                             ON cleaner.worker_id = cleaner_schedule.cleaner_id;";

                            $cleaner_result = $conn->query($cleaner_sql);

                            while($cleaner_row = $cleaner_result->fetch_assoc()){
                              echo "<tr>
                                    <td>$cleaner_row[fname]</td>
                                    <td>$cleaner_row[lname]</td>
                                    <td>$cleaner_row[cleaning_area]</td>
                                    <td>$cleaner_row[no_of_rooms]</td>
                                    <td>$cleaner_row[tel_no]</td>
                                    </tr>
                                    ";
                                  }
                        ?>  
                        </tbody>
                        
                          
                    </table>
                        
                </section>

</div>
<div id="delete"><button>Clear All Records</button></div>

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