<?php
include('config.php');
$accept=$_REQUEST['ac'];
$reqid=$_REQUEST['id'];
if($accept==1)
{
    $query="update requests set reqstatus='1' where requestid='$reqid'";
    mysqli_query($con,$query);
}
else
{
    $query="update requests set reqstatus='2' where requestid='$reqid'";
    mysqli_query($con,$query);
}
echo "<script>window.location='eventreq.php'</script>";
 ?>