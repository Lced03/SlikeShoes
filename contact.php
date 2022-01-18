<?php require_once("header.php") ?>

<body>
    <div id="">
        <div id="overlay">
            <div class="wrapper">
                <h2>Contact</h2>

                <div id="error_message"></div>

                <form id="myform" onsubmit="return validate();">
                    <div class="input_field">
                        <input type="text" placeholder="Nom" id="name">
                    </div>
                    <div class="input_field">
                        <input type="text" placeholder="Téléphone" id="phone">
                    </div>
                    <div class="input_field">
                        <input type="text" placeholder="Adresse mail" id="email">
                    </div>
                    <div class="input_field">
                        <textarea placeholder="Message" id="message"></textarea>
                    </div>
                    <div class="btn">
                        <input type="submit">
                    </div>
                </form>

            </div>
        </div>
    </div>

    <?php require_once("footer.php") ?>
</body>

</html>