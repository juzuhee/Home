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
        .want_con1{
            top:40%;
            left:40%;
            width: 100%;
            color:black;
        }
        .want_con2{
            top:50%;
            left:80%;
            width: 100%;
            background: #FFFDF5;
        }
        .text{
            position: absolute;
            top: 20%;
            left: 37.5%;
            padding: 0;
            margin: 0;

            font-weight: 700;
            font-size: 40px;
            line-height: 48px;
            align-items: center;
            text-align: center;
        }
        .input_box1{
            position: absolute;
            width: 60%;
            height: 7%;
            top: 15%;
            left: 29%;
         
            resize: none;
            background: #FFFDF5;

            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 30px;

            color: black;

        }
        .input_box2{
            position: absolute;
            width: 60%;
            height: 62%;
            top: 25%;
            left: 29%;

            resize: none;
            background: #FFFDF5;
        }
        .push{
            position: absolute;
            top: 89%;
            left: 82%;
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
    include("../Board/board_nav.php");
    ?>
    <div class = "want_con1">
        <form>
            <input class = "input_box1" type = "text" name = "want" placeholder="제목입력">   
    </form>
    </div>
            <div class = "want_con2">
            <textarea class = "input_box2" name = "want"></textarea>

        <button class = "push">보내기</button>
    </div>
    
</body>
</html>


