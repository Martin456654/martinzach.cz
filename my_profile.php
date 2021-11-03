<?php include_once "include/header.php"; ?>
<?php include_once "include/login_checker.php"; ?>

<?php

// echo $_SESSION["userId"];
    
    include_once "include/conn.php";

    $query_users = "SELECT * FROM users";
    $result_users = mysqli_query($conn, $query_users);
    if(!$query_users){
        die("Chyba připojení databáze uživatelů.");
    }

    $query_posts = "SELECT * FROM posts";
    $result_posts = mysqli_query($conn, $query_posts);
    if(!$query_posts){
        die("Chyba připojení databáze uživatelů.");
    }

    while($row_users = mysqli_fetch_array($result_users)){
        if($_SESSION["userId"] == $row_users["id"]){
            echo "Jméno - " . $row_users["username"] . "<br>";
            echo "Email - " . $row_users["email"] . "<br>";

            if($row_users["authorization"] == "admin"){
                echo "Oprávnění - " . ucfirst($row_users["authorization"]) . " - Oprávnění vytvářet, upravovat a mazat příspěvky.";
            }
        }
    }

?>

<div class="my_profile">
    
</div>

<?php include_once "include/footer.php"; ?>