<?php 

//check if register form was submited
//by checking if the submit button element name was sent as part of the request

if (isset($_POST['login'])) 
{
    // echo "1 came through";
    $log_email =  $_POST['email'];
    $log_pass = $_POST['password'];
    $encrypted_pass = md5($log_pass);


    include ("config.php");

    $sql = "SELECT * FROM hostel_user WHERE user_email = '$log_email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();

        $result_id = $row['user_id'];
        $result_fname = $row['first_name'];
        $result_lname = $row['last_name'];
        $result_tel = $row['user_tel'];
        $result_gender = $row['user_gender'];
        $result_email = $row['user_email'];
        $result_pword = $row['user_password'];
        $result_role = $row['user_role'];

        session_start();
        if($encrypted_pass == $result_pword){
            $_SESSION["ID"] = $result_id ;
            $_SESSION["fname"] = $result_fname ;
            $_SESSION["lname"] = $result_lname ;
            $_SESSION["gender"] = $result_gender ;
            $_SESSION["number"] = $result_number ;
            $_SESSION["tel"] = $result_tel ;
            $_SESSION["email"] = $result_email ;
            $_SESSION["role"] = $result_role;
            $_SESSION['logged_in'] = true;
            
            if($result_role == 0){
                header("Location: admin_index.php");
            }else{
                header("Location: user_logged_in.php");
            }
 
        }else{
            // TODO: Show Incorrect email or password above the email
            
            $_SESSION['error'] = "1";
            exit();
        }
        
    }else {
        header("Location: login.php");
    }
      $conn->close();
}else{
    //redirect to login page
    header("Location: login.php");
    exit();
}


?>