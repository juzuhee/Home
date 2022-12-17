<?php
if(isset($_COOKIE["user_id"])){
    $user = $_COOKIE["user_id"];
    echo $user;
}else{
    echo "쿠키 값이 없습니다.";
}
?>​
<?php
//쿠키 생성 구문
$a = setcookie("user_id", "shlee");
$b = setcookie("today_yn","y",time()+60);

echo "쿠키 생성 완료";

//쿠키 삭제 구문
$a = setcookie("user_id", "",time()-3600);
$b = setcookie("today_yn","",time()-3600);
?>