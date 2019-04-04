<?php
include('config.php');
extract($_SESSION);
$accept=$_REQUEST['createid'];
$eventid=$_REQUEST['id'];
$userid=$_REQUEST['uid'];
$query="INSERT INTO requests(creatorid,userid,eventid) VALUE ('$accept','$userid','$eventid')";
mysqli_query($con,$query);
echo "<script>window.location='publicevents.php'</script>";
 ?>