
<?php
            // Connexion à la base de données
                try
                {
                        $bdd = new PDO('mysql:host=localhost;dbname=test1;charset=utf8', 'root', '');
                }
                catch(Exception $e)
                {
                        die('Erreur : '.$e->getMessage());
                }


                $nom = filter_input( INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
                $prenom = filter_input( INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
                $age = filter_input( INPUT_POST, 'age', FILTER_VALIDATE_INT);
                $sexe = filter_input( INPUT_POST, 'sexe', FILTER_SANITIZE_STRING);
                $psd = filter_input( INPUT_POST, 'psd', FILTER_SANITIZE_STRING);
                $mdp = filter_input( INPUT_POST, 'mdp', FILTER_SANITIZE_STRING);
                $mdp2 = filter_input( INPUT_POST, 'mdp2', FILTER_SANITIZE_STRING);
                
if ($nom === NULL) {
        echo 'veuillez passer par le formulaire !!!';
}
 else {
    
    if ($mdp === $mdp2) {
        $req = $bdd->prepare('INSERT INTO personnes(nom, prenom, age, sexe, psd, mdp) VALUES(:nom, :prenom, :age, :sexe, :psd, :mdp)');
        $req->execute(array(
                'nom' => $nom,
                'prenom' => $prenom,
                'age' => $age,
                'sexe' => $sexe,
                'psd' => $psd,
                'mdp' => $mdp,
                ));

        echo 'vous etes enregistre';
      } 
      else {
         echo 'votre mot de passe n´est pas identique à la confirmation';
      }

}



?>
<!DOCTYPE html>
<html>
        <head>
        <title>E-Portfolio Martins Dani</title>
        <meta charset="UTF-8">
        <link href="css/.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>  
</html>
        