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
        <script type="text/javascript">
            function setAndSendAnswer(reply) {
                document.getElementById('reply').value = reply;
                document.getElementById('additional').value = document.getElementById('additional').value.replace("\n", ".- ");
                document.getElementById('additional').value = document.getElementById('additional').value.replace("\r", ".- ");

                msgLog = "";
                msgLog += "Name: " + document.getElementById('name').value + ". ";
                msgLog += "To the ceremony: " + document.getElementById('toCeremony').value + ". ";
                msgLog += "To the party: " + document.getElementById('toParty').value + ". ";
                msgLog += "Additional: " + document.getElementById('additional').value + ". ";
                msgLog += "Reply: " + document.getElementById('reply').value;

                sendMail("answer");
            }
        </script>
	</head>
	<body onload="changeTitle()">
		<div data-role="header" style="z-index:5;" >
		    <a class="ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-back" onclick="backToMenu()"><?php echo $lang['page_menu_0']; ?></a>
			<h1><?php echo $lang['page_menu_1'] . " " . $invitee . ", " . $lang['page_menu_10']; ?></h1>
			<a href="#popupBasic" data-rel="popup" class="ui-btn ui-btn-b ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-info" data-transition="pop"><?php echo $lang['page_1_7']; ?></a>
		</div>
		<div data-role="popup" id="popupBasic" >
			<p><?php echo $lang['page_1_10']; ?></p>
		</div>
        <br />
        <span style="font-family: serif; font-style: italic; color:#ff9900;"><?php echo $lang['page_1_11']; ?></span>
        <form method="POST" action="page_2_answer_send.php">
            <div id="container2">
                <div class="buddy" style="display: block;">
                    <div class="avatar" >
                        <span class="infoText">
                            <?php echo $lang['page_2_answer_1']; ?><br />
                            <br />
                            <?php echo $lang['page_2_answer_2']; ?>
                        </span>
                    </div>
                </div>
                <div class="buddy">
                    <div class="avatar" >
                        <span class="infoText">
                            <?php echo $lang['page_2_answer_3']; ?><input name="name" id="name" type="text" value="<?php echo $invitee; ?>" /><br />
                            <?php echo $lang['page_2_answer_4']; ?><br />
                            <?php echo $lang['page_2_answer_5']; ?><input name="toCeremony" id="toCeremony" type="text"><br />
                            <?php echo $lang['page_2_answer_6']; ?><input name="toParty" id="toParty" type="text">
                        </span>
                    </div>
                </div>
                <div class="buddy">
                    <div class="avatar" >
                        <span class="infoText">
                            <?php echo $lang['page_2_answer_7']; ?><textarea name="additional" id="additional"></textarea><br />
                        </span>
                    </div>
                </div>
                <div class="buddy">
                    <div class="avatar" >
                        <span class="infoText">
                            <b><?php echo $lang['page_2_answer_8']; ?></b>
                            <input name="reply" id="reply" type="hidden"/>
                            <button style="background-color: #2FAA28; height: 125px; width: 300px;" type="submit" name="coming" onclick="setAndSendAnswer('coming')">
                                <img src="../pics/icon_like.png" style="width: 50px; height:50px;"><br />
                                <?php echo $lang['page_2_answer_9']; ?>
                            </button>
                            <button style="background-color: #ED1C36; height: 100px; width: 270px; margin-left: 15px;" type="submit" name="notcoming" onclick="setAndSendAnswer('notcoming')">
                                <img src="../pics/icon_dislike.png" style="width: 50px; height:50px;"><br />
                                <?php echo $lang['page_2_answer_10']; ?>
                            </button>
                        </span>
                    </div>
                </div>
    	  	</div>
        </form>
	  	<div id="droppableRightOld" class="ui-widget-header">
		  	<p><img src="../pics/fast_forward.png" class="icon"></p>
		</div>
        <iframe style="display:none;" id="formFrame" src="../common_files/form_mail.php"></iframe>
	</body>
</html>
