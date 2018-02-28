<?php
session_start();
            // Connexion à la base de données
                try
                {
                        $bdd = new PDO('mysql:host=localhost;dbname=cfpbook;charset=utf8', 'root', '');
                }
                catch(Exception $e)
                {
                        die('Erreur : '.$e->getMessage());
                }


                $Message = filter_input( INPUT_POST, 'message', FILTER_SANITIZE_STRING);
                $HeureEnvoi = $_SESSION['HeureEnvoi'];
                
if ($Message === NULL) {
        echo 'veuillez passer par le formulaire !!!';
}
 else {
    
 
        $req = $bdd->prepare('INSERT INTO messages(Message, HeureEnvoi) VALUES(:Message, :HeureEnvoi)');
        $req->execute(array(
                'Message' => $Message,
              'HeureEnvoi' => $HeureEnvoi
                ));

        echo 'vous etes enregistre';     
}


