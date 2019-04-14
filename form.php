

<?php
include('config.php');
session_start();
extract($_SESSION);
extract($_GET);
$errors=array();
$eventvenue=$_REQUEST['ev'];
$_SESSION['venue1']=$eventvenue;
   $eventstart=$start;
   $eventend=$end;
   $eventname="";
   $eventdesc="";
   $eventv1=$venue1;
   echo '<br />';
   if(isset($_POST['addevent'])){
    $eventname = ($_POST['eventname']);
    $eventdesc = ($_POST['eventdesc']);
    $sql2="SELECT id from venue where name='$eventv1'";
    $result1=mysqli_query($con,$sql2);
    $row1=mysqli_fetch_array($result1);
    $venueid=$row1['id'];
    $sql3="SELECT id from user where email='$user'";
    $result2=mysqli_query($con,$sql3);
    $row2=mysqli_fetch_array($result2);
    $id=$row2['id'];
    $_SESSION['userid']=$id;
    echo $eventname.$eventstart.$eventend.$eventdesc.$eventv1;
    echo '<br />';
    $sql="INSERT INTO event(eventname,eventdesc,eventstart,eventend,eventvenue,venueid,eventcreator) VALUES('$eventname','$eventdesc','$eventstart','$eventend','$eventv1','$venueid','$id')";
    mysqli_query($con,$sql);
    echo $eventname.$eventstart.$eventend.$eventdesc.$eventv1;
    $q1="SELECT * FROM event where eventname='$eventname' and eventdesc='$eventdesc' and eventstart='$eventstart' and eventend='$eventend' and eventvenue='$eventv1'";
    $result=mysqli_query($con,$q1);
    $row=mysqli_fetch_array($result);
    $eventid=$row['eventid'];
    echo $eventid;
    $_SESSION['eveid']=$eventid;
    
    //For uploading cover image
    $name= $_FILES["image"]["name"];
    $dot='.';
    $tmp_name= $_FILES["image"]["tmp_name"];
    $position= strpos($name, "."); 
    $fileextension= substr($name, $position);
    $path= 'Uploads/cover/';
    if (!empty($name)){
        if (move_uploaded_file($tmp_name,$path.$eveid.$fileextension)) {
            echo 'Uploaded!';
        }
    }
    // $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $query = "UPDATE event SET eventcover='$path$eveid$fileextension' where eventid=$eventid";
    if(mysqli_query($con,$query))
    {
        echo '<script>alert("Image Inserted into database")</script>';
    }
    $name= $_FILES["profile"]["name"];
    $dot='.';
    $tmp_name= $_FILES["profile"]["tmp_name"];
    $position= strpos($name, "."); 
    $fileextension= substr($name, $position);
    $path= 'Uploads/profile/';
    if (!empty($name)){
        if (move_uploaded_file($tmp_name, $path.$eveid.$fileextension)) {
            // echo 'Uploaded!';
        }
    }
    // $file = addslashes(file_get_contents($_FILES["profile"]["tmp_name"]));
    $query = "UPDATE event SET eventimage='$path$eveid$fileextension' where eventid=$eventid";
    if(mysqli_query($con,$query))
    {
        // echo '<script>alert("Image Inserted into database")</script>';
    }
    header('location:event_page.php');
    }
?>

<html>
<head>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- beauty font ROBOTO -->
<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
<style>
@import url('https://fonts.googleapis.com/css?family=Satisfy');
@import url('https://fonts.googleapis.com/css?family=Margarine');
@import url('https://fonts.googleapis.com/css?family=Courgette');
/* Font ROBOTO */
.roboto{
    font-family: 'Roboto', sans-serif !important; 
}
/* custom background header panel */
.custom-header-panel{
    background-color: #004b8e !important;
    border-color: #004b8e !important;
    color: white;
}
.no-margin-form-group {
    margin: 0 !important;
}
.requerido {
    color: red;
}
.btn-orange-md {
    background:#73CC77   !important;
    border-bottom: 3px solid #3B923F  !important;
    color: white;
}
.btn-orange-md:hover {
    background:  #3B923F !important;
    color: white !important;
}
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
		padding-top:15%;
		padding-bottom:10%;
	}
} 
/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
	#space
	{
		padding-top:15%;
		padding-bottom:10%;
	}
}
</style>
</head>
<body>
<?php
    include 'header.php';
    include 'nav.php' ?>
	
 <div id="space">
<div class="container">
<div class="row">
    <div class="col-md-12">

        <form id="eventdata" class="form-horizontal" method="POST" role="form" action=""  enctype="multipart/form-data">

           

            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="panel">
                        <div class="panel-heading custom-header-panel">
                            <h3 class="panel-title roboto">Event info</h3>
                        </div>
                        <div class="panel-body">
							
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="name">Event Name <span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="eventname" id="name" value=""  required maxlength="70">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="event desc" class="col-sm-4 control-label">Event description<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                     <input type="text" class="form-control" name="eventdesc" id="desc" value=""  required maxlength="700">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="imgpro">Add event image<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="file" name="profile" id="profile">
									
                                </div>
                            </div>
                           <div class="form-group">
                                <label class="col-sm-4 control-label" for="imgpro">Add event cover image</label>
                                <div class="col-sm-8">
                                    <input type="file" name="image" id="image">
								
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <input type="submit" class="form-control btn-orange-md" name="addevent" id="addevent" value="SUBMIT">
                                </div>
                            </div>
                           
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                  
            
            
        </form> <!-- Fint form -->  
    </div>
</div>
<!-- Tab panes -->
</div></div>

</body></html>
<?php
include('footer.php');

?>
