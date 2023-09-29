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
        elseif(array_key_exists('updateCa', $_POST)){
            $this->updateCa();
        }
        elseif(array_key_exists('updategrade', $_POST)){
            $this-> updategrade();
        }
        elseif (array_key_exists('Term', $_POST)) {
            $this->Term();
        }
        elseif(array_key_exists('updatePermission', $_POST)){
            $this-> updatePermission();
        }
        else if(array_key_exists('CreateFee', $_POST)){
            $this-> CreateFee();
        }
        elseif(array_key_exists('SetFee', $_POST)){
            $this-> SetFee();
        }
        else if(array_key_exists('updateSchoolInfo', $_POST)){
            $this-> updateSchoolInfo();
        }
        elseif(array_key_exists('UploadResult', $_POST)){
            $this->UploadResult();
        }elseif(array_key_exists('Activate', $_POST)){
            $this->Activate();
        }
    }

        function SignUp(){
            global $con;

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
                // if(!empty ($email) && !empty($password) && !is_numeric($email)){
                //     // $report = 'enter required entries';$count=1;return;
                //     echo "enter required entries" ;
                // }
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

        function updateCa(){
            
            global $con;
            $ca1 = $_POST['ca1'];
            $ca2 = $_POST['ca2'];
            $ca3 = $_POST['ca3'];
            $exam = $_POST['exam'];
           
            $sql = $con->query("UPDATE resultsetup SET ca1='$ca1', ca2='$ca2', ca3='$ca3', exam='$exam' WHERE sn=1");
            return;
    
        }
        function updategrade(){
            global $con;
            $a = $_POST['A'];
            $b = $_POST['B'];
            $c = $_POST['C'];
            $d = $_POST['D'];
            $e = $_POST['E'];
            $f = $_POST['F'];

            $ar = $_POST['Ar'];
            $br = $_POST['Br'];
            $cr = $_POST['Cr'];
            $dr = $_POST['Dr'];
            $er = $_POST['Er'];
            $fr = $_POST['Fr'];

            $sql = $con->query("UPDATE resultsetup SET a='$a', b='$b', c='$c', d='$d',e='$e',f='$f',ar='$ar',br='$br',cr='$cr',dr='$dr',er='$er',fr='$fr'  WHERE sn=1");
            return;

        }
        function updatePermission(){
            global $con;
            $staffid =$_POST['updatePermission'];
            $p1 = $_POST['p1'] ?? 0;
            $p2 = $_POST['p2'] ?? 0;
            $p3 = $_POST['p3'] ?? 0;
            $p4 = $_POST['p4'] ?? 0;
            
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
                $sql = $con->query("INSERT  INTO term(session,term) VALUES ('$session','$i')");
            }
            return;
        }

        function RealTerm($t){
            $term = " ";
            if($t == 1){
                $term = "First Term";
            }elseif($t == 2){
                $term = "Second Term";
            }elseif($t == 3){
                $term = "Third Term";
            }else{
                $term = "Invalid Term";
            }
            return $term;
        }

        function Activate(){
            global $con;
            $sn= $_POST['Activate'];
            $sql = $con->query("UPDATE term  SET status = 0");
            $sql = $con->query("UPDATE term  SET status = 1 WHERE sn = '$sn' ");
            return;
        }
        function CreateFee(){
            global $con;
            $feecategory = $_POST['category'];
            $feedescription = $_POST['description'];
            $sql = $con->query("INSERT  INTO feecategory(feecategory,feedescription) VALUES ('$feecategory', '$feedescription')");
            return;
        }
        function SetFee(){
            global $con;
            $class = $_POST['class'];
            $feecategory = $_POST['fee'];
            $amount = $_POST['amount'];
            $sql = $con->query("INSERT INTO setfee(class,fee,amount) VALUES ('$class','$feecategory', '$amount') ");
            return ;
        }
        function updateSchoolInfo(){
            global $con;
            $schoolname = $_POST['name'];
            $email = $_POST['email'];
            $website = $_POST['website'];
            $phone = $_POST['phone'];
            $motto = $_POST['motto'];
            $address = $_POST['address'];
            // $sql = $con->query("INSERT INTO schoolinfo(schoolname,email,website,phone,motto,address) VALUES('$schoolname', '$email', '$website', '$phone', '$motto', '$address')");
            $sql = $con->query("UPDATE schoolinfo SET schoolname = '$schoolname', email='$email', website='$website', phone='$phone', motto = '$motto', address = '$address' WHERE sn =1");
            return;
        }

        function UploadResult(){
            global $con;
            $class = $_POST['class'];
            $studentid = $_POST['studentid'];
            
            $subject = $_POST['subject'];
            $ca1 = $_POST['ca1'];
            $ca2 = $_POST['ca2'];
            $exam = $_POST['exam'];
            

            $i = 0;
             while($i < count($studentid)) {
                $e = $i++;

                $student = $studentid[$e];
                $c1 = $ca1[$e];
                $c2 = $ca2[$e];
                $exa = $exam[$e]; 
                $total = (int)$c1 + (int)$c2+ (int)$exa;
                if(empty($c1) || empty($c2) || empty($exa)){
                    $report = "Input all fields";$count = 1; return;
                }
                $sql = "INSERT INTO result(studentid, class, subject,ca1,ca2,exam,total) VALUES('$student', '$class', '$subject', '$c1', '$c2', '$exa', '$total')";
                mysqli_query($con,$sql);
             }
             $report = "Results added succesfully";
             return;
        }
         function resultSum(){
            global $con;
            $sid - $_POST['sid'];
            $term = $_POST['term'];
            $session = $_POST['session'];
            $sql = "INSERT INTO resultsum where sid = '$sid' AND term='$term' AND session ='$session' ";
         }

         function checkResultProfile($sid){
            global $con;
            $term = $this->sqLx('term', 'status', 1, 'term');
            $session = $this->sqLx('term', 'status', 1, 'session');
            $sql = $con->query("SELECT * FROM resultsum WHERE sid = '$sid' AND term = '$term' AND session='$session' ");

            if(mysqli_num_rows($sql) == 0){
                $con->query("INSERT INTO resultsum (sid,term,session) VALUES ('$sid', '$term', '$session')");
            };
            return;
         }
         function checkResultSum(){
            global $con;
            $sql = $con->query("SELECT * FROM students");
            while($row = mysqli_fetch_assoc($sql)){
                $sid = $row['sn'];
                $this->checkResultProfile($sid);

            }
            return;
         }
       
}




















$pro = new Profile();
?>