<?php include 'config.php';
session_start();
extract($_SESSION);
include 'header.php';
 ?>
<!DOCTYPE html>
<html>

<head>    <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
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
 <p id="datepairExample">
    <input type="text" class="date start" />
    <input type="text" class="time start" /> to
    <input type="text" class="time end" />
    <input type="text" class="date end" />
</p>

<script type="text/javascript" src="datepair.js"></script>
<script type="text/javascript" src="jquery.datepair.js"></script>
<script>
    // initialize input widgets first
    $('#datepairExample .time').timepicker({
        'showDuration': true,
        'timeFormat': 'g:ia'
    });

    $('#datepairExample .date').datepicker({
        'format': 'yyyy-m-d',
        'autoclose': true
    });

    // initialize datepair
    $('#datepairExample').datepair();
</script>  
  <input class="submit"type="submit" name="get"/>
  </form>   
</center>

</body>
         
<?php 
$images=["https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg"];
 extract($_POST);
 if(isset($get))
 {

   echo $ven;
    $err="<font color='yellow'>Venue and time slot added</font>"; 
    $que=mysqli_query($con,"select * from venue");
    $st = str_replace("T"," ",$st);
    $et = str_replace("T"," ",$et);
    $st_arr = explode(" ",$st);
    $et_arr = explode(" ",$et);
    $_SESSION['start']=$st;
    $_SESSION['end']=$et;
    $e = ":00";
    $et_arr[1]=$et_arr[1].$e;
    $st_arr[1]=$st_arr[1].$e;
    $_SESSION['start']= $st.$e;
    $_SESSION['end']=$et.$e;
    echo '<center>';
    echo "<strong ><p style=\"padding:1%\">Start Time: $st - End Time: $et</p><strong>";
    echo'<div class="ui link cards" style="padding-left:5%">';
    $t=0;
    while( $row = mysqli_fetch_array($que, MYSQLI_ASSOC))
    {
         
        $vst = $row['start_time'];
        $vet = $row['end_time'];
        $name = $row['name'];
        $vst_arr = explode(" ",$vst);
        $vet_arr = explode(" ",$vet);
        
        
        $vst_arr[1] = str_replace(".000000","",$vst_arr[1]);
        $vet_arr[1] = str_replace(".000000","",$vet_arr[1]);
        $ck=($vst_arr[0] <= $st_arr[0] && $vet_arr[0] >= $et_arr[0])&&($vst_arr[1] <= $st_arr[1] && $vet_arr[1] >= $et_arr[1]);
        if($ven!=""&&$ven!=$name)
        {
          $ck=false;
        }
              if($ck)
              {
                $e = ":00";
                $st = $st.$e;
                
                $e = ":00";
                $et = $et.$e;
                // echo $et;
                $venqu='select * from `event` where  (((`eventstart`  between \''.$st.'\' and \''.$et.'\') or (`eventend` between \''.$st.'\' and \''.$et.'\')) and `eventvenue` = \''.$name.'\')';
                $qu=mysqli_query($con,$venqu);
                if(mysqli_num_rows($qu) == 0 )
                {
                  ;
                }
                else{
                  continue;
                }
                $t=1;
                // echo 'hello';
                $id=$row[0];
                {
                echo  '<div class="card">';
                echo  ' <div class="image">';
                echo '<img src="'.$images[$i].'">';
                $_SESSION['image']=$images[$i];
                echo '</div>';
                echo '<div class="content">';
                echo'<div class="header">'.$name.'</div>';
                echo '<div class="meta">';
                echo '<img src="https://image.flaticon.com/icons/svg/67/67347.svg" class="loc"/><a>.$Location.</a>';
                echo '</div>';
                echo '<div class="description">';
                echo 'Matthew is an interior designer living in New York.';
                echo '</div>';
                echo "<a href='modal.php?ev=$name'>
                      <img src='./icons/add.png' style='height:25px;width:25px;' />";
                echo '</div>';
                echo '</div>';

          }
        }
        
        $i++;
        
      }
      if($t==0){
                echo  '<div class="card">';
                echo  ' <div class="image">';
                // echo '<img src="https://materializecss.com/images/sample-1.jpg">';
                // $_SESSION['image']=$images[$i];
                echo '</div>';
                echo '<div class="content">';
                echo'<div class="header">Sorry!! No Venue Available</div>';
                echo '<div class="meta">';
                // echo '<img src="https://image.flaticon.com/icons/svg/67/67347.svg" class="loc"/><a>.$Location.</a>';
                echo '</div>';
                echo '<div class="description">';
                echo 'Try Makin other Searches';
                echo '</div>';
                // echo "<a href='modal.php?ev=$name'>
                //       <img src='./icons/add.png' style='height:25px;width:25px;' />";
                echo '</div>';
                // echo '</center>';
                echo '</div>';
                
                echo'</div>';
      }
      echo'</div>';
      echo '</center>';
      
    }
    
    ?>
</html>

