<?php
$db = new mysqli("localhost",'root','','schoolhostel');

if(!$db){
    die(mysqli_error($db));
}


class profile{
    function __construct(){}

   function login($email,$password){
        global $db;
        $sql = $db->query("SELECT * FROM user WHERE email = '$email' ");
        if(mysqli_num_rows($sql) !=1 ){
            echo 'Invalid Login';
            return;
        }
        $rows= mysqli_fetch_assoc($sql);
        if($password == $rows['password']){
            $_SESSION['id'] = $rows['id'];
            echo "login Succesfull";
        }else{
            echo "Invalid Login";
        }
        return;
   }

   function signUp($email,$password){
      global $db;
      $sql = $db->query("SELECT * FROM user WHERE email='$email' ");
      if(mysqli_num_rows($sql)>0){
        echo "email already exist";
        return;
      }else{
          $sql = $db->query("INSERT INTO user (email,password) VALUES('$email','$password');");
            if($sql){
                echo "operation successfull";
            }else{
                echo "Error during Insertion";
            } 
        } 
      return;
   }

   function addHostel($hostelName,$address,$numberofrooms,$bedspace){
        global $db;
        $sql = $db->query("SELECT * FROM hostel WHERE name='$hostelName' AND address='$address' ");
        if(mysqli_num_rows($sql) > 0){
            echo "Hostel Already Present";
            return;
        }
        $sql = $db->query("INSERT INTO hostel (name,address,numberofrooms,numberofbedspace) VALUES ('$hostelName','$address','$numberofrooms','$bedspace') ");
        if($sql){
            echo "Hostel added Successfully";
        }else{
            echo "Error during Insertion";
        }

        //query to get the hostelid from the hostel table
        $sql = $db->query("SELECT * FROM hostel WHERE name='$hostelName'");
        $rows=mysqli_fetch_assoc($sql);
        $hostelid=$rows['id'];
        for($i=1;$i<=$numberofrooms;$i++){
            //query to insert into room table 
            $sql = $db->query("INSERT INTO room (id,hid) VALUES ('$i','$hostelid')");
            for($j=1;$j<=$bedspace;$j++){

                // query to get the roomid from the room table
                $sql = $db->query("SELECT * FROM room WHERE id='$i'");
                $rows=mysqli_fetch_assoc($sql);
                $roomid=$rows['id'];

                //query to insert into bedspace table
                $sql = $db->query("INSERT INTO bedspace (bid,rid,hid) VALUES ('$j','$roomid','$hostelid')");
            }
        }
        return;
   }

   function updateHostel($hostelname,$address,$numberofrooms,$hostelid){
        global $db;
        $sql= $db->query("UPDATE hostel SET name='$hostelname', address='$address' WHERE id='$hostelid' ");
        if($sql){
            echo "Hostel Updated Succesfully";
        }else{
            echo "Error during Inseertion";
        }
        return;
    }

    function roomStatus($room,$bed){
        global $db,$hostelid;
        $sql = $db->query("SELECT * FROM bedspace WHERE rid='$room' AND bid='$bed' AND hid='$hostelid' ");
        if(mysqli_num_rows($sql)==0){return 'Vacant';}
        $row = mysqli_fetch_assoc($sql);
        return [$row['sid'],$row['sn']];
    }

    function bookroom($bedid,$userid){
        global $db;
        $sql =$db->query("UPDATE bedspace SET sid='$userid' WHERE sn='$bedid' ");
        if($sql){
            echo "Hostel Booked Succesfully";
        }
        return; 
    }
    function total($table,$key,$val){
        global $db;
        $sql = $db->query("SELECT * FROM $table WHERE $key='$val'");
        return mysqli_num_rows($sql);
    }
    function total1($table){
        global $db;
        $sql = $db->query("SELECT * FROM $table");
        return mysqli_num_rows($sql);
    }
    function total2($table,$key,$val){
        global $db;
        $sql = $db->query("SELECT * FROM $table WHERE $key !='$val' ");
        return mysqli_num_rows($sql);
    }
    // function hostel($table,$key,$val,$key1,$val2){
    //     global $db;
    //     $sql = $db->query("SELECT * FROM $table WHERE $key='$val' AND $key1!='$val2' ");
    //     //$sql =$db->query("SELECT * FROM bedspace WHERE hid=1 AND sid != 0")
    //     return mysqli_num_rows($sql);
    // }
    function hostel($hid){
        global $db;
        $sql =$db->query("SELECT * FROM bedspace WHERE hid='$hid'");
        return mysqli_num_rows($sql);
    }


}
$pro = new profile();
?>