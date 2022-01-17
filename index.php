<?php
require_once("init.inc.php");


    $req = $pdo->query('SELECT DISTINCT(categorie) FROM produit');


        
    while($categorie = $req->fetch(PDO::FETCH_ASSOC))
    

    $content .= '<div class="col-md-8 col-md-offset-1">';

    if(isset($_GET['categorie']))
    {
        $req = $pdo->query("SELECT * FROM produit WHERE categorie = '$_GET[categorie]' ");
    }else{
        $req = $pdo->query("SELECT * FROM produit");
    }

    $content .= '<div class="row">';

    while($produit = $req->fetch(PDO::FETCH_ASSOC))
    {
        $content .= '<div class="thumbnail col-sm-4 col-lg-4 col-md-4">
                        <a href="page-produit.php?id_produit=' .$produit['id_produit'] . ' "><img height="300" src=" '. $produit['photo'] .'"></a> 
                            <div class="caption"> 
                                <a id="tittre" href="page-produit.php?id_produit=' .$produit['id_produit'] . '"> 
                                    <h4> ' . $produit['titre'] .  ' </h4>
                                </a>
                                <p>' .$produit['description'] . '</p>
                                <p>' .$produit['prix']. '</p>
                            </div>
                    </div>';
    }

    $content .= '</div></div></div>'; 
?>

<body>
    <header><?php require_once("header.php") ?></header>
    <main>
        <div id="content1">
        </div>
        <div class="container">
            <h2>Nos coups de coeur </h2>
            <div class="row">
                <?= $content ?>
            </div>
        </div>
        <!--image slider start-->
        <div class="slider1">
            <div class="slider">
                <div class="slides">
                    <!--radio buttons start-->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <!--radio buttons end-->
                    <!--slide images start-->
                    <div class="slide first">
                        <img src="./images/1.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="./images/2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="./images/3.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="./images/4.jpg" alt="">
                    </div>
                    <!--slide images end-->
                    <!--automatic navigation start-->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                    <!--automatic navigation end-->
                </div>
                <!--manual navigation start-->
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
                <!--manual navigation end-->
            </div>
            <!--image slider end-->
        </div>
        <script type="text/javascript">
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4) {
                counter = 1;
            }
        }, 5000);
        </script>
        coucou!
    </main>

    <footer><?php require_once("footer.php") ?></footer>










    <!--script bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>