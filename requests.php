<?php
include('config.php');
session_start();
extract($_SESSION);
    $qu="SELECT * FROM user where email='$user'";
    $result=mysqli_query($con,$qu);
    $row=mysqli_fetch_array($result);
    $userid=$row['id'];
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
@import url('https://fonts.googleapis.com/css?family=Satisfy');
@import url('https://fonts.googleapis.com/css?family=Margarine');
@import url('https://fonts.googleapis.com/css?family=Courgette');

</style>
<div class="container">
   <div class="row">
                        <table class="table">
                        <tr class="info">
                        <th>Event Name</th>
                        <th>Description</th>
                        <th>Event Start</th>
                        <th>Event End</th>
                        <th>Venue</th>
                        <th>Accept</th>
                        <th>Reject</th>
                        <th>
                        </tr>
                        <?php
                        $query="SELECT * FROM invitation where userid='$userid' and current=1";
                        $result = mysqli_query($con,$query);
                        // echo $userid;
                        while($row = mysqli_fetch_array($result))
                        {
                           $p=$row['eventid'];
                           $query1="SELECT * FROM event where eventid=$p";
                           $result1=mysqli_query($con,$query1);
                           $row1=mysqli_fetch_array($result1);
                           $inviteid=$row['inviteid'];
                            ?>
                            <tr class="active">
                            <Td><?php echo $row1['eventname'];?></Td>
                            <Td><?php echo $row1['eventdesc'];?></Td>
                            <Td><?php echo $row1['eventstart'];?></Td>
                            <Td><?php echo $row1['eventend'];?></Td>
                            <Td><?php echo $row1['eventvenue'];?></Td>
                            <Td>
                            <?php
                            echo "<a href='decision.php?id=$inviteid&ac=1' title='decision'>
                            <span class='glyphicon glyphicon-ok' style='color:red' aria-hidden='true'>
                            </span>
                            </a>";
                            ?>
                            </Td>
                            <Td>
                             <?php
                            echo "<a href='decision.php?id=$inviteid&ac=0' title='decision'>
                            <span class='glyphicon glyphicon-remove' style='color:red' aria-hidden='true'>
                            </span>
                            </a>";
                        }
                            ?>
                        </Td>
                        <Td>
                        </Td>
                        </tr>
                        </table>
   </div>
</div>