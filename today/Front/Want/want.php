<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>want</title>
    <style>
        body{
            margin: 0;
            padding: 0;
              background-color: #FFFDF5;
        }
        .want_con{
            margin: 0;
            padding: 0;
            width: 100%;
            background: #FFFDF5;
        }
        .text{
            position: absolute;
            top: 20%;
            left: 45%;

            font-weight: 700;
            font-size: 40px;
            line-height: 48px;
            align-items: center;
            text-align: center;
        }
        .input_box{
            position: absolute;
            width: 67%;
            height: 50%;
            top: 28%;
            left: 26%;

            resize: none;
            background: #FFFDF5;
        }
        .push{
            position: absolute;
            top: 81%;
            left: 86%;
            width: 120px;
            height: 48px;

            font-weight: 700;
            font-size: 32px;
            line-height: 39px;
            background-color: #FFFDF5;
        }
    </style>
</head>
<body>
<?php
    include("../Want/want_nav.php");
    ?>
    <div class = "want_con">
        <div class = "text">필요한 정보를 입력해주세요</div>
            <textarea class = "input_box" name = "want"></textarea>
        <button class = "push"  onClick="location.href='../Want/want_process.php'">보내기</button>
    </div>
    
</body>
</html>


