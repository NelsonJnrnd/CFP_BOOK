<?php
// Connexion à la base de données
include 'connectionBdd.php';

$bdd = getConnection();

$lstMessages = $bdd->prepare('SELECT * FROM messages');
$lstMessages->execute(array());

$resultat = $lstMessages->fetchAll(PDO::FETCH_ASSOC);

//var_dump($resultat);
for ($index = 0; $index < count($resultat); $index++) {
    echo '';
    echo $resultat[$index]['Message'] ."<br>";
}

