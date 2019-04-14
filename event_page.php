<html>
<head>
<style>


/* ==========================================================================
   Author's custom styles
   ========================================================================== */

body
{
    font-family: 'Open Sans', sans-serif;
}

.fb-profile img.fb-image-lg{
    z-index: 0;
    width: 100%;  
    margin-bottom: 10px;
}

.fb-image-profile
{
    margin: -90px 10px 0px 50px;
    z-index: 9;
    width: 20%; 
}

@media (max-width:768px)
{
    
.fb-profile-text>h1{
    font-weight: 700;
    font-size:16px;
}

.fb-image-profile
{
    margin: -45px 10px 0px 25px;
    z-index: 9;
    width: 20%; 
}
}
</style>
</head>
<body>
<?php
include('config.php');
session_start();
extract($_SESSION);
$eventid=$eveid;
if(isset($_POST["private"]))
{
    $q1="SELECT statue from event where eventid=$eventid";
    $r1=mysqli_query($con,$q1);
    $row3=mysqli_fetch_array($r1);
    if($row3['statue']==1)
        $q2="UPDATE event SET statue=0 where eventid=$eventid";
    else
        $q2="UPDATE event SET statue=1 where eventid=$eventid";
     if(mysqli_query($con,$q2))
    {
        // echo '<script>alert("hey")</script>';
    }   
}
if(isset($_POST["insert"]))
{
    $name= $_FILES["image"]["name"];
    $dot='.';
    $tmp_name= $_FILES["image"]["tmp_name"];
    $position= strpos($name, "."); 
    $fileextension= substr($name, $position);
    $path= 'Uploads/cover/';
    if (!empty($name)){
        if (move_uploaded_file($tmp_name,$path.$eveid.$fileextension)) {
            // echo 'Uploaded!';
        }
    }
    // $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $query = "UPDATE event SET eventcover='$path$eveid$fileextension' where eventid=$eventid";
    if(mysqli_query($con,$query))
    {
        // echo '<script>alert("Image Inserted into database")</script>';
    }
}
if(isset($_POST["upload"]))
{
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
}
if(isset($_POST['desc']))
{
    $name= $_FILES["description"]["name"];
    $dot='.';
    $tmp_name= $_FILES["description"]["tmp_name"];
    $position= strpos($name, "."); 
    $fileextension= substr($name, $position);
    $path= 'Uploads/files/';
    if (!empty($name)){
        if (move_uploaded_file($tmp_name, $path.$eveid.$fileextension)) {
				echo 'Uploaded!';
        }
    }
    // $file = addslashes(file_get_contents($_FILES["description"]["tmp_name"]));
     $query = "UPDATE event SET eventdescdoc='$path$eveid$fileextension' where eventid=$eventid";
    if(mysqli_query($con,$query))
    {
        // echo '<script>alert("Image Inserted into database")</script>';
    }
}
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
    include 'header.php';
    include 'nav.php' ?>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="container">
    <div class="fb-profile">
		<div class="cover">
		<?php
                $query = "SELECT eventcover FROM event where eventid=$eventid";
                $result = mysqli_query($con,$query);
                $row=mysqli_fetch_array($result);
                if(mysqli_num_rows($result)!=1 || $row['eventcover']==null || $row['eventcover']=='Uploads/cover/')
                {
                    ?>
					<img align="left" class="fb-image-lg" src="http://lorempixel.com/850/280/nightlife/5/" alt="Profile image example"/>
					<?php
                }
                else
                {
                    
					$r=$row['eventcover'];
					?>
					<img align="left" class="fb-image-lg" src=<?php echo $r ?> height="50%" alt="Profile image example"/>
                 <?php
				}
				 ?>
        
		</div>
		<div class="profile">
		
					<?php
                    $query = "SELECT eventimage FROM event where eventid=$eventid";
                    $result = mysqli_query($con,$query);
                    $row=mysqli_fetch_array($result);
                    if(mysqli_num_rows($result)!=1 || $row['eventimage']==null || $row['eventimage']=='Uploads/profile/')
                    {
						?>
						<img align="left" class="fb-image-profile thumbnail" src="http://lorempixel.com/180/180/people/9/" alt="Profile image example"/>
                        <?php
                    }
                    else
                    {
						$r=$row['eventimage'];
						?>
                        <img align="left" class="fb-image-profile thumbnail" src=<?php echo $r?> alt="Profile image example"/>
				<?php
				}
				?>
		
        
		</div>
        <div class="fb-profile-text">
                            <?php
                                $query2="SELECT * FROM event where eventid=$eventid";
                                $result2=mysqli_query($con,$query2);
                                $row2=mysqli_fetch_array($result2);
                                $privacy=$row2['statue'];
                            ?>
                            <br/>
                            
            <p>
			<div class="pull-right">
				<form method="post" enctype="multipart/form-data">
				<input type="file" name="image" id="image" style="display:none" onchange=Cover() />
				<button type="button" name="UploadCover" class="btn btn-primary btn-sm" style="padding-botton:2%" onclick=Func()>Upload Cover Photo</button>
				<input type="submit" name="insert" id="insert" value="Insert" style="display:none"/>
				</form>
			</div>
			</p>
			
			<p>
			<form method="post" enctype="multipart/form-data">
			<input type="file" name="profile" id="profile" style="display:none" onchange="Profile()"/>
			<button type="button" class="btn btn-success btn-sm"onclick=Func1()>Upload Event Photo</button>
			<input type="submit" name="upload" id="upload" value="Upload" style="display:none"/>
             </form>
			</p>
		</h1>
		<?php
                    $query = "SELECT eventname FROM event where eventid=$eventid";
                    $result = mysqli_query($con,$query);
                    while($row = mysqli_fetch_array($result))
                    {
                        $p=$row['eventname'];
						?>
                        
                           <h1><?php echo $p?></h1>
						<?php
                    }
		?>
		<h1><div class="pull-right">
		<form method="post">						  
							<?php
                                $query2="SELECT * FROM event where eventid=$eventid";
                                $result2=mysqli_query($con,$query2);
                                $row2=mysqli_fetch_array($result2);
                                $privacy=$row2['statue'];
                            ?>
							
							<button type="button" class="btn btn-info btn-lg" style="padding-bottom:2%" onclick=private() >
							<?php
								if($privacy==1)
								{
									?>
									 Make private
									<?php
								}
								else
								{
							?>
								Make public
								<?php
								}								
								?></button>
							</form></div></h1>
		
		<p><div class="pull-right"><button type="button" class="btn btn-danger btn-lg" style="padding-top:2%" id="add_mem" data-toggle="modal" data-target="#myModal">Add participants</button></div></p>
		
		<?php
					$query = "SELECT eventdesc FROM event where eventid=$eventid";
                    $result = mysqli_query($con,$query);
                    while($row = mysqli_fetch_array($result))
                    {
                        $p=$row['eventdesc'];
                        ?>
						<p><?php echo $p?></p>
						<?php
                    }
                    ?>
		<?php
                    $query = "SELECT eventvenue FROM event where eventid=$eventid";
                    $result = mysqli_query($con,$query);
                    while($row = mysqli_fetch_array($result))
                    {
                        $p=$row['eventvenue'];
                        ?>
								<p><?php echo $p?></p>
						<?php
						
                    }
                    ?>
					<?php
                    $query = "SELECT eventstart,eventend FROM event where eventid=$eventid";
                    $result = mysqli_query($con,$query);
                    while($row = mysqli_fetch_array($result))
                    {
                        $p=$row['eventstart'];
                        $q=$row['eventend'];
                        ?>
						<p><?php echo $p?>  to  <?php echo $q?></p>
						<?php
                    }
                    ?>
						<?php
                        $query = "SELECT eventdescdoc FROM event where eventid=$eventid";
                        $result = mysqli_query($con,$query);
                        $row=mysqli_fetch_array($result);
                        if(mysqli_num_rows($result)!=1 || $row['eventdescdoc']==null)
                        {
                            ?>
                            <h4 >No file uploaded</h4>
                            <?php
                        }
                        else
                        {   
                            $add=$row['eventdescdoc'];
                            ?>
                            <a href=<?php echo $add; ?>><p>Event Description</p></a>
                            <?php
                        }
                        ?>
            
			<form method="post" enctype="multipart/form-data">
			<input type="file" name="description" id="description" style="display:none" onchange="Description()" />
			<button type="button" class="btn btn-warning btn-sm" onclick=Func3()>Upload event description</button>
			<input type="submit" name="desc" id="desc" value="Desc" style="display:none"/>
            </form>
			<h1>Participants </h1>
			<?php
                            $query="SELECT * FROM invitation where eventid=$eventid and current=2";
                            $result=mysqli_query($con,$query);
                            while($row=mysqli_fetch_array($result))
                            {
                            ?>
                            <div class="members_details" style="display:inline">
                            <img src="./icons/users.png" style="padding-left:25px;width:100px;height:75px; mragin-left:50px;">
                            <span style="font-family:'Courgette', cursive; "><?php echo $row['username']?></span>
                            </div>
                            <?php    
                            }
                            ?>
			<h1>Invited</h1>
			<?php
                            $query="SELECT * FROM invitation where eventid=$eventid and current=1";
                            $result=mysqli_query($con,$query);
                            while($row=mysqli_fetch_array($result))
                            {
                            ?>
                            <div class="invited_details" style="display:inline">
                            <img src="./icons/userindoubt.png" style="padding-left:25px;width:100px;height:75px; mragin-left:50px;">
                            <span style="font-family:'Courgette', cursive; "><?php echo $row['username']?></span>
                            </div>
                            <?php    
                            }
                            ?>
        <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                    <!-- Modal content-->
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Participants</h4>
                        </div>
                        <div class="modal-body">
                        <table class="table">
                        <tr class="info">
                        <th>Username</th>
                        <th>Email</th>
                        </tr>
                        <?php
                        $query = "SELECT * FROM user where status=0" ;
                        $query1="SELECT * FROM invitation where eventid=$eventid";
                        $result = mysqli_query($con,$query);
                        $result1=mysqli_query($con,$query1);
                        if(mysqli_num_rows($result)!=mysqli_num_rows($result1))
                        {
                                while($row=mysqli_fetch_array($result))
                                {
                                $t=$row['id'];
                                $u=$row['name'];
                                $e=$row['email'];
                                // echo "<script>alert($t)</script>";
                                $q="SELECT * from invitation where eventid=$eventid && userid=$t";
                                $r=mysqli_query($con,$q);
                                if(mysqli_num_rows($r)!=1 && $e!=$user)
                                {
                                    $sql="INSERT INTO invitation(eventid,userid,current,username,email) VALUES('$eventid','$t','0','$u','$e')";
                                    mysqli_query($con,$sql); 
                                }
                                } 
                        }
                        $query1="SELECT * FROM invitation where eventid=$eventid and current=0";
                        $result1=mysqli_query($con,$query1);
                        while($row = mysqli_fetch_array($result1))
                        {
                            ?>
                            <tr class="active">
                            <Td><?php echo $row['username'];?></Td>
                            <Td><?php echo $row['email'];?></Td>
                            
                            <Td>
                            <?php
                            // $eventid=39;
                            $userid=$row['userid'];
                            echo "<a href='addpart.php?id=$eventid&userid=$userid' title='Invite'>
                            <span class='glyphicon glyphicon-user' style='color:red' aria-hidden='true'>
                            </span>
                            </a>";
                        }
                            ?>
                        </Td>
                        <Td>
                        </Td>
                        </tr>
                        </div>
                    </div>
                    </div>
                    </div>
					<div class="modal-container" id="modal">
                    <div class="modal">
                        <a href="" class="close">X</a>
                    </div>
                </div>
				<div class="modal fade" id="Modal" role="dialog">
                            <div class="modal-dialog">
                        
                        <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form method="post"  >
                                            <a href="" class="close">X</a>
                                            <h4> Are you sure to commit this change</h4>
                                            <input type="submit" id="privsub" name="private" style="align:center;">
                                        </form>
                                    </div>
                                </div>
                        
                            </div>
                        </div>  
                        
		</div>
    </div>
</div> <!-- /container -->  
</body>
</html>

<script>
function Func()
{
	 $('#image').trigger('click');
}
function Cover()
{
    $('#insert').trigger('click');
}
function Func1()
{
	$('#profile').trigger('click');
}
function Profile()
{
    $('#upload').trigger('click');
}
function Func3()
{
	$('#description').trigger('click');
}
function Description()
{
    $('#desc').trigger('click');
}
function private()
{
    $('#privsub').trigger('click');
} 
</script>
