<?php 
 extract($_POST);
 if(isset($add))
 {
 	 $que=mysqli_query($con,"insert into venue values('','$ven','$st','$et')");
	 $err="<font color='yellow'>Venue and time slot added</font>"; 
 }

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
    <label for="exampleInputEmail1"><font color='white'>Enter Venue</font></label>
    <input type="text" class="form-control" name="ven"  required>
  </div> 
  </div>
  </div>
  <div class="row">
<div class="col-sm-6">
	 <div class="form-group">
    <label for="exampleInputEmail1"><font color='white'>Enter Start time</font></label>
    <input type="datetime-local" class="form-control" name="st"  required>
  </div> 
  </div>
  </div>
  <div class="row">
<div class="col-sm-6">
	 <div class="form-group">
    <label for="exampleInputEmail1"><font color='white'>Enter End time</font></label>
    <input type="datetime-local" class="form-control" name="et"  required>
  </div> 
  </div>
  </div>
  
  <div class="row">
  <div class="col-sm-6">
  <div class="form-group">
 <button name="add" class="btn btn-lg btn-success btn-block" type="submit">Add Venue and time slot</button>
	
  </div>
  </div>
 </div> 
