<?php require_once('init.inc.php') ;

// if(!internauteEstConnecteEtEstAdmin())
// {
//     header('location: ../connexion.php');
//     exit();
// }
if($_POST)
{
    $photo_bdd= '';


    foreach($_POST as $indice => $valeur)
    {
        $_POST[$indice] = addslashes($valeur);
    }

    

    if(isset($_GET['action']) && $_GET['action'] == 'modification')
    {

        $req = $pdo->query("SELECT photo FROM produit WHERE id_produit = $_GET[id_produit] ");
        $recup = $req->fetch(PDO::FETCH_ASSOC);
        
        //debug($_POST);

        if(!$_FILES['photo']['name']){
            
            if(!empty( $recup['photo'] )){
                $photo_bdd = $recup['photo'];
            }
            
        }elseif($_FILES['photo']['name']){

            // traitement photo
            
                //debug($_FILES);

                $nom_photo = $_POST['reference'] .'_' . $_FILES['photo']['name'];
                $photo_bdd = URL ."photo/$nom_photo";
                $photo_dossier = RACINE_SITE . "photo/$nom_photo";

                copy($_FILES['photo']['tmp_name'], $photo_dossier);
            //fin photo
        
        }

        $pdo->query("UPDATE produit SET reference = '$_POST[reference]', categorie = '$_POST[categorie]', titre = '$_POST[titre]', description = '$_POST[description]', couleur = '$_POST[couleur]', pointure = '$_POST[pointure]', public = '$_POST[public]', photo = '$photo_bdd', prix = '$_POST[prix]', stock = '$_POST[stock]' WHERE id_produit = '$_POST[id_produit]' ");

        header('location:gestion_produits.php');
        exit();

    }else{
        if($_FILES['photo']['name'])
        {
            // traitement photo
        
            //debug($_FILES);

            $nom_photo = $_POST['reference'] .'_' . $_FILES['photo']['name'];
            $photo_bdd = URL ."photo/$nom_photo";
            $photo_dossier = RACINE_SITE . "photo/$nom_photo";

            copy($_FILES['photo']['tmp_name'], $photo_dossier);
            //fin photo
        }

        $pdo->query("INSERT INTO produit (reference, categorie, titre, description, couleur, pointure, public, photo, prix, stock) VALUES ('$_POST[reference]', '$_POST[categorie]', '$_POST[titre]', '$_POST[description]', '$_POST[couleur]', '$_POST[pointure]', '$_POST[public]', '$photo_bdd', '$_POST[prix]', '$_POST[stock]') ");
    }

}
 
    if(isset($_GET['action']) && $_GET['action'] == 'modification')
    {
        $req = $pdo->query("SELECT * FROM produit WHERE id_produit = '$_GET[id_produit]' ");
        $produit_actuel = $req->fetch(PDO::FETCH_ASSOC);
    }
    
    $id_produit = (isset($produit_actuel['id_produit'])) ? $produit_actuel['id_produit'] : '';
    $reference = (isset($produit_actuel['reference'])) ? $produit_actuel['reference'] : '';
    $categorie = (isset($produit_actuel['categorie'])) ? $produit_actuel['categorie'] : '';
    $titre = (isset($produit_actuel['titre'])) ? $produit_actuel['titre'] : '';
    $description = (isset($produit_actuel['description'])) ? $produit_actuel['description'] : '';
    $couleur = (isset($produit_actuel['couleur'])) ? $produit_actuel['couleur'] : '';
    $pointure = (isset($produit_actuel['pointure'])) ? $produit_actuel['pointure'] : '';
    $public = (isset($produit_actuel['public'])) ? $produit_actuel['public'] : '';
    $photo = (isset($produit_actuel['photo'])) ? $produit_actuel['photo'] : '';
    $prix = (isset($produit_actuel['prix'])) ? $produit_actuel['prix'] : '';
    $stock = (isset($produit_actuel['stock'])) ? $produit_actuel['stock'] : '';
    
    
    
//---------

if(isset($_GET['action']) && $_GET['action'] == 'suppression')
{
    $pdo->query("DELETE FROM produit WHERE id_produit = '$_GET[id_produit]' ");

    header('location:gestion_produits.php');
    exit();
}

