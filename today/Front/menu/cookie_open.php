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
            .cookieopen_box{
                position: absolute;
                width: 70%;
                height: 46%;
                left: 16%;
                top: 50%;
                
                background: white;
                border-radius: 20px; 
                border: 4px solid #A55E0B;
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
        <a href=""><img src="../../../images/cookie/cookieopen.png" alt="FORTUNECOOKIE" 
        style="float: left; margin-left:15%;  margin-top: -4%; width:1300px; height:500px;"></a>
      
        <div class="cookieopen_box">  
        </div>
      
      </content>
    </body>
</html>