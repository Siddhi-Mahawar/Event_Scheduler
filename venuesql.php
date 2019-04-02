<?php include 'config.php';
session_start();

    function extract_venues()
    {
        echo 'jgiui';
        $venquery = "select * from venue";
        $que=mysqli_query($con,$venquery);
        $venues =mysqli_fetch_array($que, MYSQLI_ASSOC);
        return $venues;
    }

?>