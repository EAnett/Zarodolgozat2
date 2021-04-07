<?php
session_start();
session_unset();
session_destroy();
header('location: ../index.php');
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <a href="../index.php">Vissza</a>
        <div class="container">
            <?php
                
                // put your code here
            ?>
        </div>
    </body>
</html>

