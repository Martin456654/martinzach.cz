<?php

$redirect = false;

if(session_id() != '') {
    if(isset($_SESSION["login"])){
        if($_SESSION["login"] == 0){
            header("Location: index.php?you_are_not_logged_in");
        }
    }
}


?>