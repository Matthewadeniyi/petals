<?php


if (isset($_POST['register'])) 
{
    //collection form data
	$user_fname =  $_POST['fname'];
	$user_lname =  $_POST['lname'];
	$user_gender = $_POST['gender'];
	$user_tel = $_POST['tel'];
	$user_email = $_POST['email'];
	$user_pass1 = $_POST['password1'];

    $mailformat = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
    $passformat = '/(?=^.{8,12}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$*?%^]).*$/';

    
    include("config.php");
	
	$encrypted_pass = md5($user_pass1);

	//write query

	$trial = "0";

    session_start();
    $_SESSION['email'] = "$user_email";
    $_SESSION['fname'] = "$user_fname";
    $_SESSION['lname'] = "$user_lname";
    $_SESSION['tel'] = "$user_tel";

    if(preg_match($mailformat, $user_email)){
        
        // Email Query
        $email_sql = "SELECT * FROM hostel_user WHERE user_email = '$user_email'";
        $email_result = $conn->query($email_sql);

        // Phone Number Query
        $number_sql = "SELECT * FROM hostel_user WHERE user_tel = '$user_tel'";
        $number_result = $conn->query($number_sql);


        // Existing Email Condition
        if ($email_result->num_rows > 0) {
            $_SESSION['error'] = '1';
            header("Location: register.php");

        // Existing Phone Number Condition
        }elseif($number_result->num_rows > 0){
            $_SESSION['error'] = '2';
            header("Location: register.php");

        }else{
            if(preg_match($passformat, $user_pass1)){
                $sql = "INSERT INTO hostel_user (first_name, last_name, user_tel, user_email, user_gender, user_password, user_role)
                VALUES ('$user_fname', '$user_lname', '$user_tel', '$user_email', '$user_gender', '$encrypted_pass', 1)";

                // If insert worked
                if ($conn->query($sql) === TRUE) {
                
                    //redirect to homepage
                    header("Location: login.php");
                    exit();
                
                } else {
                    //echo error but continue executing the code to close the session
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }else{
                $_SESSION['error'] = '4';
            }
        }
    }else{
        $_SESSION['error'] = '3';
    }
	//close database connection
	$conn->close();
    header("Location: register.php");

}else{
	//redirect to register page
	header("Location: register.php");
    echo "There's an error";
	exit();
}


?>






