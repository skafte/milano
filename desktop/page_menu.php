<?php
    include("../common_files/header.php");
    include("../common_files/root.php");
    setcookie('msg', "Nothing to send anymore", time() + (3600 * 24 * 300), $inviteRoot);
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
        <script type="text/javascript">
    $(document).on('pagebeforeload', function(event, data) {
    var url = data.url;
    if (url.toLowerCase().indexOf("office") >= 0) {
        event.preventDefault();
        $.get(data.absUrl, {}, function(res){
            _this = $(res);
            if (_this.attr('data-id')>0) {
                var card_id = _this.attr('data-id');
                $('#detail-'+card_id).empty().append(_this).trigger('create');
            }
        });
        data.deferred.reject( data.absUrl, data.options );
    }
});
    $.mobile.page.prototype.options.domCache = false;
    </script>
	</head>
	<body onload="changeTitle()">
        <div data-role="page" data-dom-cache="false">
			<div data-role="header" style="z-index:5;" >
			    <a class="ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-bars" onclick="reselectLanguage()"><?php echo $lang['page_1_8']; ?></a>
				<h1><?php echo $lang['page_menu_1'] . " " . $invitee . ", " . $lang['page_menu_2']; ?></h1>
				<a href="#popupBasic" data-rel="popup" class="ui-btn ui-btn-b ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-info" data-transition="pop"><?php echo $lang['page_1_7']; ?></a>
			</div>
			<div data-role="popup" id="popupBasic" >
				<p><?php echo $lang['page_1_10']; ?></p>
			</div>
			<div id="container">
		    	<div class="buddy" style="display: block;">
		    		<div class="avatar" >
		    			<span class="infoText">
		    				<div data-role="controlgroup" data-theme="c" >
								<a href="../desktop/page_2_ceremony.php" data-role="button"><?php echo $lang['page_menu_6']; ?></a>
								<a href="../desktop/page_2_party.php" data-role="button"><?php echo $lang['page_menu_7']; ?></a>
							</div>
							<table>
								<tr>
									<td><a href="../desktop/page_2_map.php" data-mini="true" data-theme="d" data-role="button"><?php echo $lang['page_menu_5']; ?></a></td>
									<td><a href="../desktop/page_2_hotels.php" data-mini="true" data-theme="d" data-role="button"><?php echo $lang['page_menu_3']; ?></a></td>
								</tr>
								<tr>
									<td><a href="../desktop/page_2_transportation.php" data-mini="true" data-theme="d" data-role="button" target="_self"><?php echo $lang['page_menu_4']; ?></a></td>
									<td><a href="../desktop/page_2_poi.php" data-mini="true" data-theme="d" data-role="button" target="_self"><?php echo $lang['page_menu_8']; ?></a></td>
								</tr>
								<tr>
									<td><a href="../desktop/page_2_calender.php" data-mini="true" data-theme="d" data-role="button"><?php echo $lang['page_menu_9']; ?></a></td>
									<td><a href="../desktop/page_2_traditions.php" data-mini="true" data-theme="d" data-role="button" target="_self"><?php echo $lang['page_menu_13']; ?></a></td>
								</tr>
								<tr>
									<td><a href="../desktop/page_2_old_invite.php" data-mini="true" data-theme="d" data-role="button" target="_self"><?php echo $lang['page_menu_11']; ?></a></td>
									<td><a href="../desktop/page_2_wishlist.php" data-mini="true" data-theme="d" data-role="button"><?php echo $lang['page_menu_12']; ?></a></td>
								</tr>
							</table>
		    				<div data-role="controlgroup" data-theme="e">
								<a href="../desktop/page_2_answer.php" data-role="button" target="_self"><?php echo $lang['page_menu_10']; ?></a>
							</div>
		    			</span>
	    			</div>
		    	</div>
		  	</div>
	  	</div>
	</body>
</html>
