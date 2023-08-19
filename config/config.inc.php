<?php
$url = "mysql:host=localhost;dbname=4083211_mmg;charset=utf8";
$login = "root";
$password = "";

try {
    $bdd = new PDO($url, $login, $password);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
