<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="css/style2.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php include 'head.php'?>
        
        <!-- TESTE -->
        <form action="loginS.php" method="post">
            <label for="login"><strong>LOGIN</strong> </label> <br> 
        <label for="psdL">votre pseudo </label> <br> 
        <input type="text" name="psdL" id="psdL" placeholder="xXlebgXx"  required/><br>
        <label for="mdpL">votre mot de passe </label> <br> 
        <input type="password" name="mdpL" id="mdpL" required/><br>
        
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
