<!DOCTYPE html>
<html>
<head>
    <style>
        * {
            padding: 0; margin: 0;
        }

        ul {
            list-style-type: none;
            }

        a { 
            display: inline; 
            text-decoration: none; 
            color:white;
        }

        header{
            width: 100%; 
            height: 118px;
        }

        #top{
            display : flex; 
            flex-direction: row; 
            justify-content: space-between; 
            width: 100%; height: 49px;   
            background-color: #393939; 
            color: white;
        }

        #top_menu_1{
            padding: 14px 0 15px 28px; 
            display: inline; 
        }

        #top_menu{
            padding: 14px 28px 15px 0
        }

        #top_menu li{
            display: inline; padding-left: 55px;
        }

        #menu_bar{ 
            width: 100%; 
            height: 70px; 
            background-color: #FFFDF5;
        }

        #menu_bar ul{
            display : flex;
            flex-direction: row;
            justify-content: space-between;
        }

        #menu_bar li { 
            font-size:28px; 
            display:inline; 
            padding: 20px;
        }

        #menu_bar li a{
            color:black;
        }

        #menu_bar li a:visited{ 
            border-bottom: 2px solid black;
        }

        #menu1{
            position: relative; 
            margin-top: 60px;
        }
    </style>
</head>
<body>
<div id="top">
    <div id="top_menu_1">
        <ul>
        <li><a href="../main/main.php">오늘의 운세</a></li>
        </ul>
    </div>

    <div id="top_menu">
        <ul>
            <li onClick="location.href='../Login/login.php'">로그인</li>
            <li onClick="location.href='../SignUp/signup.php'">회원가입</li>
            <li onClick="location.href='../Want/want.php'">Q&A</li>
        </ul>
    </div>   
</div>

</body>