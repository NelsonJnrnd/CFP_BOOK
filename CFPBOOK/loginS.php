<?php
session_start();

        // Connexion à la base de données
                try
                {
                        $bdd = new PDO('mysql:host=localhost;dbname=test1;charset=utf8', 'root', '');
                }
                catch(Exception $e)
                {
                        die('Erreur : '.$e->getMessage());
                }
                

        $psdL = filter_input(INPUT_POST, 'psdL', FILTER_SANITIZE_STRING);
        $mdpL = filter_input(INPUT_POST, 'mdpL', FILTER_SANITIZE_STRING);
        
      
        // Vérification des identifiants
        $login = $bdd->prepare('SELECT * FROM personnes WHERE psd = :psdL AND mdp = :mdpL');
        $login->execute(array(
            'psdL' => $psdL,
            'mdpL' => $mdpL));

        $resultat = $login->fetch();

        if (!$resultat)
        {
            $_SESSION['loginOk'] = 1;
            header('location: login.php');
        }
        else
        {
            $_SESSION['idPersonne'] = $resultat['idPersonne'];
            $_SESSION['psdL'] = $psdL;
            $_SESSION['login'] = TRUE;
            header('location: index.php');
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