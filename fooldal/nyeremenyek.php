<?php
session_start();
require_once '../Connect-sign-out-in/ConnectZarodolgozat.php'; 
?>
<!DOCTAYPE html>
<html lang="hu-HU">
    <head>
        <title>BattleShip</title>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--navbarhoz:-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        
        <link href="fooldal.css" rel="stylesheet">
        <link href="../menu & lablec css-ek/navbarstyle.css" rel="stylesheet">
        <link href="../menu & lablec css-ek/lablecstyle.css" rel="stylesheet">
        <link href="jatek_oldal_start.css" rel="stylesheet">
    </head>
    
    <body>
        <nav class="navbar navbar-inverse bg-dark navbar-dark" class="header" id="myHeader">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home" target="_blank"></span>BattleShip</a>
                </div>
                <div class="navbar-header">
                    <a class="navbar-brand" href="minijatek.php"><span class="glyphicon glyphicon-bishop" target="_blank"></span>Mini Játék</a>
                </div>
                <div class="navbar-header">
                    <a class="navbar-brand" href="jatekleiras.php"><span class="glyphicon glyphicon-pawn" target="_blank"></span>Játék leírás</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="fooldal.php"><span class="glyphicon glyphicon-hand-left" ></span> Vissza</a>
                    </li>
                    <li>
                        <a href="../Connect-sign-out-in/kijelentkezes.php"><span class="glyphicon glyphicon-circle-arrow-right" target="_blank"></span> Kijelentkezés</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div>
            <h1 style="font-size:70px">
                Kedves<br/>
                    <?php 
                    echo $_SESSION['Felhasznalo_nev']; 
                    ?> !
            </h1>
            <div class="main">
                <h2 style="font-size:60px">
                    Az oldal<br/> jelenleg nem üzemel!<br/>
                    Kérlek<br/> látogass vissza<br/> később!<br/>
                    Köszönettel<br/> az oldal üzemeltetője!
                </h2>
            </div>
        </div>
        <footer>
            <div class="footer">
                <span>© 2021 Minden jog fenttartva! Battleship Webfejlesztés!</span>
                <a href="../lablec/adatvedelem.php"><span target="_blank"></span> Adatvédelem</a>   
                <a href="../lablec/nevjegy.php"><span target="_blank"></span> Névjegy</a>
                <a href="../lablec/szerzoijogiinformacio.php"><span target="_blank"></span> Szerzői Jogi Információ</a><br/>
                <a href="#"><span target="_blank"></span>Az oldal tetejére</a>
            </div>
        </footer>
        
        <script>
            window.onscroll = function() {
                myFunction();
            };

            var header = document.getElementById("myHeader");
            var sticky = header.offsetTop;

            function myFunction() {
              if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
              } else {
                header.classList.remove("sticky");
              }
            }
        </script>
        <?php
        
        ?>
    </body>
</html>
