<?php
require_once("config.php");
require_once("function.php");
$error="";
if (!empty($_POST)) {
    $error=validate_form();
    if (empty($error)) {
        die(
            "<strong>". _THANK_YOU ."</strong> </br></br>
                  <strong>Name: </strong>" .$_POST["name"] . "</br>".
                  "<strong>Email: </strong>" .$_POST["email"] . "</br>".
                  "<strong>Message: </strong>" .$_POST["message"]
        );
    }
}

require_once("views/form.php");
?>