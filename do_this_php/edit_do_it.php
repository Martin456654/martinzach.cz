<?php include_once "../include/header.php"; ?>

    <?php

    $name = $_POST["postName"];
    $content = $_POST["content"];
    $id = $_POST["id"];
        
    include_once "../include/conn.php";

    $query_posts = "UPDATE posts SET postName = '" . $name . "', postContent = '" . $content . "' WHERE id = " . $id;
    echo $query_posts;
    $result_posts = mysqli_query($conn, $query_posts);
    if(!$query_posts){
        header("Location: index.php?error=database_failed");
        die();
    }

    header("Location: ../admin_dashboard.php?info=post_edited_succesfully");

    ?>

<?php include_once "include/footer.php"; ?>