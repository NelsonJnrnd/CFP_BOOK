<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>CFPBook global</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="css/styleAll.css" rel="stylesheet" type="text/css"/>
  </head>

    <body>
      <header><?php include 'navbar.php'; ?></header>
      <div class="card-texte">
        <h4>global</h4></br>
        <form action="envoieMessage.php" method="post">
            <input class="w3-input" type="text" name="message">
        </form>
      </div>
      <footer><?php include 'footer.php'; ?></footer>
    </body>
</html>
