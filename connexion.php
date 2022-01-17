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


<?php require_once("header.php") ?>

<body>
    <div class="connexionf">
        <form method="post" id="form-c">

            <h1>Connexion</h1>
            <div class="social-media">
                <p> <i class="fab fa-google"></i> </p>
                <p> <i class="fab fa-facebook-f"></i> </p>
            </div>
            <p class="choose-email">ou utiliser mon adresse e-mail :</p>

            <div class="inputs">

                <div>
                    <label for="pseudo"> Pseudo</label>
                    <input type="text" name="pseudo" placeholder="Votre pseudo" id="pseudo" class="form-control">
                </div>
                <br>
                <div>
                    <label for="mdp"> Mot de passe</label>
                    <input type="password" name="mdp" placeholder="votre mot de passe" id="mdp" class="form-control">
                </div>

                <p class="inscription">Je n'ai pas de compte. Je m'en <a href="inscription.php">crée</a> un.</p>
                <div align="center">
                    <button type="submit">Se connecter</button>
                </div>
        </form>
    </div>
</body>


<?php require_once("footer.php") ?>

</html>