<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "schoolpetal";

$con = new mysqli('localhost', 'root', '', 'schoolpetal');


if(!$con){
    die(mysqli_error($con));
    
}
?>