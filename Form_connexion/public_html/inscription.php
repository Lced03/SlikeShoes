<?php 
require_once('init.inc.php'); 
if($_POST){
    $erreur = '' ;
        if(strlen($_POST['pseudo']) <= 3 || strlen($_POST['pseudo'])> 20){
            $erreur .= '<div class="alert alert-danger test-center" role="alert">
            <p>le pseudo doit avoir entre 4 et 20 caractères</p></div>';}

        if(!preg_match('#^[a-zA-Z0-9._-]+$#', $_POST['pseudo'])){
            $erreur .= '<div class="alert alert-danger test-center" role="alert">
            <p>le pseudo doit contenir uniquelent des caractères de a-z, A-Z, 0-9 ._-</p></div>';
        }
        $req = $pdo->query("SELECT * FROM membre WHERE pseudo = '$_POST[pseudo]'");
            if($req->rowCount() >=1)
            {
                $erreur .= '<div class="alert alert-danger test-center" role="alert">
            <p>le pseudo existe déjà, veuillez en saisir un autre !</p></div>';
            } 
            // on parcour notre tableau $_POST
            foreach ($_POST as $indice => $valeur) // opur chaque ligne de notre tableau *_POST(une ligne = indice => valeur) 
            {
                $_POST[$indice]= addslashes($valeur);
            }
            $_POST['mdp'] = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        
            //si la variable erreur reste vide cela veut que nous n'avons aucune erreur et donc nous pouvons envoyer en bdd
            if(empty($erreur))
            {
                $date_enregistrement = date('Y-m-d H:i:s');
                $pdo->query("INSERT INTO membre (pseudo, mdp, nom, prenom, email, civilite, ville, code_postal, adresse, date_enregistrement) VALUES ('$_POST[pseudo]', '$_POST[mdp]', '$_POST[nom]', '$_POST[prenom]', '$_POST[email]', '$_POST[civilite]', '$_POST[ville]', '$_POST[cp]', '$_POST[adresse]', '$date_enregistrement') ") ;

                $content .= '<div class="alert alert-succes" role="alert"> Inscription validé ! </div>';

            }

            $content .= $erreur;
    } 
        ?>


<head>
    <title>Inscription</title>

</head>

<body>

    <?php require_once("header.php") ?>

    <div class="form" id="form1">
        <form method="post">

            <h1>Créer un compte</h1>

            <div class="inputs">
                <input type="text" placeholder="Prénom" />
                <input type="text" placeholder="Nom" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Mot de passe" />
            </div>

            <div align="center">
                <button type="submit">S'incrire</button>
            </div>
        </form>
    </div>
    <?php require_once("footer.php") ?>
</body>

</html>