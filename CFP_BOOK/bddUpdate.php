
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

            $Profil = $bdd->prepare('SELECT * FROM utilisateurs WHERE idUtilisateur = :idUtilisateur');
            $Profil->execute(array(
                'idUtilisateur' => $_SESSION['idUtilisateur']));

            $resultat = $Profil->fetch();


            $nom = filter_input( INPUT_POST, 'nomN', FILTER_SANITIZE_STRING);
            $prenom = filter_input( INPUT_POST, 'prenomN', FILTER_SANITIZE_STRING);
            $age = filter_input( INPUT_POST, 'ageN', FILTER_VALIDATE_INT);
            $email = filter_input( INPUT_POST, 'emailN', FILTER_SANITIZE_STRING);
            $branche = filter_input( INPUT_POST, 'brancheN', FILTER_SANITIZE_STRING);
            $mdpN = filter_input( INPUT_POST, 'mdpN', FILTER_SANITIZE_STRING);
            $mdp2N = filter_input( INPUT_POST, 'mdp2N', FILTER_SANITIZE_STRING);
            $mdp = filter_input( INPUT_POST, 'mdp', FILTER_SANITIZE_STRING);


if ($mdpN === $mdp2N && $resultat['psw'] === $mdp) {
    $req = $bdd->prepare('UPDATE utilisateurs SET nom = :nom, prenom = :prenom, age = :age, email = :email, branche = :branche, psw = :psw WHERE '.$_SESSION['idUtilisateur'].' =  idUtilisateur');
    $req->execute(array(
            'nom' => $nom,
            'prenom' => $prenom,
            'age' => $age,
            'email' => $email,
            'branche' => $branche,
            'psw' => $mdpN
            ));
    header('location: login.php');
    exit();
  }
  else {
     echo 'votre mot de passe nest pas identique a la confirmation';
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
