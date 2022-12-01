<!DOCTYPE html>
<html>
    <head>
        <title>로그인</title>
        <meta charset="utf-8">
    <style>
    @charset "utf-8";

        .box1 {
            position: absolute;
            width: 19%;
            height: 94.5%;
            background: #CFCCC9;
        }

        .menu_1 {
            position: absolute;
            width: 70%;
            height: 5%;
            left: 8%;
            top: 13%;
            
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-size: 20px;
            line-height: 22px;

            color: black;
        }

        .menu_2 > a {
            position: absolute;
            width: 100%;
            height: 3%;
            left: 8%;
            top: 20%;

            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 22px;
    
            color: #000000;
        }

        .menu_3 > a {
            position: absolute;
            width: 70%;
            height: 3%;
            left: 8%;
            top: 27%;

            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-size: 20px;
            line-height: 22px;
    
            color: #000000;
        }

        .menu_4 > a {
            
            position: absolute;
            width: 70%;
            height: 3%;
            left: 8%;
            top: 34%;

            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 22px;
     
            color: #000000;
        }
    </style>
    </head>

    <body>
        <?php
        include("../header/top_header.php");
        ?>
        <div class="box1">
            <div class="menu_1">Q&A</div>
            <div class="menu_2"><a href="../Want/want.php">요구사항 및 개선사항</a></div>
            <div class="menu_3"><a href="../Employ/employ.php">채용문의</a></div>
            <div class="menu_4"><a href="../Board/board_sent.php"><b>게시판 문의</b></a></div>
        </div>
    </body>
</html>