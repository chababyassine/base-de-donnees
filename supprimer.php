<?php
require_once('db_connect.php');
$id = $_GET["id"];
// var_dump($id);
// pour stope la lecture de script apres 
// die();
//ouverture d'une connexion à la sql de base de données
 $link = mysqli_connect("localhost", "root","", "voiture");
// preparation de la requête
$stmt = $link->prepare('DELETE FROM cars WHERE id=?');
$stmt->bind_param('i', $id);
if ($stmt->execute()){
    echo "donnée supprimée";
}else {
    echo "Erreur de suppression";
}
// on exécute la requête (mysql_query) et on affiche un message au cas où la requête ne se passait pas bien (or die)
// mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
?>