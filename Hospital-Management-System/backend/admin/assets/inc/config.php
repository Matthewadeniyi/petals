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

class profile{

    function __construct(){
        if(isset($_POST['adminsignup'])){
            $this->signUp();
        }elseif(isset($_POST['adminlogin'])){
            $this->logIn();
        }elseif(isset($_POST['addpatient'])){
            $this->addPatient();
        }elseif(isset($_POST['updatePatient'])){
            $this->updatePatient();
        }elseif(isset($_POST['transferpatient'])){
            $this->transferPatient();
        }elseif(isset($_POST['addemployee'])){
            $this->addEmployee();
        }elseif(isset($_POST['assigndepartment'])){
            $this->assignDepartment();
        }elseif(isset($_POST['updateEmployeeRecord'])){
            $this->updateEmployeeRecord();
        }elseif(isset($_POST['addDepartment'])){
            $this->addDepartment();
        }elseif(isset($_POST['updateDepartment'])){
            $this->updateDepartment();
        }elseif(isset($_POST['transferEmployeeDepartment'])){
            $this->transferEmployeeDepartment();
        }elseif(isset($_POST['addvendor'])){
            $this->addVendor();
        }elseif(isset($_POST['updateVendor'])){
            $this->updateVendor();
        }elseif(isset($_POST['addPharmaceuticalCategory'])){
            $this->addPharmaceuticalCategory();
        }elseif(isset($_POST['updatePharmaceuticalCategory'])){
            $this->updatePharmaceuticalCategory();
        }elseif(isset($_POST['addPharmaceutical'])){
            $this->addPharmaceuticals();
        }elseif(isset($_POST['updatePharmaceutical'])){
            $this->updatePharmaceuticals();
        }elseif(isset($_POST['AddPatientPrescription'])){
            $this->AddPatientPrescription();
        }elseif(isset($_POST['updatePatientPrescription'])){
            $this->updatePatientPrescription();
        }elseif(isset($_POST['AddAccountpayable'])){
            $this->AddAccountpayable();
        }elseif(isset($_POST['updateAccountPayable'])){
            $this->updateAccountPayable();
        }elseif(isset($_POST['addPatientLabTest'])){
            $this->addPatientLabTest();
        }elseif(isset($_POST['addPatientLabResult'])){
            $this->addPatientLabResult();
        }elseif(isset($_POST['addVitals'])){
            $this->addVitals();
        }elseif(isset($_POST['addEquipments'])){
            $this->addEquipments();
        }elseif(isset($_POST['updateEquipment'])){
            $this->updateEquipment();
        }elseif(isset($_POST['addPatientSurgery'])){
            $this->addPatientSurgery();
        }elseif(isset($_POST['updatePatientSurgery'])){
            $this->updatePatientSurgery();
        }elseif(isset($_POST['updateAdminProfile'])){
            $this->updateAdminProfile();
        }elseif(isset($_POST['updatepassword'])){
            $this->updatePassword();
        }
        
    }

    function updateAdminProfile(){
        global $db;
      
        $firstName = $db->real_escape_string($_POST['firstname']);
        $lastName  = $db->real_escape_string($_POST['lastname']);
        $email = $db->real_escape_string($_POST['email']);

        $sql = $db->query("UPDATE users SET firstname='$firstName', lastname='$lastName', email='$email' WHERE sn='{$_SESSION['id']}' ");
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
        $sql = $db->query("UPDATE users SET password='$pass' WHERE sn='{$_SESSION['id']}' ");
        if($sql){
            echo "Operation Successfull";
        }else{
            echo "Error!".mysqli_error($sql);
        }
        return;
    }
    // to add users or Sign Up
    public function signUp(){
        global $db;
        $firstname= $_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email= $_POST['email'];
        $password = $_POST['password'];

        // to hash password for security
        $pass = password_hash($password,PASSWORD_BCRYPT);
        $sql = $db->query("SELECT * FROM users WHERE email='$email'");

        // to check and ensure that an email does not occur twice
        if(mysqli_num_rows($sql) > 0){
            //if email is more than 1
           echo $err="Email Already Exists";
        }else{
            //if email is not more than 1
            $sql = $db->query("INSERT INTO users(firstname,lastname,email,password) VALUES('$firstname','$lastname','$email','$pass')");
            if ($sql) {
                //if succesful
               echo $success='Operation Successful';
               header('Location:index.php');
            } else {
                echo $err='Error during user insertion';
            }
        }
        return;
    }

