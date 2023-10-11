<?php 
session_start();ob_start();
 include ("myclass.php");
 $id = $_SESSION['id'];

 if(isset($_POST['change'])){
    $target = 'upload/';
    $targetfile $target.$_FILES['picture']['name'];

    move_uploaded_file($_FILES['picture']['tmp_name'],$targetfile);
    $db->query("UPDATE user SET picture = '$targetfile' WHERE id='$id' ");
    echo 'Sucess'.$_SESSION['id'];
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
            <h4>Upload picture</h4>
          </div>
          <div class="card-body">
            <form action="" method="POST" enctype=''>
                
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