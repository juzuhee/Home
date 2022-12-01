<!DOCTYPE html>
<html>
    <head>
        <title>로그인</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href="main.css">
        <style>
            footer{
                position: absolute;
                top:100%;

                background: #442C2C;
                color:white;
            }
            .footer_text1{
                position: absolute;
                width: 1265px;
                height: 32px;
                top:7%;
                margin-left: 11%;

                font-family: 'Inter';
                font-style: normal;
                font-weight: 400;
                font-size: 20px;
                line-height: 30px;
                letter-spacing: 0.05em;
                
                color: #FAFAFA;
            }

            .footer_text2{
                position: absolute;
                width: 1351px;
                height: 120px;
                top:13%;
                margin-left: 11%;

                font-family: 'Inter';
                font-style: normal;
                font-weight: 500;
                font-size: 16px;
                line-height: 20px;
                letter-spacing: 0.05em;
                
                color: #FAFAFA;
            }
        </style>
    </head>

    <body>
    <?php
    include("../header/header_login.php");
    ?>
      <content>
        <div class="main_box1"
            onClick="location.href='../menu/cookie.php'">
            <img src="../../../images/main/yellow.jpg" alt="My Image" width="1200" height="450">
        </div>
            <div class="main_box2"
            onClick="location.href='../menu/today_lucky.php'">
        <img src="../../../images/main/green.jpg" alt="My Image" width="420" height="450">
        </div>
        <div class="main_box3"
            onClick="location.href='../menu/hear.php'">
            <img src="../../../images/main/blue.png"alt="My Image" width="1050" height="290">
        </div>
        <div class="main_box4"
        onClick="location.href='../menu/lucky_item.php'">
            <img src="../../../images/main/pink.png" alt="My Image" width="570" height="290">
        </div>
      </content>
      <footer>
        <div class="footer_text1">
            주소 :  08221 서울시 구로구 경인로 445 ([구]고척동 62-160) 동양미래대학교
        </div>
        <div class="footer_text2">
            <br>출처 : https://kor.pngtree.com/freepng/zodiac-cartoon-hand-will-twelve-zodiac-mouse-cattle_3784078.html,https://kor.pngtree.com/freepng/12-constellations-
            <br>cute-elements-set_4061735.html,https://kor.pngtree.com/freepng/mbe-style-cartoon-weather-icon-elements-collection_3699707.html,https://kor.pngtree.com/freepng/
            <br>cartoon-mbe-education-icon-, https://kor.pngtree.com/freepng/fortune-cookies-cookie-chinese-traditional_8726946.htmlhttps://kor.pngtree.com/freepng/fortune-
            cookies-cookie-chinese-traditional_8726946.htmlcollection_5464415.html
        </div>    
      </footer>
    </body>
</html>