<?php
if($_POST["message"]) {
    mail("jamesmor1975@email.address", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>
