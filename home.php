<?php
session_start();
extract($_SESSION);
include 'header.php';

?>

<script>
  function searchpage(params) {
    window.location='venue.php'
  }
  function requestspage(params) {
    window.location='requests.php'
  }
</script>

<script src="Semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">

<style>
.land{
    background-image: url("home/bg.jpg");
    background-repeat: no-repeat;
    height:700px;
}

#intro {
  width: 100%;
  height: 100vh;
 
  overflow: hidden;
  position: relative;
}



#intro .intro-container {
  position: absolute;
  bottom: 0;
  left: 0;
  top: 50px;
  right: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  text-align: center;
  padding: 0 15px;
}

#intro h1 {
  color: #fff;
  font-family: "Raleway", sans-serif;
  font-size: 36px;
  font-weight: 600;
  text-transform: uppercase;
}

#intro h1 span {
  color: #E9B294;
  font-size:20px;

}

#intro p {
  color: #ebebeb;
  font-weight: 700;
  font-size: 20px;
}

    .cd{
        padding-left:5.0%;
    }
}

.cd{
        padding-top:1.5%;
        padding-left:11%;
    }
	.btn {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
}

.default {
  color: black;
}

.default:hover {
  background: #e7e7e7;
}
#ven
{
	padding-left:5.5%;
}
</style>
<body class="land">
    <!-- HEADER -->
    <?php
    include 'nav.php' ?>
    <!-- END / MENU-HEADER -->
    </header>
    <!-- END-HEADER -->
    <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="pb-0">Welcome to The Liberals<br><span>Defining Event a new Name</span> </h1>
     
    </div>
  </section>
    <!-- OUR-ROOMS-->
    <section class="rooms">
        <div class="container" id="ven">
            <h2 class="title-room">Our Venues</h2>
            <div class="outline"></div>
            <p class="rooms-p">When you host a party or family reunion, the special celebrations let you streng then bonds with</p>
            <div class="ui link cards cd" >
                <div class="card" >
                    <div class="image">
                    <img src="https://images.careers360.mobi/sites/default/files/82603255.jpg">
                    </div>
                    <div class="content">
                    <div class="header">MP Hall</div>
                    <div class="meta">
                        <a>Saraswati Gate MNNIT</a>
                    </div>
                    <div class="description">
                        Venue for fantastic events Like Spandhan
                    </div>
                    </div>
                </div>
                <div class="card" >
                    <div class="image">
                    <img src="https://perspectivemnnit.files.wordpress.com/2018/01/hack.jpg?w=720&h=540">
                    </div>
                    <div class="content">
                    <div class="header">Seminar Hall</div>
                    <div class="meta">
                        <a>CSED area</a>
                    </div>
                    <div class="description">
                        For Short Speeches And Overwhelming Lectures
                    </div>
                    </div>
                </div>
                <div class="card" >
                    <div class="image">
                    <img src="https://www.careerindia.com/college-photos/520x380/3405/mnnit-6_1454650755.jpg">
                    </div>
                    <div class="content">
                    <div class="header">NLHC 1</div>
                    <div class="meta">
                        <a>Academic Building</a>
                    </div>
                    <div class="description">
                        Venue When U have large Crowd like Litmuse,Lacuzzi,Operamania
                    </div>
                    </div>
                </div>
                <div class="card" >
                    <div class="image">
                    <img src="https://www.oneperiodic.com/products/photobatch/tutorials/img/scale_original.png">
                    </div>
                    <div class="content">
                    <div class="header">NB 1</div>
                    <div class="meta">
                        <a>CSED</a>
                    </div>
                    <div class="description">
                        AC cooled Classrom with comfortable seats
                    </div>
                    </div>
                </div>
                <div class="card" >
                    <div class="image">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Aspect_ratio_4_3_example4.jpg/283px-Aspect_ratio_4_3_example4.jpg">
                    </div>
                    <div class="content">
                    <div class="header">Kapoor Garden</div>
                    <div class="meta">
                        <a>Durga Nagar,Vidisha</a>
                    </div>
                    <div class="description">
                        Perfect Venue for Wedding And Big Parties
                    </div>
                    </div>
                </div>
                <div class="card" >
                    <div class="image">
                    <img src="http://www.fabuloussavers.com/new_wallpaper/5_4_3_2_1_Happy_New_Year_freecomputerdesktopwallpaper_p.jpg">
                    </div>
                    <div class="content">
                    <div class="header">Graces Resort</div>
                    <div class="meta">
                        <a>Sehore Ichhawar Road,Bhopal</a>
                    </div>
                    <div class="description">
                        Rice Luxurious Place For Ambani's and Rishtedar
                    </div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
        <!-- /container -->
    </section>
    <!-- END / ROOMS -->
    
    <section class="rooms">
        <div class="container" id="ven">
            <h2 class="title-room">Our Events</h2>
            <div class="outline"></div>
            <p class="rooms-p">We Have Organized various Events to thrill the night </p>
            <div class="ui link cards cd" >
                <div class="card" >
                    <div class="image">
                    <img src="https://i.ytimg.com/vi/_Ifnk69C9NE/maxresdefault.jpg">
                    </div>
                    <div class="content">
                    <div class="header">Culrav</div>
                    <div class="meta">
                        <a> MP Hall</a>
                    </div>
                    <div class="description">
                        Anual Fest Of MNNIT
                    </div>
                    </div>
                </div>
                <div class="card" >
                    <div class="image">
                    <img src="https://i.ytimg.com/vi/nUaIbz8ZgJ4/maxresdefault.jpg">
                    </div>
                    <div class="content">
                    <div class="header">Avishkar 2k17</div>
                    <div class="meta">
                        <a>MP hall</a>
                    </div>
                    <div class="description">
                        Tech Event of MNNIT
                    </div>
                    </div>
                </div>
                <div class="card" >
                    <div class="image">
                    <img src="https://moodi.org/images/experience/10-2.jpg">
                    </div>
                    <div class="content">
                    <div class="header">Mood Indigo</div>
                    <div class="meta">
                        <a>IIT Bombay</a>
                    </div>
                    <div class="description">
                        Asia's Largest Cultural Fest
                    </div>
                    </div>
                </div>
                <div class="card" >
                    <div class="image">
                    <img src="https://moodi.org/images/experience/10-2.jpg">
                    </div>
                    <div class="content">
                    <div class="header">Mood Indigo</div>
                    <div class="meta">
                        <a>IIT Bombay</a>
                    </div>
                    <div class="description">
                        Asia's Largests Event
                    </div>
                    </div>
                </div>
                <div class="card" >
                    <div class="image">
                    <img src="data:image/jpeg;base64,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">
                    </div>
                    <div class="content">
                    <div class="header">Kumbh Kumbh</div>
                    <div class="meta">
                        <a>Allahabad</a>
                    </div>
                    <div class="description">
                        Holiest Even of Hindus
                    </div>
                    </div>
                </div>
                <div class="card" >
                    <div class="image">
                    <img src="https://i.ytimg.com/vi/cfdMxqLaYoQ/maxresdefault.jpg">
                    </div>
                    <div class="content">
                    <div class="header">Techkriti</div>
                    <div class="meta">
                        <a>IIT BHU</a>
                    </div>
                    <div class="description">
                        Technical Event of IIT BHU
                    </div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
        <!-- /container -->
    </section>
    <!-- END / ROOMS -->
    <!-- ABOUT-US-->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                    <div class="about-centent">
                        <h2 class="about-title">About Us</h2>
                        <div class="line"></div>
                        <p class="about-p">Our web-based scheduler is simple – choose times that work for you and invite others. Registering gives you access to even more scheduling features.</p>
                        <p class="about-p1">
						Our features include:
						<p>•    View available time slots and venues for an event.</p>
						<p>•	Create an event </p>
								<p>•	Invite registered users for the event.</p>
								<p>•	Accept invitations for other events.</p>
								
						</p>
                       
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 ">
                    <div class="about-img">
                        <div class="img-1">
                            <img src="./home/about-3.png" class="img-responsive" alt="Image">
                            <div class="img-2">
                                <img src="./home/meeting.jpg" class="img-responsive" alt="Image">
                            </div>
                            <div class="img-3">
                                <img src="./home/about-2.jpg" class="img-responsive" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END/ ABOUT-US-->
    <!--FOOTER-->
   <?php include('footer.php');?>
    <!-- END / FOOTER-->
    <!--SCOLL TOP-->
    <a href="home.php#" title="sroll" class="scrollToTop" style="display: none;"><i class="fa fa-angle-up"></i></a>
    <!--END / SROLL TOP-->
    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="./home/jquery-1.12.4.min.js.download"></script>
    <script type="text/javascript" src="./home/owl.carousel.min.js.download"></script>
    <script type="text/javascript" src="./home/bootstrap.min.js.download"></script>
    <script type="text/javascript" src="./home/vit-gallery.js.download"></script>
    <script type="text/javascript" src="./home/jquery.countTo.js.download"></script>
    <script type="text/javascript" src="./home/jquery.appear.min.js.download"></script>
    <script type="text/javascript" src="./home/isotope.pkgd.min.js.download"></script>
    <script type="text/javascript" src="./home/bootstrap-select.js.download"></script>
    <script type="text/javascript" src="./home/jquery.littlelightbox.js.download"></script>
    <script type="text/javascript" src="./home/bootstrap-datepicker.js.download"></script>
    <script src="./home/js"></script>
    <!-- Custom jQuery -->
    <script type="text/javascript" src="./home/sky.js.download"></script>


<div class="awe-popup-overlay" id="awe-popup-overlay"></div><div class="awe-popup-wrap" id="awe-popup-wrap"><div class="awe-popup-content"></div><span class="awe-popup-close" id="awe-popup-close"></span></div></body></html>
