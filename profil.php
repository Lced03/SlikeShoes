<?php require_once('init.inc.php'); 

if(!internauteEstconnecte()) {
    // la fonction header est une fonction predefinie qui permet renvoyer vers une autre page 
    header('location:connexion.php');
    exit();
}


if(internauteEstconnecteEtEstAdmin())
{
    $content .= '<h1> Vous êtes administrateur du site </h1>';
}
?>
<?php require_once("header.php"); ?>
<?= $content  ?>
<h2>Boujour <?= $_SESSION['membre']['pseudo']  ?> vous êtes bien connecté !</h2><br>

<h4>Voici vos informations :</h4> <br>
Votre nom : <?= $_SESSION['membre']['nom']  ?> <br>
Votre prénom : <?= $_SESSION['membre']['prenom']  ?> <br>
Votre email : <?= $_SESSION['membre']['email']  ?> <br>


<?php require_once("footer.php"); ?>