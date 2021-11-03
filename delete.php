<?php include_once "include/header.php"; ?>
<?php include_once "include/login_checker.php"; ?>

    <?php
            
            include_once "include/conn.php";
    
            $query_posts = "SELECT * FROM posts";
            $result_posts = mysqli_query($conn, $query_posts);
            if(!$query_posts){
                header("Location: index.php?error=database_failed");
            }

        echo "<div class='delete'>";
        echo "<h1>Opravdu si přejete vymazat z databáze tento příspěvek?</h1><hr>";
    
        while($row = mysqli_fetch_array($result_posts)){
            if($row["id"] == $_GET["delete"]){
                echo "
                    <form action='do_this_php/delete_do_it.php' method='POST'>
                        <h3>" . $row["postName"] . "</h3>
                        <p>" . $row["postContent"] . "</p>
                        <input style='display: none' type='text' name='id' value=" . $row["id"] . "><hr>
                        <input type='submit' name='submit' value='Smazat'><br>
                        <a href='admin_dashboard.php' class='cancel'>Zrušit</a>
                    </form>
                </div>
                ";
            }
        }


    ?>
<?php include_once "include/footer.php"; ?>