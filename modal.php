<?php 
include('config.php');
session_start();
extract($_SESSION);
extract($_GET);
echo $user;
$errors=array();
$eventvenue=$_REQUEST['ev'];
$_SESSION['venue1']=$eventvenue;
   $eventstart=$start;
   $eventend=$end;
   $eventname="";
   $eventdesc="";
   $eventv1=$venue1;
   echo $eventv1;
   echo '<br />';
   if(isset($_POST['addevent'])){
    $eventname = ($_POST['eventname']);
    $eventdesc = ($_POST['eventdesc']);
    $sql2="SELECT id from venue where name='$eventv1'";
    $result1=mysqli_query($con,$sql2);
    $row1=mysqli_fetch_array($result1);
    $venueid=$row1['id'];
    $sql3="SELECT id from user where email='$user'";
    $result2=mysqli_query($con,$sql3);
    $row2=mysqli_fetch_array($result2);
    $id=$row2['id'];
    $_SESSION['userid']=$id;
    echo $eventname.$eventstart.$eventend.$eventdesc.$eventv1;
    echo '<br />';
    $sql="INSERT INTO event(eventname,eventdesc,eventstart,eventend,eventvenue,venueid,eventcreator) VALUES('$eventname','$eventdesc','$eventstart','$eventend','$eventv1','$venueid','$id')";
    mysqli_query($con,$sql);
    echo $eventname.$eventstart.$eventend.$eventdesc.$eventv1;
    $q1="SELECT * FROM event where eventname='$eventname' and eventdesc='$eventdesc' and eventstart='$eventstart' and eventend='$eventend' and eventvenue='$eventv1'";
    $result=mysqli_query($con,$q1);
    $row=mysqli_fetch_array($result);
    $_SESSION['eveid']=$row['eventid'];
    header('location:event_page.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel ="stylesheet" type ="text/css" href="./css/style.css">
</head>
<body>

<div class="container">
    <h2 id="venuename"><?php echo $eventvenue?></h2>
    <a href="#modal"><img src="<?php echo $image?>" style="width:100%"></a>
    <!-- Modal -->
</div>
<div class="modal-container" id="modal">
    <div class="modal">
        <a href="" class="close">X</a>
        <span class ="modal_heading">
            Event Details
        </span>
        <form method="post" action="modal.php">
            <input type="text" class="details" placeholder="Event Name" name="eventname" value="<?php echo $eventname;?>"  required /><br>
            <input type="text" class="details" placeholder="Event Description" name="eventdesc" value="<?php echo $eventdesc;?>" required /><br>
            <input type="submit" class="btnEvent" value="Add Event" name="addevent">
        </form>
    </div>
</div>

</body>
</html>
