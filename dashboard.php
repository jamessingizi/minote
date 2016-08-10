<?php
$page_title = "miNote | Dashboard";
require_once '_inc/config.php';
require_once '_inc/includes/page_head.php';
require_once '_inc/classes/account.class.php';
require_once '_inc/classes/notes.class.php';

if(!isset($_SESSION['account_id'])){
	echo "<script>window.location='index.php'</script>";
}else{
	$account_id = $_SESSION['account_id'];
}

$user = new Account();
$user->account_id = $account_id;

$userDetails = $user->accountDetailsById();

$notes = new Notes();
$notes->account_id = $account_id;
$userNotes = $notes->getNotes();
?>

<body class="no-page-top" style = "background: white;">
    <!---navigation -->
        <?php

            require_once '_inc/includes/dash_navigation.php';

        ?>
    <!--end navigation -->
    
    <div id="container">

        <!--hero slider -->
            <?php

                require_once '_inc/includes/dash_content_area.php';
               // echo "<pre><tt>".var_export($userNotes,true)."</tt></pre>";
             ?>
        <!-- end hero slider -->
     </div>
     <!-- end container div -->
   
   <!-- footer content -->
               <div class="copyright navbar-fixed-bottom">
                <div class="container">
                    <p>© Copyright <?php echo date("Y"); ?> by Elegant Code. All Rights Reserved.</p>
                    <nav class="footer-menu std-menu">
                        <ul class="menu">
                            <li><a href="index.php">Home</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
   
   <!-- end footer content -->
   
    <!-- Libs -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.easing.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery.carouFredSel.min.js"></script>
    <script src="js/theme-plugins.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/imagesloaded.js"></script>

    <script src="js/view.min.js?auto"></script>

    <script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script src="js/theme-core.js"></script>
    <script src="js/custom.js"></script>   
 </body>
 </html>   