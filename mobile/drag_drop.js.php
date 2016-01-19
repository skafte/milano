<?php
    include("../common_files/invitee.php");
    if (isSet($_COOKIE['invitee'])) {
        if (array_key_exists($_COOKIE['invitee'], $invitees))
            $invitee = $invitees[$_COOKIE['invitee']];
        else
            exit;
    }
    else
        exit;

    $lang_file = "language.dk.php";
    if (isset($_COOKIE['selectedLanguage']))
        $lang_file = $_COOKIE['selectedLanguage'];
    include('../language/' . $lang_file);
?>
<script type="text/javascript">
    var swipeStart;
    var msgLog = "";

    $(document).ready(function() {
        $.event.special.swipe.horizontalDistanceThreshold = 100;     // virker hvis det er nødvendigt
        $(".buddy").on("swiperight", doSwipeRightOld);
        $(".buddy").on("swipeleft", doSwipeLeftOld);
    });

    function doSwipeLeftOld() {
        $(this).addClass('rotate-right').delay(700).fadeOut(1);
        $('.buddy').find('.status').remove();

        if ($(this).is(':last-child'))
            location.reload();
        else
            $(this).next().removeClass('rotate-left rotate-right').fadeIn(400);
    }
    function doSwipeRightOld() {
        $(this).addClass('rotate-left').delay(700).fadeOut(1);
        $('.buddy').find('.status').remove();

        if ($(this).is(':last-child'))
            location.reload();
        else
            $(this).next().removeClass('rotate-left rotate-right').fadeIn(400);
    }

    function writeToLog(mood, onOption) {
        msgLog += "<b>" + mood + ":</b> " + onOption + "<br />";
    }

    function sendMail(page) {
        var msg = "<b>Page: </b>" + page + "<br />" + msgLog + "<br /><br /><b>Valgt sprog fil:</b> <?php echo $lang_file; ?>";
        var req = new XMLHttpRequest();
        req.open("POST", "../common_files/sendmail.php", true);
        req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        req.onreadystatechange = function() {
            if (req.readyState === 4 && req.status == 200) {}
        }

        if (<?php
                if (function_exists('proc_open'))
                    echo "true";
                else
                    echo "false";
             ?>) {
            req.send("msg=" + msg);
        }
        else {
            var MyIFrame = document.getElementById("formFrame");
            var MyIFrameDoc = MyIFrame.contentDocument || MyIFrame.contentWindow.document;

            MyIFrameDoc.forms[0].message.value = msg;
            MyIFrameDoc.forms[0].subject.value = "<?php echo $invitee; ?>";

            MyIFrameDoc.forms[0].submit();
            req.send("msg=false");
        }
    }
</script>