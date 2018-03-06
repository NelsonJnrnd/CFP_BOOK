<?php

   if (session_status() == PHP_SESSION_NONE ){
    session_start();
}

       if (!isset($_SESSION['loginOk'])) {
           $_SESSION['loginOk'] = 0;
       }

?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/styleAll.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="card-texte">
        <form action="loginS.php" method="post">
            <label for="login"><strong>LOGIN</strong> </label> <br>
            <label for="emailL">votre Email </label> <br>
            <input type="text" name="emailL" id="emailL" required/><br>
            <label for="pswL">votre mot de passe </label> <br>
            <input type="password" name="pswL" id="mdpL" required/><br>

<?php
if ($_SESSION['loginOk'] == 1) {
    echo "<p>votre mot de passe ou votre identifiant n'est pas correcte</p>";
    $_SESSION['loginOk'] = 0;
}
?>

            <input type="submit" value="Login" />
            <p><a href="inscription.php">Si tu n'est pas inscrit clique ICI!</a></p>
        </form>
        </div>
    </body>
</html>
