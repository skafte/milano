<?php
    include("../common_files/header.php");
?>
	</head>
	<body>
		<form method="post" action="http://www.lookshy.dk/cgi-bin/FormMail.pl" id="frm1">
			<input name="realname" value="Invitations rapport" />
			<input name="message" id="message" value="to be filled" />
			<input name="email" value="ks@codesealer.com" />
			<input id="sendBtn" type="submit" value="Send" />

			<input type="hidden" name="recipient" value="klaus@lookshy.dk" />
			<input type="hidden" name="subject" id="subject" value="to be filled" />
			<input type="hidden" name="redirect" value="http://lookshy.dk/invite/common_files/form_mail.php" />
			<input type="hidden" name="missing_fields_redirect" value="http://lookshy.dk/invite/common_files/form_mail.php" />
		</form>
	</body>
</html>
