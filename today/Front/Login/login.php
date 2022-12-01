<!DOCTYPE html>
<html>
    <head>
        <title>로그인</title>
        <meta charset="utf-8">
    <style>
    body{
    background: #FFFDF5;
        }
    h3{
        position: absolute;
        width: 13%;
        height: 9%;

        margin-top: 10%;
        margin-left: 46%;
      
        font-family: 'Inter';
        font-style: normal;
        font-weight: 900;
        font-size: 48px;
        color: black;
    }
    
    .text_field1{
        position: absolute;
        width: 27%;
        height: 6%;
        margin-top: 16%;
        margin-left: 37%;

        background: #FFFDF5;
        border:none;
        border-bottom: 1px solid #000000;

        font-family: 'Inter';
        font-style: normal;
        font-weight: 300;
        font-size: 25px;
        color: #727272;

    }
    .text_field2{
        position: absolute;
        width: 27%;
        height: 6%;
        margin-top: 20.5%;
        margin-left: 37%;

        background: #FFFDF5;
        border:none;
        border-bottom: 1px solid #000000;

        font-family: 'Inter';
        font-style: normal;
        font-weight: 300;
        font-size: 25px;
        color: #727272;
    }
    .submit_btn{
        position: absolute;
        width: 23%;
        height: 7.5%;
        margin-top: 26%;
        margin-left: 39%;
    
        background: black;

        font-family: 'Inter';
        font-style: normal;
        font-weight: 800;
        font-size: 24px;
        color: white;
    }

    </style>
    </head>
    <body>
    <?php
    include("../header/top_header.php");
    ?>
    <h3>LOGIN</h3>
            <input type="text" name="email" class="text_field1" placeholder="  ID"></br>
            <input type="text" name="password" class="text_field2" placeholder="  PASSWORD"></br>
            <input type="submit" value="로그인" class="submit_btn"  onClick="location.href='../header/header_logout.php'">
    </body>
</html>