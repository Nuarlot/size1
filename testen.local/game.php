<html>

    <head>
        <title>New page</title>

        <style>
            #block{
                width: 100px;
                height: 100px;
                background-color: green;
            }

            #ram{
                border: 2px solid white;
                background: white;
                width: 1450px;
                height: 800px;
            }

            #stena{
                width: 100px;
                height: 100px;
                background-image: url(stena.jpg);
                transform: translate(200px, -700px);
            }

            body { 
                background: url(images/1fon.jpg); 
            background-size: 100%;
            }
        </style>

    </head>

    <body>
    <script src="script.js"></script>
        <link  rel="stylesheet" href="второй файл.css">
        

        <div class="silki">
                    <div class="okna"><p align="center"><a href="index.php"><font size="5" color="white" face="Arial">главная</font></a><br></p></div>
                    <div class="okna"><p align="center"><a href="infa.php"><font size="5" color="white" face="Arial">о себе</font></a><br></p></div>
                    <div class="okna"><p align="center"><a href="blog.php"><font size="5" color="white" face="Arial">блог</font></a><br></p></div>
                    <div class="okna"><p align="center"><a href="fotograf.php"><font size="5" color="white" face="Arial">галерея</font></a><br></p></div>
                    <div class="okna"><p align="center"><a href="game.php"><font size="5" color="white" face="Arial">игра</font></a><br></p></div>
                    <div class="okna"><p align="center"><a href="zareg.php"><font size="5" color="white" face="Arial">регистрация</font></a><br></p></div>
        </div>

    <div id="ram">
        <div id="block"></div>
    </div>

    <div id="stena"></div>

<script>
    if (localStorage.getItem("I") !== null) {
        var I = Number(localStorage.getItem("I"))
    } 
    else {
        var I = 0;
        localStorage.setItem("I", 0)
    
    }


    if (localStorage.getItem("Y") !== null) {
        var Y = Number(localStorage.getItem("Y"))
    } 
    else {
        var Y = 0;
        localStorage.setItem("Y", 0)
    }

    var amount = 100;
    
    document.getElementById("block").style.transform = "translate(" + I + "px, " + I + "px)";
    document.addEventListener('keydown', function (event){ 
        switch (event.code){



            case "ArrowUp":
                if (I !== 200 || Y !== 200) {
                    Y -= amount;
                }
                localStorage.setItem("Y", Y)
                document.getElementById("block").style.transform = "translate(" + I + "px, " + Y + "px)";
                break;

            case "ArrowDown":
                if (I !== 200 || Y !== 0) {
                    Y += amount;
                }
                localStorage.setItem("Y", Y)
                document.getElementById("block").style.transform = "translate(" + I + "px, " + Y + "px)";
                break;

            case "ArrowLeft":
                if (I !== 300 || Y !== 100) {
                    I -= amount;
                }
                localStorage.setItem("I", I)
                document.getElementById("block").style.transform = "translate(" + I + "px, " + Y + "px)";
                break;

            case "ArrowRight":
                if (I !== 100 || Y !== 100) {
                    I += amount;
                }
                localStorage.setItem("I", I)
                document.getElementById("block").style.transform = "translate(" + I + "px, " + Y + "px)";
                break;
        }

    });

</script>
    </body>
</html>