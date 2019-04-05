<?php 
session_start();
include('config.php');
	if(isset($_SESSION['logincust']))
	{
		$ema= $_SESSION['email'];
		$pass =$_SESSION['first_name'];
		$pass1=md5($pass);
		$q1="SELECT * from user where email='$ema'";
		$res1=mysqli_query($con,$q1);
		if(mysqli_num_rows($res1)==0)
		{
				$q2="INSERT INTO user(name,email,pass,status) VALUES('$pass','$ema','$pass1','0')";
		}	
		$_SESSION['user']=$ema;
		header('Location: home.php');
	}
		
	if(isset($_POST['logoutsr']))
	{
		session_unset();
		echo "<script type='text/javascript'>location.href = 'index.php';</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<style>
		body {
  padding-top: 70px;
  padding-bottom: 30px;
}

.theme-dropdown .dropdown-menu {
  position: static;
  display: block;
  margin-bottom: 20px;
}

.theme-showcase > p > .btn {
  margin: 5px 0;
}

.theme-showcase .navbar .container {
  width: auto;
}
	
.panel {
    margin-bottom: 20px;
    background-color: #fff;
border: 1px solid #F2F3F3;
   }

*{margin:0px}


</style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Event Scheduler</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

   

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
</head>

  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
        <a class="navbar-brand" href="index.php" >Event Scheduler</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
         
		   <ul class="nav navbar-nav navbar-right">
                       
					<li>
			<a href="index.php?option=login"  >
			<span class="glyphicon glyphicon-lock"></span>Sign In</a>
		</li>    
			
		<li>
			<a  href="#" data-toggle="modal" data-target="#m" style="color:#fff">
			<span class="glyphicon glyphicon-pencil"></span>Sign Up</a>
		</li>
			</ul>			
        </div>
      </div>
    </nav>
	
	<?php
			//echo '<a href="loginFB.php"><img src="images/loginfb.png" alt="Login with Facebook" width=222></a><br>';
			include_once 'loginG.php';
			if(isset($_GET['code'])){
				$gClient->authenticate($_GET['code']);
				$_SESSION['token'] = $gClient->getAccessToken();
				header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
			}
			if (isset($_SESSION['token'])) {
				$gClient->setAccessToken($_SESSION['token']);
			}
			if ($gClient->getAccessToken()) 
			{
				$gpUserProfile = $google_oauthV2->userinfo->get();
				$_SESSION['oauth_provider'] = 'Google'; 
				$_SESSION['oauth_uid'] = $gpUserProfile['id']; 
				$_SESSION['first_name'] = $gpUserProfile['given_name']; 
				$_SESSION['last_name'] = $gpUserProfile['family_name']; 
				$_SESSION['email'] = $gpUserProfile['email'];
				$_SESSION['logincust']='yes';
			} else {
				$authUrl = $gClient->createAuthUrl();
				$output= '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="images/loging.png" alt="Sign in with Google+" width=222/></a>';
			}
			echo $output;
			//if(isset($_SESSION[''])
		if(isset($_SESSION['logincust']))
		{
			?>
			<form method="post"><input class="btn btn-danger" style="margin-top:5px;width:70px;height:35px;" type="submit" value="Logout" name="logoutsr" width="48" height="48"></form>
			<?php
		}
		?>
<div class="row">
<div class="col-lg-12">
    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
	  <?php 
	  @$opt=$_REQUEST['option'];
	  if($opt!="")
	  {
		if($opt=="newuser")
		{
		include('registration.php');
		}
		
		if($opt=="login")
		{
      // window.location('login.php');
		include('ajax_login.php');
		}
		
		
		
	  }
	  ?>
	 
  </div>
  
</div>
	  
	  
	   
	  





<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<!-- registration model start -->


 
   		<?php  include('registration.php'); ?>

     <script src="jquery-1.11.2.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
	


	
	<script>
	
	$(document).ready(function(){
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
		</script>


	</body>
</html>

