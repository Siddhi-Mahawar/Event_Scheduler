<?php 

include('config.php');
extract($_POST);
$venid=$_GET['id'];

 
 if(isset($update))
 {
	  if($et>$st)
	  {
        $today = date("Y-m-d h:i:s");

        $q = "select * from venue where id=$venid";
        $query=mysqli_query($con,$q);
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
        $st_ck=$row['start_time'];
        $et_ck=$row['end_time'];

        $q="count * from event where venue = '$ven' and eventstart >= '$today' and (((`eventstart`  between \''.$st_ck.'\' and \''.$et_ck.'\') or (`eventend` between \''.$st_ck.'\' and \''.$et_ck.'\')) and `eventvenue` = \''.$ven.'\')"; 
        $count_before=mysqli_query($con,$q);
        $q="count * from event where venue = '$ven' and eventstart >= '$today' and (((`eventstart`  between \''.$st.'\' and \''.$et.'\') or (`eventend` between \''.$st.'\' and \''.$et.'\')) and `eventvenue` = \''.$ven.'\')"; 
        $count_after=mysqli_query($con,$q);
        if($count_after==$count_before)
        {   
            $que=mysqli_query($con,"update venue set name='$ven',start_time='$st',end_time='$et',location='$loc' where id=$venid");
            $name= $_FILES["image"]["name"];
            $dot='.';
            $tmp_name= $_FILES["image"]["tmp_name"];
            
            //echo $tmp_name;
            // echo $name;
            $position= strpos($name, "."); 
            $fileextension= substr($name, $position);
            //echo "file extension";
            //echo $fileextension;
            $path= 'Uploads/venues/';
            if (!empty($name)){
                if (move_uploaded_file($tmp_name, $path.$venid.$fileextension)) {
                
                }
            }
            // $file = addslashes(file_get_contents($_FILES["profile"]["tmp_name"]));
            $query = "UPDATE venue SET image='$path$venid$fileextension' where id=$venid";
            if(mysqli_query($con,$query))
            {
                //echo '<script>alert("Image Inserted into database")</script>';
            }
            
        }
        else{
            $err="<font color='yellow'>Many Events Will be affected</font>";
        }
        $err="<font color='yellow'>Venue details Updated</font>";
	 
 }
 else
	 {
		  $err="<font color='white'>Enter proper start time and end time</font>"; 
		 
	 }

$rs=mysqli_query($con,"select * from venue where id='".$_GET['id']."'");
$r=mysqli_fetch_array($rs);
 }

?>
 <form method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-sm-12">

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
	<label for="exampleInputEmail1"><font color="white">Location</label>
    <input type="text" class="form-control" name="loc" value="<?php echo $r[4]; ?>"  required>
	<label for="exampleInputEmail1"><font color='white'>Add image</font></label>
    <input type="file"  class="form-control" name="image"  required>
  </div> 
  </div>
  </div>
  
  <div class="row">
  <div class="col-sm-6">
  <div class="form-group">
    <button name="update" class="btn btn-lg btn-success btn-block" type="submit">Update Venue</button>
	
  </div>
  </div>
 </div> 
 </form>
