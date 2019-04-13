<?php include 'config.php';
session_start();
extract($_SESSION);
include 'header.php';
 ?>
<!DOCTYPE html>
<html>

<head>
    <!-- <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh5U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=K2D:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <!-- <link rel ="stylesheet" type ="text/css" href="./css/style.css"> -->
    <!--Import materialize.css-->
    <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="Semantic/semantic.min.js"></script>
</head>
<!--                          _
                          .-'` `}
                  _./)   /       }
                .'o   \ |       }
                '.___.'`.\    {`
                /`\_/  , `.    }
                \=' .-'   _`\  {
                 `'`;/      `,  }
                    _\       ;  }
  O HAI THERE      /__`;-...'--'

-->
<style>
#space{
	
  padding-top: 5%;
 
}
@media only screen and (max-width: 600px) {
	#space
	{
		padding-top:5%;
		padding-bottom:2%;
	}
} 

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
	#space
	{
		padding-top:5%;
		padding-bottom:2%;
	}
} 
@media only screen and (min-width: 768px) {
	#space
	{
		padding-top:5%;
		padding-bottom:2%;
	}
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
	#space
	{
		padding-top:5%;
		padding-bottom:10%;
	}
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
	#space
	{
		padding-top:5%;
		padding-bottom:10%;
	}
}
.center{
  color:black;
}
.det{
  padding-top:9%;
}
.date{
  width:25%;
  height:40px;
  border-color:#202021;
  border-radius:3px;
  margin:6px;
}
.submit{
  width:10%;
  height:40px;
  background-color:#202021;
  color:white;
  border-radius:3px;
  border-color:#202021;
}
.select_ven{
  
  width:15%;
  height:40px;
  border-color:#202021;
  border-radius:3px;
  margin:6px;
}
.loc{
  height:30px;
  width:20px;
}

@media screen and (max-width: 600px) {
  .det{
    padding-top:20%;
  }
  .date{
    width:63.75%;
  }
  .select_ven{
    width:30%;
  }
.submit{
  width:20%
}
}
</style>
       
<body>
<?php include 'nav.php';?>
<div id="space">
    <div class="modal-container" id="modal">
    <div class="modal">
        <a href="" class="close">X</a>
        <span class ="modal_heading">
            Event Details
        </span>
        <form method="post" action="modal.php">
            <input type="text" class="details" placeholder="Event Name" name="eventname" value="<?php echo $eventname;?>"  required /><br>
            <input type="text" class="details" placeholder="Event Description" name="eventdesc" value="<?php echo $eventdesc;?>" required /><br>
            <input type="submit" class="btnEvent" value="Add Event" name="addevent">
        </form>
    </div>
</div>
<center>
 <form method="post" class="det">
    <label ><font color='black' style="text-inline:left;">Start time-</font></label>
    <label ><font color='black'>End time</font></label><br>
  <input type="datetime-local" class="date" name="st" required>
  
  <input type="datetime-local" class="date" name="et" required>
  <!-- <?php
  echo '<select class="select_ven" name="ven" style="">';
       echo  '<option  value="">Select Venue</option>';
          $r = mysqli_query($con,"select * from venue");
          // echo $r[0];
          while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
          {
            
          
         echo '<option   value="'.$row["name"].'">'.$row["name"].'</option>';
        
          }
        echo '</select>';
          ?> -->
  <!-- <select >
    <option>Select Venue<option>
    <option>fiugiufg<option>
    <option>fiugiufg<option>
  </select> -->
  <input class="submit"type="submit" name="get"/>
  </form>   
</center>

</body>
         
<?php 
$images=["https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg"];
 extract($_POST);
 if(isset($get))
 {
    $orgst=$st;
    $orget=$et;
    echo '<center>';
    $queryve="select * from venue  ";
    $err="<font color='yellow'>Venue and time slot added</font>"; 
    $quer=mysqli_query($con,$queryve);
    echo'<div class="ui link cards" style="padding-left:5%">';
    while($rw=mysqli_fetch_array($quer,MYSQLI_ASSOC))
    {
        $v=$rw['name'];

    

     $queryven="select * from venue where name = \"$v\" ";
     $err="<font color='yellow'>Venue and time slot added</font>"; 
     $que=mysqli_query($con,$queryven);
     $st=$orgst;
     $et=$orget;
     $st = str_replace("T"," ",$st);
     $et = str_replace("T"," ",$et);
     $st_arr = explode(" ",$st);
     $et_arr = explode(" ",$et);
     $e = ":00";
     $et_arr[1]=$et_arr[1].$e;
     $st_arr[1]=$st_arr[1].$e;
     
     
     
    //  echo "<strong ><p style=\"padding:1%\">Start Time: $st - End Time: $et</p><strong>";
     $t=0;
     
     $diff=$et_arr[1]-$st_arr[1];
     
     
     $time = [];
     for($k=1;$k<=24;$k++)
     {$time[$k]=false;}
     // Select venues In given time and Date range
     $hash =[];     $s=0;
     echo  '<div class="card">';
     echo  ' <div class="image">';
     echo '</div>';
     echo '<div class="content">';
     echo'<div class="header">'.$name.'</div>';
     echo '<div class="meta">';
     echo '<img src="https://image.flaticon.com/icons/svg/67/67347.svg" class="loc"/><a>'.$Location.'</a>';
     echo '</div>';
     echo '<div class="description">';
     echo 'Matthew is an interior designer living in New York.';
    while( $row = mysqli_fetch_array($que, MYSQLI_ASSOC))
    {

        $vst = $row['start_time'];
        $vet = $row['end_time'];
        $name = $row['name'];
        $vst_arr = explode(" ",$vst);
        $vet_arr = explode(" ",$vet);
        
        // echo $name;
        $vst_arr[1] = str_replace(".000000","",$vst_arr[1]);
        $vet_arr[1] = str_replace(".000000","",$vet_arr[1]);
        $start_time=$vst_arr[1];
        $end_time=$vet_arr[1];
        for($k=$start_time+1;$k<=$end_time;$k++)
        {
            $time[$k]=true;
        }
        // echo $hash[$name].$name;
        
    }
    $st_time=$start_time - "00:00:00";
    $et_time=$st_time+$diff;
    // $st_time=$st_time.":00:00";
    // $et_time=$et_time.":00:00";
    $t=0;
    // echo $st_time;
    while($et_time<=$end_time)
    {
        
        $st_arr[1]=$st_time;
        $et_arr[1]=$et_time;
        $st_time=$et_time;
        $et_time=$st_time+$diff;
    
        
        //Checking  everyday between given date on that Particular time for every Venue in time time Range By admin


        // echo $hash['E'];

        $queryven="select * from venue where name = \"$v\" ";
        $que=mysqli_query($con,$queryven);
         
        while( $ro = mysqli_fetch_array($que, MYSQLI_ASSOC))
        {
        $vst = $ro['start_time'];
        $vet = $ro['end_time'];
        $name = $ro['name'];
        
        
    
        $vst_arr = explode(" ",$vst);
        $vet_arr = explode(" ",$vet);
        
        
        $vst_arr[1] = str_replace(".000000","",$vst_arr[1]);
        $vet_arr[1] = str_replace(".000000","",$vet_arr[1]);
        
        $str = $st_arr[0];

        while ($str<=$et_arr[0]) {
            
            
            $datetime = new DateTime($str);
            $datetime->modify('+1 day');
            $str = $datetime->format('Y-m-d');
            $st_ck=$str." ".$st_arr[1];
            $et_ck=$str." ".$et_arr[1];
            $st_ck=$st_ck.":00:00";
            $et_ck=$et_ck.":00:00";
           
            // echo $et_arr[1]; 
            
            //Check If event Exist on THat Day if yes then Hash it false i.e. this Vennue is not Available
            
            $venqu='select * from `event` where  (((`eventstart`  between \''.$st_ck.'\' and \''.$et_ck.'\') or (`eventend` between \''.$st_ck.'\' and \''.$et_ck.'\')) and `eventvenue` = \''.$name.'\')';
            $qu=mysqli_query($con,$venqu);
            // echo $st_ck.'And'.$et_ck.'<br>'; 
            if(mysqli_num_rows($qu) != 0 )
                $hash[$name]=false;
            else    
                {
                    if($s==0)
                        {
                            $s=1;
                            echo "Available On time";
                        }
                    array_push($suggstart,$st_ck);
                    
                    array_push($suggend,$et_ck);
     
                     echo "<br>$st_ck to $et_ck";               
                }
        }
        if($hash[$name]==true)
            $t=1;

        }
    
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
   
  
  } 
  echo'</div>';
       //Now Display All Available Content Venue
    if ($t) {
      $i=0;
      $que=mysqli_query($con,"select * from venue where name=$v");
      while( $row = mysqli_fetch_array($que, MYSQLI_ASSOC))
      {
        $vst = $row['start_time'];
        $vet = $row['end_time'];
        $name = $row['name'];
		$Location=$row['location'];
		$filepath=$row['image'];
		$path="admin/".$filepath;
        if($hash[$name]){
       ?>
		
       <img style="border-radius:20px" src="<?php echo $path;?>" width="50%"  />
       <?php
       // echo '<img src="'.$images[$i].'">';
       // $_SESSION['image']=$images[$i];
         //$i++;
      }
    }
    }  
      



      
      echo '</center>';
      
    }
    ?>
	</div>
</html>
<?php
include('footer.php');
?>
