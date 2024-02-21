<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['name'];
    $color = $_POST['color'];
    $porte = $_POST['porte'];
    $image = $_POST['image'];
var_dump($_POST);

    $link = mysqli_connect("localhost", "root","", "voiture");

    // //JE VERIFIE MA CONNECTION A MA BDD(base de donné)

    if (mysqli_connect_errno()) {
        printf("Échec de la connexion : %s\n", mysqli_connect_error());
    }

        //code qui execute ma requête
    if (mysqli_query($link,$sqli)){
        echo "donnée envoyé";
    }else {
        echo "non envoyé";
    }
}