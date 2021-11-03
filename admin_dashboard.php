<?php include_once "include/header.php"; ?>
<?php include_once "include/login_checker.php"; ?>

<?php

if(isset($_GET["info"])){
    if($_GET["info"] == "post_edited_succesfully"){
        echo "
        <script>
        alert('Přispěvek byl úspěšně upraven.');
        </script>
        ";
    }

    if($_GET["info"] == "post_deleted_succesfully"){
        echo "
        <script>
        alert('Přispěvek byl úspěšně smazán.');
        </script>
        ";
    }
}

?>

<?php

// save today & tomorrow date
$today = new DateTime('today');
$today = date_format($today, 'Y-m-d');

$yesterday = new DateTime('yesterday');
$yesterday = date_format($yesterday, 'Y-m-d');

$firstPastPost = false;

?>

<div class="admin_dashboard">

    <div class="add_button">
        <a href="add_new.php">Vytvořit nový příspěvek</a>
    </div>

    <div class="postsContent">
        <div class="showFuturePosts">
            <button id="futurePostsBtn">Zobrazit budoucí příspěvky&nbsp;&nbsp;<i class="fas fa-arrow-down"></i></button>
        </div>
    <?php

        include_once "include/conn.php";

        $query_users = "SELECT * FROM users";
        $result_users = mysqli_query($conn, $query_users);
        if(!$query_users){
            header("Location: index.php?error=database_failed");
        }

        $query_posts = "SELECT * FROM posts ORDER BY id DESC";
        $result_posts = mysqli_query($conn, $query_posts);
        if(!$query_posts){
            header("Location: index.php?error=database_failed");
        }

        $counterOfPosts = 0;

        
        while($row_users = mysqli_fetch_array($result_users)){
            if($row_users["id"] == $_SESSION["userId"]){
                $authorization = $row_users["authorization"];
            }
        }

        while($row = mysqli_fetch_array($result_posts)){
            $date = $row["postDate"];
            $date = date_create($date);
            $dateShow = date_format($date, 'd.m.Y H:i');

            $dateCheck = date_format($date, "Y-m-d");

            // if($dateCheck == $today || $dateCheck == $yesterday){
            //     echo "<div class='post'>";
            // }else{
            //     echo "<div class='post nonShown'>";
            // }

            if(strtotime($dateCheck) > time()) {
                echo "<div class='post futurePost'>";
                echo "<span class='tag'>Naplánováno ke zveřejnění</span>";

            }
            if(strtotime($dateCheck) < time()) {
                if($dateCheck == $today || $dateCheck == $yesterday){
                    echo "<div class='post'>";
                    echo "<span class='tag'>Veřejné</span>";
                }else{
                    if($firstPastPost == false){
                        echo "<div class='showPastPosts'>";
                        echo "<button id='pastPostsBtn'>Zobrazit příspěvky z historie&nbsp;&nbsp;<i class='fas fa-arrow-down'></i></button>";
                        echo "</div>";
                        $firstPastPost = true;
                    }
                    echo "<div class='post nonShown'>";
                    echo "<span class='tag'>Smazáno ze stránky</span>";
                }
            }
            if(strtotime($dateCheck) == time()) {
                # date is right now
                echo "<div class='post'>";
            }

            echo "
                <div class='content'>
                    <h2>" . $row["postName"] . "</h2>
            ";

            if(strlen($row["postContent"]) > 200){
                $content = substr($row["postContent"], 0, 200);
                $content .= "...";
            }else{
                $content = $row["postContent"];
            }

            echo "<p>" . $content . "</p>";

            echo "
                </div>
                <div class='other_info'>
                    <span class='date'>
                        " . $dateShow . "
                    </span>
                    <span class='autor'>
                        Autor - " . $row["postAutor"] . "
                    </span>
                </div>
                <div class='edit_post'>
            ";

            if($authorization == "admin" || $authorization == "editor"){
                echo "<a href='edit.php?edit=" . $row["id"] . "'>Editovat</a>";
            }

            if($authorization == "admin"){
                echo "<a href='delete.php?delete=" . $row["id"] . "'>Smazat přispěvek</a>";
            }

            echo "
                </div>
            </div>
            ";

            $counterOfPosts++;
        }

        if($counterOfPosts == 0){
            echo "
            <div class='post'>
                Nemáte zde žádné příspěvky.
            </div>
            ";
        }

    ?>
    </div>

</div>

<script src="assets/js/post_filter.js"></script>

<?php include_once "include/footer.php"; ?>