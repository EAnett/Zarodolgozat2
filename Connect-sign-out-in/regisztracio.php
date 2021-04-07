<?php
require "ConnectZarodolgozat.php";
header("Content-Type:text/html; charset=utf-8");

if(isset($_POST['submit'])) {
    $errors=array();
    $true = true;
    if(empty($_POST['Felhasznalo_nev'])) {
        $true= false;
        array_push($errors, "A felhasználó név kitöltetlen!");
    }
    if(empty($_POST['Szuletesi_nev'])) {
        $true= false;
        array_push($errors, "A születési név kitöltetlen!");
    }
    if(empty($_POST['Firstname'])) {
        $true= false;
        array_push($errors, "A vezeték név kitöltetlen!");
    }
    if(empty($_POST['Lastname'])) {
        $true= false;
        array_push($errors, "A kereszt név kitöltetlen!");
    }
    if(empty($_POST['gender'])) {
        $true= false;
        array_push($errors, "A nem kitöltetlen!");
    }
    if(empty($_POST['Szuletesi_datum'])) {
        $true= false;
        array_push($errors, "A születési dátum kitöltetlen!");
    }
    if(empty($_POST['email'])) {
        $true= false;
        array_push($errors, "Az email cím kitöltetlen!");
    }
    if(empty($_POST['Jelszo'])) {
        $true= false;
        array_push($errors, "Az jelszó nem megfelelő!");
    }
    if(empty($_POST['repassword'])) {
        $true= false;
        array_push($errors, "A jelszó megerősítése hibás!");
    }
    if(!($_POST['Jelszo']==$_POST['repassword'])) {
        $true=false;
        array_push($errors, "A jelszavak nem egyeznek meg!");
    }
    
    if($true) {
        $Felhasznalo_nev = mysqli_real_escape_string($conn, $_POST["Felhasznalo_nev"]);
        $Szuletesi_nev = mysqli_real_escape_string($conn, $_POST["Szuletesi_nev"]);
        $Firstname = mysqli_real_escape_string($conn, $_POST["Firstname"]);
        $Lastname = mysqli_real_escape_string($conn, $_POST["Lastname"]);
        $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
        $Szuletesi_datum = mysqli_real_escape_string($conn, $_POST["Szuletesi_datum"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $Jelszo = mysqli_real_escape_string($conn, $_POST["Jelszo"]);

        $sql ="INSERT INTO `regisztraciosadatok`(`Felhasznalo_nev`, `Szuletesi_nev`, `Firstname`, `Lastname`, `nem`, `Szuletesi_datum`, `email`, `Jelszo`, `Regisztracio_datuma`) VALUES ('$Felhasznalo_nev', '$Szuletesi_nev', '$Firstname', '$Lastname', '$gender', '$Szuletesi_datum', '$email', '$Jelszo', NOW())";
        $conn->query($sql);
    }
}
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
        <link href="regisztracio.css" rel="stylesheet">
        <link href="../menu & lablec css-ek/navbarstyle.css" rel="stylesheet">
        <link href="../menu & lablec css-ek/lablecstyle.css" rel="stylesheet">
    </head>
    
    <body>
        <nav class="navbar navbar-inverse bg-dark navbar-dark" class="header" id="myHeader">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">BattleShip</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../index.php"><span class="glyphicon glyphicon-hand-left" ></span> Vissza</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div>
        <h1>Regisztráció</h1>
            <div class="container">
                <form action="regisztracio.php" method="POST">
                    <div class="form-group">
                        <label for="Felhasznalo_nev">Felhasználó név:</label>
                        <input type="text" class="form-control" id="Felhasznalo_nev" name="Felhasznalo_nev"/>
                    </div>
                    <div class="form-group">
                        <label for="Szuletesi_nev">Születési név:</label>
                        <input type="text" class="form-control" id="Szuletesi_nev" name="Szuletesi_nev"/>
                    </div>
                    <div class="form-group">
                        <label for="Firstname">Vezeték név:</label>
                        <input type="text" class="form-control" id="Firstname" name="Firstname"/>
                    </div>
                    <div class="form-group">
                        <label for="Lastname">Kereszt név:</label>
                        <input type="text" class="form-control" id="Lastname" name="Lastname"/>
                    </div>
                    <div class="form-group">
                        <label for="Szuletesi_datum">Születési dátum:</label>
                        <input type="date" class="form-control" id="Szuletesi_datum" name="Szuletesi_datum"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email cim:</label>
                        <input type="email" class="form-control" id="email" name="email"/>
                    </div>
                    <div class="form-group">
                        <label for="Jelszo">Jelszó:</label>
                        <input type="password" class="form-control" id="Jelszo" name="Jelszo"/>
                    </div>
                    <div class="form-group">
                        <label for="repassword">Jelszó megerősítése:</label>
                        <input type="password" class="form-control" id="repassword" name="repassword"/>
                    </div>
                    <div class="form-group" >
                        <label for="repassword">Neme:</label>
                        <div id="elrendezes">
                        <label for="male">Férfi</label>
                        <input type="radio" id="male" name="gender" value="Férfi"><br/>
                        <label for="female">Nő</label>
                        <input type="radio" id="female" name="gender" value="Nő"><br/>
                        <label for="other">Egyéb</label>
                        <input type="radio" id="other" name="gender" value="Egyéb">
                        </div>
                    </div>


                    <div class="form-group">
                        <button onclick="myFunction()" type="submit" class="form-control" id="submit" name="submit" >Regisztrálok</button>
                        <script>
                        function myFunction() {
                          alert("A regisztráció sikeres volt!");
                        }
                        </script>
                    </div>
                    

                    <div class="form-group">
                        <button type="reset" class="form-control" id="reset" name="reset">Mégse</button>
                    </div>
                </form>
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
        
        <?php
        if (!empty($errors)) {
            foreach ($errors as $key) {
                echo $key."<br/>";
            }
        }
        ?>
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