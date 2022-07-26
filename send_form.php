<?php

$jmeno = $_POST["jmeno"];
$prijmeni = $_POST["prijmeni"];
$email = $_POST["email"];
$predmet = $_POST["predmet"];
$text = $_POST["text"];


$message = "
Tento email byl poslán přes email z webu martinzach.cz z formuláře přímo na webu.
Od: $jmeno $prijmeni
Email: $email
Zpráva: $text
Odesláno: " . date("d.m.Y H:i") . "
";

mail("zachmart456@gmail.com", $predmet, $message);

header("Location:form_succesfully_send.php");

?>