<?php

session_start();




?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./CSS/book_a_room.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
	    $("#block").change(function(){
	        var block = $(this).val();
	        
	        $.ajax({
	            url: "bookroom_proc.php",
	            method: "POST",
	            data: {block: block},
	            dataType: "json",
	            success: function(data){
	                $("#rooms_available").html('<option value="">Choose a room number </option>');
	                $.each(data, function(index, rooms_available){
	                    $("#rooms_available").append('<option value="'+rooms_available+'">'+rooms_available+'</option>');
	                });
	            }
	        });
	    });
	});
	</script>

	<title>Book a Room</title>
</head>
<body>
	<header id="book-a-room">
		<a href="#" class='brand'>Bayview <span style="color:#1DC4E7;">
		Hostels</span></a>
		<div class="menu-btn"></div>
		<div class="navigation">
			<div class="navigation-items">
				<a href="user_logged_in.php">Home</a>
				<a href="#">Book a Room</a>
				<a href="#">Settings</a>
			</div>
		</div>
	</header>

	<section class="home">
		<img class="img-slide" src="./images/2-in-a-room.jpeg">
		<div class="content">
			<h1>Wonderful.<br><span>Blocks</span></h1>
			<p style="margin-top: -30px;letter-spacing: -0.5px;">Book our affordable rooms per semester.</p>	
			
			<form id="room-service" method="POST" action="bookroom_proc.php">
				<h4>Book a Room Now</h4>
				<label>Hostels Available</label>
				<div class="custom-select" style="width:340px;">
				  <select name = "block" id="block" class="all_options" name="block">
				  	<option selected disabled>Choose a block</option>
				    <option value="0">Haligah Hostel</option>
				    <option value="1">Niang Hostel</option>
				    <option value="2">Maatalla Hostel</option>
				    <option value="3">Abdi Hostel</option>
				  </select>
				</div>
				<label>Room Capacity</label>
				<div class="custom-select" style="width:340px;">
				  <select class="all_options" id="capacity" name="capacity">
				  	<option selected disabled>Choose a room capacity</option>

				  </select>
				</div>
				<label>Room Number</label>
				<div class="custom-select" style="width:340px;">
				  <select class="all_options" id="rooms_available" name="rooms_available">
				  	<option value = "">Choose a room number</option>
				   
				   				  </select>
				</div>
				<br>
				<button>Book Now</button>
			</form>

			</div>
	</section>

	<script type="text/javascript">
		const menuBtn = document.querySelector(".menu-btn");
		const navigation = document.querySelector(".navigation");
		const blockName = document.getElementById("block");
		const capacity = document.getElementById("capacity");
		var block_capacity = "";
		var room_capacity = 0;

		menuBtn.addEventListener("click", () =>{
			menuBtn.classList.toggle("active");
			navigation.classList.toggle("active");
		});	

		blockName.addEventListener('change', function handleChange(event) {
        console.log(event.target.value);
        block_capacity = blockName.options[blockName.selectedIndex].text;


         if (block_capacity == "Maatalla Hostel" || block_capacity == "Abdi Hostel"){
          var capacity_option = document.createElement("option");
          capacity_option.innerHTML = "2";
          capacity.appendChild(capacity_option);
        }

        else {
          var capacity_option1 = document.createElement("option");
          capacity_option1.innerHTML = "3";
          capacity.appendChild(capacity_option1);

          var capacity_option2 = document.createElement("option");
          capacity_option2.innerHTML = "4";
          capacity.appendChild(capacity_option2);

        }


    });

	capacity.addEventListener('change', function handleChange(event) {
        console.log(event.target.value);
        room_capacity = capacity.options[capacity.selectedIndex].text;
        });		

	// var httpc = new XMLHttpRequest(); // simplified for clarity
    // params = `block=${block_capacity}&capacity=${room_capacity}`;
    // var url = "bookroom_proc.php";
    // httpc.open("POST", url, true); // sending as POST

    // httpc.onreadystatechange = function() { //Call a function when the state changes.
    //     if(httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
    //         console.log(httpc.responseText); // some processing here, or whatever you want to do with the response
    //     }
    // };
    // httpc.send(params);	


	</script>
	

</body>
</html>