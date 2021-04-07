<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>Batleship</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--navbarhoz:-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../jatek/batleship.css">
        
        <!--Betűtípusok google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Bangers&family=DotGothic16&family=Lobster&display=swap" rel="stylesheet">
        
        <script src="../jatek/batleship.js" charset="utf-8"></script>
    </head>
    
    <body>
        <nav class="navbar navbar-inverse bg-dark navbar-dark" class="header" id="myHeader">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">BattleShip</a>
                </div>
                <div class="navbar-header">
                    <a class="navbar-brand" href="../fooldal/fooldal.php"><span class="glyphicon glyphicon-home" ></span> Főoldalra</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../fooldal/jatek_oldal_start.php"><span class="glyphicon glyphicon-hand-left" ></span> Vissza</a>
                    </li>
                    <li>
                        <a href="../index.php"><span class="glyphicon glyphicon-circle-arrow-right" target="_blank"></span> Kijelentkezés</a>
                    </li>
                </ul>
            </div>
        </nav>
        <h1>Batleship</h1>
        <!-- gridek létrehozása a felhasználónak és a gépnek ahol elhelyezzük a hajókat-->
        <div class="container">
            <div class="hajoknak-tabla tabla-felhasznalo"></div>
            <div class="hajoknak-tabla tabla-ellenfel"></div>
        </div>
        <!-- hidden-info ami a rejtett info neve ezen belül megadtam egy start (elindítja a játékot)
          és egy elforgatás gombot (hajóelforgatás)whosego->kiaz aki következik, 
          info-> megmondja mikor milyen hajó pusztult el -->
        <div class="container info-sav">
            <div class="gomb-design" id="beallitasi-button">
                <button id="forgatas" class="btn forgatas">Elforgatás</button>
                <button id="start" class="btn start">Start</button>
            </div>
            <h3 id="kovetkezo" class="visszajelzes">Vigyázz! Kész! Rajt!</h3>
            <h3 id="info" class="visszajelzes"></h3>
            <h3 id="info" class="visszajelzes"></h3>
            <h3 id="info2" class="visszajelzes2"></h3>
            <h3 id="info3" class="visszajelzes3"></h3>
        </div>
        <!-- saját rács ahol mi vagyunk grid display-->
        <div class="container"> 
            <div class="tabla-hajok">
                <div class="hajo Rombolo-container" draggable="true"><div id="Rombolo-0"></div><div id="Rombolo-1"></div></div>
                <div class="hajo Tengeralattjaro-container" draggable="true"><div id="Tengeralattjaro-0"></div><div id="Tengeralattjaro-1"></div><div id="Tengeralattjaro-2"></div></div>
                <div class="hajo Cirkalo-container" draggable="true"><div id="Cirkalo-0"></div><div id="Cirkalo-1"></div><div id="Cirkalo-2"></div></div>
                <div class="hajo Csatahajo-container" draggable="true"><div id="Csatahajo-0"></div><div id="Csatahajo-1"></div><div id="Csatahajo-2"></div><div id="Csatahajo-3"></div></div>
                <div class="hajo Szallitohajo-container" draggable="true"><div id="Szallitohajo-0"></div><div id="Szallitohajo-1"></div><div id="Szallitohajo-2"></div><div id="Szallitohajo-3"></div><div id="Szallitohajo-4"></div></div>
            </div>
        </div>
    </body>
</html>


