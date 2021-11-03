<?php

session_start();

if(isset($_POST["submit"])){

    $inputsSucess = true;
    $inputName = false;
    $inputPass = false;

    if(!$_POST["username"]){ 
        $inputsSucess = false;
        $inputName = true;
    }

    if(!$_POST["password"]){ 
        $inputsSucess = false;
        $inputPass = true;
    }

    if($inputsSucess != true){
        $endOfUrl = "";
        if($inputName == true || $inputPass == true){
            $endOfUrl .= "missingInput=true";
        }
        $url = "index.php?" . $endOfUrl;

        header("Location:" . $url);
        die();
    }

    $username = $_POST["username"];
    $password = $_POST["password"];

    include_once "include/conn.php";
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    if(!$query){
        header("Location: index.php?error=database_for_users_failed");
    }

    $login = false;
    while($row = mysqli_fetch_array($result)){
        if($row["username"] == $username){

            $verify = password_verify($password, $row["password"]);

            if($verify == 1){
                $_SESSION["userId"] = $row["id"];
                $login = true;
            }

        }
    }

    if($login == true){
        $_SESSION["login"] = 1;
        header("Location:admin_dashboard.php?login=sucessful");
    }else{
        header("Location:index.php?error=wrong_login_info");
    }

    die();
}

?>