    // Function to check User Login
    public function logIn(){
        global $db;
        if(empty($_POST['password'])||empty($_POST['email'])){
            echo $err="Please Input Values";
        }else{
                // Sanitize user input to prevent SQL injection
            $email=$db->real_escape_string($_POST['email']);
            $password=$db->real_escape_string($_POST['password']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                return;
            }
            // Query the database to check if the user exists
            $sql = $db->query("SELECT * FROM users WHERE email='$email'");
            if(mysqli_num_rows($sql)!=1){
                echo $err="User does not exist";
                return;
            }
            $row =mysqli_fetch_assoc($sql);

            // Verify the password
            if(password_verify($password,$row['password'])){

                // Password is correct, set user as logged in
                //start session
                if (session_status() == PHP_SESSION_NONE){
                    session_start();
                    $_SESSION['id'] = $row['sn'];
                    header('Location:his_admin_dashboard.php');
                    exit;

                }
            }
        
        }
        echo $err="Invalid Login";
        return;
        
    }

   
    // to add patients
    public function addPatient(){
        global $db;

        // to check if the form inputs are empty
        if(empty($_POST['firstname'])||empty($_POST['lastname'])||empty($_POST['dob'])||empty($_POST['age'])||empty($_POST['address'])||empty($_POST['phone'])||empty($_POST['ailment'])||empty($_POST['type'])){
            echo "please input a value";
        }else{

            //if they are not empty
            $firstName=$db->real_escape_string($_POST['firstname']);
            $lastName=$db->real_escape_string($_POST['lastname']);
            $dob=$db->real_escape_string($_POST['dob']);
            $age=$db->real_escape_string($_POST['age']);
            $address=$db->real_escape_string($_POST['address']);
            $phone=$db->real_escape_string($_POST['phone']);
            $ailment=$db->real_escape_string($_POST['ailment']);
            $type=$db->real_escape_string($_POST['type']);
            $patientNo=$db->real_escape_string($_POST['patientno']);

            //query to insert into table
            $sql=$db->query("INSERT INTO patients (firstname,lastname,dob,age,address,phoneno,ailment,type,patientno) VALUES('$firstName','$lastName','$dob','$age','$address','$phone','$ailment','$type','$patientNo')");
            if($sql){
                echo "Operation Succesfull";
            }else{
                echo "Error During Insertion".mysqli_error($db);
                return;
            }
       }
       return;
    }


    /**
         * Retrieves a specific column's value from a database table based on a key-value pair.
         *
         * @param string $table The table name.
         * @param string $key   The column to match against.
         * @param mixed  $val   The value to match.
         * @param string $pin   The column to retrieve.
         * @param string $defaultValue   The value to specify if the pin is empty.
         * @return mixed The value of the specified column or "Not Found" if the key doesn't exist.
    */
    
    function SqLx($table, $key, $val, $pin, $defaultValue = '') {
        global $db;
        $sql = $db->query("SELECT * FROM $table WHERE $key='$val'");
        if (!$sql) {
            die("Error in SQL query: " . $db->error);
        }
        $rows = mysqli_fetch_assoc($sql);
        
        // Check if the department is empty, and return the default value if it is
        if (empty($rows[$pin])) {
            return $defaultValue;
        }
        
        return $rows[$pin];
    }
    
    /** 
        * to get the total number of rows in a table
    */ 
    function total($table,$key,$type){
        global $db;
        $sql= $db->query("SELECT * FROM $table WHERE $key='$type'");
        return mysqli_num_rows($sql);
    }
    function total1($table){
        global $db;
        $sql= $db->query("SELECT * FROM $table");
        return mysqli_num_rows($sql);
    }

