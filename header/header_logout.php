<!DOCTYPE html>
<html>
<head>
    <style>
        * {
            padding: 0; margin: 0;
        }
        .container{
            width: 1440px;
            height: 1804px;
            margin:0 auto;
            background-color: #FFFDF5;
            font-family: inter;
        }

        ul {
            list-style-type: none;
            }

        a { 
            display: inline; 
            text-decoration: none; 
        }

        header{
            width: 100%; 
            height: 118px;
        }
        #container_1{
            width: 100%; 
            height: 1681px;
        }
        footer{
            width: 100%; 
            height: 203px;
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
            <li>오늘의 운세</li>
        </ul>
    </div>

    <div id="top_menu">
        <ul>
            <li>로그아웃</li>
            <li>Q&A</li>
        </ul>
    </div>   
</div>
<nav id = "menu_bar">

        <ul>
            <li><a href="#">오늘의 운세</a></li>
            <li><a href="#">띠운세</a></li>
            <li><a href="#">별자리운세</a></li>
            <li><a href="#">듣고 싶은 말</a></li>
            <li><a href="#">포춘쿠키</a></li>
            <li><a href="#">행운의 아이템</a></li>  
        </ul>
    
</nav>
<div>

</div>

</body>