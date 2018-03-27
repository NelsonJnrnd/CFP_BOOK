<?php
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=cfpbook;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


$Profil = $bdd->prepare('SELECT * FROM utilisateurs WHERE idUtilisateur = :idUtilisateur');
$Profil->execute(array(
    'idUtilisateur' => $_SESSION['idUtilisateur']));

$resultat = $Profil->fetch();

if (!isset($_SESSION['login']) || $_SESSION['login'] == FALSE) {
    header("location: login.php");
    exit();
}
?>

<html>

    <head>
        <link href="css/styleAll.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta charset="UTF-8">
        <title>profil</title>

    </head>

    <body>
        <header><?php include 'navbar.php'; ?></header>

        <div class="card-texte">
            <div style="width: 40%; float: right;" class="card-deck">

                <form action="bddUpdate.php" method="post">


                    <label for="prenom">Votre nouveau nom</label><br>
                    <input type="text" name="nomN" id="nomN" required/><br>
                    <label for="prenom">Votre nouveau prenom</label><br>
                    <input type="text" name="prenomN" id="prenomN" required/><br>
                    <label for="prenom">Votre nouvel date de naissance</label><br>
                    <input type="date" name="dateNaissanceN" id="dateNaissanceN" required/><br>
                    <label for="prenom">Votre nouvel email</label><br>
                    <input type="email" name="emailN" id="emailN" required/><br>
                    <label for="mdp">Votre nouveau mot de passe</label><br>
                    <input type="password" name="mdpN" id="mdpN" required/><br>
                    <label for="mdp2">Confirmer nouveau votre mot de passe</label><br>
                    <input type="password" name="mdp2N" id="mdp2N" required/><br>
                    <label for="branche">Votre branche</label><br>
                    <select name="branche">
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
                    <label for="mdp">Confirmer votre mot de passe pour valider les changements</label><br>
                    <input type="password" name="mdp" id="mdp" required/><br><br>
                    <input class="btn btn-success" style="background-color: #00FF87" type="submit" value="Envoyer" />

                </form>
            </div>

            <div style="width: 30%; height: 75%;" class="card-deck">
                <div class="card">
                    <img style="height: 70%;" class="card-img-top" src="img/cfptInformatique.png" alt="Card image cap">
                    <div  class="card-body">
                        <label style="color: black;" class="card-title" for="nom">Nom : <?php echo $resultat['nom'] ?></label> <br>
                        <label style="color: black;" class="card-title" for="prenom">Prenom : <?php echo $resultat['prenom'] ?></label> <br>
                        <label style="color: black;" class="card-title" for="dateNaissance">dateNaissance : <?php echo $resultat['dateNaissance'] ?></label> <br>
                        <label style="color: black;" class="card-title" for="email">Email : <?php echo $resultat['email'] ?></label> <br>
                        <br>
                    </div>
                </div>
            </div>




        </div>

    </body>

</html>
