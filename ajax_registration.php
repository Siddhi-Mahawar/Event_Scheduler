 <?php 
 require('config.php');
 extract($_POST);
 extract($_GET);
if(!empty($email))
 {
 
	 $que=mysqli_query($con,"select email from user where email='$email'");
	 $row= mysqli_num_rows($que);
	 if($row)
	 {
	echo "<span class='glyphicon glyphicon-exclamation-sign' style='color:red'></span> <font color='red'>Sorry! Email already exists</font>";
	 }
	 else
	 { 
	 $pass=md5($pass);
	 
	 mysqli_query($con,"insert into user values('','$username','$email','$pass','$mobile','$gen','1')");
	 
	echo "<span class='glyphicon glyphicon-exclamation-sign' style='color:green'></span>
	<font color='green'>Congrats ! Your account has been created Successfully, admin will review and activate it soon.</font>";
	 }
	 
	 
	
	 
 
 }
 ?>
