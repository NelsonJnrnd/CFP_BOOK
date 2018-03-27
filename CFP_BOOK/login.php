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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta charset="UTF-8">
        <link rel="icon" type="image/ico" href="img/cfptGlobal.png" />
        <title>Login</title>
    </head>
    <body>
          <div class="card card-outline-secondary" style="margin: 10%;">
                       <div class="card-header">
                            <label for="login"> <h3 class="mb-0">LOGIN</h3></label> <br>
                       </div>
                       <div class="card-body">
                           <form action="loginS.php" method="post" class="form">
                             <div class="form-group">
                                <label for="emailL">votre Email </label> <br>
                                <input type="text" name="emailL" id="emailL" class="form-control" required/><br>
                            </div>
                            <div class="form-group">
                                <label for="pswL">votre mot de passe </label> <br>
                                <input type="password" name="pswL" id="mdpL" class="form-control" required/><br>
                            </div>

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
          </div>
    </body>
</html>
