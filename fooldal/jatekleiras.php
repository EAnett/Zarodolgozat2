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
        <link href="jatekleiras.css" rel="stylesheet">
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
                    <a class="navbar-brand" href="minijatek.php" disabled><span class="glyphicon glyphicon-bishop" disabled></span>Mini Játék</a>
                </div>
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-queen" target="_blank"></span>Nyeremények</a>
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
        <div id="containermenet">
            <h1>A játék menete a következő</h1>
            <div class="con1">
                <div id="cont1">
                    <p>Játék elérése:</p>
                    <p>A játék két módon elérhető</p>
                    <p>Az első mód a bejelentkezés után a főoldalról lehetséges a Játék menet ablakból. <br/> Ahonnan a start gombra kattintva érhető el a játék fő oldala</p>
                </div>
                <div class="k1">
                    <img class="responsive" src="../pictures/jatekeleres.jpg" alt="játék elérés"/>
                </div>
            </div>
            <div class="con2">
                <div id="cont2">
                    <p>A játék elérésének másik módja:</p>
                    <p>Fenn a menüsávban válassza ki a játékok menüpontot. <br/> A menüpont átírányíta a játék fő oldalára. <br/> Az oldalon található játék kártyában levő start gombbal tudja elindítani a játékot</p>
                </div>
                <div class="k2">
                    <img class="responsive" src="../pictures/menüsav.jpg" width="361" height="33" alt="menüsáv"/>
                </div>
            </div>   
            <div class="con3">
                <div id="cont3">
                    <p>Az oldalon található játék kártyában levő start gombbal tudja elindítani a játékot</p>
                </div>
                <div class="k3">
                    <img class="responsive" src="../pictures/jatekoldal.jpg" width="381" height="394" alt="játék főoldala"/>
                </div>
            </div>
            <div class="con4">
                <div id="cont4">
                    <p>A játék első lépése hogy fel kell helyezni a felhasználói táblára <br/>a képernyő alján levő hajókat.</p>
                </div>
                <div class="k4">
                    <img class="responsive" src="../pictures/az oldal.jpg" width="474" height="227" alt="oldal képe"/>
                </div>
            </div>
            <div class="con5">
                <div id="cont5">
                    <p>A hajók pozíciója elforgatható. </br>Az elforgatás gombbra kattintva tudjuk elvégezni az elforgatási műveletet.</p>
                </div>
                <div class="k5">
                    <img class="responsive" src="../pictures/vertical.jpg" width="442" height="446" alt="oldal képe"/>
                </div>
            </div>
            <div class="con6">
                <div id="cont6">
                    <p>A játékot a start gomb lenyomása után kezdhetjük el.</p>
                </div>
                <div class="k6">
                    <img class="responsive" src="../pictures/start.jpg" width="443" height="305" alt=startgomb"/>
                </div>
            </div>
            <div class="con7">
                <div id="cont7">
                    <p>A start gomb használata után már kattinthatunk is az ellenfél tábláján.</p>
                </div>
                <div class="k7">
                    <img class="responsive" src="../pictures/lépések.jpg" width="443" height="305" alt="lépések"/>
                </div>
            </div>
            <div class="con8">
                <div id="cont8">
                    <p>Minden hajó elsüllyesztése esetén információt kapunk arról <br/>melyik fél melyik hajót pusztította el.</p>
                </div>
                <div class="k8">
                    <img class="responsive" src="../pictures/informacio.jpg" width="445" height="325" alt="informaáció"/>
                </div>
            </div>
            <div class="con9">
                <div id="cont9">
                    <p>A játék végén win feliratot kapunk ha, <br/>valamelyik fél győzelmet aratott.</p>
                </div>
                <div class="k9">
                    <img class="responsive" src="../pictures/győzelem.jpg" width="452" height="365" alt="win"/>
                </div>
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



