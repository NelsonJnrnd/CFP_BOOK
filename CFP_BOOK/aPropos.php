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
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="css/styleAll.css" rel="stylesheet" type="text/css"/>
  </head>

    <body>
      <header><?php include 'navbar.php'; ?></header>
      <div class="card-group">
        <div class="card">
          <img class="card-img-top" src="img/fond.jpg" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">Dani Martins</h4>
            <p class="card-text"></p>
            <p class="card-text"><small class="text-muted"></small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/fond1.jpg" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">Amandine Pouly</h4>
            <p class="card-text"></p>
            <p class="card-text"><small class="text-muted"></small></p>
          </div>
        </div>
      </div>
      <footer><?php include 'footer.php'; ?></footer>
    </body>
</html>
