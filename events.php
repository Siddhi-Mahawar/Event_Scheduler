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
                    <h2>Private Events</h2>
                        <table class="table">
                        <tr class="info">
                        <th>Event Name</th>
                        <th>Description</th>
                        <th>Event Start</th>
                        <th>Event End</th>
                        <th>Venue</th>
                        <th>Event Creator</th>
                        <th>
                        </tr>
                        <?php
                        $query="SELECT * FROM invitation where userid=$userid and current=2";
                        $result = mysqli_query($con,$query);
                        //echo mysqli_num_rows($result);
                        while($row = mysqli_fetch_array($result))
                        {
                            $q=$row['eventid'];
                            //echo $q;
                            $quer1="SELECT * from event where eventid=$q and statue=0";
                            $res2=mysqli_query($con,$quer1);
                            //echo mysqli_num_rows($res2);
                            $row1=mysqli_fetch_array($res2);
                            ?>
                            <tr class="active">
                            <Td><?php echo $row1['eventname'];?></Td>
                            <Td><?php echo $row1['eventdesc'];?></Td>
                            <Td><?php echo $row1['eventstart'];?></Td>
                            <Td><?php echo $row1['eventend'];?></Td>
                            <Td><?php echo $row1['eventvenue'];?></Td>
                        <Td>
                        <?php
                        }
                        ?>
                        </Td>
                        </tr>
                        </table>
                        <h2>Public Events</h2>
                        <table class="table">
                        <tr class="info">
                        <th>Event Name</th>
                        <th>Description</th>
                        <th>Event Start</th>
                        <th>Event End</th>
                        <th>Venue</th>
                        <th>
                        </tr>
                        <?php
                        $query="SELECT * FROM invitation where userid=$userid and current=2";
                        $result = mysqli_query($con,$query);
                        //echo mysqli_num_rows($result);
                        while($row = mysqli_fetch_array($result))
                        {
                            $q=$row['eventid'];
                            //echo $q;
                            $quer1="SELECT * from event where eventid=$q and statue=1";
                            $res2=mysqli_query($con,$quer1);
                            //echo mysqli_num_rows($res2);
                            $row1=mysqli_fetch_array($res2);
                            ?>
                            <tr class="active">
                            <Td><?php echo $row1['eventname'];?></Td>
                            <Td><?php echo $row1['eventdesc'];?></Td>
                            <Td><?php echo $row1['eventstart'];?></Td>
                            <Td><?php echo $row1['eventend'];?></Td>
                            <Td><?php echo $row1['eventvenue'];?></Td>
                        <Td>
                        <?php
                        }
                        $query="SELECT * FROM requests where userid=$userid and reqstatus=1";
                        $result = mysqli_query($con,$query);
                        while($row = mysqli_fetch_array($result))
                        {
                            $q=$row['eventid'];
                            //echo $q;
                            $quer1="SELECT * from event where eventid=$q and statue=1";
                            $res2=mysqli_query($con,$quer1);
                            //echo mysqli_num_rows($res2);
                            $row1=mysqli_fetch_array($res2);
                            ?>
                            <tr class="active">
                            <Td><?php echo $row1['eventname'];?></Td>
                            <Td><?php echo $row1['eventdesc'];?></Td>
                            <Td><?php echo $row1['eventstart'];?></Td>
                            <Td><?php echo $row1['eventend'];?></Td>
                            <Td><?php echo $row1['eventvenue'];?></Td>
                        <Td>
                        <?php
                        }
                        ?>
                        </Td>
                        </tr>
                        </table>
                        <h2>Organiser</h2>
                        <table class="table">
                        <tr class="info">
                        <th>Event Name</th>
                        <th>Description</th>
                        <th>Event Start</th>
                        <th>Event End</th>
                        <th>Venue</th>
                        <th>
                        </tr>
                        <?php
                        $query="SELECT * FROM event where eventcreator=$userid";
                        $result = mysqli_query($con,$query);
                        while($row = mysqli_fetch_array($result))
                        {
                            ?>
                            <tr class="active">
                            <Td><?php echo $row['eventname'];?></Td>
                            <Td><?php echo $row['eventdesc'];?></Td>
                            <Td><?php echo $row['eventstart'];?></Td>
                            <Td><?php echo $row['eventend'];?></Td>
                            <Td><?php echo $row['eventvenue'];?></Td>
                        <Td>
                        <?php
                        }
                        
                        ?>
                        </Td>
                        </tr>
                        </table>
   </div>
</div>