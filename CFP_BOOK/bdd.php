
<?php
        include 'connectionBdd.php';
        $bdd = getConnection();


                $nom = filter_input( INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
                $prenom = filter_input( INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
                $dateNaissance = filter_input( INPUT_POST, 'dateNaissance', FILTER_VALIDATE_INT);
                $email = filter_input( INPUT_POST, 'email', FILTER_SANITIZE_STRING);
                $branche = filter_input( INPUT_POST, 'branche', FILTER_SANITIZE_STRING);
                $mdp = filter_input( INPUT_POST, 'mdp', FILTER_SANITIZE_STRING);
                $mdp2 = filter_input( INPUT_POST, 'mdp2', FILTER_SANITIZE_STRING);

if ($nom === NULL) {
        echo 'veuillez passer par le formulaire !!!';
}
 else {

    if ($mdp === $mdp2) {
        $req = $bdd->prepare('INSERT INTO utilisateurs(nom, prenom, dateNaissance, email, branche, psw) VALUES(:nom, :prenom, :dateNaissance, :email, :branche, :psw)');
        $req->execute(array(
                'nom' => $nom,
                'prenom' => $prenom,
                'dateNaissance' => $dateNaissance,
                'email' => $email,
                'branche' => $branche,
                'psw' => $mdp,
                ));
        header('location: login.php');
        exit();
      }
      else {
         echo 'votre mot de passe n�est pas identique a�la confirmation';
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
