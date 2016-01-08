<?php
    include("root.php");

	$lang_file = "language.dk.php";
	if ($_GET['dk'])
    	$lang_file = "language.dk.php";
	else if ($_GET['it'])
    	$lang_file = "language.it.php";
   	else if ($_GET['en'])
    	$lang_file = "language.en.php";

	setcookie('lang', $lang_file, time() + (3600 * 24 * 300), $inviteRoot);

    header('HTTP/1.1 307 Temporary Redirect');
    // header('Location: ../' . $_GET['look'] . '/page_1.php?reload=true');
    header('Location: ../' . $_GET['look'] . '/page_menu.php?reload=true');
?>