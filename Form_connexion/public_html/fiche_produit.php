<?php require_once("inc/init.inc.php");

if(!isset($_GET['id_produit'])){ // si dans l'url il n'y a pas d'id produit on renvoi vers la page index
    header('location:index.php'); exit();
}

if(isset($_GET['id_produit'])){ // on recupere le produit dont l"id est celui qui se trouve dans l'url 
    $req = $pdo->query("SELECT * FROM produit WHERE id_produit = '$_GET[id_produit]'");
}


if($req->rowCount() <= 0) { header('location:index.php'); exit(); }

$produit = $req->fetch(PDO::FETCH_ASSOC);

$content .= "<h1>$produit[titre]</h1>";
$content .= "<p>categorie : $produit[categorie]</p>";
$content .= "<p>couleur : $produit[couleur]</p>";
$content .= "<p>pointure : $produit[pointure]</p>";
$content .= "<p>  <img height=\"300\" src=\"$produit[photo]\"></p>";
$content .= "<p>prix : $produit[prix]</p>";
if($produit['stock'] > 0) {
    $content .= "<p>Nombre de produit disponible : $produit[stock]</p><br>";
    $content .= "<form method=\"post\" action=\"panier.php\" >";
    $content .= "<input type=\"hidden\" name=\"id_produit\" value=\"$produit[id_produit]\"><br>";

    $content .= "<label for=\"quantite\">Quantité</label><br>";
    $content .= "<select name=\"quantite\" id=\"quantite\">";
            for($i=1; $i <= $produit['stock']; $i++) {
                $content .= "<option>$i</option>";
            }
    $content .= "</select<br>";
    $content .= "<input type=\"submit\" value=\"ajouter au panier\" name=\"ajouter_panier\" class=\"btn btn-secondary\"><br>";
    $content .= "</form>";
}

?>


<?php require_once("header.php") ?>
<div class="text-center">
    <?= $produit["titre"] ?>
    <?= $produit["couleur"] ?>
    <?= $produit["pointure"] ?>
    <?= $produit["<img height=\"300\" src=\"$produit[photo]\">"] ?>
    <?= $produit[prix] ?>
</div>
<?php require_once("footer.php")?>