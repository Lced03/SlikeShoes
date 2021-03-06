<?php require_once("init.inc.php");

if(!isset($_GET['id_produit'])){ // si dans l'url il n'y a pas d'id produit on renvoi vers la page index
    header('location:index.php'); exit();
}

if(isset($_GET['id_produit'])){ // on recupere le produit dont l"id est celui qui se trouve dans l'url 
    $req = $pdo->query("SELECT * FROM produit WHERE id_produit = '$_GET[id_produit]'");
}


if($req->rowCount() <= 0) { header('location:index.php'); exit(); }

$produit = $req->fetch(PDO::FETCH_ASSOC);

$content .= "<h1>$produit[titre]</h1>";
$content .= "<p>categorie : $produit[categorie]</p>";
$content .= "<p>couleur : $produit[couleur]</p>";
$content .= "<p>pointure : $produit[pointure]</p>";
$content .= "<p>  <img height=\"300\" src=\"$produit[photo]\"></p>";
$content .= "<p>prix : $produit[prix]</p>";
if($produit['stock'] > 0) {
    $content .= "<p>Nombre de produit disponible : $produit[stock]</p><br>";
    $content .= "<form method=\"post\" action=\"panier.php\" >";
    $content .= "<input type=\"hidden\" name=\"id_produit\" value=\"$produit[id_produit]\"><br>";

    $content .= "<label for=\"quantite\">Quantité</label><br>";
    $content .= "<select name=\"quantite\" id=\"quantite\">";
            for($i=1; $i <= $produit['stock']; $i++) {
                $content .= "<option>$i</option>";
            }
    $content .= "</select<br>";
    $content .= "<input type=\"submit\" value=\"ajouter au panier\" name=\"ajouter_panier\" class=\"btn btn-secondary\"><br>";
    $content .= "</form>";
}

?>


<?php require_once("header.php") ?>

