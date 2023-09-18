<?php 
 include('constant.php');
class Profile{
        
    function __construct(){

        if(array_key_exists('Login', $_POST)){
            $this-> Login();
        }
        
        elseif(array_key_exists('Signup', $_POST)){
            $this-> SignUp();
        }
        elseif(array_key_exists('RegGuardian', $_POST)){
            $this-> RegGuardian();
        }
        elseif(array_key_exists('CreateClass', $_POST)){
            $this-> CreateClass();
        }
        elseif(array_key_exists('CreateArm', $_POST)){
            $this-> CreateArm();
        }
        elseif(array_key_exists('RegStudent', $_POST)){
            $this-> RegStudent();
        }
        elseif(array_key_exists('AddStaff', $_POST)){
            $this-> AddStaff();
        }
        elseif(array_key_exists('AddSubject', $_POST)){
            $this-> AddSubject();
        }
        elseif(array_key_exists('AddTeacher', $_POST)){
            $this-> AddTeacher();
        }
        elseif(array_key_exists('AddResult', $_POST)){
            $this->AddResult();
        }
        elseif (array_key_exists('Term', $_POST)) {
            $this->Term();
        }
        elseif(array_key_exists('updatePermission', $_POST)){
            $this-> updatePermission();
        }
    }

    function SignUp(){
         global $con;


         $firstname = $lastname = $email = $password =""; 
         $errors = ['firstname' => '', 'lastname'=> '', 'email'=>'', 'password'=>''];
 
         if(isset($_POST['signup'])){
 
         
           // to validate email address
           if(empty ($_POST['email'])){
               $errors['email'] = "An email address is required";
           } else{
               $email = $_POST['email'];
               if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                   $errors['email'] = "email must be a valid email address";
               }
           }
       }


        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email =$_POST['email'];
        $password =$_POST['password'];
        $user_id = rand();
        $sql = $con->query("INSERT INTO users (firstname, lastname, email, password,user_id ) VALUES('$firstname','$lastname','$email', '$password','$user_id')");
       header('location:login.php');
        return;
    
    }
 
        function Login(){
            global $con,$report,$count;
                $email = $_POST['email'];
                $password = $_POST['password'];
                if(!empty ($email) && !empty($password) && !is_numeric($email)){
                    $report = 'enter required entries';$count=1;return;
                }
                $sql = $con->query("SELECT * FROM users WHERE email='$email'");
                if (mysqli_num_rows($sql) != 1) {$report= 'invalid login';$count=1;return;}
                $row = mysqli_fetch_assoc($sql);
                if ($row['password'] != $password) {$report = 'invalid login';$count=1;return;}
                $_SESSION['user_id'] = $row['user_id'];
                header('location:index.php');exit;
            return;
        }


        function RegGuardian(){
            global $con;
            $name = $_POST['name'];
            $phonenumber = $_POST['phonenumber'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $state = $_POST['state'];
            $lga = $_POST['lga'];

            $sql = $con->query("INSERT INTO guardian(name, phonenumber, email, address, state, lga ) VALUES('$name','$phonenumber','$email', '$address', '$state', '$lga')");
    
            return;
        }

        function CreateClass(){
            global $con;
            $category = $_POST['category'];
            
            $sql = $con->query("INSERT INTO class(category) VALUES('$category')");    
            return;
        }

        function CreateArm(){
            global $con;
            $arm = $_POST['arm'];
            
            $sql = $con->query("INSERT INTO arm(arm) VALUES('$arm')");
           
    
            return;
        }

        function RegStudent(){
            global $con,$report,$count;
            $guardian = $_POST['guardian'];
            $arm = $_POST['arm'];
            $class = $_POST['class'];
            $firstname = $_POST['firstname'];
            $lastname= $_POST['lastname'];
            $othername = $_POST['othername'];
            $gender = $_POST['gender'];
            $regnumber = $_POST['regnumber'];
           
            $sql = $con->query("INSERT INTO students(guardian, class, arm, firstname, lastname, othername, gender, regnumber ) VALUES('$guardian', '$class', '$arm', '$firstname', '$lastname', '$othername', '$gender', '$regnumber')");
            $report = 'operation successfull';
            return;
        }
        function AddStaff(){
            global $con;
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $role = $_POST['role'];
            
            $sql = $con->query("INSERT INTO staff(name, email, phone, role ) VALUES('$name', '$email', '$phone', '$role')");

    
            return;
        }

        function AddSubject(){
            global $con;
            $subject = $_POST['subject'];

            $sql =$con->query("INSERT INTO subject(subject) VALUES ('$subject')");


            return;
        }

        function AddTeacher(){
            global $con,$report,$count;
            $subject = $_POST['subject'];
            $name = $_POST['name'];
            $class =$_POST['class'];

            if(empty($subject) || empty($name) || empty($class)){
                $report ="Enter required entries";$count=1;return;
            }
            $sql = $con->query("INSERT INTO teachers(subject,name,class) VALUES ('$subject','$name','$class')");

            return;
        }

        function AddResult(){
            global $con;
            $ca1 = $_POST['ca1'];
            $ca2 = $_POST['ca2'];
            $ca3 = $_POST['ca3'];
            $exam = $_POST['exam'];
            $total = $_POST['ca1'] + $_POST['ca2'] + $_POST['ca3'] +$_POST['exam'];
            $remark;
            $grades;

            if( $total > 69 && $total <101 ){
                $remark ='Excellent';
                $grade='A';
            } elseif($total > 59 && $total <70){
                $remarks ='Very Good';
                $grades ='B';
            }elseif($total > 49 && $total <60){
                $remarks ='Good';
                $grades='C';
            }elseif($total > 44 && $total < 50){
                $remarks =  'Pass';
                $grades = 'D';
            }elseif($total >39 && $total < 45){
                $remarks='Poor';
                $grades='E';
            }elseif($total >= 0 && $total < 40){
                $remarks ='Fail';
                $grades ='F';
            }

            $sql = $con->query("INSERT INTO resultsetup(ca1, ca2, ca3, exam ) VALUES('$ca1', '$ca2', '$ca3', '$exam')");
    
        }
        function updatePermission(){
            global $con;
            $staffid =$_POST['updatePermission'];
            $p1 = $_POST['p1'] ?? 0;
            $p2 = $_POST['p2'] ?? 0;
            $p3 = $_POST['p3'] ?? 0;
            $p4 = $_POST['p4'] ?? 0;
            // $sql = $con->query("UPDATE permission SET p1='$p1', p2='$p2', p3='$p3', p4='$p4' WHERE staffid ='$staffid' ");
            // mysqli_query($con,$sql);
            $sql = ("UPDATE permission SET p1='$p1', p2='$p2', p3='$p3', p4='$p4' WHERE staffid='$staffid' ");
            mysqli_query($con,$sql);

            return;

        }

        function sqLx($table,$key,$val,$pin){
            global $con;
            $sql = $con->query("SELECT * FROM $table WHERE $key='$val' ");
            $rows = mysqli_fetch_assoc($sql);
            return $rows[$pin];
        }

        function sqLx1($table,$col,$val){
            global $con;
            $sql = $con->query("SELECT * FROM $table WHERE $col='$val' ");
            $row = mysqli_fetch_assoc($sql);
            return mysqli_num_rows($sql);
        }


        function Alert(){
            global $con,$report,$count;
            return $count == 1 ? "toaster.error('".$report."')" : "toaster.success('".$report."')";

        }
        function Term(){
            global $con;
            $session = $_POST['session'];
            $term = $_POST['term'];
            $i =0;
            while($i < 3){
                $i++;
                $sql = $con->query("INSERT into term(session,term) VALUES ('$session','$i')");
            }
        return;
        }
}

$pro = new Profile();
?>