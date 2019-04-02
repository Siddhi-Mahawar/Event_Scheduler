<?php include 'config.php';
session_start();
extract($_SESSION);
 ?>
 <html>
 <head>
     <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="Semantic/semantic.min.js"></script>
</head>
<style>

.loc{
  height:30px;
  width:20px;
}

</style>
<body>
<?php 
        include 'header.php'; 
        include 'nav.php';
        include 'venuesql.php';
        $venquery = "select * from venue";
        $venues = mysqli_query($con,$venquery);
        $images=["https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg"];
        $rate =0 ;
    echo'<center><div class="row">';
    echo '<div class="ui link cards" style="padding-left:13.5%;padding-top:10%">';
    while( $row = mysqli_fetch_array($venues, MYSQLI_ASSOC))
    {
        $st = $row['start_time'];
        $et = $row['end_time'];
        $name = $row['name'];
        $location=" ";
        $st_arr = explode(".",$st);
        $et_arr = explode(".",$et);
         echo   '<div class="card">
            <div class="image">
                <img src="'.$images[0].'">
            </div>
            <div class="content">
                <div class="header">'.$name.'</div>
                <div class="meta">
                <a>Friends</a>
                </div>
                <div class="description">
                '.$st_arr[0].'-'.$et_arr[0].'
                </div>
            </div>
            <div class="extra content">
                <span class="right floated">
                Joined in 2013
                </span>
                <span>
                <i class="heart outline icon">'.$rate.'</i>
                 
                </span>
            </div>
        </div>';
    }
    echo '</center>';
?>
</body>
