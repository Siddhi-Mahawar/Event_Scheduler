<?php
require('../config.php');
$sts=$_REQUEST['status'];
$e=$_REQUEST['eid'];
 if($sts)
 {
 mysqli_query($con,"update user set status=0 where email='$e'");
 echo "<script>window.location='index.php?option=users'</script>";
 }
 else
 {
 mysqli_query($con,"update user set status=1 where email='$e'");
 echo "<script>window.location='index.php?option=users'</script>";
 }
 ?>