<body>

    <section aria-label="Main content" role="main" class="product-detail">
        <div itemscope="" itemtype="http://schema.org/Product">
            <meta itemprop="url"
                content="http://html-koder-test.myshopify.com/products/tommy-hilfiger-t-shirt-new-york">
            <meta itemprop="image"
                content="https://cdn.shopify.com/s/files/1/0557/2172/2044/products/ilian_58205_639b_360x.jpg?v=1633501513">
            <div class="shadow">
                <div class="_cont detail-top">
                    <div class="cols">
                        <div class="left-col">
                            <div class="thumbs">
                                <a class="thumb-image active"
                                    href="https://cdn.shopify.com/s/files/1/0557/2172/2044/products/ilian_58205_639b_360x.jpg?v=1633501513"
                                    data-index="0">
                                    <span><img
                                            src="https://cdn.shopify.com/s/files/1/0557/2172/2044/products/ilian_58205_639b_360x.jpg?v=1633501513"
                                            alt="chaussure Ilian - rouge"></span>
                                </a>
                                <a class="thumb-image"
                                    href="https://cdn.shopify.com/s/files/1/0557/2172/2044/products/ilian_58205_639a_120x.jpg?v=1633501513"
                                    data-index="1">
                                    <span><img
                                            src="https://cdn.shopify.com/s/files/1/0557/2172/2044/products/ilian_58205_639a_120x.jpg?v=1633501513"
                                            alt="chaussure Ilian-rouge"></span>
                                </a>
                                <a class="thumb-image"
                                    href="https://cdn.shopify.com/s/files/1/0557/2172/2044/products/2021-02_EmilieKarstonH21-22_sansgrain_-84_8cc675f6-378d-4cbf-8c07-78c152f7de0d_540x.jpg?v=1633501513"
                                    data-index="2">
                                    <span><img
                                            src="https://cdn.shopify.com/s/files/1/0557/2172/2044/products/2021-02_EmilieKarstonH21-22_sansgrain_-84_8cc675f6-378d-4cbf-8c07-78c152f7de0d_540x.jpg?v=1633501513"
                                            alt="chaussure Illian-rouge"></span>
                                </a>
                            </div>
                            <div class="big">
                                <span id="big-image" class="img"
                                    quickbeam="image"><?= "<img height=\"650\" src=\"$produit[photo]\">" ?> </span>
                                <div id="banner-gallery" class="swipe">
                                    <div class="swipe-wrap">
                                        <div
                                            style="background-image: url('https://cdn.shopify.com/s/files/1/0557/2172/2044/products/ilian_58205_639b_360x.jpg?v=1633501513')">
                                        </div>
                                        <!--<div style="background-image: url('https://cdn.shopify.com/s/files/1/0557/2172/2044/products/ilian_58205_639a_120x.jpg?v=1633501513')"></div>
                    <div style="background-image: url('https://cdn.shopify.com/s/files/1/0557/2172/2044/products/2021-02_EmilieKarstonH21-22_sansgrain_-84_8cc675f6-378d-4cbf-8c07-78c152f7de0d_540x.jpg?v=1633501513')"></div>-->
                                    </div>
                                </div>
                                <div class="detail-socials">
                                    <div class="social-sharing"
                                        data-permalink="http://html-koder-test.myshopify.com/products/tommy-hilfiger-t-shirt-new-york">
                                        <a target="_blank" class="share-facebook" title="Share"></a>
                                        <a target="_blank" class="share-twitter" title="Tweet"></a>
                                        <a target="_blank" class="share-pinterest" title="Pin it"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-col">
                            <h1 itemprop="name"><?= $produit["titre"] ?></h1>
                            <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                <meta itemprop="priceCurrency" content="Euro">
                                <link itemprop="availability" href="https://schema.org/InStock">
                                <div class="price-shipping">
                                    <div class="price" id="price-preview" quickbeam="price" quickbeam-price="140">
                                        <?= "$produit[prix]€" ?>
                                    </div>
                                    <a>Livraison gratuite</a>
                                </div>
                                <div class="swatches">
                                    <div class="swatch clearfix" data-option-index="0">
                                        <div class="header">Pointure</div>
                                        <div data-value="36" class="swatch-element plain 36 available">
                                            <input id="swatch-0-36" type="radio" name="option-0" value="36" checked="">
                                            <label for="swatch-0-36">
                                                36
                                                <img class="crossed-out"
                                                    src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886">
                                            </label>
                                        </div>
                                        <div data-value="37" class="swatch-element plain 37 available">
                                            <input id="swatch-0-37" type="radio" name="option-0" value="37">
                                            <label for="swatch-0-37">
                                                37
                                                <img class="crossed-out"
                                                    src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886">
                                            </label>
                                        </div>
                                        <div data-value="38" class="swatch-element plain 38 available">
                                            <input id="swatch-0-38" type="radio" name="option-0" value="38">
                                            <label for="swatch-0-38">
                                                38
                                                <img class="crossed-out"
                                                    src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886">
                                            </label>
                                        </div>
                                        <div data-value="39" class="swatch-element plain 39 available">
                                            <input id="swatch-0-39" type="radio" name="option-0" value="39">
                                            <label for="swatch-0-39">
                                                39
                                                <img class="crossed-out"
                                                    src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="swatch clearfix" data-option-index="1">
                                        <div class="header">Couleur</div>
                                        <div data-value="Red" class="swatch-element color red available">
                                            <div class="tooltip">Rouge</div>
                                            <input quickbeam="color" id="swatch-1-blue" type="radio" name="option-1"
                                                value="Blue" checked="">
                                            <label for="swatch-1-blue" style="border-color: red;">
                                                <img class="crossed-out"
                                                    src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886">
                                                <span style="background-color: red;"></span>
                                            </label>
                                        </div>
                                        <div data-value="Brown" class="swatch-element color brown available">
                                            <div class="tooltip">Marron</div>
                                            <input quickbeam="color" id="swatch-1-red" type="radio" name="option-1"
                                                value="Brown">
                                            <label for="swatch-1-red" style="border-color: brown;">
                                                <img class="crossed-out"
                                                    src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886">
                                                <span style="background-color: brown;"></span>
                                            </label>
                                        </div>
                                        <div data-value="Black" class="swatch-element color black available">
                                            <div class="tooltip">Noir</div>
                                            <input quickbeam="color" id="swatch-1-yellow" type="radio" name="option-1"
                                                value="Black">
                                            <label for="swatch-1-yellow" style="border-color: black;">
                                                <img class="crossed-out"
                                                    src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886">
                                                <span style="background-color: black;"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <form method="post" action="panier.php">
                                    <div class="btn-and-quantity-wrap">
                                        <div class="btn-and-quantity">
                                            <div class="spinner">
                                                <span class="btn minus" data-id="2721888517">-</span>
                                                <input type="text" id="updates_2721888517" name="quantity" value="1"
                                                    class="quantity-selector">
                                                <input type="hidden" id="product_id" name="product_id"
                                                    value="2721888517">
                                                <span class="btn plus" data-id="2721888517">+</span>
                                            </div>
                                            <!---->
                                            <div id="AddToCart" quickbeam="add-to-cart">
                                                <input type="submit" name="ajouter_panier" value="Ajouter au panier">
                                </form>
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="tabs">
                        <div class="tab-labels">
                            <span data-id="1" class="active">Description</span>
                        </div>
                        <div class="tab-slides">
                            <div id="tab-slide-1" itemprop="description" class="slide active">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur dicta
                                tempora optio exercitationem harum. Officiis facilis nesciunt voluptates
                                repudiandae animi ex fugiat quidem doloremque deserunt pariatur veritatis
                                nihil, perferendis expedita?
                            </div>
                        </div>
                    </div>
                    <div class="social-sharing-btn-wrapper">
                        <span id="social_sharing_btn">Share</span>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <aside class="related">
            <div class="_cont">
                <h2>Vous aimerez aussi...</h2>
                <div class="collection-list cols-4" id="collection-list" data-products-per-page="4">
                    <a class="product-box">
                        <span class="img">
                            <span
                                style="background-image: url('https://cdn.shopify.com/s/files/1/0557/2172/2044/products/iliette_56130_019d_540x.jpg?v=1632216367')"
                                class="i first"></span>
                            <span class="i second"
                                style="background-image: url('https://cdn.shopify.com/s/files/1/0557/2172/2044/products/iliette_56130_019d_540x.jpg?v=1632216367')"></span>
                        </span>
                        <span class="text">
                            <strong>ILIETTE</strong>
                            <span>
                                €170
                            </span>

                        </span>
                    </a>
                    <a class="product-box">
                        <span class="img">
                            <span
                                style="background-image: url('https://cdn.shopify.com/s/files/1/0557/2172/2044/products/glerdan_58144_023b_540x.jpg?v=1630924944')"
                                class="i first"></span>
                            <span class="i second"
                                style="background-image: url('https://cdn.shopify.com/s/files/1/0557/2172/2044/products/glerdan_58144_023b_540x.jpg?v=1630924944')"></span>
                        </span>
                        <span class="text">
                            <strong>GLERDAN</strong>
                            <span>
                                €155
                            </span>

                        </span>
                    </a>
                    <a href="/collections/men/products/copy-of-copy-of-copy-of-tommy-hilfiger-t-shirt-new-york-4"
                        class="product-box">
                        <span class="img">
                            <span
                                style="background-image: url('https://cdn.shopify.com/s/files/1/0557/2172/2044/products/ORPLOU_57206_716_4_bce4c568-27a2-4b23-9a4c-c0a42adf9f61_540x.jpg?v=1630928583')"
                                class="i first"></span>
                            <span class="i second"
                                style="background-image: url('https://cdn.shopify.com/s/files/1/0557/2172/2044/products/ORPLOU_57206_716_4_bce4c568-27a2-4b23-9a4c-c0a42adf9f61_540x.jpg?v=1630928583')"></span>
                        </span>
                        <span class="text">
                            <strong>ORPLOU</strong>
                            <span>
                                €120
                            </span>

                        </span>
                    </a>
                    <a class="product-box">
                        <span class="img">
                            <span
                                style="background-image: url('https://cdn.shopify.com/s/files/1/0557/2172/2044/products/GLERDANverninoir_1080x.jpg?v=1625667606')"
                                class="i first"></span>
                            <span class="i second"
                                style="background-image: url('https://cdn.shopify.com/s/files/1/0557/2172/2044/products/GLERDANverninoir_1080x.jpg?v=1625667606')"></span>
                        </span>
                        <span class="text">
                            <strong>LUCILLE</strong>
                            <span>
                                €130
                            </span>
                        </span>
                </div>
            </div>
        </aside>
        </div>

    </section>

    <?php require_once("footer.php") ?>