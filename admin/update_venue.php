<?php 
 extract($_POST);
 if(isset($update))
 {
 	 $que=mysqli_query($con,"update venue set name='$ven',start_time='$st',end_time='$et' where id='".$_GET['id']."'");
	 
	$err="<font color='yellow'>Venue and time slot Updated</font>";
	 
 }

$rs=mysqli_query($con,"select * from venue where id='".$_GET['id']."'");
$r=mysqli_fetch_array($rs);


?>

<div class="row">
<div class="col-sm-12">
 <form method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  	</div> 
  </div>
 </div> 


<div class="row">
<div class="col-sm-6">
	 <div class="form-group">
    <label for="exampleInputEmail1"><font color="white">Your Venue </label>
    <input type="text" class="form-control" name="ven" value="<?php echo $r[1]; ?>"  required>
	 <label for="exampleInputEmail1"><font color='white'>Enter Start time</font></label>
    <input type="datetime-local" class="form-control" name="st"  required>
	<label for="exampleInputEmail1"><font color='white'>Enter End time</font></label>
    <input type="datetime-local" class="form-control" name="et"  required>
  </div> 
  </div>
  </div>
  
  <div class="row">
  <div class="col-sm-6">
  <div class="form-group">
    <button name="update" class="btn btn-lg btn-success btn-block" type="submit">Update Venue and time slots</button>
	
  </div>
  </div>
 </div> 
