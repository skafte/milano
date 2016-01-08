<?php
    include("invitee.php");
    if (isSet($_COOKIE['invitee'])) {
        if (array_key_exists($_COOKIE['invitee'], $invitees))
            $invitee = $invitees[$_COOKIE['invitee']];
        else
            exit;
    }
    else
        exit;

    include("root.php");
	// Swift Mailer Library
	require_once '../libs/swiftmail/swift_required.php';

    // compose message body
    $msg = "<b>Fra:</b> ". $invitee . "<br /><br />";
    if ($_POST['msg'])
        $msg .= $_POST['msg'];

    setcookie('msg', "Already send", time() + (3600 * 24 * 300), $inviteRoot);
    if ($_POST['msg'] == "false") {
        echo 'Just cookie sat';
    }
    else {
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
    }
?>
