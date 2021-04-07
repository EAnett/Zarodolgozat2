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
        <link href="profil.css" rel="stylesheet">
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
                    <a class="navbar-brand" href="minijatek.php"><span class="glyphicon glyphicon-bishop" target="_blank"></span>Mini Játék</a>
                </div>
                <div class="navbar-header">
                    <a class="navbar-brand" href="jatekleiras.php"><span class="glyphicon glyphicon-pawn" target="_blank"></span>Játék leírás</a>
                </div>
                <div class="navbar-header">
                    <a class="navbar-brand" href="nyeremenyek.php"><span class="glyphicon glyphicon-queen" target="_blank"></span>Nyeremények</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../fooldal/fooldal.php"><span class="glyphicon glyphicon-hand-left" ></span> Vissza</a>
                    </li>
                    <li>
                        <a href="../Connect-sign-out-in/kijelentkezes.php"><span class="glyphicon glyphicon-circle-arrow-right" target="_blank"></span> Kijelentkezés</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div>
            <div class="keret">
                <div class="doboz">
                    <div class="nev">
                        <h1>Profil</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="side">
                      <h5>Fénykép:</h5>
                      <div >
                        <div class="card" style="width:200px;">
                            <img class="responsive" style="width:190px;" src="../pictures/sajat_hajo.jpg" >
                        </div>
                      </div>
                      <h1><?php echo $_SESSION['Felhasznalo_nev']; ?></h1><br>
                    </div>
                <div class="main">
                <h2>Felhasználói adatok:</h2>
                <div class="fakeimg" style="height:200px;">
                    <form method="POST">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Vezeték név</th>
                                <th>Kereszt név</th>
                                <th>Születési dátum</th>
                                <th>Neme</th>
                                <th>Email</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                        $Felhasznalo_nev=mysqli_real_escape_string($conn, $_SESSION['Felhasznalo_nev']);
                        $result = $conn->query("SELECT `Firstname`, `Lastname`, `Szuletesi_datum`, `nem`, `email` FROM `regisztraciosadatok` WHERE Felhasznalo_nev = '".$Felhasznalo_nev."'");
                        while ($row = $result->fetch_assoc()) {
                            $tartalom = '</ul>';
                                echo '<tr>'
                                    .'<td>'.$row['Firstname'].'</td>'
                                    .'<td>'.$row['Lastname'].'</td>'
                                    .'<td>'.$row['Szuletesi_datum'].'</td>'
                                    .'<td>'.$row['nem'].'</td>'
                                    .'<td>'.$row['email'].'</td>'
                                .'</tr>';
                        }
                        ?>
                        </tbody>
                    </table>
                    </form>
                    </div>
                    <br/>
                    <h2>Bejelentkezési adatok:</h2>
                    <div class="fakeimg" style="height:200px;">
                        <form method="POST">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Felhasználó név</th>
                                        <th>Jelszó</th>
                                        <th>Regisztráció dátuma</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php
                                $Felhasznalo_nev=mysqli_real_escape_string($conn, $_SESSION['Felhasznalo_nev']);
                                $result = $conn->query("SELECT `Felhasznalo_nev`, `Jelszo`, `Regisztracio_datuma`  FROM `regisztraciosadatok` WHERE Felhasznalo_nev = '".$Felhasznalo_nev."'");
                                while ($row = $result->fetch_assoc()) {
                                    $tartalom = '</ul>';
                                        echo '<tr>'
                                            .'<td>'.$row['Felhasznalo_nev'].'</td>'
                                            .'<td>'.$row['Jelszo'].'</td>'
                                            .'<td>'.$row['Regisztracio_datuma'].'</td>'
                                        .'</tr>';
                                }
                                ?>
                                </tbody>
                            </table>
                          </form>
                    </div>
                </div>
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
    </body>
</html>
