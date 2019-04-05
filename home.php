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
.welcome{
    color:white;
    font-weight:bold;
    padding-top:20%;
    font-size:130%
}
@media screen and (max-width:480px){

    .welcome{
    color:white;
    font-weight:bold;
    padding-top:60%;
    font-size:130%
}
    .cd{
        padding-left:5.5%;
    }
}

.cd{
        padding-top:1.5%;
        padding-left:11%;
    }
</style>
<body class="land">
    <!-- HEADER -->
    <?php
    include 'nav.php' ?>
    <!-- END / MENU-HEADER -->
    </header>
    <!-- END-HEADER -->
    <div class="land" >
    
        <center>

        <h1 class="welcome">Get Started</h1>
        <button class="wel">Welcome</button>
        </center>
    </div>
    <!-- OUR-ROOMS-->
    <section class="rooms">
        <div class="container">
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
                    <img src="http://damlr.mnnit.ac.in/assets/images/photo18/img15.jpg">
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
                    <img src="https://content2.jdmagicbox.com/comp/vidisha/u7/9999p7592.7592.151009164445.k1u7/catalogue/kapoor-marriage-garden-vidisha-wedding-grounds-myh90.jpg?fit=around%7C400%3A400&crop=400%3A400%3B%2A%2C%2A">
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
                    <img src="https://ui.cltpstatic.com/places/hotels/2356/2356854/images/WhatsApp_Image_2018-10-02_at_5.17.27_PM_w.jpg">
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
    <!-- ABOUT-US-->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                    <div class="about-centent">
                        <h2 class="about-title">About Us</h2>
                        <div class="line"></div>
                        <p class="about-p">Contrary to popular belief, Lorem isn’t simply random text. It has roots in a of classical Latin literature from 45 BC, making it over 2000 years old. Avalon’s leading hotels with gracious island hospitality, thoughtful amenities and distinctive</p>
                        <p class="about-p1">Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage ...</p>
                        <a href="home.php" class="read-more">READ MORE </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 ">
                    <div class="about-img">
                        <div class="img-1">
                            <img src="./home/about-3.jpg" class="img-responsive" alt="Image">
                            <div class="img-2">
                                <img src="./home/about-1.jpg" class="img-responsive" alt="Image">
                            </div>
                            <div class="img-3">
                                <img src="./home/about2.jpg" class="img-responsive" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END/ ABOUT-US-->
    <!--FOOTER-->
    <footer class="footer-sky">
        <div class="footer-mid">
            <div class="container">
                <div class="row padding-footer-mid">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="footer-logo text-center list-content">
                            <a href="home.php#" title="Skyline"><img src="./home/sky-logo-footer.png" alt="Image"></a>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 col-lg-offset-1 col-md-offset-1  ">
                        <div class="list-content">
                            <ul>
                                <li><a href="home.php#" title="">Site Map</a></li>
                                <li><a href="home.php#" title="">Term &amp; Conditions</a></li>
                                <li><a href="home.php#" title="">Privacy Policy</a></li>
                                <li><a href="home.php#" title="">Help</a></li>
                                <li><a href="home.php#" title="">Affiliate</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 col-lg-offset-1 col-md-offset-1 ">
                        <div class="list-content ">
                            <ul>
                                <li><a href="home.php#" title="">Our Location</a></li>
                                <li><a href="home.php#" title="">Career</a></li>
                                <li><a href="home.php#" title="">About Us</a></li>
                                <li><a href="home.php#" title="">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 col-lg-offset-1 col-md-offset-1">
                        <div class="list-content ">
                            <ul>
                                <li><a href="home.php#" title="">FAQS</a></li>
                                <li><a href="home.php#" title="">News</a></li>
                                <li><a href="home.php#" title="">Photo &amp; Video</a></li>
                                <li><a href="home.php#" title="">Restaurant</a></li>
                                <li><a href="home.php#" title="">Gift Card</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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