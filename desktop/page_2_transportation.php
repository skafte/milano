<?php
    include("../common_files/header.php");
?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../libs/jquery/jquery.mobile-1.4.5.min.css">
		<link rel="stylesheet" href="../common_files/desktop.css">
        <script type="text/javascript" src="../libs/jquery/jquery-2.1.4.min.js"></script>
		<?php include("drag_drop.js.php"); ?>
		<?php include("scripts.js.php"); ?>
		<script type="text/javascript" src="../libs/jquery/jquery.mobile-1.4.5.min.js"></script>
        <script type="text/javascript" src="../libs/jqueryui/jquery-ui.js"></script>
	</head>
	<body onload="changeTitle()">
		<div data-role="header" style="z-index:5;" >
		    <a class="ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-back" onclick="backToMenu()"><?php echo $lang['page_menu_0']; ?></a>
			<h1><?php echo $lang['page_menu_1'] . " " . $invitee . ", " . $lang['page_menu_4']; ?></h1>
			<a href="#popupBasic" data-rel="popup" class="ui-btn ui-btn-b ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-info" data-transition="pop"><?php echo $lang['page_1_7']; ?></a>
		</div>
		<div data-role="popup" id="popupBasic" >
			<p><?php echo $lang['page_1_10']; ?></p>
		</div>
		<div id="container">
            <div class="buddy" style="display: block;">
                <div class="avatar" >
                    <span class="infoText">
                        <b><?php echo $lang['page_2_transport_1']; ?></b><br />
                        <?php echo $lang['page_2_transport_2']; ?><br />
                        <br />
                        <ul>
                            <li>
                                <?php echo $lang['page_2_transport_3']; ?><br />
                                <?php echo $lang['page_2_transport_4']; ?>
                            </li>
                        </ul>
                    </span>
                </div>
            </div>
            <div class="buddy">
                <div class="avatar" >
                    <span class="infoText">
                        <b><?php echo $lang['page_2_transport_1']; ?></b><br />
                        <?php echo $lang['page_2_transport_2']; ?><br />
                        <br />
                        <ul>
                            <li>
                                <?php echo $lang['page_2_transport_5']; ?><br />
                                <?php echo $lang['page_2_transport_6']; ?><br />
                                <?php echo $lang['page_2_transport_7']; ?>
                            </li>
                        </ul>
                    </span>
                </div>
            </div>
	    	<div class="buddy">
	    		<div class="avatar" >
                    <span class="infoText">
                        <b><?php echo $lang['page_2_transport_1']; ?></b><br />
                        <?php echo $lang['page_2_transport_2']; ?><br />
                        <br />
                        <ul>
                            <li>
                                <?php echo $lang['page_2_transport_8']; ?><br />
                                <?php echo $lang['page_2_transport_9']; ?>
                            </li>
                        </ul>
                    </span>
    			</div>
	    	</div>
	    	<div class="buddy">
	    		<div class="avatar" >
                    <span class="infoText">
                        <b><?php echo $lang['page_2_transport_10']; ?></b><br />
                        <?php echo $lang['page_2_transport_12']; ?><br />
                        <?php echo $lang['page_2_transport_11']; ?><br />
                        <br />
                        <?php echo $lang['page_2_transport_13']; ?>
                    </span>
    			</div>
	    	</div>
	  	</div>
	  	<div id="droppableRightOld" class="ui-widget-header">
		  	<p><img src="../pics/fast_forward.png" class="icon" onload="<?php if (isset($_GET['reload'])) echo "window.open('../desktop/page_2_transportation.php', '_self');"; ?>"></p>
		</div>
	</body>
</html>
