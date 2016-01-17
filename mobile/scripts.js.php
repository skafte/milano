<?php
    $lang_file = "language.dk.php";
    if (isset($_COOKIE['lang']))
        $lang_file = $_COOKIE['lang'];
    include('../language/' . $lang_file);
?>
<script type="text/javascript">
    function reselectLanguage() {
        window.open("select_language.php?look=mobile&lang=doNew", "_self");
    }

    function backToMenu() {
        window.open("page_menu.php", "_self");
    }

    function changeTitle() {
        document.title = "<?php echo $lang['title']; ?>";
    }
</script>