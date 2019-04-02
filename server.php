<?php 
   include('config.php');
   session_start();
   extract($_SESSION);
   // echo $venue;
   // echo $end;
   // echo $start;
   $eventname="";
   $eventdesc="";
   $eventstart=$start;
   $eventend=$end;
   $eventvenue=$venue;
   $errors=array();
   if(isset($_POST['addevent'])){
   	$eventname = ($_POST['eventname']);
      $eventdesc = ($_POST['eventdesc']);
      echo $eventname.$eventdesc.$eventstart.$eventend.$eventvenue;
      // if(count($errors)==0){
         $sql="INSERT INTO event(eventname,eventdesc,eventstart,eventend,eventvenue) VALUES('$eventname','$eventdesc','$start','$end','$venue')";
         mysqli_query($connect,$sql);
         // echo '<script>alert("hello")</script>';
         $query="SELECT * From event where eventname=$eventname and eventdesc=$eventdesc";
         $result=mysqli_query($connect,$sql);
         $row=mysqli_fetch_array($result);
         $_SESSION['eventid']=$row['eventid'];
         // header('location:index.php');
      // }
   }
?>