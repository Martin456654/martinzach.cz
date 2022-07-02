<?php

$formular_build = "<form action='send_form.php' method='POST'>";

$formular_build .= "<div class'div_to_format'>";

$formular_build .= "<input type='text' name='jmeno' placeholder='Jméno'";
if(isset($_SESSION["jmeno_miss"])){
    if($_SESSION["jmeno_miss"] == true){
        $formular_build .= " class='missingInput'";
    }else{
        $formular_build .= "value='".$_SESSION["jmeno_value"]."'";
    }
}
$formular_build .= ">";



$formular_build .= "<input type='text' name='prijmeni' placeholder='Příjmení'";
if(isset($_SESSION["prijmeni_miss"])){
    if($_SESSION["prijmeni_miss"] == true){
        $formular_build .= " class='missingInput'";
    }else{
        $formular_build .= "value='".$_SESSION["prijmeni_value"]."'";
    }
}
$formular_build .= ">";


$formular_build .= "</div>";
$formular_build .= "<div class'div_to_format'>";


$formular_build .= "<input type='text' id='input_without_margin' name='email' placeholder='Email'";
if(isset($_SESSION["email_miss"])){
    if($_SESSION["email_miss"] == true){
        $formular_build .= " class='missingInput'";
    }else{
        $formular_build .= "value='".$_SESSION["email_value"]."'";
    }
}
$formular_build .= ">";



$formular_build .= "<input type='text' name='predmet' placeholder='Předmět'";
if(isset($_SESSION["predmet_miss"])){
    if($_SESSION["predmet_miss"] == true){
        $formular_build .= " class='missingInput'";
    }else{
        $formular_build .= "value='".$_SESSION["predmet_value"]."'";
    }
}
$formular_build .= ">";


$formular_build .= "</div>";


$formular_build .= "<textarea rows='3' name='text' placeholder='Text'";
if(isset($_SESSION["text_miss"])){
    if($_SESSION["text_miss"] == true){
        $formular_build .= " class='missingInput'";
        $formular_build .= ">";
    }else{
        $formular_build .= ">";
        $formular_build .= $_SESSION["text_value"];
    }
}else{
    $formular_build .= ">";
}
$formular_build .= "</textarea>";

$formular_build .= "<input type='submit' name='submit' value='Odeslat'>";
$formular_build .= "</form>";
echo $formular_build;

?>