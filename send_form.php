<?php

session_start();

if(!isset($_POST["submit"])){
    header("Location:index.php");
}

$GLOBALS["any_missing_component"] = "nechybi";
check_missing_component("jmeno");
check_missing_component("prijmeni");
check_missing_component("email");
check_missing_component("predmet");
check_missing_component("text");

if($GLOBALS["any_missing_component"]  == "chybi"){
    whatIsMissing();
    sendMeToIndex();
}else{
    session_destroy();
    sendEmail();
}

function check_missing_component($component){
    if(!$_POST["$component"]){
        $GLOBALS["any_missing_component"] = "chybi";
    }
}

function whatIsMissing(){
    if(!$_POST["jmeno"]){
        $_SESSION["jmeno_miss"] = true;
    }else{
        $_SESSION["jmeno_miss"] = false;
        $_SESSION["jmeno_value"] = $_POST["jmeno"];
    }
    if(!$_POST["prijmeni"]){
        $_SESSION["prijmeni_miss"] = true;
    }else{
        $_SESSION["prijmeni_miss"] = false;
        $_SESSION["prijmeni_value"] = $_POST["prijmeni"];
    }
    if(!$_POST["email"]){
        $_SESSION["email_miss"] = true;
    }else{
        $_SESSION["email_miss"] = false;
        $_SESSION["email_value"] = $_POST["email"];
    }
    if(!$_POST["predmet"]){
        $_SESSION["predmet_miss"] = true;
    }else{
        $_SESSION["predmet_miss"] = false;
        $_SESSION["predmet_value"] = $_POST["predmet"];
    }
    if(!$_POST["text"]){
        $_SESSION["text_miss"] = true;
    }else{
        $_SESSION["text_miss"] = false;
        $_SESSION["text_value"] = $_POST["text"];
    }
}

function sendMeToIndex(){
    header("Location:index.php?redirect_to_form=true");
}

function sendEmail(){
    $jmeno = $_POST["jmeno"];
    $prijmeni = $_POST["prijmeni"];
    $email = $_POST["email"];
    $predmet = $_POST["predmet"];
    $text = $_POST["text"];

    // // filter_var
    // $jmeno_filter = filter_var($jmeno, FILTER_SANITIZE_STRING);
    // $prijmeni_filter = filter_var($prijmeni, FILTER_SANITIZE_STRING);
    // $email_filter = filter_var($email, FILTER_SANITIZE_EMAIL);
    // $predmet_filter = filter_var($predmet, FILTER_SANITIZE_STRING);
    // $text_filter = filter_var($text, FILTER_SANITIZE_STRING);


    $message = "
    Tento email byl poslán přes email z webu martinzach.cz z formuláře přímo na webu.
    Od: $jmeno $prijmeni
    Email: $email
    Zpráva: $text
    Odesláno: " . date("d.m.Y H:i") . "
    ";

    mail("zachmart456@gmail.com", $predmet, $message);

    header("Location:form_succesfully_send.php");
}

?>