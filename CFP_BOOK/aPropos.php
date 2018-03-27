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
        <meta charset="UTF-8">
        <title>CFPBook</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="css/styleAll.css" rel="stylesheet" type="text/css"/>
  </head>

    <body>
      <header><?php include 'navbar.php'; ?></header>

	  <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="img/Martins.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Dani Martins</h5>
      <p class="card-text">Etudiant en deuxième année CFC 4 ans informaticien</p>
      <p class="card-text">Email: dani.mrtns@eduge.ch</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/Pouly.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Amandine Pouly</h5>
            <p class="card-text">Etudiant en deuxième année CFC 3 ans informaticien</p>
      <p class="card-text">Email: amandine.pl@eduge.ch</p>
    </div>
  </div>
   <div class="card">
    <img class="card-img-top" src="img/JeanRenaud.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Nelson Jeanrenaud</h5>
            <p class="card-text">Etudiant en deuxième année CFC 4 ans informaticien</p>
      <p class="card-text">Email: nelson.jnrnd@eduge.ch</p>
    </div>
  </div>
</div>
      <footer><?php include 'footer.php'; ?></footer>
    </body>
</html>
