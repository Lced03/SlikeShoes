<!DOCTYPE html>
<html lang="fr">



<head>
    <meta charset="UTF-8">
    <title>header</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8e51d40a51.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="apple-touch-icon" type="image/png"
        href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="shortcut icon" type="image/x-icon"
        href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

    <link rel="mask-icon" type="image/x-icon"
        href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg"
        color="#111">

    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/inscription.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/slider.css">
    <link rel="stylesheet" href="./css/profil.css">
    <link rel="stylesheet" href="./css/produit-style1.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-black">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="./images/logoss.png" id="logo" alt="logo"></a>
                <button type="button" class="navbar-toggler bg-light" id="menu_brg" data-toggle="collapse"
                    data-target="#nav"><span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="nav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light font-weight-bold px-3 text-uppercase " data-toggle="dropdown"
                                href="#">Femme
                            </a>
                            <div class="dropdown-menu bg-black ">
                                <a class="dropdown-item text-white" href="#">Bottines</a>
                                <a class="dropdown-item text-white" href="#">Sneakers</a>
                                <a class="dropdown-item text-white" href="#">Escarpins</a>
                                <a class="dropdown-item text-white" href="#">Espadrilles</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light font-weight-bold px-3 text-uppercase " data-toggle="dropdown"
                                href="#">Bébé/Enfant</a>
                            <div class="dropdown-menu bg-black ">
                                <a class="dropdown-item text-white" href="#">Fille</a>
                                <a class="dropdown-item text-white" href="#">Garçon</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light px-3 text-uppercase fw-light" href="#">Bientôt disponible</a>
                        </li>

                        <?php if(internauteEstConnecteEtEstAdmin()) : ?>
                        <li class="nav-item">
                            <a class="nav-link text-light px-3 text-uppercase fw-light"
                                href="<?= URL ?>gestion_produits.php">BackOffice</a>
                        </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a class="nav-link text-light px-3 text-uppercase fw-light"
                                href="<?= URL ?>panier.php">Panier</a>
                        </li>
                        <?php if(internauteEstConnecte()) : ?>
                        <! -- les 2 li suivant s'affiche uniquement si je suis connecté -->
                            <li class="nav-item">
                                <a class="nav-link text-light px-3 text-uppercase fw-light"
                                    href="<?= URL ?>profil.php">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light px-3 text-uppercase fw-light"
                                    href="<?= URL ?>connexion.php?action=deconnexion ">Deconnexion</a>
                            </li>
                            <?php endif ?>

                            <?php if(!internauteEstConnecte()) : ?>
                            <! -- les 2 li suivant s'affiche uniquement si je ne suis pas connecté -->
                                <li class="nav-item">
                                    <a class="nav-link text-light px-3 text-uppercase fw-light"
                                        href="<?= URL ?>inscription.php ">Inscription</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light px-3 text-uppercase fw-light"
                                        href="<?= URL ?>connexion.php ">Connexion</a>
                                    <?php endif ?>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light px-3 text-uppercase fw-light" href="#">Contact</a>
                                </li>

                    </ul>
                    <form class="form-inline ml-3 d-flex">
                        <div class="input-group">
                            <input type="text" class="form-control" id="recherche" placeholder="Recherche...">
                            <div class="input-group-append">
                                <button type="button" class="btn" id="bouton"><svg xmlns="http://www.w3.org/2000/svg"
                                        x="0px" y="0px" width="30" height="30" viewBox="0 0 172 172"
                                        style=" fill:#000000;">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                            font-weight="none" font-size="none" text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="#000000"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M72.24,10.32c-32.26344,0 -58.48,26.21656 -58.48,58.48c0,32.26344 26.21656,58.48 58.48,58.48c12.76563,0 24.56375,-4.11187 34.185,-11.0725l45.2575,45.15l9.675,-9.675l-44.72,-44.8275c8.78813,-10.23937 14.0825,-23.52906 14.0825,-38.055c0,-32.26344 -26.21656,-58.48 -58.48,-58.48zM72.24,17.2c28.54125,0 51.6,23.05875 51.6,51.6c0,28.54125 -23.05875,51.6 -51.6,51.6c-28.54125,0 -51.6,-23.05875 -51.6,-51.6c0,-28.54125 23.05875,-51.6 51.6,-51.6z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <div class="input-group-append">
                                <button type="button" class="btn" id="bouton2"><i
                                        class="fas fa-user-circle text-white"></i></button>
                            </div>
                            <div class="input-group-append">
                                <button type="button" class="btn" id="bouton3"><i
                                        class="fas fa-shopping-cart text-white"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>

    </header>





    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>