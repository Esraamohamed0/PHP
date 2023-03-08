<?php
function validate_form(){
    $name = isset($_POST["name"])?$_POST["name"]:"";
    $email = isset($_POST["email"])?$_POST["email"]:"";
    $message = isset($_POST["message"])?$_POST["message"]:"";
    if (empty($name)||empty($email)||empty($message)) {
        return " A field is empty";
    }
    elseif (strlen($name) > __MAX_NAME_LENGTH_) {
        return "name length is not right";
    }
    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        return "email is not valid";
    }
    elseif (strlen($message) > __MAX_MESSAGE_LENGTH_) {
        return "message length is not right";
    }
    else {
        return "";
    }
}
function remeber_var($var){
    if(isset($_POST[$var]) && !empty($_POST[$var])){
        return $_POST[$var];
    }
}