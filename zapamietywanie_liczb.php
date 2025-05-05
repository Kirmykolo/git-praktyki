<?php
session_start();

header("Content-Type: text/html; charset=utf-8");

?>

<html>
    <head>
        <title>Sesje</title>
    </head>
    <body>
        <form method="GET" name="dodawanie">
            Wpisz kolejna liczbe <input type="text" name="liczba">

        </form>

        <?php
            if(isset($_GET["liczba"])){
                if(!isset($_SESSION["tablica"])){
                    $_SESSION["tablica"]=array();
                }
                $_SESSION['tablica'][]=$_GET["liczba"];

            }

            if(isset($_GET['liczba'])){
                echo '<ol>'. "\r\n";
                foreach($_SESSION['tablica'] as $liczba){
                    echo '<li>'.$liczba.'</li>'. "\r\n";
                }
                echo '</ol>'. "\r\n";
            }


 
        ?>
    </body>
</html>