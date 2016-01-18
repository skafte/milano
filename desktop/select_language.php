<?php
    include("../common_files/header.php");
    $sllogger = "";
    if (isset($_COOKIE['selectedLanguage']) && (!isset($_GET['lang']))) {
        // echo '<meta http-equiv="refresh" content="0; url=page_1.php">';
        echo '<meta http-equiv="refresh" content="0; url=page_menu.php?reload">';
        die;
    }
    else if (isset($_COOKIE['lang']) && (!isset($_GET['lang']))) {
        if (($_COOKIE['lang'] == "language.dk.php") || ($_COOKIE['lang'] == "language.en.php") || ($_COOKIE['lang'] == "language.it.php")) {
            $lang_file = $_COOKIE['lang'];
            setcookie('selectedLanguage', $lang_file, time() + (3600 * 24 * 300), $inviteRoot);
            setcookie('lang', $lang_file, time() - 3600, $inviteRoot);
            echo '<meta http-equiv="refresh" content="0; url=page_menu.php?reload">';
            die;
        }
    }

    include("../language/language.dk.php");
    include("../language/language.it.php");
    include("../language/language.en.php");
?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../libs/jquery/invite.min.css" />
        <link rel="stylesheet" href="../libs/jquery/jquery.mobile.icons.min.css" />
        <link rel="stylesheet" href="../libs/jquery/jquery.mobile-1.4.5.min.css">
        <link rel="stylesheet" href="../common_files/desktop.css">
        <script type="text/javascript" src="../libs/jquery/jquery-2.1.4.min.js"></script>
        <?php include("scripts.js.php"); ?>
        <script type="text/javascript" src="../libs/jquery/jquery.mobile-1.4.5.min.js"></script>
        <script type="text/javascript" src="../libs/jqueryui/jquery-ui.js"></script>
	</head>
	<body>
		<div id="container">
	    	<div class="buddy" style="display: block;">
	    		<div class="avatar" style="background: white;">
	    			<form action="../common_files/cookie_set_language.php" method="GET">
	    				<input type="image" src="../pics/flag_dk.png" value="0" name="dk" class="flag" alt="Submit Form" />
	    				<input type="image" src="../pics/flag_it.png" value="1" name="it" class="flag" alt="Submit Form" />
	    				<input type="image" src="../pics/flag_gb.png" value="2" name="en" class="flag" alt="Submit Form" />
                        <input type="hidden" value="desktop" name="look" />
		    			<span class="infoText">
		    				<?php echo $lang_dk; ?><br/>
		    				<?php echo $lang_it; ?><br/>
		    				<?php echo $lang_en; ?>
	    				</span>
    				</form>
				</div>
	    	</div>
	  	</div>
	</body>
</html>
