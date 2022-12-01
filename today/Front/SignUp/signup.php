<!DOCTYPE html>
<html>
    <head>
        <title>로그인</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href="signup.css">
    </head>
    <body>
    <?php
    include("../header/top_header.php");
    ?>
    <h3>회원가입<br><br></h3>
    
    <form action="insert.php" method="post">

    <label for="id" class="text_id">아이디</label>
    <input type="text" name="id" id="id" class="enter_id"><br />

    <label for="pw" class="text_pw">비밀번호</label>
    <input type="password" name="pw" id="pw" class="enter_pw"><br />
   
    <label for="pwc" class="text_pw_check">비밀번호 확인</label> <!-- front -->
    <input type="password" name="pwc" id="pwc" class="enter_pw_check"><br />
   
    <label for="username"  class="text_name">이름</label>
    <input type="text" name="name" id="username" class="enter_name"><br />

    <label for="w" class="text_sex">성별</label>
    
    <div class="check_box_w">
        <input type="radio" value="2" name="sex" id="w" style="zoom:1.3">
        <label for="w">&nbsp여성</label>
    </div> 
    <div class="check_box_m">
        <input type="radio" value="1" name="sex" id="m" style="zoom:1.3">
        <label for="m">&nbsp남성</label>
    </div> 
 
    <label for="birth" class="text_birth">생년월일</label>
    <input type="date" name="birth" id="birth" class="check_birth"><br />

    <div class="agree">   
        <input type="checkbox" style="zoom:2.0" value="1" name="agree" id="a" class="agree_sharpe">
        <label for="a">&nbsp&nbsp 이용약관 및 개인정보수집 및 이용, 정보 수신에 동의합니다.</label><br />
    </div>
    
    <input type="submit" value="회원가입" class="submit_signup"></div>
</form>