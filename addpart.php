<?php
include('config.php');
$eventid=$_REQUEST['id'];
$userid=$_REQUEST['userid'];
$query="update invitation set current='1' where eventid='$eventid' and userid='$userid'";
mysqli_query($con,$query);
echo "<script>window.location='event_page.php'</script>";
 ?>