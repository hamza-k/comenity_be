<?php include "/include/php_starting.php" ?>
<!DOCTYPE html>
<html lang="<?php if (isset($_GET['lang'])) {echo $_GET['lang'];} ?>">

<head>
    <meta charset="UTF-8">
    <title>Victor Vanickstael - Comenity</title>
    <?php include "include/head.php" ?>
</head>

<body class="profil">
    <?php include "include/menu.php"; ?>

    <header class="header" style="background-image: url(img/cover-profil.jpg)">
    </header>
    <main class="main">
        <h1 class="stroke stroke-left">Victor Vanickstael</h1>
        <div class="side">

            <div class="side-profilpic">
                <img src="img/profil.jpg" alt="tutor">
            </div>
            <h2>
                <?php echo T_("Coordonnées"); ?>
            </h2>
            <ul>
                <li class="side-age">25
                    <?php echo T_("ans"); ?>
                </li>
                <li class="side-city">Brussels, BE</li>
                <li class="side-mail">victor.vanickstael@gmail.com</li>
                <li class="side-lang">FR, NL, EN</li>
                <li class="side-price">11€/
                    <?php echo T_("heure"); ?>
                </li>
                <li class="side-dispo">
                    <?php echo T_("Week-ends"); ?>,
                    <?php echo T_("vacances d'été"); ?>
                </li>
            
            <li class="side-rate">
                <img src="img/icon-star.svg" alt="star" class="side-rate--star icon icon-little">
                <img src="img/icon-star.svg" alt="star" class="side-rate--star icon icon-little">
                <img src="img/icon-star.svg" alt="star" class="side-rate--star icon icon-little">
                <img src="img/icon-star.svg" alt="star" class="side-rate--star icon icon-little">
            </li>
            <li><button class="side-cv btn"><?php echo T_("Télécharger le CV"); ?></button></li>
            <li><button class="side-report"><?php echo T_("Signaler"); ?></button></li>
            </ul>
        </div>
        <div class="content content-profil">
            <h2>
                <?php echo T_("Introduction"); ?>
            </h2>
            <p>Bonjour,</p>

            <p>Ingenieur de gestion et statisticien de formation, avec plus de 5 ans d’expérience dans l’enseignement, je consacre mon temps et mon énergie à la réussite de mes étudiants et à l’accomplissement de leurs projets.</p>

            <p>Je propose mes services en tant que professeur particulier pour les cours ou comme consultant pour des travaux, mémoires ou projets tant au niveau secondaire qu’universitaire. </p>

            <p>J’enseigne en français, en anglais ou en espagnol en face à face ou à distance (via webcam). Qu’il s’agisse de mathématiques, de statistiques, et de physique ou encore de gestion, de finance, de comptabilité, de commerce, d’économie (micro/macro), je peux vous accompagner dans tous les domaines de la gestion et des sciences, quelque soit votre niveau.</p>
            <h2>Je donne des cours de</h2>
            <ul class="profil-lvl1">
                <li>
                    <?php echo T_("Mathématique"); ?>,
                    <?php echo T_("pour les étudiants en"); ?> :
                    <ul class="profil-lvl2">
                        <li><?php echo T_("Comptabilité"); ?>, <?php echo T_("à"); ?> Haute École Francisco Ferrer,</li>
                        <li><?php echo T_("Architecture"); ?>, <?php echo T_("à"); ?> Université Cathholique de Louvain,</li>
                    </ul>
                </li>
                <li>
                    <?php echo T_("Anglais"); ?>,
                    <?php echo T_("pour les étudiants en"); ?> :
                    <ul class="profil-lvl2">
                        <li><?php echo T_("Commerce extérieur"); ?>, <?php echo T_("à"); ?> EPHEC,</li>
                        <li><?php echo T_("Psychologie"); ?>, <?php echo T_("à"); ?> ULB,</li>
                    </ul>
                </li>
                <li>
                    <?php echo T_("Informatique"); ?>,
                    <?php echo T_("pour les étudiants en"); ?> :
                    <ul class="profil-lvl2">
                        <li><?php echo T_("Graphisme"); ?>, <?php echo T_("à"); ?> Haute École Francisco Ferrer,</li>
                        <li><?php echo T_("Eléctronique"); ?>, <?php echo T_("à"); ?> ECAM,</li>
                        <li><?php echo T_("Communication"); ?>, <?php echo T_("à"); ?> ISFSC</li>
                    </ul>
                </li>
            </ul>
            <button class="content-profil--contact btn" onclick="location.href='mailto:victor.vanickstael@gmail.com';"><?php echo T_("Contacter"); ?></button>
        </div>
    </main>

    <?php include "include/footer.php" ?>
</body>

</html>
