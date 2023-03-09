<?php
require_once("vendor/autoload.php");
$error="";
if (!empty($_POST)) {
    $error=validate_form();
    if (empty($error)) {
        save_to_file();
        die(
            "<strong>". _THANK_YOU ."</strong> </br></br>
                  <strong>Name: </strong>" .$_POST["name"] . "</br>".
                  "<strong>Email: </strong>" .$_POST["email"] . "</br>".
                  "<strong>Message: </strong>" .$_POST["message"]
        );
    }
}

$parameter = isset($_GET["page"]) ? $_GET["page"] : "";
if ($parameter === "contact")
    require_once("views/form.php");
else
    require_once("views/users.php");
?>