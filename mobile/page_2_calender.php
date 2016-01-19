<?php
    include("../common_files/header.php");
?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../libs/jquery/jquery.mobile-1.4.5.min.css">
		<link rel="stylesheet" href="../common_files/mobile.css">
        <script type="text/javascript" src="../libs/jquery/jquery-2.1.4.min.js"></script>
		<?php include("scripts.js.php"); ?>
		<script type="text/javascript" src="../libs/jquery/jquery.mobile-1.4.5.min.js"></script>
        <script type="text/javascript" src="../libs/jqueryui/jquery-ui.js"></script>
	</head>
	<body onload="changeTitle()">
		<div data-role="header" style="z-index:5;" >
		    <a class="ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-back" onclick="backToMenu()"><?php echo $lang['page_menu_0']; ?></a>
			<h1><?php echo $lang['page_menu_1'] . " " . $invitee . ", " . $lang['page_menu_9']; ?></h1>
			<a href="#popupBasic" data-rel="popup" class="ui-btn ui-btn-b ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-info" data-transition="pop"><?php echo $lang['page_1_7']; ?></a>
		</div>
		<div data-role="popup" id="popupBasic" >
			<p><?php echo $lang['page_1_10']; ?></p>
		</div>
		<div id="container2">
			<div id="dummy"></div>
	    	<div class="buddy" style="display: block;">
	    		<div class="avatar" >
	    			<span class="infoText">
	    				<ul>
	    					<li><?php echo $lang['page_2_calender_1']; ?></li>
	    					<li><?php echo $lang['page_2_calender_2']; ?></li>
    					</ul>
	    				<br />
	    				<?php echo $lang['page_2_calender_3']; ?> <a href="http://doodle.com/poll/sq6rkben4f8f53t8" target='_blank'><?php echo $lang['page_2_calender_4']; ?></a> <?php echo $lang['page_2_calender_5']; ?>
	    			</span>
    			</div>
	    	</div>
	  	</div>
	</body>
</html>
