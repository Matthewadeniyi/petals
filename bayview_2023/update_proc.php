<?php

	session_start();

if (isset($_POST['save_changes'])) 
{
	//collection form data
	$user_fname =  $_POST['fname'];
	$user_lname =  $_POST['lname'];
	$user_email = $_SESSION['email'];
	$f_name = $_SESSION['fname'];
	$l_name = $_SESSION['lname'];

	include("config.php");

	$sql = "UPDATE hostel_user SET first_name = '$user_fname', last_name = '$user_lname' WHERE user_email = '$user_email'";
	//echo "$sql";

	$sql_result = $conn->query($sql);

	$_SESSION['fname'] = $user_fname;
	$_SESSION['lname'] = $user_lname;



	// If insert worked
    if ($sql_result=== TRUE) {
    
        //redirect to homepage

        header("Location: user_logged_in.php");
        exit();
    
    } else {
        //echo error but continue executing the code to close the session
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //close database connection
	$conn->close();
    //header("Location: register.php");

}
else{
	//redirect to register page
	header("Location: settings.php");
    echo "There's an error";
	exit();
}


?>