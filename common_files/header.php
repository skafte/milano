<?php
    include("root.php");
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
    if (isset($_COOKIE['selectedLanguage']))
        $lang_file = $_COOKIE['selectedLanguage'];
    else if (isset($_COOKIE['lang'])) {
        if (($_COOKIE['lang'] == "language.dk.php") || ($_COOKIE['lang'] == "language.en.php") || ($_COOKIE['lang'] == "language.it.php")) {
            $lang_file = $_COOKIE['lang'];
            setcookie('selectedLanguage', $lang_file, time() + (3600 * 24 * 300), $inviteRoot);
            setcookie('lang', $lang_file, time() - 3600, $inviteRoot);
        }
    }
    include('../language/' . $lang_file);
?>
<head>
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="en">

    <meta name="resource-type" content="document">
    <meta name="copyright" content="Copyright by KESoft 2015">
    <meta name="author" content="KESoft, 2015">