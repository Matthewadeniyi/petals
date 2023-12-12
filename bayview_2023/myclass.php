<?php
include("control.php");

if(isset($_GET['type'])){extract($_GET);

    if($type =='login'){$pro->login($email,$password);}
    if($type == 'signup'){$pro->signUp($email,$password);}
    if($type == 'addhostel'){$pro->addHostel($hostelname,$address,$numberofrooms,$bedspace);}
    if($type == 'updateHostel'){$pro->updateHostel($hostelname,$address,$numberofrooms,$hostelid);}
    if($type == 'bookroom'){$pro->bookroom($bedid,$userid);}
}
?>