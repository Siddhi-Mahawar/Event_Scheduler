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

<?php
    include 'header.php';
    include 'nav.php' ?>
<div class="container" style="padding-top:7%">
   <div class="row">
                        <table class="table">
                        <tr class="info">
                        <th>Event Name</th>
                        <th>Description</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Gender</th>
                        <th>Accept</th>
                        <th>Reject</th>
                        <th>
                        </tr>
                        <?php
                        $query="SELECT * FROM requests where creatorid=$userid";
                        $result = mysqli_query($con,$query);
                        while($row = mysqli_fetch_array($result))
                        {
                            $r=$row['requestid'];
                            if($row['reqstatus']!=0)
                                continue;
                            $p=$row['eventid'];
                            $q=$row['userid'];
                            $q1="SELECT * FROM event where eventid=$p";
                            $res1 = mysqli_query($con,$q1);
                            $row3=mysqli_fetch_array($res1);
                            $quer1="SELECT * from user where id=$q";
                            $res2=mysqli_query($con,$quer1);
                            $row1=mysqli_fetch_array($res2);
                            ?>
                            <tr class="active">
                            <Td><?php echo $row3['eventname'];?></Td>
                            <Td><?php echo $row3['eventdesc'];?></Td>
                            <Td><?php echo $row1['name'];?></Td>
                            <Td><?php echo $row1['email'];?></Td>
                            <Td><?php echo $row1['mob'];?></Td>
                            <Td><?php echo $row1['gender'];?></Td>
                            <Td>
                            <?php
                                echo "<a href='eventscreq.php?id=$r&ac=1' title='decision'>
                                <span class='glyphicon glyphicon-ok' style='color:red' aria-hidden='true'>
                                </span>
                                </a>";
                            echo "<td><a href='eventscreq.php?id=$r&ac=0' title='decision'>
                            <span class='glyphicon glyphicon-remove' style='color:red' aria-hidden='true'>
                            </span></td>";
                        }
                            ?>
                            </Td>
                        <Td>
                        </Td>
                        </tr>
                        </table>
   </div>
</div>