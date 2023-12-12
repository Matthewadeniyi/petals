<?php
session_start();
$id = $_SESSION['id'];
?>
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login </title>  
<style>   
    body {  
    font-family: Calibri, Helvetica, sans-serif;  
    background-color: #0A2239 ;  
    margin: 0;
    padding: 0;
    }  

    button {   
        background-color:#0A2239 ;   
        width: 90%; 
        height: 60px; 

            color:white;   
            padding: 15px;   
            margin: 15px 20px;  
            border: none;   
            cursor: pointer;  
            border-radius: 5px;
    
            }   
    /* this is the styling for both of the input fields */
    input[type=email], input[type=password], input[type=text], select {   
            width: 90%;   
            height: 55px;
            margin: 15px 10px 5px 20px;  
            padding: 15px 40px;   
            display: inline-block;   
            border: none;            
            background-color: #F3F3F3 ;
            box-sizing: border-box; 
            
 
        }

    
    #email{
        background-image: url("./images/mdi_email.svg"); 
        background-repeat: no-repeat;
        background-size: 5%;
        background-position: 95%;
    }

    #password{
        background-image: url("./images/material-symbols_lock.svg"); 
        background-repeat: no-repeat;
        background-size: 5%;
        background-position: 95%;
    }
    
    #tel{
        background-image: url("./images/phone-call.png"); 
        background-repeat: no-repeat;
        background-size: 5%;
        background-position: 95%;
    }
    
    #fname, #lname{
        background-image: url("./images/user1.png"); 
        background-repeat: no-repeat;
        background-size: 5%;
        background-position: 95%;
    }

    .container {   
        
        top: 25%;
        left: 50%;
        width: 30em;
        /* height: 44em; */
        margin-top: -9em;
        margin-left: -15em;
        /* border: 1px solid #666; */
        box-shadow:2px 5px 5px grey;
        background-color: white ;
        position: fixed;
        border-radius: 7px;


    }   
    
    select:invalid{
        color: #8b8888 ;

    }

    .toptext{
        text-align: center;
        font-size: 10px;
        margin: auto;
    }
    
    .bottomtext{
        color: #8b8888 ;
        text-align: center;
        font-size: smaller;
        margin-top: 2px;

    }
    .header{
        text-align: center;
        margin-top: 25px;
        margin-bottom: 5px;
        /* font-size: larger; */
        color: #1DC4E7;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    .right{
        float: right;
        font-size: small;
        margin: auto;
        padding: 0px 10px;
    }

    .icon{

        width: 60px;
        height: 45px;
        margin: 5px 60px 0px;
    }

    .icondiv{
        text-align: center;
    }

    .crossfade{
        margin: 0;
        padding: 0;
        /* background-image: url('hostel1.jpg'); */
    }

    .crossfade > figure {
        animation: imageAnimation 30s linear infinite 0s;
        backface-visibility: hidden;
        background-size: cover;
        background-position: center center;
        color: transparent;
        height: 100%;
        left: -40px;
        opacity: 0;
        position: fixed;
        top: -20px;
        width: 100%;
        z-index: 0;
        padding: 0;
    }

    .crossfade > figure:nth-child(1) { background-image: url('./images/hostel1.jpg'); }
    .crossfade > figure:nth-child(2) {
    animation-delay: 6s;
    background-image: url('./images/hostel2.jpg');
    }
    .crossfade > figure:nth-child(3) {
    animation-delay: 12s;
    background-image: url('./images/hostel3.jpg');
    }
    .crossfade > figure:nth-child(4) {
    animation-delay: 18s;
    background-image: url('./images/hostel4.jpg');
    }
    .crossfade > figure:nth-child(5) {
    animation-delay: 24s;
    background-image: url('./images/hostel5.jpg');
    }
    
    @keyframes 
    imageAnimation {  
        0% {
        animation-timing-function: ease-in;
        opacity: 0;
        }
        8% {
            animation-timing-function: ease-out;
            opacity: 1;
        }
        17% {
            opacity: 1
        }
        25% {
            opacity: 0
        }
        100% {
            opacity: 0
        }
    }
   
</style>   
</head>    
<body>

    <div class="crossfade">
        <figure></figure>
        <figure></figure>
        <figure></figure>
        <figure></figure>
        <figure></figure>
    </div>   
    <form id="myForm" method="POST">  
        <div class="container">
            <!-- <div class ="icondiv"><img class = "icon" src="bxs_leaf.svg"/></div> -->
            
            <h2 class="header">Bayview <span style="color: #0A2239;">Hostels</span></h2>  
            <p class="toptext" id="error" style="color: red; margin-left: 50px; text-align: left;"></p> 
            <br> 
            <input type="email" placeholder="Email" name="email" id ="email">  
            <br>
            <input type="password" placeholder="Password" name="password" id ="password"> 
            <button name="register" type="submit" onclick="login()">Login</button> 
            <p class="bottomtext">Already have an account? <a href="login.php">Log in</a></p>
        </div>   
    </form>
    <script src="jquery.min.js"></script>
    
     <script type="text/javascript">

        function login(){
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            $.ajax({
                type:"get",
                url:"myclass.php?email="+ email +"&password="+ password +"&type=login"
            }).done(function(data){
                alert(data);
                if(data == "login Succesfull"){
                    window.location.replace('admin_index.php');
                }
            })
            
        }
</script>
    
</body>     
</html>  