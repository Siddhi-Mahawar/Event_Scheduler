<?php 
include('config.php');

 extract($_POST);

 if(isset($add))
 {
	 if($et>$st)
	 {
	$que=mysqli_query($con,"insert into venue(name,start_time,end_time,location) values('$ven','$st','$et','$loc')");
	$que1=mysqli_query($con,"SELECT id from venue where name='$ven' and start_time='$st' and end_time='$et' and location='$loc'");
		$row=mysqli_fetch_array($que1);
		$venid=$row['id'];
	$name= $_FILES["img"]["name"];
    $dot='.';
    $tmp_name= $_FILES["img"]["tmp_name"];
    $position= strpos($name, "."); 
    $fileextension= substr($name, $position);
    $path= 'Uploads/venues/';
	 if (!empty($name)){
        if (move_uploaded_file($tmp_name, $path.$venid.$fileextension)) {
        }
    }
  
   
 	 $que=mysqli_query($con,"UPDATE venue SET image='$path$venid$fileextension' where id=$venid");
	 $err="<font color='yellow'>New available Venue added</font>"; 
	 }
	 else
	 {
		  $err="<font color='white'>Enter proper start time and end time</font>"; 
		 
	 }
	 
 }

?>

<div class="row">
<div class="col-sm-12">
 <form method="post" enctype="multipart/form-data">
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
    <label for="exampleInputEmail1"><font color='white'>Enter location</font></label>
    <input type="text" class="form-control" name="loc"  required>
  </div> 
  </div>
  </div>
  <div class="row">
   
<div class="col-sm-6">
	 <div class="form-group">
    <label for="exampleInputEmail1"><font color='white'>Add image</font></label>
    <input type="file"  class="form-control" name="img"  required>
  </div> 
  </div>
  </div>
  
  
  <div class="row">
  <div class="col-sm-6">
  <div class="form-group">
 <button name="add" class="btn btn-lg btn-success btn-block" type="submit">Add venues available</button>
	
  </div>
  </div>
 </div> 
</form>