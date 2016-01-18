<?php
    $lang_file = "language.dk.php";
    if (isset($_COOKIE['selectedLanguage']))
        $lang_file = $_COOKIE['selectedLanguage'];
    include('../language/' . $lang_file);
?>
<script type="text/javascript">
    function reselectLanguage() {
        window.open("select_language.php?look=desktop&lang=doNew", "_self");
    }

    function backToMenu() {
        window.open("page_menu.php", "_self");
    }

    function changeTitle() {
        document.title = "<?php echo $lang['title']; ?>";
    }
</script>