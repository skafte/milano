<?php
    include("../common_files/header.php");
?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../libs/jquery/jquery.mobile-1.4.5.min.css">
		<link rel="stylesheet" href="../common_files/desktop.css">
        <script type="text/javascript" src="../libs/jquery/jquery-2.1.4.min.js"></script>
		<?php include("scripts.js.php"); ?>
		<script type="text/javascript" src="../libs/jquery/jquery.mobile-1.4.5.min.js"></script>
        <script type="text/javascript" src="../libs/jqueryui/jquery-ui.js"></script>
	</head>
	<body>
		<div data-role="header" style="z-index:5;" >
		    <a class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-bars" onclick="reselectLanguage()"><?php echo $lang['page_1_8']; ?></a>
			<h1><?php echo $lang['page_menu_1'] . " " . $invitee . ", " . $lang['page_menu_2']; ?></h1>
			<a href="#popupBasic" data-rel="popup" class="ui-btn-right ui-btn ui-btn-b ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-info" data-transition="pop"><?php echo $lang['page_1_7']; ?></a>
		</div>
		<div data-role="popup" id="popupBasic" >
			<p><?php echo $lang['page_1_10']; ?></p>
		</div>
		<div id="container">
	    	<div class="buddy" style="display: block;">
	    		<div class="avatar" >
	    			<span class="infoText">
	    						<a href="page_2_hotels.php" data-role="button"><?php echo $lang['page_menu_3']; ?></a>
	    						<a href="page_2_transportation.php" data-role="button"><?php echo $lang['page_menu_4']; ?></a>
	    						<a href="page_2_map.php" data-role="button"><?php echo $lang['page_menu_5']; ?></a>
	    						<a href="page_2_poi.php" data-role="button"><?php echo $lang['page_menu_12']; ?></a>

	    						<a href="page_2_ceremony.php" data-role="button"><?php echo $lang['page_menu_6']; ?></a>
	    						<a href="page_2_party.php" data-role="button"><?php echo $lang['page_menu_7']; ?></a>

	    						<a href="page_2_calender.php" data-role="button"><?php echo $lang['page_menu_9']; ?></a>
	    						<a href="page_2_answer.php" data-role="button"><?php echo $lang['page_menu_10']; ?></a>
	    						<a href="page_2_old_invite.php" data-role="button"><?php echo $lang['page_menu_11']; ?></a>
	    			</span>
    			</div>
	    	</div>
	  	</div>
		<iframe style="display:none;" id="formFrame" src="../common_files/form_mail.php"></iframe>
	</body>
</html>
