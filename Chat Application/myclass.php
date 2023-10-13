<?php
session_start(); ob_start();
include('control.php');

if(isset($_GET['type'])){extract($_GET);
      

    if($type =='signup'){$pro->signUp($name, $email, $phone,$password); }

    if($type =='login'){$pro->LoginUser($email,$password); }
        
     
}


?>