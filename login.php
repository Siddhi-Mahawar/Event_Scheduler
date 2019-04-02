<?php
session_start(); 
include('config.php');
extract($_POST);
extract($_GET);

if(isset($submit))
{	

if($user==1)
	{
$password=md5($password);
	$que=mysqli_query($con,"select email,pass,status from user where email='$email_id' and pass='$password'");
	
	 $row= mysqli_num_rows($que);
	 if($row)
	 {
	 	$status=mysqli_fetch_assoc($que);
		if($status['status']==1)
		{
		echo "<span class='glyphicon glyphicon-exclamation-sign' style='color:red'></span> <font color='red'>Your account is deactivated by admin</font>";
		}
		else
		{
		$_SESSION['user']=$email_id;
		echo "<script>window.location='home.php'</script>";
	 	} 
	}
	 else
	 {
	 echo "<span class='glyphicon glyphicon-exclamation-sign' style='color:red'></span> <font color='red'>Invalid User Login</font>";
	 }
	}


//for Admin
	if($user==2)
	{
	$password=md5($password);
	$que=mysqli_query($con,"SELECT `email`, `pass` FROM `admin` WHERE email='$email_id' and pass='$password'");
	
	 $row= mysqli_num_rows($que);
	 if($row)
	 {
		$_SESSION['admin']=$email_id;
		echo "<script>window.location='admin'</script>";
	}
	else
	 {
		echo "<span class='glyphicon glyphicon-exclamation-sign' style='color:red'></span> <font color='red'>Wrong Admin login details</font>";
	 }
	}
//Admin end


	
}
?>

<!DOCTYPE html>
<html>
<head>
       <title>User Registration</title>
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <link rel ="stylesheet" type ="text/css" href="style.css">
       <link href="./home/css" rel="stylesheet">
    <link href="./home/css(1)" rel="stylesheet">
    <link href="./home/css(2)" rel="stylesheet">
    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="./home/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./home/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="./home/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="./home/gallery.css">
    <link rel="stylesheet" type="text/css" href="./home/vit-gallery.css">
    <link rel="shortcut icon" type="text/css" href="./home/favicon.png">
    <link rel="stylesheet" type="text/css" href="./home/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="./home/bootstrap-datepicker.css">
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="./home/styles.css">
<script type="text/javascript" charset="UTF-8" src="./home/common.js.download"></script><script type="text/javascript" charset="UTF-8" src="./home/util.js.download"></script></head>

</head>

<body >
 <div>
    <?php
        include 'nav.php' ?>    
   
   </div>
       <div id="home">
        <div style="padding-top: 5pc">
	<form  method="post" >

                <div class="header">
                        <h2> Login </h2>
                </div>
		<div class="input-group">
			
                        <input type="email" name="email_id" id="email" size="100%" autocomplete="off" placeholder="Email">
		</div>
		<div class="input-group">
			
                        <input type="password" name="password" id="pass" size="100%" placeholder="Password">
        </div>
        <select class="form-control" name="user" id="user">
		<option value="1">User</option>
		<option value="2">Admin</option>
		
    	 </select>
            <div style="padding-top: 5px;">
              
                    <button type="submit" name="submit" class="btn " style="font-family: sans-serif;width: 49%" value="Login" name="login" >Login</button>
               
                <a href="signup.php">    <button2 type="submit" name="signup" class="btn center" style="font-family: sans-serif ; width: 49%">SignUp</button2>
                </a>
            </div>
            <div class="input-group" style="text-align: right">
                <p ><a href="forgot.php">Forgot password?</a></p>               
            </div>
        </form>
        </div>
    </div>    
    
    
 </body>
</html>
