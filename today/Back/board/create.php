<?php
require "../auth/conn.php"; // db 연결 주소 php파일 연결

$title = $_POST["title"]; // 게시판 구현 : post로 받기
$memo = $_POST["memo"];

$sql  = "INSERT INTO sujin_board(title, memo) VALUES('$title', '$memo')"; // sql문으로 db 가져오기
$result = mysqli_query($conn, $sql);

echo $result;

