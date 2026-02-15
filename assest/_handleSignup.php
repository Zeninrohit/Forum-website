<?php


if ($_SERVER["REQUEST_METHOD"] == "POST"){
     include '_dbconnect.php';
        $user_name = $_POST["username"];
        $user_email = $_POST["signinemail"];
        $pass = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        // Check whether this email exists
        $existSql = "SELECT * FROM `users` WHERE user_email = '$user_email'";
        $result = mysqli_query($conn, $existSql);
        $numExistRows = mysqli_num_rows($result);
        if($numExistRows > 0){
            $showError = "Email already in use";
        }
        else{
            if($pass == $cpassword){
                $hash = password_hash($pass, PASSWORD_DEFAULT);
                $user_name = mysqli_real_escape_string($conn, $user_name);
                $user_email = mysqli_real_escape_string($conn, $user_email);
                $sql = "INSERT INTO `users` ( `user_name`, `user_email`, `user_pass`, `dt`) VALUES ('$user_name', '$user_email', '$hash', current_timestamp())";
                $result = mysqli_query($conn, $sql);
                if($result){
                    $showAlert = true;
                    header("Location: /forum/index.php?signupsuccess=true");
                    exit();
                }
            }
            else{
                $showError = "Passwords do not match";
            }
        }

}



?>