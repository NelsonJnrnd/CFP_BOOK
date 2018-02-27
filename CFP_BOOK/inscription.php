<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>

        <meta charset="UTF-8">
        <title>Inscription</title>

    </head>

    <body>

        <?php
        // put your code here
        ?>
        <form action="ev.php" method="post">

            <label for="nom">votre nom </label> :  <input type="text" name="nom" id="nom" placeholder="martins" required/><br>
            <label for="prenom">votre prenom </label> :  <input type="text" name="prenom" id="prenom" placeholder="dani"  required/><br>
            <label for="age">votre age </label> :  <input type="int" name="age" id="age" placeholder="17"  required/><br>
            <label for="mdp">votre mot de passe </label> :  <input type="password" name="mdp" id="mdp" required/><br>
            <label for="mdp2">confirmer votre mot de passe </label> :  <input type="password" name="mdp2" id="mdp2" required/><br>
            <select name="branche">
                <option value="Informatique">Informatique</option>
                <option value="Horlogerie">Horlogerie</option>
                <option value="Electro">Electronique</option>
            </select>
            <input type="submit" value="Envoyer" />

        </form>

    </body>

</html>
