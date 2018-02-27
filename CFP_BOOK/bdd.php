
<?php
            // Connexion Ã  la base de donnÃ©es
                try
                {
                        $bdd = new PDO('mysql:host=localhost;dbname=cfpbook;charset=utf8', 'root', '');
                }
                catch(Exception $e)
                {
                        die('Erreur : '.$e->getMessage());
                }


                $nom = filter_input( INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
                $prenom = filter_input( INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
                $age = filter_input( INPUT_POST, 'age', FILTER_VALIDATE_INT);
                $branche = filter_input( INPUT_POST, 'branche', FILTER_SANITIZE_STRING);
                $mdp = filter_input( INPUT_POST, 'mdp', FILTER_SANITIZE_STRING);
                $mdp2 = filter_input( INPUT_POST, 'mdp2', FILTER_SANITIZE_STRING);
                
if ($nom === NULL) {
        echo 'veuillez passer par le formulaire !!!';
}
 else {
    
    if ($mdp === $mdp2) {
        $req = $bdd->prepare('INSERT INTO utilisateurs(nom, prenom, age, branche, psw) VALUES(:nom, :prenom, :age, :branche, :psw)');
        $req->execute(array(
                'nom' => $nom,
                'prenom' => $prenom,
                'age' => $age,
                'branche' => $branche,
                'psw' => $mdp,
                ));

        echo 'vous etes enregistre';
      } 
      else {
         echo 'votre mot de passe n´est pas identique a la confirmation';
      }

}



?>
<!DOCTYPE html>
<html>
        <head>
        <meta charset="UTF-8">
        <link href="css/.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>  
</html>
        