<?php
require_once("./src/connect.php");

// Requête SQL pour insérer un nouvel utilisateur
$sql = "INSERT INTO users ('first_name', 'last_name', 'email', 'gender', 'birth_date', 'country')
VALUES ('Chaton', 'Mitaine', 'mitenusmaleficus@gmail.com', 'male', '2009-05-13', 'France')";

// $db->exec($insertSql);


// Préparation de la requête
$query = $db->prepare($sql);
// Exécution de la requête
$query->execute();

require_once("./src/close.php");

// Redirection vers la page d'accueil
header('Location: ./index.php');
?>