// on récupere les produits
$req = $pdo->query("SELECT * FROM produit");

$content .= "<h1>Affichage des " . $req->rowCount() . " produits</h1>";
$content .= "<table class=\"table\"><tr>";

for($i = 0; $i < $req->columnCount(); $i++)
{
    $colonne = $req->getColumnMeta($i);
    $content .= "<th>$colonne[name]</th>";
}

$content .= "<th>Modification</th>";
$content .= "<th>Supression</th>";
$content .= "</tr>";

while($ligne = $req->fetch(PDO::FETCH_ASSOC))
{
    $content .= "<tr>";
    foreach($ligne as $indice => $valeur)
    {
        if($indice == 'photo')
        {
            $content .= "<td><img src=\"$valeur\" width=\"70\" class=\"img-responsive\"></td>";
        }else{
            $content .= "<td>$valeur</td>";
        }
    }
    $content .= "<td><a href=\"?action=modification&id_produit=$ligne[id_produit]\">Modification</a></td>";
    $content .= "<td><a onclick=\"return confirm('êtes vous sûr de vouloir supprimer le produit ?');\" href=\"?action=suppression&id_produit=$ligne[id_produit]\">Suppression</a></td>";

    $content .= "</tr>";
}

$content .= "</table>";
$content .= "<hr>";


?>

<?php require_once('header.inc.php') ?>

<?= $content ?>

<div class="text-center">
    <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="id_produit" value="<?= $id_produit ?>">

        <label for="reference">Réference</label>
        <input type="text" name="reference" placeholder="la réference" id="reference" class="form-control"
            value="<?= $reference ?>">

        <label for="categorie">categorie</label>
        <input type="text" name="categorie" placeholder="la categorie" id="categorie" class="form-control"
            value="<?= $categorie ?>">

        <label for="titre">titre</label>
        <input type="text" name="titre" placeholder="le titre" id="titre" class="form-control" value="<?= $titre ?>">

        <label for="description">Déscription</label>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="description du produit"
            class="form-control"> <?= $description ?> </textarea>

        <label for="couleur">Couleur</label>
        <select name="couleur" id="couleur" class="form-control">
            <option <?php if($couleur == 'noir') echo 'selected'?>>Noir</option>
            <option <?php if($couleur == 'gris') echo 'selected'?>>Gris</option>
            <option <?php if($couleur == 'beige') echo 'selected'?>>Beige</option>
            <option <?php if($couleur == 'blanc') echo 'selected'?>>Blanc</option>
        </select>

        <label for="pointure">pointure</label>
        <select name="pointure" id="pointure" class="form-control">
            <option <?php if($pointure == '35') echo 'selected'?>>35</option>
            <option <?php if($pointure == '36') echo 'selected'?>>36</option>
            <option <?php if($pointure == '37') echo 'selected'?>>37</option>
            <option <?php if($pointure == '38') echo 'selected'?>>38</option>
            <option <?php if($pointure == '39') echo 'selected'?>>39</option>
            <option <?php if($pointure == '40') echo 'selected'?>>40</option>
            <option <?php if($pointure == '41') echo 'selected'?>>41</option>
            <option <?php if($pointure == '42') echo 'selected'?>>42</option>
        </select>

        <label for="public">Public</label>
        <select name="public" id="public" class="form-control">
            <option value="m" <?php if($public == 'e') echo 'selected'?>>enfant</option>
            <option value="f" <?php if($public == 'f') echo 'selected'?>>Femme</option>
            <option value="mixte" <?php if($public == 'mixte') echo 'selected'?>>Mixte</option>
        </select>

        <label for="photo">Photo</label>
        <input type="file" name="photo" id="photo" class="form-control">
        <?php if(!empty($photo)) : ?>
        <img src="<?= $photo ?>" width="100">
        <?php endif; ?>

        <label for="prix">Prix</label>
        <input type="text" name="prix" placeholder="prix" id="prix" class="form-control" value="<?= $prix ?>">

        <label for="stock">Stock</label>
        <input type="text" name="stock" id="stock" class="form-control" value="<?= $stock ?>">

        <input type="submit" value="enregistrer le produit" class="btn btn-default">
    </form>

</div>
<?php require_once('footer.inc.php') ?>