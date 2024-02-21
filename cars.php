<?php
require_once('db_connect.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau de voiture</title>
</head>
<body>
    <?php
    // sqli qui affiche les voitures
    $sql = "SELECT * FROM cars";
    // Executer la requête
    $cars = mysqli_query($link, $sql);
    // crud
    foreach ($cars as $car){ 
    echo 
        '<div style= "border:solid">
        <h2> '. $car["name"].' </h2>
        
        <p>' . $car["color"].' </p>
        
        <p> '. $car["porte"].' </p>
        
        <img src=" '. $car["image"] .'" alt="" width ="80px" >
        <a href="detail.php?id='.$car["id"].'">detail</a>
        <a href="supprimer.php?id='.$car["id"].'">supprimer</a>
        <a href="modifier.php?id='.$car["id"].'">modifier</a>
     
        </div>';
     }
     require_once('ajout.php');
     ?>
</body>
</html>