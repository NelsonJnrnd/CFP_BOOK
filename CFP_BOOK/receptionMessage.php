<?php
// Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=cfpbook;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$lstMessages = $bdd->prepare('SELECT * FROM messages');
$lstMessages->execute(array());

$resultat = $lstMessages->fetchAll(PDO::FETCH_ASSOC);


for ($index = 0; $index < count($resultat); $index++) {
   $_SESSION['messageFeed'] .= $resultat[$index]['Message'] ."\n";
}

//$_SESSION['messageFeed'] = $resultat;
