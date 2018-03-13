<?php

session_start();
include 'connectionBdd.php';

$Message = filter_input(INPUT_POST, 'MessageEnvoi', FILTER_SANITIZE_STRING);
$HeureEnvoi = date("Y-m-d H:i:s");
if ($Message === NULL) {
    echo 'veuillez passer par le formulaire !!!';
} else {

    $bdd = getConnection();
    $req = $bdd->prepare('INSERT INTO messages(Message, HeureEnvoi, idUtilisateur) VALUES(:Message, :HeureEnvoi, :idUtilisateur)');
    $result = $req->execute(array(
        'Message' => $Message,
        'HeureEnvoi' => $HeureEnvoi,
        'idUtilisateur' => $_SESSION['idUtilisateur']
    ));
    echo $result;
}


