<?php
require "ConnectZarodolgozat.php";
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
            header('location: ../fooldal/fooldal.php');
        }
        else {
            array_push($errors, "A felhasználó név és a jelszó nem megfelelő!");
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
        <link href="belepes.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <form action="belepes.php" method="POST">
                <label for="Felhasznalo_nev">Felhasználó név:</label>
                <input type="text" id="Felhasznalo_nev" name="Felhasznalo_nev">
                <label for="Jelszo">Jelszó:</label>
                <input type="password" id="Jelszo" name="Jelszo">
                <input type="submit" name="submit" value="Bejelentkezés">
            </form>
        </div>
        
        <?php
        if(!empty($errors)) {
            foreach ($errors as $key) {
                echo $key."<br/>";
            }
        }
        ?>
    </body>
</html>

