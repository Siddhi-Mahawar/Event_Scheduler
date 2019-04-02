<?php
//session_start();
include('config.php');
extract($_POST);
extract($_GET);

if(isset($login))
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
		echo "<script>window.location='user.php'</script>";
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
<body style="background-color:#0080C0;padding:100px">
<div class="row">
<div class="col-sm-3">
</div>
<div class="col-sm-6">

<div class="panel panel-default">
<div class="panel-heading">

<h1 class="panel-title" style="color:#8F0BB0;" align="center">LOGIN</h1>
</div>
<div class="panel-body">

<form  method="post">
			<div class="form-group">
				<div class="input-group input-group-sm">
		 
		 <span class="input-group-addon">  
		 <span class="glyphicon glyphicon-envelope"></span></span>
						
	 <input type="email" class="form-control" name="email_id"  id="email" placeholder="Email"/>
	</div>
	</div>

	<!-- for password-->
	<div class="form-group">
	<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-lock"></span></span>
							
	 <input type="password" class="form-control" name="password"  id="pass" placeholder="password"/>
					
		</div>
	</div>
	<!-- password end -->
	
		<!-- for user type-->
	<div class="form-group">
	<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-user"></span></span>
							
	 <select  class="form-control" name="user"  id="user">
		<option value="1">User</option>
		<option value="2">Admin</option>
		
	 </select>
					
		</div>
	</div>
	<!-- password end -->
	
	  
<div class="form-group">

<input class="btn btn-primary" type="submit" value="Login" name="login" />


</div>
</form>

</div>
</div>
</div>
</div>
</body>