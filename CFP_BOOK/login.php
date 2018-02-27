<?php 
   session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/style2.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


        <!-- TESTE -->
        <form action="loginS.php" method="post">
            <label for="login"><strong>LOGIN</strong> </label> <br> 
            <label for="nomL">votre pseudo </label> <br> 
            <input type="text" name="nomL" id="psdL" placeholder="xXlebgXx"  required/><br>
            <label for="pswL">votre mot de passe </label> <br> 
            <input type="password" name="pswL" id="mdpL" required/><br>

<?php
if ($_SESSION['loginOk'] == 1) {
    echo "<p>votre mot de passe ou votre identifiant n'est pas correcte</p>";
    $_SESSION['loginOk'] = 0;
}
?>

            <input type="submit" value="Login" />
        </form>



    </body>
</html>
