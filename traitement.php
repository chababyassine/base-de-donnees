<?php
require_once('db_connect.php');
    //code isqli qui ajoute une voiture // la valur de ce que tu je rentre dans le formulaire
    $sqli = "INSERT INTO cars (name,color,porte,image) VALUES ('$name','$color','$porte','$image')";

    