<html>
    <head>
        <title>Галерея</title>
        <meta charset="utf-8">
        <link href="style/style.css" rel="stylesheet">
        <style>
            body { 
                background: url(images/1fon.jpg); 
            background-size: 100%;
            }
          </style>
    </head>

    <body>
        <link  rel="stylesheet" href="второй файл.css">

        <div class="silki">
                    <div class="okna"><p align="center"><a href="index.php"><font size="5" color="white" face="Arial">главная</font></a><br></p></div>
                    <div class="okna"><p align="center"><a href="infa.php"><font size="5" color="white" face="Arial">о себе</font></a><br></p></div>
                    <div class="okna"><p align="center"><a href="blog.php"><font size="5" color="white" face="Arial">блог</font></a><br></p></div>
                    <div class="okna"><p align="center"><a href="fotograf.php"><font size="5" color="white" face="Arial">галерея</font></a><br></p></div>
                    <div class="okna"><p align="center"><a href="game.php"><font size="5" color="white" face="Arial">игра</font></a><br></p></div>
                    <div class="okna"><p align="center"><a href="zareg.php"><font size="5" color="white" face="Arial">регистрация</font></a><br></p></div>
                    <div class="okna"><p align="center"><a href="file.php"><font size="5" color="white" face="Arial">загрузить фото</font></a><br></p></div>
            </div>  

            <div class="wrapper">
            <div id="gallery">
                <div class="gallery-line">
                    <div class="image-box">
                        <img class="min-image" id="1" src="images/F1.jpg">
                    </div>

                    <div class="image-box">
                        <img class="min-image" id="2" src="images/F2.jpg">
                    </div>

                    <div class="image-box">
                        <img class="min-image" id="3" src="images/F3.jpg">
                    </div>

                    <div class="image-box">
                        <img class="min-image" id="4" src="images/F4.jpg">
                    </div>

                    <div class="image-box">
                        <img class="min-image" id="5" src="images/F5.jpg">
                    </div>

                </div>
                <div id="big-image-box"></div>

                <div id="buttons">

                    <div id="knop">
                        <div  onclick="prev()" id="prev_pic">
                            <img class="left" src="images/STRn.png">
                        </div> 
                        
                        
                    
                        <div onclick="next()" id="next_pic">
                            <img  class="right" src="images/STRw.png">
                        </div>
                    </div>

                </div>
                <div class="gallery-line">
                    <div class="image-box">
                        <img class="min-image" id="6" src="images/F6.png">
                    </div>

                    <div class="image-box">
                        <img class="min-image" id="7" src="images/F7.jpg">
                    </div>

                    <div class="image-box">
                        <img class="min-image" id="8" src="images/F8.jpg">
                    </div>

                    <div class="image-box">
                        <img class="min-image" id="9" src="images/F9.jpg">
                    </div>

                    <div class="image-box">
                        <img class="min-image" id="10" src="images/F10.jpg">
                    </div>
                    
                </div>
            </div>
        </div>        
        <script src="script/script.js"></script>
    </body>
</html>