    // to update the record of a particular patient
    function updatePatient(){
        global $db;
        if(empty($_POST['firstname'])||empty($_POST['lastname'])||empty($_POST['dob'])||empty($_POST['age'])||empty($_POST['address'])||empty($_POST['phone'])||empty($_POST['ailment'])||empty($_POST['type'])){
            echo "please input a value";
        }else{

            //if they are not empty, sanitize UserInputs
            $firstName=$db->real_escape_string($_POST['firstname']);
            $lastName=$db->real_escape_string($_POST['lastname']);
            $dob=$db->real_escape_string($_POST['dob']);
            $age=$db->real_escape_string($_POST['age']);
            $address=$db->real_escape_string($_POST['address']);
            $phone=$db->real_escape_string($_POST['phone']);
            $ailment=$db->real_escape_string($_POST['ailment']);
            $type=$db->real_escape_string($_POST['type']);
            //  $number=$db->real_escape_string(rand());
            $patient_no = $_POST['patno'];
           
            //query to update table
           $sql = $db->query("UPDATE patients SET firstname='$firstName', lastname='$lastName', dob='$dob', age='$age', address='$address', phoneno='$phone', ailment='$ailment', type='$type', patientno='$patient_no' WHERE patientno='$patient_no' ");
           if($sql){
            echo "Operation Succesfull";
            }else{
                echo "Error During Insertion".mysqli_error($db);
                return;
            }
        }
        return;
    }

    // to transfer a patient from one hospital to another
    public function transferPatient(){
        global $db;
        if(empty($_POST['patientname']) || empty($_POST['hospital']) || empty($_POST['date']) || empty($_POST['patientno'])){
            return;
        }else{
            $patientName = $db->real_escape_string($_POST['patientname']);
            $hospital = $db->real_escape_string($_POST['hospital']);
            $date = $db->real_escape_string(date('Y-m-d'));
            $patientNo = $db->real_escape_string($_POST['patientno']);
            
            //query to insert into table
            $sql = $db->query("INSERT INTO patients_transfers (name,hospital,date,patientno) VALUES ('$patientName', '$hospital', '$date', '$patientNo')");
            if($sql){
                echo "Operation Succesfull";
            }else{
                echo "Error During Insertion".mysqli_error($db);
                return;
            }
        }
        return;
    }

