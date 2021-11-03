<?php include_once "include/header.php"; ?>
<?php include_once "include/login_checker.php"; ?>

<div class="edit_form">
<h1>Upravit příspěvek</h1><hr>

    <form action="do_this_php/edit_do_it.php" method="POST" onsubmit="return submitHandler(active)">
        <span class="error_message">
            <?php
             
            include_once "include/conn.php";
     
            $query_posts = "SELECT * FROM posts";
            $result_posts = mysqli_query($conn, $query_posts);
            if(!$query_posts){
                header("Location: index.php?error=database_failed");
            }
     
            while($row = mysqli_fetch_array($result_posts)){
                if($row["id"] == $_GET["edit"]){
                    echo "
                        <input type='text' name='postName' placeholder='Název nenalezen v databázi' value='" . $row["postName"] . "' id='input_name'>
                        <textarea rows='5' type='text' name='content' id='content' placeholder='Obsah nenalezen v databázi' id='input_content'>" . $row["postContent"] . "</textarea>
                        <input style='display: none' type='text' name='id' value=" . $row["id"] . ">
                        <input type='submit' name='submit' value='Aktualizovat příspěvek' id='edit_btn' class='active'><br>
                        <a href='admin_dashboard.php' class='cancel'>Zrušit</a>
                    ";
                }
            }

            ?>
        </span>
    </form>
</div>

<script src="ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>
<script src="assets/js/edit_btn.js"></script>

<?php include_once "include/footer.php"; ?>