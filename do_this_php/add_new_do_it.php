<?php include_once "../include/header.php"; ?>

<?php
    
    include_once "../include/conn.php";

    $query_users = "SELECT * FROM users";
    $result_users = mysqli_query($conn, $query_users);
    if(!$query_users){
        die("Nepodařilo se načíst údaje z databáze users.");
    }

    while($row_user = mysqli_fetch_array($result_users)){
        if($_SESSION["userId"] == $row_user["id"]){
            $autor = $row_user["username"];
        }
    }

    if(!isset($_POST["submit"])){
        die("submit chybí");
    }

    if(!$_POST["name"]){
        die("name missing");
    }

    if(!$_POST["content"]){
        die("content chybí");
    }

    $name = $_POST["name"];
    $content = $_POST["content"];
    // $autor víše v kódu

    $query_posts = "INSERT INTO posts(postName, postContent, postAutor) VALUES('$name', '$content', ' $autor')";
    $result_posts = mysqli_query($conn, $query_posts);
    if(!$query_posts){
        die("chyba vkladu nového postu");
    }

    header("Location: ../admin_dashboard.php");


?>

<?php include_once "../include/footer.php"; ?>