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
                                <a href="home.php" title="Home">Home</a>
                                
                            </li> 
                            <li><a href="availabilty.php" title="Search By Time">Availability</a></li>
                            <li><a href="venue.php" title="Serach By Venue">Venues</a></li>
                            <li><a href="requests.php" title="Invitations">Invites</a></li>
                            <li><a href="" title="About">About</a></li>
                            <li><a href="" title="Contact">Contact</a></li>
                            <li><a href="publicevents.php" title="Contact">Public Events</a></li>
                            <li><a href="eventreq.php" title="Contact">Requests</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- END / MENU-HEADER -->
    </header>
