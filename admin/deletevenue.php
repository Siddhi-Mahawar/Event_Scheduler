<?php
require("../config.php");
mysqli_query($con,"delete from venue where id='{$_GET['id']}'");
header('location:index.php?option=venue');
?>
