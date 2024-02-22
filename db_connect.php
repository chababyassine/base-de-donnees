<?php



    $link = mysqli_connect("localhost", "root","", "voiture");

    // //JE VERIFIE MA CONNECTION A MA BDD(base de donné)

    if (mysqli_connect_errno()) {
        printf("Échec de la connexion : %s\n", mysqli_connect_error());
    }
    //  else {
    //     echo "Connexion résussie";
    // }


