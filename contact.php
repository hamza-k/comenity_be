<?php include "/include/php_starting.php" ?>
<!DOCTYPE html>
<html lang="<?php if (isset($_GET['lang'])) {echo $_GET['lang'];} ?>">

<head>
    <meta charset="UTF-8">
    <title>Contact - Comenity</title>
    <?php include "include/head.php" ?>
</head>

<body class="contact">
    <?php include "include/menu.php"; ?>

    <header class="header">
    </header>
    <main class="main">
        <h1 class="stroke stroke-left stroke-right"><?php echo T_("Contactez-nous"); ?></h1>
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.7162918081162!2d4.339797882071899!3d50.85493775571246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c38c275028d3%3A0xc7799151146ebf77!2sMolenGeek!5e0!3m2!1sfr!2sbe!4v1522223032377" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="main-flex">
        <div class="main-flex--item">
        <h2 class="stroke stroke-left"><?php echo T_("Comment nous retrouver ?"); ?></h2>
        <ul>
            <li>10 Place de la Minoterie, <br>1080 Molenbeek-Saint-Jean, Bruxelles, BE</li>
            <li>info@comenity.be</li>
            <li>+32 486 92 64 13</li>
            <li>
                <ul>
                    <li><img src="/img/icon-facebook.svg" alt=""></li>
                    <li><img src="/img/icon-instagram.svg" alt=""></li>
                    <li><img src="/img/icon-twitter.svg" alt=""></li>
                </ul>
            </li>
        </ul>
        </div>
        <div class="main-flex--item">
        <form action="">
            <input type="text" placeholder="Votre nom">
            <input type="text" placeholder="Votre adresse e-mail">
            <textarea placeholder="Votre message"></textarea>
            <input type="submit" value="<?php echo T_("Envoyer"); ?>">
        </form>
        </div>
        </div>
    </main>

    <?php include "include/footer.php" ?>
</body>

</html>