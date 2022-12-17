<?php
require "conn.php"; // db 연결 주소 php파일 연결

$id = $_POST['id']; // 회원가입 구현 : post로 받기  
$pw = $_POST['pw']; 
$name = $_POST['name'];
$sex = $_POST['sex'];
$birth = $_POST['birth'];
$agree = $_POST['agree'];

$sql  = "INSERT INTO sujin(Id, pw, name, sex, birth, agree) VALUES ('$id', '$pw', '$name', '$sex', '$birth', '$agree')"; // sql문으로 db 가져오기
$result = mysqli_query($conn, $sql);

if($result === false){ 
    echo mysqli_error($conn); // $result 가 false일 경우 error를 나타냄
}else{
    echo "<script>location.href='../../Front/SignUp/signup_process.php'</script>"; // true일 경우 signup_process.php로 넘어 감
 }
?>