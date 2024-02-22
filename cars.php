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
    require_once('db_connect.php');
    $sql = "SELECT * FROM cars";
    // Executer la requête
    // $result = mysqli_query($link, $sql);
    $result = $link->query($sql);
    $cars = $result->fetch_all(MYSQLI_ASSOC);
    // crud
    // var_dump($cars);
    // session(car)
    foreach ($cars as $car){ 
        echo 
        '<div style= "border:solid class="card w-50"">
        <h2> '. $car["name"].' </h2>
        
        <p>' . $car["color"].' </p>
        
        <p> '. $car["porte"].' </p>
        
        <img src=" '. $car["image"] .'" alt="" width ="300px" >
        <br>
        <a href="detail.php?id='.$car["id"].'">detail</a>
        <a href="supprimer.php?id='.$car["id"].'">supprimer</a>
        <a href="modifier.php?id='.$car["id"].'">modifier</a>
     
        </div>';
     }
     require_once('ajout.php');
     ?>
</body>
</html>