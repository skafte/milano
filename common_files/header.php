<?php
    include("invitee.php");
    if (isset($_COOKIE['invitee'])) {
        if (array_key_exists($_COOKIE['invitee'], $invitees))
            $invitee = $invitees[$_COOKIE['invitee']];
        else
            exit;
    }
    else
        exit;

 	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">';
	echo '<html xmlns="http://www.w3.org/1999/xhtml" lang="en">';

 	header("X-Robots-Tag: none, noindex, nofollow, noimageindex", true);

    header("Cache-Control: no-cache, no-store, must-revalidate");   // HTTP/1.1
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");               // Date in the past

    $lang_file = "language.dk.php";
    if (isSet($_COOKIE['lang']))
        $lang_file = $_COOKIE['lang'];
    include('../language/' . $lang_file);
?>
<head>
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="en">

    <meta name="resource-type" content="document">
    <meta name="copyright" content="Copyright by KESoft 2015">
    <meta name="author" content="KESoft, 2015">