<?php
include('config.php');
session_start();
extract($_SESSION);
//echo $user;
//echo '<br /><br/>';
$qu="SELECT * FROM user where email='$user'";
$result=mysqli_query($con,$qu);
$row=mysqli_fetch_array($result);
$userid=$row['id'];
//echo $userid;
//echo '<br /><br/>';
if(isset($_POST['view'])){
if($_POST["view"] != '')
{
   $update_query = "UPDATE notif SET status = 1 WHERE status=0 and userid=$userid";
   mysqli_query($con, $update_query);
}
$qu1="SELECT * from event where statue=1";
$res1=mysqli_query($con,$qu1);
$qu2="SELECT * from notif where userid=$userid";
$res2=mysqli_query($con,$qu2);
if(mysqli_num_rows($res1)!=mysqli_num_rows($res2))
{
   while($r2=mysqli_fetch_array($res1))
   {
      if($r2['eventcreator']==$userid)
         continue;
      $p=$r2['eventid'];
      $q=$r2['eventname'];
      $r=$r2['eventvenue'];
      //echo $p,$q,$r;
      //echo '<br /><br />';
      $qu3="SELECT * FROM notif where userid=$userid and eventid=$p";
      $res3=mysqli_query($con,$qu3);
      //echo mysqli_num_rows($res3);
      if(mysqli_num_rows($res3)==0)
      {
         $qu4="INSERT INTO notif(userid,eventid,eventname,eventvenue,status) VALUES($userid,$p,'$q','$r',0)";
         mysqli_query($con,$qu4);
      }
   }
}
$query = "SELECT * FROM notif where userid=$userid ORDER BY eventid DESC LIMIT 10 ";
$result = mysqli_query($con, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
   while($row = mysqli_fetch_array($result))
   {
   $output .= '
   <li>
   <a href="#">
   <strong>'.$row["eventname"].'</strong><br />
   <small><em>'.$row["eventvenue"].'</em></small>
   </a>
   </li>
   ';
   }
}
else{
    $output .= '<li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}
$status_query = "SELECT * FROM notif WHERE userid=$userid and status=0";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
   'notification' => $output,
   'unseen_notification'  => $count
);
echo json_encode($data);
}
?>