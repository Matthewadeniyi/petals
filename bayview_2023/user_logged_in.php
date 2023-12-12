<?php
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./CSS/stylesheet.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	
	

	<title>Bayview Hostels</title>
</head>
<body id="body">

	<div id="mySidebar" class="sidebar">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
		
		<ul class="nav_links" style="margin-top: 0px;">
			<div style="margin-left: 50px;">
				<img src="./images/person.jpeg" class="profile_image" alt="">
				<h4><?php echo $_SESSION['fname'];?></h4>
			</div>
		
		<a href="#"><i class="fas fa-info"></i><span>  About</span></i></a>
		<a href="bookroom.php" id="mpopupLink"><i class="fas fa-bed"></i><span>  Book a Room</span></i></a>
		<a href="settings.php"><i class="fas fa-cogs"></i><span>  Settings</span></i></a>
			
		</ul>
	</div>

	<div id="heading">
		<label for="check">
			<i class="fas fa-bars" id="sidebar_btn" onclick="openNav()"></i>
		</label>
		<div class="left-area">
			<h3>Bayview <span>Hostels</span></h3>
		</div>
		<div class="right-area">
		
		<a href="logout.php" class="logout_btn">Logout</a>
			<img src="./images/person.jpeg" id="user_icon">
			<h2><?php echo $_SESSION['fname'];?></h2>
		
		</div>	
	</div>
	

	<div class="content" id="Content">

		<div id = "school_pic">
			<h2 class="first_div_text" id="bayview_head">SERVICE.HUMILITY.& LOVE</h2>
			<h3 class="first_div_text" id="bayview_motto">Our culture and how we treat people is what matters the most.</h1>		
		</div>

		<div id="second_div">
			<p style="text-align: center; margin-bottom: 30px;">What is BayView Hostels?</p>
			<div id="bayview_oview">
				<h3>Bayview Hostels belongs to <span style="color:#19b3d3">Bayview Charter International School</span> in Mauritania.</h3>
			</div>
			<div id="bayview_brief">
				<p>The hostels were built to meet the accomodation needs of students who may want to have on-campus housing. These hostels come with <span style="color:#19b3d3">a fully furnished kitchen, gym, laundromart and swimming pool</span> to meet the daily needs of the students.</p>
			</div>

			<div id="hostel_details">

				<div id="hostels">
					<div class="roomsnprices" id="haligah_block">
						<h5>Haligah Block</h5>
						<i class="fa-solid fa-arrow-down fa-3x arrow"></i>
					</div>
					<div class="roomsnprices" id="niang_block">
						<h5>Niang Block</h5>
						<i class="fa-solid fa-arrow-down fa-3x arrow"></i>
					</div>
					<div class="roomsnprices" id="matalla_block">
						<h5>Matalla Block</h5>
						<i class="fa-solid fa-arrow-down fa-3x arrow"></i>
					</div>
					<div class="roomsnprices" id="abdi_block">
						<h5>Abdi Block</h5>
						<i class="fa-solid fa-arrow-down fa-3x arrow"></i>
					</div>
				</div>
				
				
			</div>
			<div id="footer_section">
				<h4>Contact Us</h4>
			<div id="social_media" class="footer_details">
				<h5 style="margin-bottom: 30px; color:#19b3d3 ;">Social Media Handles</h5>
				<i class="fa-brands fa-square-instagram fa-1x"> bayview_hostels</i><br><br>
				<i class="fa-brands fa-twitter"> bayview_hostels</i><br><br>
				<i class="fa-brands fa-facebook"> bayview_hostels</i><br><br>
				<i class="fa-brands fa-snapchat"> bayview_hostels</i><br><br>
			</div>
			<div id="contact_details" class="footer_details">
				<h5 style="margin-bottom: 30px; color:#19b3d3 ;">Contact Details</h5>
				<i class="fa-solid fa-phone">+233 236 237 3212</i><br><br>
				<p>Bank Account Number: 1237718873829</p>
				<p>Name: BayView Hostels</p>
			</div>

			<div id="locate_us" class="footer_details">
				<h5 style="margin-bottom: 30px; color:#19b3d3 ;">Locate us at:</h5>
				<p>1205, Glacier Avenue, Hillside, Greater Capitol Heights, Coral Hills, Prince George's County, Maryland, 20743, Mauritania</p>
			</div>
		</div>
	
		</div>

		
	
	</div>
	<script src="./JavaScript/modal_content.js"></script>
	<script>
		function openNav() {
  			document.getElementById("mySidebar").style.width = "250px";		

		}

		function closeNav() {
  			document.getElementById("mySidebar").style.width = "0px";
  		}

	</script>
</body>
</html>