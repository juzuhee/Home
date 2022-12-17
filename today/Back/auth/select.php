<?php
require "conn.php"; // db 연결 주소 php파일 연결

session_start();

$id = $_POST['id']; // 로그인 구현 : post로 받기
$pw = $_POST['pw'];

$sql = "SELECT * FROM sujin where id = '$id'"; // sql문으로 db 가져오기

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);

$db_id = $row['id']; // db에서 id, pw 확인
$db_pw = $row['pw'];

$_SESSION["id"] = $row["id"]; // SESSION으로 id, name, birth 가져오기
$_SESSION["name"] = $row["name"];
$_SESSION["birth"] = $row["birth"];

echo '
    <script>
    location.href = "Login.php" 
    </script>
    '// 성공시 Login.php로 이동

?>
