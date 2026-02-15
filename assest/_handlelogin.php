<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST["emaillogin"];
    $password = $_POST["loginpassword"];

    $sql = "SELECT * FROM `users` WHERE user_email = '$email'";
    $result = mysqli_query($conn, $sql);
    $numRow = mysqli_num_rows($result);
    if ($numRow > 0){
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['user_pass'])){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['useremail'] = $email;
            $_SESSION['username'] = $row['user_name'];
            $_SESSION['userid'] = $row['sno'];
            header("Location: /forum/index.php?loginsuccess=true");
            exit();
        }
        else{
            echo $showError = "Invalid Credentials";
        }
    }
    else{
        echo $showError = "Invalid Credentials";
    }
}

?>