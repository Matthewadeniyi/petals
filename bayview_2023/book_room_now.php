<?php

//session_start();

if (isset($_POST['book_btn'])) 
{

	//collection form data
	$room_no = $_SESSION['room_name'];
	$student_email = $_SESSION['email'];
	$roomID = "";
	$userID= "";

	include("config.php");

	$sql1 = "SELECT room.room_id FROM room WHERE room_name = '$room_no'";

	$sql1_result = $conn->query($sql1);

	if ($sql1_result->num_rows > 0){
		$result1 = $sql1_result->fetch_assoc();
		$roomID = $result1['room_id'];
	}

	$sql2 = "SELECT hostel_user.user_id FROM hostel_user WHERE user_email = '$student_email'";

	$sql2_result = $conn->query($sql2);

		if ($sql2_result->num_rows > 0){
		$result2 = $sql2_result->fetch_assoc();
		$userID = $result2['user_id'];
	}

	$sql3 = "INSERT INTO booking (room_id, student_id, term_id, year_id, status)
                VALUES ('$roomID', '$userID', '2', '3', 'Yes')";
	
	$sql3_result = $conn->query($sql3);

	echo "<script>alert(You have booked successfully!)</script>";
	header("Location: user_logged_in.php");
	exit();
}

else {

	header("Location: bookroom.php");
	exit();

}

 // close the database connection
    $conn->close();

?>