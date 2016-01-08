<?php
    include("../common_files/header.php");
?>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
		<link rel="stylesheet" href="../libs/jquery/jquery.mobile-1.4.5.min.css">
		<link rel="stylesheet" href="../common_files/mobile.css">
        <script type="text/javascript" src="../libs/jquery/jquery-2.1.4.min.js"></script>
		<?php include("drag_drop.js.php"); ?>
		<?php include("scripts.js.php"); ?>
		<script type="text/javascript" src="../libs/jquery/jquery.mobile-1.4.5.min.js"></script>
        <script type="text/javascript" src="../libs/jqueryui/jquery-ui.js"></script>
	</head>
	<body>
		<div data-role="header" style="z-index:5;" >
		    <a class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-bars" onclick="reselectLanguage()"><?php echo $lang['page_1_8']; ?></a>
			<h1><?php echo $lang['page_1_9'] . " " . $invitee; ?></h1>
			<a href="#popupBasic" data-rel="popup" class="ui-btn-right ui-btn ui-btn-b ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-info" data-transition="pop"><?php echo $lang['page_1_7']; ?></a>
		</div>
		<div data-role="popup" id="popupBasic" >
			<p><?php echo $lang['page_1_10']; ?></p>
		</div>
		<div id="droppableLeft" class="desition">
		  	<p><img src="../pics/icon_like.png" class="icon" onload="<?php if (isset($_GET['reload'])) echo "window.open('../mobile/page_1.php', '_self');"; ?>"></p>
		</div>
		<div id="container">
			<div id="dummy"></div>
	    	<div class="buddy" style="display: block;">
	    		<div class="avatar" >
	    			<span class="infoText"><?php echo $lang['page_1_1']; ?></span>
    			</div>
	    	</div>
	    	<div class="buddy">
	    		<div class="avatar" >
	    			<span class="infoText"><?php echo $lang['page_1_2']; ?></span>
    			</div>
	    	</div>
	    	<div class="buddy">
	    		<div class="avatar" >
	    			<span class="infoText"><?php echo $lang['page_1_3']; ?></span>
    			</div>
	    	</div>
	    	<div class="buddy">
	    		<div class="avatar" >
	    			<span class="infoText"><?php echo $lang['page_1_4']; ?></span>
    			</div>
	    	</div>
	    	<div class="buddy">
	    		<div class="avatar" >
	    			<span class="infoText"><?php echo $lang['page_1_5']; ?></span>
    			</div>
	    	</div>
	  	</div>
	  	<div id="droppableRight" class="ui-widget-header">
		  	<p><img src="../pics/icon_dislike.png" class="icon"></p>
		</div>
		<iframe style="display:none;" id="formFrame" src="../common_files/form_mail.php"></iframe>
	</body>
</html>
