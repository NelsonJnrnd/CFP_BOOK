<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <link href="css/styleAll.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta charset="UTF-8">
        <title>Inscription</title>

    </head>

    <body>

        <?php
        // put your code here
        ?>
        <div class="card card-outline-secondary" style="margin: 10%;">
               <div class="card-header">
                    <label for="inscription"> <h3 class="mb-0">inscription</h3></label> <br>
               </div>
               <div class="card-body">
                        <form action="bdd.php" method="post">
                            <div class="form-group">
                                <label for="nom">votre nom</label> <br>
                                <input class="form-control" type="text" name="nom" id="nom" required/><br>
                            </div>
                            <div class="form-group">
                                <label for="prenom">votre prenom</label><br>
                                <input class="form-control" type="text" name="prenom" id="prenom"required/><br>
                            </div>
                            <div class="form-group">
                                <label for="dateNaissance">votre date de naissance</label><br>
                                <input class="form-control" type="date" name="dateNaissance" id="dateNaissance" required/><br>
                            </div>
                            <div class="form-group">
                                <label for="email">votre Email</label><br>
                                <input class="form-control" type="email" name="email" id="email" required/><br>
                            </div>
                            <div class="form-group">
                                <label for="mdp">votre mot de passe</label><br>
                                <input class="form-control" type="password" name="mdp" id="mdp" required/><br>
                            </div>
                            <div class="form-group">
                                <label for="mdp2">confirmer votre mot de passe</label><br>
                                <input class="form-control" type="password" name="mdp2" id="mdp2" required/><br>
                            </div>
                            <div class="form-group">
                                <label for="branche">Votre branche</label><br>
                                <select name="branche" class="form-control">
                                    <option value="Informatique">Informatique</option>
                                    <option value="Horlogerie">Horlogerie</option>
                                    <option value="Electronicien">Electronique</option>
                                    <option value="Electricien">Electricien</option>
                                    <option value="Mecanique">Mecanique</option>
                                    <option value="Polymecanique">Polymecanique</option>
                                    <option value="Micromecanicique">Micromecanicique</option>
                                    <option value="Automatique">Automatique</option>
                                    <option value="Carrossier">Carrossier</option>
                                    <option value="LaborantinsPhysique">Laborant en physique</option>
                                    <option value="LaborantinsBiologie">Laborant en Biologie</option>
                                </select><br>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Envoyer" />
                            </div>
                        </form>
                </div>
        </div>
    </body>

</html>
