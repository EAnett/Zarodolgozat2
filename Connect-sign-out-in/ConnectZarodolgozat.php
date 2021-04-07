<?php

/* 
 * Adbázis kapcsolat létrehozása:
 */
// Adatbázis kapcsolat kiépítése:
$servername="localhost";
$username="root";
$password="";
$database="vizsga_regisztracio";

// Kapcsolat létrehozása:
$conn=new mysqli($servername, $username, $password, $database);

// Kapcsolati hiba ellenőrzése:
if ($conn->connect_error) {
    die("Kapcsolati hiba:". $conn->connect_error);
}

$conn->set_charset("utf8");


