<?php

// 
// basic variables setting
// 
$current_page = $_SERVER['REQUEST_URI'];
$current_page = basename($current_page, ".php");

// $previous_page = $_SERVER['HTTP_REFERER'];
// $previous_page = basename($previous_page, ".php");

// session
if(session_id() == '') {
    session_start();
}

if(!isset($_SESSION["login"])){
    $_SESSION["login"] = 0;
}

function echoLi($sendTo, $bntValue){
    echo "<li><a href='" . $sendTo . "'>" . $bntValue . "</a></li>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livesite - Admin - <?php echo ucfirst($current_page); ?></title>
    
    <!-- import normalize styles - normalize.css -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!-- import my own custom styles -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- link for cdnjs.com - FONTS AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header class="main_header">
        <div class="row">
            <div class="logo">
                <?php

                if($_SESSION["login"] == 1){
                    echo "<a href='admin_dashboard.php'>Desetiminutovka.cz</a>";
                }else{
                    echo "Desetiminutovka.cz";
                }

                ?>
            </div>

            <div class="menu">
                <ul>
                    <?php

                    if($_SESSION["login"] == 0){
                        echoLi("index.php", "Přihlásit se");
                    }if($_SESSION["login"] == 1){
                        echoLi("admin_dashboard.php", "Přehled příspěvků");
                        echoLi("my_profile.php", "Můj profil");
                        echoLi("do_this_php/logout_do_it.php", "Odhlásit se");
                    }

                    ?>
                </ul>

                <div class="logo_img_ham" id="hamburger">
                    <img src="assets/img/menuicon.png">
                </div>
            </div>
        </div>
    </header>

    <div class="responzive_slider_menu" id="slider">
        <ul>
        <?php

        if($_SESSION["login"] == 0){
            echoLi("admin_dashboard.php", "Desetiminutovka.cz");
            echoLi("index.php", "Přihlásit se");
        }if($_SESSION["login"] == 1){
            echoLi("admin_dashboard.php", "Desetiminutovka.cz");
            echoLi("admin_dashboard.php", "Přehled příspěvků");
            echoLi("my_profile.php", "Můj profil");
            echoLi("do_this_php/logout_do_it.php", "Odhlásit se");
        }

        ?>
        </ul>
    </div>

<script src="assets/js/responzive_menu.js"></script>

    <main class="main">
        <div class="row">