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
<div class="container"  style="padding-top:10%">
   <div class="row">
                        <table class="table">
                        <tr class="info">
                        <th>Event Name</th>
                        <th>Description</th>
                        <th>Event Start</th>
                        <th>Event End</th>
                        <th>Venue</th>
                        <th>Event Creator</th>
                        <th>Request</th>
                        <th>Sent </th>
                        <th>
                        </tr>
                        <?php
                        $query="SELECT * FROM event where statue=1 ";//
                        $result = mysqli_query($con,$query);
                        // echo $userid;
                        while($row = mysqli_fetch_array($result))
                        {
                           $p=$row['eventid'];
                           $q=$row['eventcreator'];
                           if($q==$userid)
                            continue;
                            $quer1="SELECT * from user where id=$q";
                            $res2=mysqli_query($con,$quer1);
                            $row1=mysqli_fetch_array($res2);
                            $q1="SELECT * from requests where eventid=$p and userid=$userid";
                            $res3=mysqli_query($con,$q1);
                            // echo mysqli_num_rows($res3);
                            // $row2=mysqli_fetch_array($res3);
                            // echo $row2['userid'];
                            $row3=mysqli_fetch_array($res3);
                            if($row3['reqstatus']==1 || $row3['reqstatus']==2)
                                continue;
                            ?>
                            <tr class="active">
                            <Td><?php echo $row['eventname'];?></Td>
                            <Td><?php echo $row['eventdesc'];?></Td>
                            <Td><?php echo $row['eventstart'];?></Td>
                            <Td><?php echo $row['eventend'];?></Td>
                            <Td><?php echo $row['eventvenue'];?></Td>
                            <Td><?php echo $row1['name'];?></Td>
                            <Td>
                            <?php
                            if(mysqli_num_rows($res3)==0)
                            {
                                echo "<a href='sendreq.php?id=$p&createid=$q&uid=$userid' title='decision'>
                                <span class='glyphicon glyphicon-ok' style='color:red' aria-hidden='true'>
                                </span>
                                </a>";
                            }
                            else 
                            {
                            echo "<td></td><td><span class='glyphicon glyphicon-ok' style='color:red' aria-hidden='true'>
                            </span></td>";
                            }
                        }
                            ?>
                            </Td>
                        <Td>
                        </Td>
                        </tr>
                        </table>
   </div>
</div>