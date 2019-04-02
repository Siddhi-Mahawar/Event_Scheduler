<?php
include('config.php');
$accept=$_REQUEST['ac'];
$eventid=$_REQUEST['id'];
if($accept==1)
{
    $query="update invitation set current='2' where inviteid='$eventid'";
    mysqli_query($con,$query);
}
else
{
    $query="update invitation set current='3' where inviteid='$eventid'";
    mysqli_query($con,$query);
}
echo "<script>window.location='requests.php'</script>";
 ?>