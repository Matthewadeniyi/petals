<?php
$dbuser="root";
$dbpass="";
$host="localhost";
$db="hospitalmgt";
// connection to the database
$db=new mysqli($host,$dbuser, $dbpass, $db);

if(!$db){
    die(mysqli_error($db));
}

class doctor{
    function __construct(){
        if(isset($_POST['doctorLogin'])){
            $this->doctorLogin();
        }elseif(isset($_POST['docUpdatePatientPrescription'])){
            $this->updatePatientPrescription();
        }elseif(isset($_POST['dischargePatient'])){
            $this->dischargePatient();
        }elseif(isset($_POST['updatePassword'])){
            $this->updatePassword();
        }elseif(isset($_POST['updateProfile'])){
            $this->updateDocProfile();
        }
    }

    function doctorLogin(){
        global $db;
        if(empty($_POST['docnumber']) || empty($_POST['password'])){
            echo "Please Input Values";
            return;
        }else{
            $docNumber = $db->real_escape_string($_POST['docnumber']);
            $password  = $db->real_escape_string($_POST['password']);
            if(strlen($password) < 3){
                echo '<p class="text-muted text-center text-danger mb-4 mt-3">Password Must be more than 4 characters!.</p>';
                return;
            }
            $sql = $db->query("SELECT * FROM employee WHERE employeeno = '$docNumber' ");
            if(mysqli_num_rows($sql) != 1){
                echo '<p class="text-muted text-center text-danger mb-4 mt-3">Doctor does not exist!.</p>';
                return;
            }
            $row = mysqli_fetch_assoc($sql);
            // to validate password
            if(password_verify($password,$row['password'])){
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                    $_SESSION['id'] = $row['sn'];
                    $_SESSION['docno'] = $row['employeeno'];
                    header('location:his_doc_dashboard.php');
                    exit;
                }
            }
            echo '<p class="text-muted text-center text-danger mb-4 mt-3">Invalid Login!.</p>';
            return;
            
        }
    }

    function updatePatientPrescription(){
        global $db;
        $patientPresctiption=htmlspecialchars($db->real_escape_string($_POST['prescription']),ENT_QUOTES,'UTF-8');
        $prescriptionId=$db->real_escape_string($_GET['prescId']);
        $sql = $db->query("UPDATE prescriptions SET prescription='$patientPresctiption' WHERE MD5(id)='$prescriptionId' ");
        if($sql){
            echo "Operation Successfull";
        }else{
            echo "Error!".mysqli_error($sql);
        }
        return;
    }
    function dischargePatient(){
        global $db;
        if(empty($_GET['patient_id'])){
            return;
        }
        $patientNo = $db->real_escape_string($_GET['patient_id']);
        $sql = $db->query("UPDATE patients SET discharge_status='discharged',type='2' WHERE MD5(patientno)='$patientNo'");
        if($sql){
            echo "Operation Successfull";
        }else{
            echo "Error!".mysqli_error($sql);
        }
        return;
    }

    function updatePassword(){
        global $db;
        if(empty($_POST['password']) || empty($_POST['confpassword'])){return;}
        $newPassword = $db->real_escape_string($_POST['password']);
        $oldPassword = $db->real_escape_string($_POST['confpassword']);
        if($newPassword != $oldPassword){
            echo '<tr class="text-muted text-center text-danger mb-4 mt-3">Passwords does not match!</tr>';
            return;
        }
        $pass = password_hash($newPassword,PASSWORD_BCRYPT);
        $sql = $db->query("UPDATE employee SET password='$pass' WHERE employeeno='{$_SESSION['docno']}' ");
        if($sql){
            echo "Operation Successfull";
        }else{
            echo "Error!".mysqli_error($sql);
        }
        return;
    }

    function updateDocProfile(){
        global $db;
      
        $firstName = $db->real_escape_string($_POST['firstname']);
        $lastName  = $db->real_escape_string($_POST['lastname']);
        $email = $db->real_escape_string($_POST['email']);

        $sql = $db->query("UPDATE employee SET firstname='$firstName', lastname='$lastName', email='$email' WHERE employeeno='{$_SESSION['docno']}' ");
        if($sql){
            echo "Operation Successfull";
        }else{
            echo "Error!".mysqli_error($sql);
        }
        return;
    }
}

$doc = new doctor();
?>