    // function to add an employee or doctor
    public function addEmployee(){
        global $db;
        if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['employeeno'])) {
            return;
        }else{
            $firstName = $db->real_escape_string($_POST['firstname']);
            $lastName = $db->real_escape_string($_POST['lastname']);
            $email = $db->real_escape_string($_POST['email']);
            $employeeNo = $db->real_escape_string($_POST['employeeno']);
            $password = $db->real_escape_string($_POST['password']);
            $pass = password_hash($password,PASSWORD_BCRYPT);
            // to avoid occurence of more than one record
            $sql = $db->query("SELECT *  FROM employee WHERE email = '$email' OR employeeno ='$employeeNo' ");
            if(mysqli_num_rows($sql) > 0){
                echo "Employee ALready Exists";
                return;
            }

            // query to insert into table
            $sql = $db->query("INSERT INTO employee (firstname,lastname,email,password,employeeno) VALUES ('$firstName','$lastName','$email','$pass','$employeeNo') ") ;
            if($sql){
                echo "Operation Succesful";
            }else{
                echo "Error During Insertion";
            }
        }
        return;
    }

    // assign department to a doctor/employee
    function assignDepartment(){
        global $db;
        if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['department'])){
            return ;
        }else{

            $docId = $db->real_escape_String($_POST['docid']);
            $department=$db->real_escape_String($_POST['department']);
            // update department into employee table
            $sql = $db->query("UPDATE employee SET department='$department' WHERE employeeno='$docId' ");
            if($sql){
                echo "Operation Succesfull";
            }else{
                echo "Error During Insertion".mysqli_error($db);
                return;
            }

        }
        return;
        
    }

    function updateEmployeeRecord(){
        global $db;
        
            $firstName =$db->real_escape_string($_POST['firstname']);
            $lastName  =$db->real_escape_string($_POST['lastname']);
            $password = $db->real_escape_string($_POST['password']);
            $pass = password_hash($password,PASSWORD_BCRYPT);
            $email = $db->real_escape_string($_POST['email']);
            $employeeNo = $db->real_escape_string($_POST['employeeno']);

            // to upload picture for a doctor/employee
            $targetDirectory = 'assets/Upload/';
            $targetFile =$targetDirectory.$_FILES['picture']['name'];
            move_uploaded_file($_FILES['picture']['tmp_name'],$targetFile);
            $sql = $db->query("UPDATE employee SET firstname='$firstName', lastname='$lastName', password ='$pass', email='$email', picture='$targetFile' WHERE employeeno='$employeeNo' ");
            if($sql){
                echo "Operation Successful";
            }else{
                echo "Error During Insertion".mysqli_error($db);
            }
            return ;
        
    }

    function addDepartment(){
        global $db;
        if(empty($_POST['department'])){
            return;
        }else{
            $department = $db->real_escape_string($_POST['department']);
            //query to insert into table
            $sql = $db->query("INSERT INTO departments (departments) VALUES ('$department') ");
            if($sql){
                echo "Operation Successfull Department Added successfully";
            }else{
                echo "Error During Insertion".mysqli_error($db);
            }
            return;
        }
    }

    //update department record
    function updateDepartment(){
        global $db;
        if(empty($_POST['department'])){
            return;
        }else{
            // sanitize input
            $department = $db->real_escape_string($_POST['department']);
            $departmentId=$db->real_escape_string($_POST['departmentid']);
            //query to update department
            $sql = $db->query("UPDATE departments SET departments='$department' WHERE sn='$departmentId' ");
            if($sql){
                echo "Operation Successful";
            }else{
                echo "Error During Insertion".mysqli_error($db);
            }
        }
        return;
    }

    // to transfer an employee from one department to another 
    function transferEmployeeDepartment(){
        global $db;
        if(empty($_POST['newdepartment'])){
            return;
        }else{
            $employeeNo=$db->real_escape_string($_POST['employeeno']);
            $newDepartment=$db->real_escape_string($_POST['newdepartment']);
            $sql = $db->query("UPDATE employee SET department='$newDepartment' WHERE employeeno='$employeeNo' ");
            if($sql){
                echo "Operation Successfull";
            }else{
                echo "Error During Insertion ".mysqli_error($db);
            }
        }
        return;
    }

    function addVendor(){
        global $db;
        if(empty($_POST['vname']) || empty($_POST['vemail']) || empty($_POST['vdescription']) || empty($_POST['vphone']) || empty($_POST['vaddress']) || empty($_POST['vnumber'])){
            echo "ERROR!";
            //return ;
        }else{
            $vName=$db->real_escape_string($_POST['vname']);
            $vMail=$db->real_escape_string($_POST['vemail']);
            $vDescription = htmlspecialchars($db->real_escape_string($_POST['vdescription']), ENT_QUOTES, 'UTF-8');
            $vPhone = $db->real_escape_string($_POST['vphone']);
            $vNumber = $db->real_escape_string($_POST['vnumber']);
            $vAddress = $db->real_escape_string($_POST['vaddress']);
            // query to insert into  Vendor table
            $sql = $db->query("INSERT INTO vendors(v_name,v_number,v_phone,v_mail,v_address,v_description) VALUES ('$vName','$vNumber','$vPhone','$vMail','$vAddress','$vDescription')");
            if($sql){
                echo "Operation Successfull";
            }else{
                echo "Error During Insertion".mysqli_error($db);
            }
        }
        return;
    }

    function updateVendor(){
        global $db;
        $vName=$db->real_escape_string($_POST['vname']);
        $vMail=$db->real_escape_string($_POST['vemail']);
        $vDescription = htmlspecialchars($db->real_escape_string($_POST['vdescription']), ENT_QUOTES, 'UTF-8');
        $vPhone = $db->real_escape_string($_POST['vphone']);
        $vendorNo = $db->real_escape_string($_GET['v_number']);
        $vAddress = $db->real_escape_string($_POST['vaddress']);
        // query to update record in a table
        $sql =$db->query("UPDATE vendors SET v_name='$vName', v_phone='$vPhone', v_mail='$vMail', v_address='$vAddress', v_description='$vDescription'  WHERE v_number='$vendorNo' ");
        if($sql){
            echo "Operation Succesfull";
        }else{
            echo "Error During Insertion".mysqli_error($db);
        }
        return;
    }

    function addPharmaceuticalCategory(){
        global $db;
        if(empty($_POST['pharm_cat_name']) || empty($_POST['pharm_cat_vendor']) || empty($_POST['pharm_cat_description'])){
            return ;
        }else{
            $pharmName=$db->real_escape_string($_POST['pharm_cat_name']);
            $pharmVendor=$db->real_escape_string($_POST['pharm_cat_vendor']);
            $pharmDescription= htmlspecialchars($db->real_escape_string($_POST['pharm_cat_description']),ENT_QUOTES,'UTF-8');
            $sql= $db->query("INSERT INTO pharmaceutical_categories (p_name,p_vendor,p_description) VALUES('$pharmName','$pharmVendor','$pharmDescription')");
            if($sql){
                echo "Operation Successfull";
            }else{
                echo "Error During Insertion".mysqli_error($db);
            }
        }
        return;
    }

    function updatePharmaceuticalCategory(){
        global $db;
        if(empty($_POST['pharm_cat_vendor']) || empty($_POST['pharm_cat_name']) || empty($_POST['pharm_cat_description'])){
            return;
        }else{
            $pharmVendor=$db->real_escape_string($_POST['pharm_cat_vendor']);
            $pharmName=$db->real_escape_string($_POST['pharm_cat_name']);
            $pharmDescription= htmlspecialchars($db->real_escape_string($_POST['pharm_cat_description']),ENT_QUOTES,'UTF-8');
            $pharmId = $db->real_escape_string($_GET['pharm_cat_id']);
            // query to update table
            $sql = $db->query("UPDATE pharmaceutical_categories SET p_name='$pharmName', p_vendor='$pharmVendor', p_description='$pharmDescription'  WHERE sn='$pharmId' ");
            if($sql){
                echo "Operation Successfull";
            }else{
                echo "Error During insertion".mysqli_query($db);
            }
        }
        return;
    }

    function addPharmaceuticals(){
        global $db;
        if(empty($_POST['pharm_name']) || empty($_POST['pharm_description']) || empty($_POST['pharm_vendor']) || empty($_POST['pharm_category']) || empty($_POST['pharm_bcode']) || empty($_POST['pharm_quantity'])){
            return;
        }else{
            // sanitze user input
            $pharmName=$db->real_escape_string($_POST['pharm_name']);
            $pharmDescription= htmlspecialchars($db->real_escape_string($_POST['pharm_description']),ENT_QUOTES,'UTF-8');
            $pharmVendor=$db->real_escape_string($_POST['pharm_vendor']);
            $pharmCategory=$db->real_escape_string($_POST['pharm_category']);
            $pharmBcode=$db->real_escape_string($_POST['pharm_bcode']);
            $pharmQuantity=$db->real_escape_string($_POST['pharm_quantity']);
            // to insert into table
            $sql=$db->query("INSERT INTO pharmaceuticals (pharm_name,pharm_bcode,pharm_description,quantity,pharm_category,pharm_vendor) VALUES ('$pharmName','$pharmBcode','$pharmDescription','$pharmQuantity','$pharmCategory','$pharmVendor') ");
            if($sql){
                echo "Operation Successfull";
            }else{
                echo "Error during Insertion".mysqli_error($sql);
            }
        }
        return;
    }

    function delete($table,$key,$value){
        global $db;
        $sql = $db->query("DELETE FROM $table WHERE $key='$value'");
       if($sql){
        return true;
       }else{
        return false;
       }
    }

    function updatePharmaceuticals(){
        global $db;
        if(empty($_POST['pharm_name']) || empty($_POST['pharm_quantity']) || empty($_POST['pharm_description']) || empty($_POST['pharm_vendor']) || empty($_POST['pharm_category'])){
            echo "Please Input Values!";
        }else{
            $pharmName=$db->real_escape_string($_POST['pharm_name']);
            $pharmDescription=htmlspecialchars($db->real_escape_string($_POST['pharm_description']),ENT_QUOTES,'UTF-8');
            $pharmVendor=$db->real_escape_string($_POST['pharm_vendor']);
            $pharmCategory=$db->real_escape_string($_POST['pharm_category']);
            $pharmBcode=$db->real_escape_string($_GET['pharmid']);
            $pharmQuantity=$db->real_escape_string($_POST['pharm_quantity']);
            //query to update table
            $sql = $db->query("UPDATE Pharmaceuticals SET pharm_name='$pharmName', pharm_description='$pharmDescription',quantity='$pharmQuantity', pharm_category='$pharmCategory', pharm_vendor='$pharmVendor' WHERE MD5(pharm_bcode)='$pharmBcode' ");
            if($sql){
                echo "Operation Sucessfull";
            }else{
                echo "Error!".mysqli_error($db);
            }
        }
        return ;
    }
    function AddPatientPrescription(){
        global $db;
        if(empty($_POST['prescription']) || empty($_POST['patientno'])){
            return;
        }
        $patientId =$_POST['patientno'];
        $patientPresctiption=htmlspecialchars($db->real_escape_string($_POST['prescription']),ENT_QUOTES,'UTF-8');
        $sql = $db->query("INSERT INTO prescriptions(patient_id,prescription) VALUES('$patientId','$patientPresctiption')");
        if($sql){
            echo "Operation Successfull";
        }else{
            echo "Error!".mysqli_error($sql);
        }
        return;

    }

    function updatePatientPrescription(){
        global $db;
        $patientPresctiption=htmlspecialchars($db->real_escape_string($_POST['prescription']),ENT_QUOTES,'UTF-8');
        $prescriptionId=$db->real_escape_string($_GET['prescid']);
        $sql = $db->query("UPDATE prescriptions SET prescription='$patientPresctiption' WHERE MD5(patient_id)='$prescriptionId' ");
        if($sql){
            echo "Operation Successfull";
        }else{
            echo "Error!".mysqli_error($sql);
        }
        return;
    }

    function AddAccountpayable(){
        global $db;
        if(empty($_POST['account_name']) || empty($_POST['amount']) || empty($_POST['description'])){
            return;
        }
        $accountName=$db->real_escape_string($_POST['account_name']);
        $accountNumber=$db->real_escape_string($_POST['account_number']);
        $accountType=$db->real_escape_string($_POST['account_type']);
        $amount=$db->real_escape_string($_POST['amount']);
        $description=htmlspecialchars($db->real_escape_string($_POST['description']),ENT_QUOTES,'UTF-8');

        $sql=$db->query("INSERT INTO accounts(account_name,account_number,amount,account_type,description) VALUES('$accountName','$accountNumber','$amount','$accountType','$description')");
        if($sql){
            echo "Operation Successfull";
        }else{
            echo "Error!".mysqli_error($sql);
        }
        return;
    }
    function updateAccountPayable(){
        global $db;
        if(empty($_POST['account_name']) || empty($_POST['amount']) || empty($_POST['description'])){
            return;
        }
        $accountName=$db->real_escape_string($_POST['account_name']);
        $accountId=$db->real_escape_string($_GET['acc_number']);
        $amount=$db->real_escape_string($_POST['amount']);
        $description=htmlspecialchars($db->real_escape_string($_POST['description']),ENT_QUOTES,'UTF-8');
        // query to update record
        $sql = $db->query("UPDATE accounts SET account_name='$accountName',amount='$amount', description='$description' WHERE MD5(sn)='$accountId' ");
        if($sql){
            echo "Operation Successfull";
        }else{
            echo "Error!".mysqli_error($db);
        }
        return;
    }

    function addPatientLabTest(){
        global $db;
        if(empty($_POST['patientname']) || empty($_POST['patientno'])){
            return;
            //echo "ERROR!";
        }
        $patientName = $db->real_escape_string($_POST['patientname']);
        $patientNo = $db->real_escape_string($_POST['patientno']);
        $labTest  = $db->real_escape_string($_POST['labtest']);
        // insert into table
        $sql = $db->query("INSERT INTO laboratory (patient_name,patientno,lab_test) VALUES ('$patientName','$patientNo','$labTest')");
        if($sql){
            echo "operation Successfull";
        }else{
            echo "Error!".mysqli_error($db);
        }
        return;
    }
    function addPatientLabResult(){
        global $db;
        if(empty($_POST['labresult']) || empty($_POST['labtest'])){
            return;
            //echo 'Error!';
        }
        $labResult = $db->real_escape_string($_POST['labresult']);
        $labId = $db->real_escape_string($_GET['lab_number']);
        $labTest = $db->real_escape_string($_POST['labtest']);

        $sql = $db->query("UPDATE laboratory SET lab_result='$labResult', lab_test='$labTest' WHERE sn='$labId' ");
        if($sql){
            echo "Operation Successfull";
        }else{
            echo "Error!".mysqli_error($db);
        }
        return;
    }

    function addVitals(){
        global $db;
        if(empty($_POST['bloodpressure']) || empty($_POST['resprate']) || empty($_POST['heartpulse']) || empty($_POST['bodytemp']) || empty($_POST['id'])){return;}
        $bodyTemp = $db->real_escape_string($_POST['bodytemp']);
        $bloodPressure = $db->real_escape_string($_POST['bloodpressure']);
        $heartpulse = $db->real_escape_string($_POST['heartpulse']);
        $respRate = $db->real_escape_string($_POST['resprate']);
        $id = $db->real_escape_string($_POST['id']);

        $sql = $db->query("INSERT INTO vitals (id,bodytemp,heartpulse,resprate,bloodpressure) VALUES('$id','$bodyTemp','$heartpulse','$respRate','$bloodPressure') ");
        if($sql){
            echo "Operation Sucessfull";
        }else{
            echo "ERROR!".mysqli_error($db);
        }
        return;

    }

    function addEquipments(){
        global $db;
        if(empty($_POST['eqp_code']) || empty($_POST['quantity']) || empty($_POST['eqp_desc']) || empty($_POST['status']) || empty($_POST['eqp_vendor']) || empty($_POST['eqp_name']) || empty($_POST['eqp_dept'])){
            return ; 
        }
        $eqpCode = $db->real_escape_string($_POST['eqp_code']);
        $eqpName = $db->real_escape_string($_POST['eqp_name']);
        $quantity = $db->real_escape_string($_POST['quantity']);
        $eqpDescription = $db->real_escape_string($_POST['eqp_desc']);
        $status = $db->real_escape_string($_POST['status']);
        $eqpVendor = $db->real_escape_string($_POST['eqp_vendor']);
        $eqpDepartment = $db->real_escape_string($_POST['eqp_dept']);

        $sql = $db->query("INSERT INTO equipments(eqp_code,eqp_name,eqp_vendor,eqp_description,eqp_department,status,quantity) VALUES('$eqpCode','$eqpName','$eqpVendor','$eqpDescription','$eqpDepartment','$status','$quantity') ");
        if($sql){
            echo "Operation Sucessfull";
        }else{
            echo "ERROR!".mysqli_error($db);
        }
        return;
    }

    function updateEquipment(){
        global $db;
        if( empty($_POST['quantity']) || empty($_POST['eqp_desc']) || empty($_POST['status']) || empty($_POST['eqp_vendor']) || empty($_POST['eqp_name'])){
            return ; 
        }
        $eqpCode = $db->real_escape_string($_GET['eqp_code']);
        $eqpName = $db->real_escape_string($_POST['eqp_name']);
        $quantity = $db->real_escape_string($_POST['quantity']);
        $eqpDescription = $db->real_escape_string($_POST['eqp_desc']);
        $status = $db->real_escape_string($_POST['status']);
        $eqpVendor = $db->real_escape_string($_POST['eqp_vendor']);

        $sql = $db->query("UPDATE equipments SET  eqp_name='$eqpName',eqp_vendor='$eqpVendor', eqp_description='$eqpDescription',status='$status', quantity='$quantity' WHERE sn='$eqpCode' ");
        if($sql){
            echo "Operation Sucessfull";
        }else{
            echo "ERROR!".mysqli_error($db);
        }
        return;
    }

    function addPatientSurgery(){
        global $db;
        if(empty($_POST['patientno']) || empty($_POST['status']) || empty($_POST['doctor']) || empty($_POST['surgeryno'])){
            return;
        }
        $status = $db->real_escape_string($_POST['status']);
        $patientNo  = $db->real_escape_string($_POST['patientno']);
        $surgeryNo  = $db->real_escape_string($_POST['surgeryno']);
        $doctorId = $db->real_escape_string($_POST['doctor']);

        $sql = $db->query("INSERT INTO surgery(s_number,doctor,patientno,status) VALUES('$surgeryNo','$doctorId','$patientNo','$status')");

        if($sql){
            echo "Operation Sucessfull";
        }else{
            echo "ERROR!".mysqli_error($db);
        }
        return;
    }

    function updatePatientSurgery(){
        global $db;
        if(empty($_POST['status'])){return;}
        $status = $db->real_escape_String($_POST['status']);
        $surgeryId = $db->real_escape_string($_GET['surgeryno']);

        $sql = $db->query("UPDATE surgery SET status='$status' WHERE sn='$surgeryId'");
        if($sql){
            echo "Operation Sucessfull";
        }else{
            echo "ERROR!".mysqli_error($db);
        }
        return;

    }

}



$pro = new profile();
?>
