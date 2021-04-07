<?php
session_start();
require "Connect-sign-out-in/ConnectZarodolgozat.php";
header("Content-Type:text/html; charset=utf-8");

if(isset($_POST['submit'])) {
    $errors=array();
    $true=true;
    if(empty($_POST['Felhasznalo_nev'])) {
        $true=false;
        array_push($errors, "A felhasználó név üres");
    }
    if(empty($_POST['Jelszo'])) {
        $true=false;
        array_push($errors, "A jelszó üres");
    }
    if ($true) {
        $Felhasznalo_nev = mysqli_real_escape_string($conn, $_POST['Felhasznalo_nev']);
        $Jelszo = mysqli_real_escape_string($conn, $_POST['Jelszo']);
        
        $sql = "SELECT * FROM `regisztraciosadatok` WHERE Felhasznalo_nev='$Felhasznalo_nev' AND Jelszo='$Jelszo'";
        $query = $conn->query($sql);
        if(mysqli_num_rows($query)== 1) {
            session_start();
            $_SESSION['Felhasznalo_nev'] = $Felhasznalo_nev;
            header('location: fooldal/fooldal.php');
        }
        else {
            array_push($errors, "A felhasználó név és a jelszó párosítása nem volt megfelelő!");
        }
    }    
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="hu-HU">
    <head>
        <title>Battleship</title>
        <meta charset="UTF-8">
        <!--reszponzivitás-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--navbarhoz:-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
        
        <!--külső css-re hivatkozás-->
        <link href="bejelentkezooldal.css" rel="stylesheet">
        <link href="modal.css" rel="stylesheet">
        <link href="menu & lablec css-ek/lablecstyle.css" rel="stylesheet">
        <link href="menu & lablec css-ek/navbarstyle.css" rel="stylesheet">
        
    </head>
    <body>
        <nav class="navbar navbar-inverse bg-dark navbar-dark" class="header" id="myHeader">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">BattleShip</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    
                    <li>
                        <a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span class="glyphicon glyphicon-log-in " target="_blank"></span> Bejelentkezés</a>
                    </li>
                    <li>
                        <a href="Connect-sign-out-in/regisztracio.php"><span class="glyphicon glyphicon-circle-arrow-right" target="_blank"></span> Regisztráció</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div id="id01" class="modal">
            <form onsubmit="return main()" name="hibauzenet" class="modal-content animate" action="#id01" method="POST">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <h1>Bejelentkezés</h1>
                <div class="container_a">
                    <label for="Felhasznalo_nev"><b>Felhasználónév</b></label>
                    <input type="text" placeholder="Add meg a felhasználó neved!" name="Felhasznalo_nev" required>
                    <div style="color:red; text-align: center">
                    <?php
                    if(!empty($errors)) {
                        foreach ($errors as $key) {
                            echo $key."<br/>";
                        }
                    }
                    ?>
                    </div>

                    <label for="Jelszo"><b>Jelszó</b></label>
                    <input type="password" placeholder="Add meg a jelszavad!" name="Jelszo" required>
                    <div style="color:red; text-align: center">
                    <?php
                    if(!empty($errors)) {
                        foreach ($errors as $key) {
                            echo $key."<br/>";
                        }
                    }
                    ?>
                    </div>
                <button type="submit" id="Jelszo" placeholder="Hibás felhasználónév vagy jelszó!" name="submit">Bejelentkezés</button>
                <label>
                    <input type="checkbox" id="remember" checked="checked" name="remember"> Emlékezz rám
                </label>
                </div>
                
                <footer>
                <div class="container_b">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Mégse</button>
                </div>
                </footer>
            </form>
        </div>
        
        <div class="container">
            <h1 style="font-size:70px;">Üdvözöllek a Batleship oldalon!</h1>
            <br/>
            <img src="pictures/ship-3619166_960_720.png" alt="Kalózhajó" title="ship-3619166_960_720.png" width="300" height="300" class="center" >
            <h2 style="font-size: 50px;">Üdvözöllek Kapitányom!</h2>
            <h2 style="font-size: 30px;">Gyere és éld át a hajók elsüllyesztésével járó élményt!</h2>
            <br/>
            <div class="container2">
                <p>
                    Kedves Játszani vágyó! <br/>
                    Ez az oldal a BattleShip <br/>vagyis Torpedó játékkal foglalkozik, <br/>
                    Ahhoz hogy a játékot hasznáni tudja, <br/> szükséges regisztrálnia.<br/>
                    A regisztráció elkészültével, <br/> már csak be kell jelentkeznie.<br/>
                    Bejelentkezés után megjelennek a menük <br/>és elkezdheti a játékot!<br/>
                <h2>Sok szerencsét, és sok sikert!<br/> A Battleship csapat!</h2></br>
                </p>
            </div>
        </div>
        <footer>
            <div class="footer">
                <span>© 2021 Minden jog fenttartva! Battleship Webfejlesztés!</span>
                <a href="lablec_1/adatvedelem.php"><span target="_blank"></span> Adatvédelem</a>   
                <a href="lablec_1/nevjegy.php"><span target="_blank"></span> Névjegy</a>
                <a href="lablec_1/szerzoijogiinformacio.php"><span target="_blank"></span> Szerzői Jogi Információ</a><br/>
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
        
        <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        };
        </script>
    </body>
</html>
