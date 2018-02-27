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
                

        $nomL = filter_input(INPUT_POST, 'nomL', FILTER_SANITIZE_STRING);
        $pswL = filter_input(INPUT_POST, 'pswL', FILTER_SANITIZE_STRING);
        
      
        // Vérification des identifiants
        $login = $bdd->prepare('SELECT * FROM utilisateurs WHERE nom = :nomL AND psw = :pswL');
        $login->execute(array(
            'nomL' => $nomL,
            'pswL' => $pswL));

        $resultat = $login->fetch();

        if (!$resultat)
        {
            $_SESSION['loginOk'] = 1;
            header('location: login.php');
            exit();
        }
        else
        {
            $_SESSION['idUtilisateur'] = $resultat['idUtilisateur'];
            $_SESSION['nomL'] = $nomL;
            $_SESSION['login'] = TRUE;
            header('location: global.php');
            exit();
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