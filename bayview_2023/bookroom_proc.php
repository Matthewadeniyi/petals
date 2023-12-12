<?php

    session_start();

if (isset($_POST['capacity'])) {
    // get the block and capacity
    $block = $_POST['block'];
    $capacity = $_POST['capacity'];

    //$capacity_int = intval($capacity);


    // include the database connection config
    include("config.php");

    
    // query the available rooms for the block and capacity
    $sql = "SELECT room.room_name, room.capacity
		FROM room
		LEFT JOIN booking ON room.room_id = booking.room_id
		                AND booking.year_id = (SELECT year_id FROM academic_year WHERE a_year = '2022/2023')
		                AND booking.term_id = (SELECT term_id FROM school_term WHERE term = 'Term Two')
		WHERE room.block_id = (SELECT block_id FROM block WHERE block_name = '$block') AND room.capacity = '$capacity'
		GROUP BY room.room_id
		HAVING room.capacity != COUNT(DISTINCT booking.student_id)";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

    	echo "<option>Choose a room</option>";
        // output the room names as HTML options
        while ($row = $result->fetch_assoc()) {


            echo "<option value='" . $row['room_name'] . "'>" . $row['room_name'] . "</option>";

            $_SESSION['room_name'] = $row['room_name'];
        }
    } else {
        echo "<option value=''>No available rooms</option>";
    }

    // close the database connection
    $conn->close();
}
?>
