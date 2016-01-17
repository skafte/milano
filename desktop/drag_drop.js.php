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
    if (isset($_COOKIE['lang']))
        $lang_file = $_COOKIE['lang'];
    include('../language/' . $lang_file);

    // check if msg have already been seen to the end once
    $isSend = "false";
    if ((isset($_COOKIE['msg'])) && ($_COOKIE['msg'] == "Already send"))
        $isSend = "true";
?>
<script type="text/javascript">
    var swipeStart;
    var msgLog = "";

    $(document).ready(function() {
        if ("<?php echo $isSend; ?>" === "false") {
            $(".buddy").draggable({
                axis: "x",
                revert: "invalid",
                start: function (e, ui) {
                    swipeStart = ui.position.left;
                },
                stop: function (e, ui) {
                    $(".status").remove();
                    return true;
                }
            });
            $( "#droppableLeft" ).droppable({
                drop: function( event, ui ) {
                    writeToLog("Like", $(ui.draggable).context.children[0].children[0].innerHTML);

                    $(ui.draggable).addClass('rotate-right').delay(700).fadeOut(1);
                    $('.buddy').find('.status').remove();

                    if ($(ui.draggable).is(':last-child')) {
                        sendMail("page_1");
                        $("#container").append("<div class='buddy' style='display: block;'><span class='infoText'><?php echo $lang['page_1_6']; ?></span></div>").fadeIn(400);
                    }
                    else
                        $(ui.draggable).next().removeClass('rotate-left rotate-right').fadeIn(400);
                }
            });
            $( "#droppableRight" ).droppable({
                drop: function( event, ui ) {
                    writeToLog("Dislike", $(ui.draggable).context.children[0].children[0].innerHTML);

                    $(ui.draggable).addClass('rotate-left').delay(700).fadeOut(1);
                    $('.buddy').find('.status').remove();

                    if ($(ui.draggable).is(':last-child')) {
                        sendMail("page_1");
                        $("#container").append("<div class='buddy' style='display: block;'><span class='infoText'><?php echo $lang['page_1_6']; ?></span></div>").fadeIn(400);
                    }
                    else
                        $(ui.draggable).next().removeClass('rotate-left rotate-right').fadeIn(400);
                }
            });

            $( "#droppableLeftOld" ).droppable({
                drop: function( event, ui ) {
                    $(ui.draggable).addClass('rotate-right').delay(700).fadeOut(1);
                    $('.buddy').find('.status').remove();

                    if ($(ui.draggable).is(':last-child'))
                        location.reload();
                    else
                        $(ui.draggable).next().removeClass('rotate-left rotate-right').fadeIn(400);
                }
            });
            $( "#droppableRightOld" ).droppable({
                drop: function( event, ui ) {
                    $(ui.draggable).addClass('rotate-left').delay(700).fadeOut(1);
                    $('.buddy').find('.status').remove();

                    if ($(ui.draggable).is(':last-child'))
                        location.reload();
                    else
                        $(ui.draggable).next().removeClass('rotate-left rotate-right').fadeIn(400);
                }
            });
        }
        else
            $("#container").append("<div class='buddy' style='display: block;'><span class='infoText'><?php echo $lang['page_1_6']; ?></span></div>").fadeIn(400);
    });

    function writeToLog(mood, onOption) {
        msgLog += "<b>" + mood + ":</b> " + onOption + "<br />";
    }

    function sendMail(page) {
        console.log("page: " + page);
        console.log("msgLog: " + msgLog);
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
            console.log('php');
            req.send("PHP sending, msg=" + msg);
        }
        else {
            console.log('formMail');
            var MyIFrame = document.getElementById("formFrame");
            var MyIFrameDoc = MyIFrame.contentDocument || MyIFrame.contentWindow.document;

            MyIFrameDoc.forms[0].message.value = msg;
            MyIFrameDoc.forms[0].subject.value = "<?php echo $invitee; ?>";

            MyIFrameDoc.forms[0].submit();
            req.send("msg=false");
        }
    }
</script>