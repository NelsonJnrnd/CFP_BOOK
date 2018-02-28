<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <link href="css/styleAll.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title>Inscription</title>

    </head>

    <body>

        <?php
        // put your code here
        ?>
        <div class="card-texte">
        <form action="bdd.php" method="post">

            <label for="nom">votre nom</label> <br>
            <input type="text" name="nom" id="nom" required/><br>
            <label for="prenom">votre prenom</label><br>
            <input type="text" name="prenom" id="prenom"required/><br>
            <label for="age">votre age</label><br>
            <input type="int" name="age" id="age" required/><br>
            <label for="email">votre Email</label><br>
            <input type="email" name="email" id="email" required/><br>
            <label for="mdp">votre mot de passe</label><br>
            <input type="password" name="mdp" id="mdp" required/><br>
            <label for="mdp2">confirmer votre mot de passe</label><br>
            <input type="password" name="mdp2" id="mdp2" required/><br>
            <label for="branche">Votre branche</label><br>
            <select name="branche">
                <option value="Informatique">Informatique</option>
                <option value="Horlogerie">Horlogerie</option>
                <option value="Electro">Electronique</option>
            </select><br>
            <input type="submit" value="Envoyer" />

        </form>
        </div>
    </body>

</html>
