<?php 

// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "chatapp";

$db = new mysqli('localhost', 'root', '', 'chatapp');


if(!$db){
    die(mysqli_error($db));
}


class profile{

    function __construct(){

    }

    
    public function signUp($name, $email, $phone,$password){
        global $db;
        $pass = password_hash($password,PASSWORD_BCRYPT);
        $sql = $db->query("SELECT * FROM user WHERE email = '$email' OR phone = '$phone'");
        if(mysqli_num_rows($sql) > 0){
            echo "Email or Phone Already Exists";
        } else{
            $sql = $db->query("INSERT INTO user (name,email,phone,password) VALUES('$name', '$email', '$phone', '$pass')");
            if ($sql) {
                echo 'Operation Successful';
            } else {
                echo 'Error during user insertion';
            }
        };
    }

    public function LoginUser($email,$password){
        global $db;
        $sql = $db->query("SELECT * FROM user WHERE email ='$email'");
        if(mysqli_num_rows($sql)!=1){
            echo "Invalid Login";
            return ;
        }
        $row = mysqli_fetch_assoc($sql);
        //password_verify to check for hashed password
        if(password_verify($password,$row['password'])){
            $_SESSION['id'] = $row['id'];
            if(is_null($row['picture'])){
                echo 5;
            }else{
                echo 6;
            }
            return;
        }
        echo "Invalid Login";
        return;
    }
    
    
    // function AddChat($chat){
    //     global $db;
    //     $id = $_SESSION['id'];
    //     $id2 = $_SESSION['id2'];
    //     $db->query("INSERT INTO chat(id,id2,chat) VALUES ('$id', '$id2', '$chat')");
    //     echo 1;
    // }
    
};
$pro = new profile();

?>