<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] == FALSE) {
    header("location: login.php");
    exit();
}
$_SESSION['HeureEnvoi'] = '';
$_SESSION['messageFeed'] = '';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>CFPBook global</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="css/styleAll.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <header><?php include 'navbar.php'; ?></header>
        <div class="card" style="background: rgba(255, 255, 255, .8); margin: 30px;">
            <div class="card-body">
                <p class="card-texte">
                <h4>CFPBook global</h4></br>

                <ul class="MessageBox">
                    <li style="width:100%"  class="text-l">
                        <p> Bienvenu dans le global tchat</p>
                        <p><small>
                                <?php
                                $today = date("Y-m-d H:i:s");
                                echo $today;
                                ?>
                                <br>
                                <span id="tchat">

                                </span>
                            </small></p>
                    </li>
                </ul>
                <div style="background:whitesmoke ">
                    <input  type="text" name="Message" id="message" class="mytext" placeholder="votre message"/>
                    <button onclick="envoiMessage()" type="submit" value="Envoyer" class="btn btn-primary">Click me</button>
                </div>
                </p>
                </p>
            </div>
        </div>
        <footer><?php include 'footer.php'; ?></footer>
        <script>

            function envoiMessage() {
                var xmlhttp = new XMLHttpRequest();
                var url = "./envoieMessage.php";

                xmlhttp.onreadystatechange = function () {
                    if (this.readyState === 4 && this.status === 200) {
                    }
                    ;


                };
                var data = new FormData();
                data.append('MessageEnvoi', document.getElementById("message").value);
                xmlhttp.open("post", url, true);
                xmlhttp.send(data);
                document.getElementById("message").value = "";
            }
            


            function checkMessage() {
                var xmlhttp = new XMLHttpRequest();
                var url = "./receptionMessage.php";

                xmlhttp.onreadystatechange = function () {
                    if (this.readyState === 4 && this.status === 200) {
                        document.getElementById("tchat").innerHTML = this.responseText;
                    }
                };

                xmlhttp.open("GET", url, true);
                xmlhttp.send();
            }
            

            setInterval(checkMessage, 500);
        </script>
    </body>
</html>
