<?php
session_start(); 
include('config.php');
extract($_POST);
extract($_GET);
if(isset($regis))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$pass =$_POST['pass'];
	$mob =$_POST['mob'];
	$gen =$_POST['gender'];
	$pass=md5($pass);
	mysqli_query($con,"insert into user values('','$username','$email','$pass','$mobile','$gen','0')"); 
	//echo "<span class='glyphicon glyphicon-exclamation-sign' style='color:green'></span>
	//<font color='green'>Congrats ! Your account has been created Successfully, admin will review and activate it soon.</font>";
	$_SESSION['user']=$email;
	header('Location: home.php');
}
?>

     <script src="jquery-1.11.2.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
	 <script>
	
	/*$(document).ready(function(){
					$("#err1").hide();
			$("#save").click(function()
			{
		
					var username =$('#username').val();
					var email =$('#email12').val();
					var pass =$('#pass123').val();
					var mob =$('#mob').val();
					var gen =$('#gender').val();				
                   

var dataString = 'username='+ username + '&email='+ email+'&pass='+pass+'&mobile='+mob+'&gen='+gen ;
//alert(dataString);
	if(email==''|| pass==''|| username=='' || mob=='' || gen=='')
   {
   		$("#err1").show();
    	$("#err1").html("Fill all the details before you submit. ");
	}
	else
	{

// AJAX Code To Submit Form.
	$.ajax({
	type: "POST",
	url: "ajax_registration.php",
	data: dataString,
	cache: false,
	success: function(result){

	$('#err1').html(result);
	$("#err1").hide().slideDown();
			  		setTimeout(function(){
				  	$("#err1").hide();        
			  }, 3000);
			
	}
	});
	}
return false;
		
		
		});
	
	});
	*/
		</script>


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

       <div id="home">
        <div style="padding-top: 5pc">
          <form  method="post" >

                <div class="header">
                        <h2> Sign Up </h2>
                </div>
                <div class="input-group">
			
            <input type="text" name="username" id="username" size="100%" autocomplete="off" placeholder="Username" required>
        </div>
        <div class="input-group">
			
        <input   name="mob"  id="mob" type="tel" size = "100%" pattern="^([+][9][1]|[9][1]|[0]){0,1}([7-9]{1})([0-9]{9})$" required placeholder="Mobile number"/>
	        </div>

        <div class="input-group">
			
                    <input type="text" name="email" id="email12" size="100%" autocomplete="off" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required>
		</div>
                <div class="input-group">
                    <input type="password" name="pass" id="pas123" size="100%"  placeholder="Password" required>
        </div>
        
        <select class="form-control" name="gender"  id="gender" required>
		<option value="">Gender</option>
		<option value="m">Male</option>
		<option value="f">Female</option>
    </select>
        <div style="padding-top: 5px;">  
                <button type="submit" id="save"  value="Register" name="regis" class="btn " style="font-family: sans-serif;width: 100%"  >Sign up</button>
            </div>
            </form>
      
        </div>
    </div>    
    
    
	
	

 </body>
</html>
