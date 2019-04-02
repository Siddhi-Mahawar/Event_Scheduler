<?php
require('../config.php');
$e=$_REQUEST['eid'];
mysqli_query($con,"delete from user  where email='$e'");
echo "<script>window.location='index.php?option=users'</script>";
?>