<?php
require_once('db_connect.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['name'];
    $color = $_POST['color'];
    $porte = $_POST['porte'];
    $image = $_POST['image'];
// var_dump($_POST);
    //code isqli qui ajoute une voiture // la valur de ce que tu je rentre dans le formulaire
    $sqli = "INSERT INTO cars (name,color,porte,image) VALUES ('$name','$color','$porte','$image')";
        //code qui execute ma requête
        if (mysqli_query($link,$sqli)){
            echo "donnée envoyé";
        }else {
            echo "non envoyé";
        }
     }