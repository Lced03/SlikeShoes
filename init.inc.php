<?php 

// connexion à la BDD

$pdo = new PDO('mysql:host=localhost;dbname=boutique_philiance', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'] );
//var_dump($pdo);
// ---------------------------------------------------------------
// ouverture de session 
session_start();

// ---------------------------------------------------------------
// définition de constantes
define("RACINE_SITE", $_SERVER['DOCUMENT_ROOT']. '/soutenance/SlikeShoes/SlikeShoes/');
define("URL", 'http://localhost:8888/soutenance/SlikeShoes/SlikeShoes/');

// ---------------------------------------------------------------
//declaration de variable 
$content = '' ;
// inclusion des fonction
require_once('fonction.php');
?>