<?php require_once('init.inc.php');

//debug($GET);

if(isset($_GET['action']) && $_GET['action']== 'deconnexion')
{
    unset($_SESSION['membre']);
    $content .= '<div class="alert alert-warning"> Vous êtes déconnecté du site ! </div>';
}

if(internauteEstConnecte()){
    header('location:profil.php');
    exit();
}

if($_POST){
    //debug($_POST);
    $req = $pdo->query("SELECT * FROM membre WHERE pseudo = '$_POST[pseudo]'");
    if($req->rowCount() != 0){
        $membre = $req->fetch(PDO::FETCH_ASSOC); //on recupere le membre sous form d'un tableau assotiatif

        if(password_verify($_POST['mdp'], $membre['mdp'])){
            // remplissage de la session
            $_SESSION['membre']['pseudo'] = $membre['pseudo'];
            $_SESSION['membre']['nom'] = $membre['nom'];
            $_SESSION['membre']['prenom'] = $membre['prenom'];
            $_SESSION['membre']['email'] = $membre['email'];
            $_SESSION['membre']['civilite'] = $membre['civilite'];
            $_SESSION['membre']['ville'] = $membre['ville'];
            $_SESSION['membre']['code_postal'] = $membre['code_postal'];
            $_SESSION['membre']['adresse'] = $membre['adresse'];
            $_SESSION['membre']['statut'] = $membre['statut'];

            header('location:profil.php');
            //debug($_SESSION);
        } else {
            $content .= '<div class="alert alert-danger"> erreur identifiants ! </div>';
        } 
    } else { 
        $content .= '<div class="alert alert-danger"> erreur identifiants ! </div>';
    }
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="../css/connexion-style.css">

</head>
<?php require_once("header.php") ?>

<body>
    <div class="connexionf">
    <form method="post" id="form-c">

        <h1>Connexion</h1>
        <div class="social-media">
            <p>  <i class="fab fa-google"></i>  </p>
            <p>  <i class="fab fa-facebook-f"></i>  </p>
        </div>
        <p class="choose-email">ou utiliser mon adresse e-mail :</p>

        <div class="inputs">
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Mot de passe">
        </div>

        <p class="inscription">Je n'ai pas de compte. Je m'en <a
                    href="./inscription.php">crée</a> un.</p>
        <div align="center">
            <button type="submit">Se connecter</button>
        </div>
    </form>
    </div>
</body>


<?php require_once("footer.php") ?>

</html>