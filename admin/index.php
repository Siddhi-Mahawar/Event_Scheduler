<?php
 session_start();
error_reporting(1);
require('../config.php');
 extract($_SESSION);
 if($admin=="")
 {
 header('location:login.php');
 }
 
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   
  </head>

  <body style="background-image:url('../img/tk.jpg')">




   


    <nav class="navbar navbar-inverse navbar-fixed-top" style="background:#f5f5f5;border-bottom:1px solid #ccc">
      <div class="container-fluid" >
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar" style="background-color: black !important;"></span>
            <span class="icon-bar" style="background-color: black !important;"></span>
            <span class="icon-bar" style="background-color: black !important;"></span>
          </button>
		  




          <a class="navbar-brand" href="index.php" style="color:#337ab7"><?php echo "Welcome ".$admin;?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >
          <li ><a href="index.php" style="color:#337ab7"><strong>Dashboard</strong> <span class="sr-only">(current)</span></a></li>
            <li><a href="index.php?option=venue" style="color:#337ab7"><span class="glyphicon glyphicon-asterisk"></span> Venues</a></li>			
			<li><a href="index.php?option=users" style="color:#337ab7"><span class="glyphicon glyphicon-user"></span>Users</a></li>

			<li><a href="index.php?option=update_password" style="color:#337ab7"><span class="glyphicon glyphicon-cog"></span> Update Password</a></li>
		
		
		
            <li><a href="logout.php" style="color:#337ab7"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
         
        </div>
      </div>
    </nav>

   
        
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main">
         
		
			<?php 
			$option=$_REQUEST['option'];
			if($option!="")
			{
				if($option=="venue")
				{
				include('venue.php');
				}
				
				if($option=="update_venue")
				{
				include('update_venue.php');
				}
				
				
				if($option=="add_venue")
				{
				include('add_venue.php');
				}		
				
							
				if($option=="users")
				{
				include('users.php');
				}
				if($option=="update_password")
				{
				include('update_password.php');
				}
				
				
				
			}else{
			?>
			
			
			
           <h1 class="page-header"><font color="white">Admin Dashboard</font></h1>
           <?php
		  

$r=mysqli_query($con,"SELECT count(*) as total1 from user ");
$d=mysqli_fetch_assoc($r);
$c=$d['total1'];
echo "<h3 style='color:orange'>Total Registered Users :  $c</h3>";



$r=mysqli_query($con,"SELECT count(*) as total1 from user where status='0'");
$d=mysqli_fetch_assoc($r);
$c=$d['total1'];
echo "<h3 style='color:lightgreen'>Total Active Users :  $c</h3>";


$r=mysqli_query($con,"SELECT count(*) as total1 from user where status='1'");
$d=mysqli_fetch_assoc($r);
$c=$d['total1'];
echo "<h3 style='color:red'>Total Deactive Users :  $c</h3>";





		   ?>
		   
		  

         <?php }?>
		 
		  
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
