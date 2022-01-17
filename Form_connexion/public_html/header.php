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
    <!--lien css bootstrap-->
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/inscription.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/slider.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-black">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="../images/logoss.png" id="logo" alt="logo"></a>
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
                        <li class="nav-item">
                            <a class="nav-link text-light px-3 text-uppercase fw-light" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light px-3 text-uppercase fw-light"
                                href="./connexion.php">Connexion</a>
                        </li>
                    </ul>
                    <form class="form-inline ml-3 d-flex">
                        <div class="input-group">
                            <input type="text" class="form-control" id="recherche" placeholder="Recherche...">
                           <div class="input-group-append">
                                <button type="button" class="btn" id="bouton"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="30" height="30"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#000000"></path><g fill="#ffffff"><path d="M72.24,10.32c-32.26344,0 -58.48,26.21656 -58.48,58.48c0,32.26344 26.21656,58.48 58.48,58.48c12.76563,0 24.56375,-4.11187 34.185,-11.0725l45.2575,45.15l9.675,-9.675l-44.72,-44.8275c8.78813,-10.23937 14.0825,-23.52906 14.0825,-38.055c0,-32.26344 -26.21656,-58.48 -58.48,-58.48zM72.24,17.2c28.54125,0 51.6,23.05875 51.6,51.6c0,28.54125 -23.05875,51.6 -51.6,51.6c-28.54125,0 -51.6,-23.05875 -51.6,-51.6c0,-28.54125 23.05875,-51.6 51.6,-51.6z"></path></g></g></svg>
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
<!--
    <link rel="stylesheet" href="../css/inscription.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-black">
            <div class="container-fluid">
                <a class="navbar-brand" id="logo" href="index.php"><img src="../image/logoss.png" alt="logo"></a>
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
                        <li class="nav-item">
                            <a class="nav-link text-light px-3 text-uppercase fw-light" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light px-3 text-uppercase fw-light"
                                href="connexion.php">Connexion</a>
                        </li>
                    </ul>
                    <form class="form-inline ml-3 d-flex">
                        <div class="input-group">
                            <input type="text" class="form-control" id="recherche" placeholder="Recherche...">
                            <div class="input-group-append">
                                <button type="button" class="btn bg-light" id="bouton"><i
                                        class="fas fa-search text-muted"></i></button>
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

-->






<!--
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/8e51d40a51.js" crossorigin="anonymous"></script>
        
        <title>Document</title>
    </head>
    
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand" id="logo" href="#"><img src="images/logoss.png" alt="logo"></a>
            <button class="navbar-toggler" id="menu_brg" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="nav">
                    <li class="nav-item active dropdown" aria-current="page">
                        <a class="nav-link text-uppercase" data-toggle="dropdown" id="navbar" aria-current="page"
                            href="#">Femme</a>
                        <div class="dropdown-menu bg-black ">
                            <a class="dropdown-item text-white" href="#">Bottines</a>
                            <a class="dropdown-item text-white" href="#">Sneakers</a>
                            <a class="dropdown-item text-white" href="#">Escarpins</a>
                            <a class="dropdown-item text-white" href="#">Espadrilles</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" id="navbar" aria-current="page" href="#">Enfant</a>
                        <div class="dropdown-menu bg-black ">
                            <a class="dropdown-item text-white" href="#">Filles</a>
                            <a class="dropdown-item text-white" href="#">Garçons</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" id="navbar" aria-current="page"
                            href="#">Accessoir</a>
                        <div class="dropdown-menu bg-black ">
                            <a class="dropdown-item text-white" href="#">Chaussettes</a>
                            <a class="dropdown-item text-white" href="#">Cirages</a>
                            <a class="dropdown-item text-white" href="#">Semelles</a>
                            <a class="dropdown-item text-white" href="#">Soins protecteurs</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="navbar" href="#">Connexion</a>
                    </li>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" id="recherche" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-success" id="bouton" type="submit"><i
                                class="fas fa-search text-muted"></i></button>
                    </form>
                    <div class="d-flex" id="icon1">
                        <button type="button" class="btn" id="bouton2"><i
                                class="fas fa-user-circle text-white"></i></button>
                        <button type="button" class="btn" id="bouton3"><i
                                class="fas fa-shopping-cart text-white"></i></button>
                    </div>

            </div>
        </div>
    </nav>
-->