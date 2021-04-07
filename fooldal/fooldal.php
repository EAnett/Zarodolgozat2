<?php
session_start();
header ("../Connect-sign-out-in/ConnectZarodolgozat.php")
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
    </head>
    
    <body>
        <nav class="navbar navbar-inverse bg-dark navbar-dark" class="header" id="myHeader">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home" target="_blank"></span>BattleShip</a>
                </div>
                <div class="navbar-header">
                    <a class="navbar-brand" href="jatek_oldal_start.php"><span class="glyphicon glyphicon-knight" target="_blank"></span>Játékok</a>
                </div>
                <div class="navbar-header">
                    <a class="navbar-brand disabled" href="minijatek.php"><span class="glyphicon glyphicon-bishop disabled" target="_blank"></span>Mini Játék</a>
                </div>
                <div class="navbar-header">
                    <a class="navbar-brand" href="jatekleiras.php"><span class="glyphicon glyphicon-pawn" target="_blank"></span>Játék leírás</a>
                </div>
                <div class="navbar-header">
                    <a class="navbar-brand" href="nyeremenyek.php"><span class="glyphicon glyphicon-queen" target="_blank"></span>Nyeremények</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="profil.php"><span class="glyphicon glyphicon-user " target="_blank"></span> Profil</a>
                    </li>
                    <li>
                        <a href="../Connect-sign-out-in/kijelentkezes.php"><span class="glyphicon glyphicon-circle-arrow-right" target="_blank"></span> Kijelentkezés</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div>
            <h1 style="font-size:70px">
                Üdvözöllek az oldalon <br/>
                    <?php
                    echo $_SESSION['Felhasznalo_nev']; 
                    ?>
                !
            </h1>
        </div>
        
        <section>
            <div class="container1">
                
                <h2>Játék menet:</h2>
                <p>
                    Kedves Játszani vágyó! <br/>
                    <br/>
                    A játék menete a következő:<br/>
                    <br/>
                    Lépj be az Start gombbal a játékok főlapra,<br/>
                    vagy válaszd ki, fenn, a menüsorban a játékok lapfület.<br/>
                    Ezután a indítsd el a játékot <br/>a kép alatt levő start gombbal.<br/>
                </p>  
                <a class="style" id="style" href="../fooldal/jatek_oldal_start.php">Start</a>
            </div>
            
            <article>
            <div class="vers">
            <p>
                <i><b>
                    <p style="font-size: 30px">Kalózok népe<p><br/>
                    <br/>
                    Bátor harcosok, álljatok mellém,<br/>
                    Ma este hajózzunk el a hűség tengerén!<br/>
                    Induljunk harcba, hív a végtelen,<br/>
                    A kapitány már ott áll a fedélzeten!<br/>
                    <br/>
                    Falábával kopogva lép elő a ködből,<br/>
                    Kiált is egy nagyot egyből:<br/>
                    Fel a horgonyt, lusta banda!<br/>
                    Itt az idő, ébredj falka!<br/>
                    <br/>
                    Fel a zászlót, csattogjanak a kardok,<br/>
                    Miénk lesz a kincs, de most várnak a harcok!<br/>
                    Előre, barbárok, a tenger urai mi vagyunk!<br/>
                    Hagy lássa a világ, hogy mi győzni fogunk!<br/>
                    <br/>
                    Nem állít meg se tisztességes hajós,<br/>
                    Se egy másik barbár kalóz!<br/>
                    Előre, Kalózok, vár a kincs,<br/>
                    A fedélzeten semmilyen kifogás nincs!<br/>
                    <br/>
                    Zengjen hát a Kalózok bátor éneke!<br/>
                    Zengjen az egész tenger feneke!<br/>
                    Ahoj kapitány, mi vagyunk a tenger népe!<br/>
                    Előre, barbárok, vár a tenger éje!<br/>
                    <br/>
                    Megnyerjük a csatát, mi leszünk a hősök,<br/>
                    A Kalózok lelke bátor és örök!<br/>
                    Előre, harcosok, a hűség tengerén!<br/>
                    Mi nyerjük majd a csatát úgyis a végén!<br/>
                    <br/>        
                    Blendovszki Fanni<br/>
                    <br/>
                    Forrás: www.poet.hu<br/>
                </b></i>
            </p>
            </div>
            </article>
            <div class="container1">
                
                <h2>Játék info:</h2>
                <p>
                    Kedves Játszani vágyó! <br/>
                    <br/>
                    Ha szeretnéd megismerni a játékot:<br/>
                    <br/>
                    Lépj be az Info gombbal a játék leírás lapra,<br/>
                    vagy válaszd ki, a menü sorában a játék leírás lapfület.<br/>
                    Ezután már el is kezdheted a játszmát. <br/>
                </p> 
                <a class="style" id="style" href="../fooldal/jatek_oldal_start.php">Info</a>
            </div>
        </section>
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
