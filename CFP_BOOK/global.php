<?php
session_start();

$_SESSION['HeureEnvoi'] = '';
?>
<!DOCTYPE html>
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
            <form action="global.php" method="post" onsubmit="envoiMessage">
                <input class="w3-input" type="text" name="message">
            </form>
        </div>
        <footer><?php include 'footer.php'; ?></footer>
        <script type="text/javascript">
            function envoiMessage() {
<?php
$_SESSION['HeureEnvoi'] = date("Y-m-d H:i:s");
include_once 'envoieMessage.php';
?>
            }
        </script>
    </body>
</html>
