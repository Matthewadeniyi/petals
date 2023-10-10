<?php 
 include ("myclass.php");
// $sn = $_GET['sn'];
$target_dir = "upload/";
@$file_name =  basename($_FILES["fileToUpload"]["name"]);
@$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $report  =  "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $report = "File is not an image.";$count = 1;
        $uploadOk = 0;
    }

    // Check if file already exists
if (file_exists($target_file)) {
    $report = "Sorry, file already exists."; $count=1;
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    $report = "Sorry, your file is too large.";$count=1;
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $report = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";$count=1;
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $report = "Sorry, your file was not uploaded.";$count=1;
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {    
        
    $sql = $db->query("UPDATE students SET picture = '$file_name' WHERE sn = '$sn' ") or die($db->error);

    if($sql){
        $report = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    }else{
        die($db->error);
        unlink('upload/'.$file_name);
    }
    } else {
        $report = "Sorry, there was an error uploading your file.";$count=1;
    }
}
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Picture</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
        width: 400px; /* Adjust the width as needed */
    }
    </style>
</head>
<body>
    
<div class="container">
        <div class="card mx-auto">
          <div class="card-header">
            <h4>Account</h4>
          </div>
          <div class="card-body">
            <form action="" method="POST">
                
                <label for="">Email</label>
                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control">
                </div>
                
                <div class="form-group">
                    <div>

                        <input type="file" class="custom-file-input mt-4" id="exampleInputFile">
                    </div>
                  </div>
              </div>
              <div class="card-footer">
              <label class="custom-file-label btn btn-primary mt-4" for="exampleInputFile">Choose file</label>
              </div>

            </form>
        </div>
      </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>