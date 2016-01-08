<?php
    include("../common_files/invitee.php");

	// Swift Mailer Library
	require_once '../libs/swiftmail/swift_required.php';

    $msg = "";
    while (list($val, $key) = each($invitees))
        $msg .= $key . ": <a href='http://lookshy.dk/invite/?id=" . $val . "'>http://lookshy.dk/invite/?id=" . $val . "</a><br />";

	// Mail Transport
	$transport = Swift_SmtpTransport::newInstance('send.one.com', 25)
	    ->setUsername('klaus@lookshy.dk')
	    ->setPassword('KeS29d03m78y');

	// Mailer
	$mailer = Swift_Mailer::newInstance($transport);

	// Create a message
	$message = Swift_Message::newInstance('Invitations rapport')
	    ->setFrom(array('klaus@lookshy.dk' => 'Klaus Skafte')) // can be $_POST['email'] etc...
	    ->setTo(array('klaus@lookshy.dk' => 'Klaus Skafte')) // your email / multiple supported.
	    ->setBody($msg, "text/html");

	// Send the message
	if ($mailer->send($message))
	    echo 'Mail sent successfully';
	else
	    echo 'I am sure, your configuration are not correct. :(';
?>
