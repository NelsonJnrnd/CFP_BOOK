<?php
session_start();
try
{
        $bdd = new PDO('mysql:host=localhost;dbname=cfpbook;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$Profil = $bdd->prepare('SELECT * FROM utilisateurs WHERE idUtilisateur = :idUtilisateur');
$Profil->execute(array(
    'idUtilisateur' => $_SESSION['idUtilisateur']));

$resultat = $Profil->fetch();

if (!isset($_SESSION['login']) || $_SESSION['login'] == FALSE ) {
    header("location: login.php");
  exit();
}
 ?>

 <html>

     <head>
         <link href="css/styleAll.css" rel="stylesheet" type="text/css"/>
         <meta charset="UTF-8">
         <title>profil</title>

     </head>

     <body>
       <header><?php include 'navbar.php'; ?></header>

         <div class="card-texte">
         <form action="bddUpdate.php" method="post">

             <label for="nom">votre nom : <?php echo $resultat['nom'] ?></label> <br>
             <label for="prenom">votre prenom : <?php echo $resultat['prenom'] ?></label> <br>
             <label for="age">votre age : <?php echo $resultat['age'] ?></label> <br>
             <label for="email">votre Email : <?php echo $resultat['email'] ?></label> <br>
             <br>
             <label for="prenom">votre nouveau nom</label><br>
             <input type="text" name="nomN" id="nomN" required/><br>
             <label for="prenom">votre nouveau prenom</label><br>
             <input type="text" name="prenomN" id="prenomN" required/><br>
             <label for="prenom">votre nouvel age</label><br>
             <input type="int" name="ageN" id="ageN" required/><br>
             <label for="prenom">votre nouvel email</label><br>
             <input type="email" name="emailN" id="emailN" required/><br>
             <label for="mdp">votre nouveau mot de passe</label><br>
             <input type="password" name="mdpN" id="mdpN" required/><br>
             <label for="mdp2">confirmer nouveau votre mot de passe</label><br>
             <input type="password" name="mdp2N" id="mdp2N" required/><br>
             <label for="branche">Votre branche</label><br>
             <select name="branche">
                 <option value="Informatique">Informatique</option>
                 <option value="Horlogerie">Horlogerie</option>
                 <option value="Electro">Electronique</option>
             </select><br>
             <label for="mdp">confirmer votre mot de passe pour valider les changements</label><br>
             <input type="password" name="mdp" id="mdp" required/><br>
             <input type="submit" value="Envoyer" />

         </form>
         </div>
     </body>

 </html>
