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
@media only screen and (max-width: 600px) {
	#space
	{
		padding-top:25%;
		padding-bottom:15%;
	}
} 

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
	#space
	{
		padding-top:25%;
		padding-bottom:15%;
	}
} 
@media only screen and (min-width: 768px) {
	#space
	{
		padding-top:20%;
		padding-bottom:10%;
	}
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
	#space
	{
		padding-top:20%;
		padding-bottom:10%;
	}
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
	#space
	{
		padding-top:20%;
		padding-bottom:10%;
	}
}

body{background:lightgray}
.panel-table .panel-body{
  padding:0;
}

.panel-table .panel-body .table-bordered{
  border-style: none;
  margin:0;
}

.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type {
    text-align:center;
    width: 100px;
}

.panel-table .panel-body .table-bordered > thead > tr > th:last-of-type,
.panel-table .panel-body .table-bordered > tbody > tr > td:last-of-type {
  border-right: 0px;
}

.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type,
.panel-table .panel-body .table-bordered > tbody > tr > td:first-of-type {
  border-left: 0px;
}

.panel-table .panel-body .table-bordered > tbody > tr:first-of-type > td{
  border-bottom: 0px;
}

.panel-table .panel-body .table-bordered > thead > tr:first-of-type > th{
  border-top: 0px;
}

.panel-table .panel-footer .pagination{
  margin:0; 
}

/*
used to vertically center elements, may need modification if you're not using default sizes.
*/
.panel-table .panel-footer .col{
 line-height: 34px;
 height: 34px;
}

.panel-table .panel-heading .col h3{
 line-height: 30px;
 height: 30px;
}

.panel-table .panel-body .table-bordered > tbody > tr > td{
  line-height: 34px;
}
</style>
<?php
    include 'header.php';
    include 'nav.php' ?>
<div class="container" >
   <div class="row" id="space">
   <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
             
              <div class="panel-body">
			  <div class="table-responsive">
                <table class="table table-striped table-bordered table-list">
				 <div class="panel-heading">
                <div class="row">
                  
                  <div class="col col-xs-8 text-left">
                    <button type="button" class="btn btn-lg btn-success btn-create">Your Invitations</button>
                  </div>
                </div>
              </div>
                  <thead>
                        
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
                        </table></div></div></div></div>
   </div>
</div>
<?php include('footer.php');?>