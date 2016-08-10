
    <!--Header-->
    <!--Set your own background color to the header-->
    <header class="semi-transparent-header" data-bg-color="#FFF" data-font-color="#555">
        <div class="container">

            <!--Site Logo-->
            <div class="logo" data-sticky-logo="img/logo.png" data-normal-logo="img/logo.png">
                <a href="index.php">
                    <img alt="Venue" src="img/logo.png" data-logo-height="35">
                </a>
            </div>
            <!--End Site Logo-->

            <div class="navbar-collapse nav-main-collapse collapse">

               <!--Main Menu-->
                <nav class="nav-main mega-menu one-page-menu">
                    <ul class="nav nav-pills nav-main" id="mainMenu">
                       
                        <li class="dropdown">
                            <a class="dropdown-toggle menu-icon" href="#">
                            	<i class="fa fa-user"></i>
                            	<?php 
	                            	if ($userDetails['firstname']==null) {
	                            		echo $userDetails['email'];
	                            	}else{
	                            		echo $userDetails['firstname'];
	                            	} 
                            	?>
                            	 <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Account Details</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                      
                    </ul>
                </nav>
                <!--End Main Menu-->
            </div>
            <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
        </div>
    </header>
    <!--End Header-->