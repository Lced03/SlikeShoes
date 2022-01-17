<?php
require_once("init.inc.php");

if(isset($_POST['ajouter_panier']))
{

    $req = $pdo->query("SELECT * FROM produit WHERE id_produit = $_POST[id_produit] ");

    $produit = $req->fetch(PDO::FETCH_ASSOC) ;

    //debug($produit);
    //die();


    ajoutProduitPanier($produit['id_produit'], $_POST['quantite'], $produit['prix']) ; 

    //debug($_SESSION);


}


if(isset($_GET['action']) && $_GET['action'] == 'suppression')
{
    retirerProduit($_GET['id_produit']);
}


if(isset($_GET['action']) && $_GET['action'] == 'vider_panier')
{
    unset($_SESSION['panier']);
}

$content .= '<table class="table">';
$content .= '<tr><th>id_produit</th><th>quantité</th><th>prix</th><th>Action</th></tr>';

if(empty($_SESSION['panier']['id_produit']))
{
    $content .= '<tr><td colspan="3"> Votre panier est vide ! </td></tr>';
} else{
    for($i=0; $i < count($_SESSION['panier']['id_produit']) ; $i++)
    {
        $content .= '<tr>';
        $content .= '<td>' . $_SESSION['panier']['id_produit'][$i] . '</td>';
        $content .= '<td>' . $_SESSION['panier']['quantite'][$i] . '</td>';
        $content .= '<td>' . $_SESSION['panier']['prix'][$i] . ' €</td>';
        $content .= '<td><a onclick="return confirm(\"êtes vous sûr de vouloir supprimer le produit ?\");"  href="?action=suppression&id_produit=' . $_SESSION['panier']['id_produit'][$i] .'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></td>';

        $content .= '</tr>';
    }
    $content .= '<th colspan="2"></th>';
    $content .= '<th colspan="1">' . calculTotal() . '€ </th>'; 

    $content .= '<tr><td colspan="5"><a href="?action=vider_panier">Vider le panier</a></td></tr>';
    
}

$content .= '</table>';
?>


<?php require_once("header.inc.php") ?>

<?= $content ?>



<?php require_once("footer.inc.php")?>