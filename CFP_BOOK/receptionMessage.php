<?php
// Connexion à la base de données
include 'connectionBdd.php';

$bdd = getConnection();

$idNom = array();

$lstMessages = $bdd->prepare('SELECT * FROM messages');
$nom = $bdd->prepare('SELECT * FROM utilisateurs');

$lstMessages->execute(array());
$nom->execute(array());



$resultatNom = $nom->fetchAll(PDO::FETCH_ASSOC);

for ($index = 0; $index < count($resultatNom); $index++) {
    $idNom[$resultatNom[$index]['idUtilisateur']] = $resultatNom[$index]['prenom'] . " " .$resultatNom[$index]['nom'];
    
}


$resultatMessage = $lstMessages->fetchAll(PDO::FETCH_ASSOC);

 //echo var_dump($idNom);
for ($index = 0; $index < count($resultatMessage); $index++) {
    if(!in_array($resultatMessage[$index]['idUtilisateur'], $idNom)){
    echo  $idNom[$resultatMessage[$index]['idUtilisateur']] ." : <br>";
    }
    echo $resultatMessage[$index]['Message'] ."<br>";
    echo $resultatMessage[$index]['HeureEnvoi'] ."<br>";
    echo "<br>";
}

