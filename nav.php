<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<header class="header-sky header-top-sky">
       
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
                        <a class="navbar-brand" href="home.php" title="Skyline"><img src="home/sky-logo-header.png" alt="#"></a>
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
								echo '<li><a href="publicevents.php" title="Contact">Events</a></li>';
								}
							?>
							<?php if (isset($user)) {
								echo '<li><a href="eventreq.php" title="Contact">Requests</a></li>';
								}
							?>
														
                            <?php if (isset($user)) {
								echo '<li><a href="events.php" title="Home" >'. $user .'</a></li>';
							}
                            else 
                            echo '<li ><a href="index.php" title="Login" ">Log In</a></li>';
                            ?>
				<?php if(isset($user)){
				?>
							<ul class="nav navbar-nav ">
     <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
      <ul class="dropdown-menu"></ul>
     </li>
    </ul>
				<?php
				}
				?>
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
// submit form and get new records
$('#comment_form').on('submit', function(event){
 event.preventDefault();
 if($('#subject').val() != '' && $('#comment').val() != '')
 {
  var form_data = $(this).serialize();
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#comment_form')[0].reset();
    load_unseen_notification();
   }
  });
 }
 else
 {
  alert("Both Fields are Required");
 }
});
// load new notifications
$(document).on('click', '.dropdown-toggle', function(){
 $('.count').html('');
 load_unseen_notification('yes');
});
setInterval(function(){
 load_unseen_notification();;
}, 5000);
});
</script>
