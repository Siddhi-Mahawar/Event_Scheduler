<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <header class="header-sky header-top-sky">
        <div class="container">
            <!--HEADER-TOP-->
            <div class="header-top">
                <div class="header-top-left">
                    <span>Motilal Nehru National Institute of Technology</span>
                    <span><i class="fa fa-phone" aria-hidden="true"></i> 1-548-854-8898</span>
                </div>
                <div class="header-top-right">
                    <ul>
                        <?php if (isset($user)) {
                            echo '<li class="dropdown"><a href="home.php" title="Home" class="dropdown-toggle">'. $user .'</a></li>';
                        }
                        else 
                            echo '<li class="dropdown"><a href="login.php" title="Login" class="dropdown-toggle">Log In</a></li>';
                            ?>
                        <?php if(isset($user))
                        echo '<li class="dropdown"><a href="logout.php" title="Logout" class="dropdown-toggle">Log Out</a></li>';
                        ?>
                    </ul>
                </div>
            </div>
            <!-- END/HEADER-TOP -->
        </div>
        <!-- MENU-HEADER -->
        <div class="menu-header">
            <nav class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header ">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar "></span>
                            <span class="icon-bar "></span>
                            <span class="icon-bar "></span>
                        </button>
                        <a class="navbar-brand" href="hom.php" title="Skyline"><img src="home/sky-logo-header.png" alt="#"></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li >
							<?php if (isset($user)) {
								echo '<a href="home.php" title="Home" >Home</a>';
								}
							?>
                                
                            </li>
							<?php if (isset($user)) {
								echo '<li><a href="availabilty.php" title="Search By Time">Availability</a></li>';
									}
							?>
							<?php if (isset($user)) {
								echo '<li><a href="venue.php" title="Serach By Venue">Venues</a></li>';
									}
							?>
							<?php if (isset($user)) {
								echo '<li><a href="requests.php" title="Invitations">Invites</a></li>';
									}
							?>
                            <!-- <li><a href="" title="About">About</a></li> -->
                            <!-- <li><a href="" title="Contact">Contact</a></li> -->
                            <?php if (isset($user)) {
								echo '<li><a href="publicevents.php" title="Public events">Events</a></li>';
								}
							?>
							<?php if (isset($user)) {
								echo '<li><a href="eventreq.php" title="Requests">Requests</a></li>';
								}
							?>
                            <?php
                                if(isset($user))
                                {
                            ?>
                            
                            <?php
                                }
                            ?>
                            <?php if (isset($user)) {
								echo '<li><a href="events.php" title="Events" >'. $user .'</a></li>';
							}
                            else 
                            echo '<li ><a href="index.php" title="Login" ">Log In</a></li>';
                            ?>
							<ul class="nav navbar-nav ">
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle"  id ="notif" data-toggle="dropdown">
                            <span class="label label-pill label-danger count" style="border-radius:10px;"></span> 
                            <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span>
                            </a>
                            <ul class="dropdown-menu">
                            </ul>
                            </li>
                            </ul>
                            <?php if(isset($user))
                            echo '<li ><a href="logout.php" title="Logout" >Log Out</a></li>';?>
                        
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- END / MENU-HEADER -->
    </header>
    <script>
$(document).ready(function(){
// updating the view with notifications using ajax
function load_unseen_notification(view = '')
{
 $.ajax({
  url:"fetch.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
  {
   $('.dropdown-menu').html(data.notification);
   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }
  }
 });
}
load_unseen_notification();
// load new notifications
$('#notif').click(function(){
 $('.count').html('');
 load_unseen_notification('yes');
});
setInterval(function(){
 load_unseen_notification();;
}, 5000);
});
</script>