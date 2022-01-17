<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js ">
    </script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="../css/styleboutique.css">
    <link rel="stylesheet" href="../css/upboutton.css">
    <title>boutique</title>
</head>

<body>

    <main>
        <div class="btn">
            <img src="https://img.icons8.com/ios-filled/50/000000/long-arrow-up.png" / class="icone">
        </div>
        <div class="container">
            <div class="filtre">
                <h4>Taille</h4>
                <div class="check">
                    <ol>
                        <li class="filter__item"> <button id="35" title="Affiner par Tailles: 35"
                                data-action="enableFilter" data-ca-event="filters" data-attributeid="size"> 35
                            </button> </li>
                        <li class="filter__item"> <button id="36" title="Affiner par Tailles: 36"
                                data-action="enableFilter" data-ca-event="filters" data-attributeid="size"> 36
                            </button> </li>
                        <li class="filter__item"> <button id="37" title="Affiner par Tailles: 37"
                                data-action="enableFilter" data-ca-event="filters" data-attributeid="size"> 37
                            </button> </li>
                        <li class="filter__item"> <button id="38" title="Affiner par Tailles: 38"
                                data-action="enableFilter" data-ca-event="filters" data-attributeid="size"> 38
                            </button> </li>

                        <li class="filter__item"> <button id="39" title="Affiner par Tailles: 35"
                                data-action="enableFilter" data-ca-event="filters" data-attributeid="size"> 39
                            </button> </li>
                        <li class="filter__item"> <button id="40" title="Affiner par Tailles: 36"
                                data-action="enableFilter" data-ca-event="filters" data-attributeid="size"> 40
                            </button> </li>
                        <li class="filter__item"> <button id="41" title="Affiner par Tailles: 37"
                                data-action="enableFilter" data-ca-event="filters" data-attributeid="size"> 41
                            </button> </li>
                        <li class="filter__item"> <button id="42" title="Affiner par Tailles: 38"
                                data-action="enableFilter" data-ca-event="filters" data-attributeid="size"> 42
                            </button> </li>
                    </ol>
                </div>
                <div class="Marque">
                    <h4>Marque</h4>
                    <select id="monselect">
                        <option value="valeur1">tommy_hilfiger</option>
                        <option value="valeur2">Loubouti</option>
                        <option value="valeur3">Valeur 3</option>
                    </select>
                </div>
                <div class="couleur">
                    <h4>Couleur</h4>
                    <ol>
                        <li><input type="checkbox" name="noir"> Noir </li>
                        <li><input type="checkbox" name="gris"> Gris </li>
                        <li><input type="checkbox" name="beige"> Beige </li>
                        <li><input type="checkbox" name="beige"> Blanc </li>
                    </ol>
                </div>
            </div>

            <div class="container1">
                <p>ACCEUIL - FEMME - BOTTINES</p>
                <a href="#">
                    <h2>Bottines</h2>
                </a>
                <div class="articles">
                    <a href="#">
                        <div class="card1">
                            <div class="card" style="width: 14rem;">
                                <img src="./image/bottine-noire-à-talon-chiara-femme-suédine.jpg" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Bottine Chiara</h5>
                                    <div class="card-text1">Du glamour, c'est ce que la bottine noire Chiara va apporter
                                        à
                                        votre
                                        tenue.
                                    </div>
                                    <p class="card-text">149 €</p>
                                </div>
                            </div>
                    </a>
                    <a href="#">
                        <div class="card" style="width: 14rem;">
                            <img src="./image/bottine-noire-à-talon-chiara-femme-suédine.jpg" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bottine Chiara</h5>
                                <div class="card-text1">Du glamour, c'est ce que la bottine noire Chiara va apporter à
                                    votre
                                    tenue.
                                </div>
                                <p class="card-text">149 €</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="card" style="width: 14rem;">
                            <img src="./image/bottine-noire-à-talon-chiara-femme-suédine.jpg" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bottine Chiara</h5>
                                <div class="card-text1">Du glamour, c'est ce que la bottine noire Chiara va apporter à
                                    votre
                                    tenue.
                                </div>
                                <p class="card-text">149 €</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="card" style="width: 14rem;">
                            <img src="./image/bottine-noire-à-talon-chiara-femme-suédine.jpg" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bottine Chiara</h5>
                                <div class="card-text1">Du glamour, c'est ce que la bottine noire Chiara va apporter à
                                    votre
                                    tenue.
                                </div>
                                <p class="card-text">149 €</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>


        </div>




    </main>
    <footer>
        <footer><?php include("footer.php") ?></footer>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
</body>

</html>