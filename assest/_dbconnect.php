<?php
$conn = mysqli_connect(
    "localhost",
    "u211243069_rohit",
    "YOUR_PASSWORD",
    "u211243069_idiscuss"
);

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>
