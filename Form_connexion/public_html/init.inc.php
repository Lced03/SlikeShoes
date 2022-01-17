<?php 

// connexion à la BDD
$user = 'id18261411_root';
$password = 'o6|dXdT(Qk?7WKB(' ;

$pdo = new PDO('mysql:host=localhost;dbname=id18261411_boutique_slikeshoes;port=3306', 'id18261411_root', 'o6|dXdT(Qk?7WKB(', [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'] );
//var_dump($pdo);
// ---------------------------------------------------------------
// ouverture de session 
session_start();

// ---------------------------------------------------------------
// définition de constantes
define("RACINE_SITE", $_SERVER['DOCUMENT_ROOT']. 'id18261411_boutique_slikeshoes');
define("URL", 'https://slikeshoes.000webhostapp.com/');

// ---------------------------------------------------------------
//declaration de variable 
$content = '' ;
// inclusion des fonction
require_once('./fonction.php');
?>