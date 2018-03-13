<?php
session_start();

        // Connexion à la base de données
        include 'connectionBdd.php';
        $bdd = getConnection();
                

        $emailL = filter_input(INPUT_POST, 'emailL', FILTER_SANITIZE_STRING);
        $pswL = filter_input(INPUT_POST, 'pswL', FILTER_SANITIZE_STRING);
        
      
        // Vérification des identifiants
        $login = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = :emailL AND psw = :pswL');
        $login->execute(array(
            'emailL' => $emailL,
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
            $_SESSION['emailL'] = $emailL;
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