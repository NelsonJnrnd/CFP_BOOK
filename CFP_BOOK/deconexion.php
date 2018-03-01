<?php

session_start();

$_SESSION['idUtilisateur'] = '';
$_SESSION['emailL'] = '';
$_SESSION['login'] = false;
header('location: login.php');
exit();

