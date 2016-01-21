<?php
    include("../common_files/header.php");
    include("../common_files/root.php");
    setcookie('msg', "Nothing to send anymore", time() + (3600 * 24 * 300), $inviteRoot);
?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../libs/jquery/invite.min.css" />
  		<link rel="stylesheet" href="../libs/jquery/jquery.mobile.icons.min.css" />
		<link rel="stylesheet" href="../libs/jquery/jquery.mobile-1.4.5.min.css">
		<link rel="stylesheet" href="../common_files/mobile.css">
        <script type="text/javascript" src="../libs/jquery/jquery-2.1.4.min.js"></script>
		<?php include("scripts.js.php"); ?>
		<script type="text/javascript" src="../libs/jquery/jquery.mobile-1.4.5.min.js"></script>
        <script type="text/javascript" src="../libs/jqueryui/jquery-ui.js"></script>
	</head>
	<body onload="changeTitle()">
        <?php
            function isItatian($inv) {
                switch ($inv) {
                    case '26nxaAWbzxq7Fux7EM6S':
                    case 'YybZkexX6ugge32YDsx8':
                    case 'WexETHHkDkv2CJVRQEKg':
                    case 'kEBL3gvS8FFgkD9RGAR9':
                    case '4K2DpQ23L2WzgNCcdh7x':
                    case '5kh6sYEHv9psr29UH6dE':
                    case 'FTb3YgbT233zXHhx6XJv':
                    case 'FTb3YgbT233zXHhx6XJv':
                    case 'Su7ARkzpMQwTuRJ3GcjL':
                    case 'T8ZeYM7PJMmKcrzUmT4B':
                    case 'd7dsd5Xghge5aCrPDLeH':
                        return "hidden";
                    default:
                        return "visible";
                }
                return $invitees['nZcQkyw6w8YaVBGGLcHv'];
            }
        ?>
		<div data-role="header" style="z-index:5;" >
		    <a class="ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-bars" onclick="reselectLanguage()"><?php echo $lang['page_1_8']; ?></a>
			<h1><?php echo $lang['page_menu_1'] . " " . $invitee . ", " . $lang['page_menu_2']; ?></h1>
			<a href="#popupBasic" data-rel="popup" class="ui-btn ui-btn-b ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-info" data-transition="pop"><?php echo $lang['page_1_7']; ?></a>
		</div>
		<div data-role="popup" id="popupBasic" >
			<p><?php echo $lang['page_1_10']; ?></p>
		</div>
		<div id="container">
			<div id="dummy"></div>
	    	<div class="buddy" style="display: block;">
	    		<div class="avatar" >
	    			<span class="infoText">
	    				<div data-role="controlgroup" data-theme="c" >
							<a href="../mobile/page_2_ceremony.php" data-role="button"><?php echo $lang['page_menu_6']; ?></a>
							<a href="../mobile/page_2_party.php" data-role="button"><?php echo $lang['page_menu_7']; ?></a>
						</div>
						<table>
							<tr>
								<td><a href="../mobile/page_2_map.php" data-mini="true" data-theme="d" data-role="button"><?php echo $lang['page_menu_5']; ?></a></td>
								<td><a href="../mobile/page_2_hotels.php" style="visibility: <?php echo isItatian($_COOKIE['invitee']); ?>;" data-mini="true" data-theme="d" data-role="button"><?php echo $lang['page_menu_3']; ?></a></td>
							</tr>
							<tr>
								<td><a href="../mobile/page_2_transportation.php" style="visibility: <?php echo isItatian($_COOKIE['invitee']); ?>;" data-mini="true" data-theme="d" data-role="button" target="_self"><?php echo $lang['page_menu_4']; ?></a></td>
								<td><a href="../mobile/page_2_poi.php" style="visibility: <?php echo isItatian($_COOKIE['invitee']); ?>;" data-mini="true" data-theme="d" data-role="button" target="_self"><?php echo $lang['page_menu_8']; ?></a></td>
							</tr>
							<tr>
								<td><a href="../mobile/page_2_calender.php" data-mini="true" data-theme="d" data-role="button"><?php echo $lang['page_menu_9']; ?></a></td>
								<td><a href="../mobile/page_2_traditions.php" data-mini="true" data-theme="d" data-role="button" target="_self"><?php echo $lang['page_menu_13']; ?></a></td>
							</tr>
							<tr>
								<td><a href="../mobile/page_2_old_invite.php" data-mini="true" data-theme="d" data-role="button" target="_self"><?php echo $lang['page_menu_11']; ?></a></td>
								<td><a href="../mobile/page_2_wishlist.php" data-mini="true" data-theme="d" data-role="button"><?php echo $lang['page_menu_12']; ?></a></td>
							</tr>
						</table>
	    				<div data-role="controlgroup" data-theme="e">
							<a href="../mobile/page_2_answer.php" data-role="button" target="_self"><?php echo $lang['page_menu_10']; ?></a>
						</div>
	    			</span>
    			</div>
	    	</div>
	  	</div>
	</body>
</html>
