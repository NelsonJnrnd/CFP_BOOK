<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] == FALSE ) {
    header("location: login.php");
  exit();
}

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <link rel="icon" type="image/ico" href="img/cfptGlobal.png" />
        <meta charset="UTF-8">
        <title>CFPBook</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="css/styleAll.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <header><?php include 'navbar.php'; ?></header>
        <div class="card" style="background: rgba(255, 255, 255, .8); margin: 30px;">
          <div class="card-body">
            <p class="card-text">
                Bienvenu(e) sur ce site de tchat pour les étudiants du CFP : le CFPBook
            </p>
            <small class="card-text">
                Développé par des étudiants en informatique
            </small>
        </div>
        <footer><?php include 'footer.php'; ?></footer>
    </body>
</html>
