<?php include_once "../include/header.php"; ?>

    <?php
    
    $id = $_POST["id"];
        
    include_once "../include/conn.php";

    $query_posts = "DELETE FROM posts WHERE id='" . $id . "'";
    $result_posts = mysqli_query($conn, $query_posts);
    if(!$query_posts){
        header("Location: index.php?error=database_failed");
        die();
    }

    header("Location: ../admin_dashboard.php?info=post_deleted_succesfully");

    ?>

<?php include_once "../include/footer.php"; ?>