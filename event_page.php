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
<link rel="stylesheet" href="./css/style1.css">
<div class="row" style="padding-top:10%;">
        <div class="pic_base">
            <?php
                $query = "SELECT eventcover FROM event where eventid=$eventid";
                $result = mysqli_query($con,$query);
                $row=mysqli_fetch_array($result);
                if(mysqli_num_rows($result)!=1 || $row['eventcover']==null)
                {
                    echo '
                    <img src="./icons/bg4.jpg" class="cover_image"> ';
                }
                else
                {
                    
					$r=$row['eventcover'];
                 ?>
                                <img src=<?php echo $r?> class="cover_image" />
				<?php
				}
				?>
                <!-- <img src="bg4.jpg" class="cover_image"> -->
                <div class="event_cover">
                    <form method="post" enctype="multipart/form-data">
                        <a class="fa fa-camera" id="upload_cover"></a>
                        <input type="file" name="image" id="image" style="display:none" onchange="Cover()" />
                        <script>$('#upload_cover').click(function(){ $('#image').trigger('click'); });</script>
                        <input type="submit" name="insert" id="insert" value="Insert" style="display:none"/>
                        
                    </form>
                </div>
                <div class="event_pic">
                <?php
                    $query = "SELECT eventimage FROM event where eventid=$eventid";
                    $result = mysqli_query($con,$query);
                    $row=mysqli_fetch_array($result);
                    if(mysqli_num_rows($result)!=1 || $row['eventimage']==null)
                    {
                        echo '
                        <img src="./icons/user.png" class="profile_pic"> ';
                    }
                    else
                    {
						$r=$row['eventimage'];
                            ?>
                                <img src=<?php echo $r?> class="cover_image" />
				<?php
				}
				?>
                        <div class="icon">
                        <form method="post" enctype="multipart/form-data">
                                <a class="fa fa-camera" id="camera_pic"></a>
                                <input type="file" name="profile" id="profile" style="display:none" onchange="Profile()"/>
                                <script>$('#camera_pic').click(function(){ $('#profile').trigger('click'); });</script>
                                <input type="submit" name="upload" id="upload" value="Upload" style="display:none"/>
                        </form>
                        </div>
                </div>
        </div>
        <div class="content_base">
                <div class="col-sm-3" id="details"> 
                    <!-- <h1 class="event_name" style="font-family: 'Courgette', cursive;">Event Name</h1> -->
                    <?php
                    $query = "SELECT eventname FROM event where eventid=$eventid";
                    $result = mysqli_query($con,$query);
                    while($row = mysqli_fetch_array($result))
                    {
                        $p=$row['eventname'];
                        echo '
                                <h2 style="font-style:bold;">'.($p).'</h2>
                        ';
                    }
                    ?>
                    <br />
                    <?php
                    $query = "SELECT eventdesc FROM event where eventid=$eventid";
                    $result = mysqli_query($con,$query);
                    while($row = mysqli_fetch_array($result))
                    {
                        $p=$row['eventdesc'];
                        echo '
                                <h4 style="font-style: italic;">'.($p).'</h4>
                        ';
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
                            <a href=<?php echo $add; ?>><h4>Event Description</h4></a>
                            <?php
                        }
                        ?>
                    <form method="post" enctype="multipart/form-data">
                        <a class="fa fa-upload" id="desc_upload"></a>
                        <input type="file" name="description" id="description" style="display:none" onchange="Description()" />
                        <script>$('#desc_upload').click(function(){ $('#description').trigger('click'); });</script>
                        <input type="submit" name="desc" id="desc" value="Desc" style="display:none"/>
                    </form>
                    <h2 style="font-family:'Satisfy', cursive;">Event Timing:</h2>
                    <?php
                    $query = "SELECT eventstart,eventend FROM event where eventid=$eventid";
                    $result = mysqli_query($con,$query);
                    while($row = mysqli_fetch_array($result))
                    {
                        $p=$row['eventstart'];
                        $q=$row['eventend'];
                        echo '
                                <h4 >'.($p).'</h4>
                                <h4>'.($q).'</h4>
                        ';
                    }
                    ?>
                    <!-- <h2 style="font-family:'Satisfy', cursive;">Venue:</h2> -->
                    <br />
                    <?php
                    $query = "SELECT eventvenue FROM event where eventid=$eventid";
                    $result = mysqli_query($con,$query);
                    while($row = mysqli_fetch_array($result))
                    {
                        $p=$row['eventvenue'];
                        echo '<h4 style="font-style:italic;">'.($p).'</h4>';
                    }
                    ?>
                </div>
                <div class="col-sm-9" id="participants">
                <div class="ui toggle checkbox">
                            <?php
                                $query2="SELECT * FROM event where eventid=$eventid";
                                $result2=mysqli_query($con,$query2);
                                $row2=mysqli_fetch_array($result2);
                                $privacy=$row2['statue'];
                            ?>
                            <br/>
                            <form method="post">
                            <input type="checkbox" name="priv" <?php if($privacy) echo "checked";?> data-toggle="modal" data-target="#Modal">     
                            <label>public/private</label>
                </form>
                        </div>
                        <div class="modal fade" id="Modal" role="dialog">
                            <div class="modal-dialog">
                        
                        <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form method="post"  >
                                            <a href="" class="close">X</a>
                                            <h4> Are you sure to commit this change</h4>
                                            <input type="submit" name="private" style="align:center;">
                                        </form>
                                    </div>
                                </div>
                        
                            </div>
                        </div>  
                        
                        <img src="./icons/add_members.png" id="add_mem" data-toggle="modal" data-target="#myModal" >
                    <h2 id="members"> Participants</h2> 
                    <br/>   
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
                        <h2 id="invited">Invited</h2> 
                        <br/>   
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
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
                <div class="modal-container" id="modal">
                    <div class="modal">
                        <a href="" class="close">X</a>
                    </div>
                </div>
        </div>
</div>

<script>
    

function Cover()
{
    $('#insert').trigger('click');
}
function Profile()
{
    $('#upload').trigger('click');
}
function Description()
{
    $('#desc').trigger('click');
}
$(document).ready(function(){
    $('#insert').click(function(){
        var image_name=$('#image').val();
        if(image_name == '')
        {
            alert("Please Select Image");
            return false;
        }
        else
        {
            var extension=$('#image').val().split('.').pop().toLowerCase();
            if(jQuery.inArray(extension,['png','jpg','jpeg']) == -1)
            {
                alert("Invalid Image File");
                $('#image').val('');
                return false;
            }
            else    
                return true;
        }
    });
    $('#upload').click(function(){
        var image_name=$('#profile').val();
        // alert(image_name);
        if(image_name == '')
        {
            alert("Please Select Image");
            return false;
        }
        else
        {
            var extension=$('#profile').val().split('.').pop().toLowerCase();
            // alert(extension);
            if(jQuery.inArray(extension,['png','jpg','jpeg']) == -1)
            {
                alert("Invalid Image File");
                $('#upload').val('');
                return false;
            }
            else    
                return true;
        }
    });
    $('#desc').click(function(){
        var image_name=$('#description').val();
        // alert(image_name);
        if(image_name == '')
        {
            alert("Please Select File :");
            return false;
        }
        else
        {
            var extension=$('#description').val().split('.').pop().toLowerCase();
            // alert(extension);
            if(jQuery.inArray(extension,['docs','pdf','docx']) == -1)
            {
                alert("Invalid Image File");
                $('#desc').val('');
                return false;
            }
            else    
                return true;
        }
    });
});
</script>