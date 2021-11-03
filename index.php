<?php include_once "include/header.php"; ?>

<div class="admin_login">
    <form action="admin_form_check.php" method="POST">
        <input type="text" name="username" placeholder="Jméno" autofocus>
        <input type="password" name="password" placeholder="Heslo">
        <input type="submit" name="submit" value="Přihlásit se">

        <span class="error_message">
            <?php
             
            if(isset($_GET["missingInput"])) {
                if($_GET["missingInput"] == true){
                    echo "Vyplň všechna políčka.";
                }
            }
            
            if(isset($_GET["error"])) {
                if($_GET["error"] == "database_for_users_failed"){
                    echo "Chyba databáze. Zkuste to prosím znovu, nebo nás kontaktujte.";
                }

                if($_GET["error"] == "wrong_login_info"){
                    echo "Špatné přihlašovací údaje.";
                }
             }

            ?>
        </span>
    </form>
</div>

<?php include_once "include/footer.php"; ?>