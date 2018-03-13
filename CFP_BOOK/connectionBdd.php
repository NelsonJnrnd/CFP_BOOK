<?php
// Connexion à la base de données
DEFINE('DB_HOST', "127.0.0.1");
DEFINE('DB_NAME', "cfpbook");
DEFINE('DB_USER', "root");
DEFINE('DB_PASS', "");

function getConnection() {
    static $bdd = null;

    if ($bdd === null) {
        try {
            $connectionString = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;

            $bdd = new PDO($connectionString, DB_USER, DB_PASS);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    return $bdd;
}