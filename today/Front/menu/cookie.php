<!DOCTYPE html>
<html>
    <head>
        <title>로그인</title>
        <meta charset="utf-8">
        <style>
            @charset "utf-8";
            body{
                background: #FFFDF5;
            }
            .box1 {
                position: absolute;
                width: 70%;
                height: 60%;
                left: 16%;
                top: 17%;

                background: #BDBAB3;
                border-radius: 20px; 
            }

            .box2 {
                position: absolute;
                width: 95%;
                height: 90%;
                left: 2.5%;
                top: 5%;

                background: #DEDAD3;
                border-radius: 20px;
            }

            .cookie_text{
                position: absolute;
                left: 19%;
                top: 80%;

                font-family: 'Inter';
                font-style: normal;
                font-weight: 400;
                font-size: 130px;
                line-height: 133px;
                text-align: center;
                -webkit-text-stroke: 5px #AB6700;
                color:white;
             }
            .test {  
                position: absolute;      
                width: 6.5%;
                height: 0.5%;
                left: 72%;
                top: 12.5%;
                background-color: black;
            }

        </style>
    </head>

    <body>
    <?php
    include("../header/header_login.php");
    ?>
    <div class="test"></div>
        <div class="box1">
            <div class="box2">

                    <img src="../../../images/cookie/cookie.png" alt="FORTUNECOOKIE" 
                    style="float: right; margin-right:60%;  margin-top: -5%; width:500px; height:400px;"
                    onClick="location.href='../menu/cookie_open.php'">
               
                    <img src="../../../images/cookie/cookie.png" alt="FORTUNECOOKIE"
                    style="float: right; margin-right:30%; margin-top: -36%; width:500px; height:400px; "
                    onClick="location.href='../menu/cookie_open.php'">
                
                    <img src="../../../images/cookie/cookie.png" alt="FORTUNECOOKIE"
                    style="float: right; margin-right:-3%; margin-top: -36%; width:500px; height:400px; "
                    onClick="location.href='../menu/cookie_open.php'">
  
                    <img src="../../../images/cookie/cookie.png" alt="FORTUNECOOKIE" 
                    style="float: right; margin-right:60%;  margin-top: -15%; width:500px; height:400px;"
                    onClick="location.href='../menu/cookie_open.php'">
              
                    <img src="../../../images/cookie/cookie.png" alt="FORTUNECOOKIE" 
                    style="float: right; margin-right:30%;  margin-top: -36%; width:500px; height:400px;"
                    onClick="location.href='../menu/cookie_open.php'">
   
                    <img src="../../../images/cookie/cookie.png" alt="FORTUNECOOKIE" 
                    style="float: right; margin-right:-3%;  margin-top: -36%; width:500px; height:400px;"
                    onClick="location.href='../menu/cookie_open.php'">
               
            </div>
        </div>

        <div class="cookie_text"><strong>쿠키를 골라주세요</strong></div>
      
      </content>
    </body>
</html>