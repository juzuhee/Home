<?php
require "../auth/conn.php";

$title = $_POST["title"];
$memo = $_POST["memo"];
$user_id = $_POST["id"];

$sql  = "INSERT INTO sujin_board(title, memo, id) VALUES('$title', '$memo', '$user_id')";
$result = mysqli_query($conn, $sql);

echo $result;

