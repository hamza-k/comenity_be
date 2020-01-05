<?php include "/include/php_starting.php" ?>
<!DOCTYPE html>
<html class="no-js" lang="<?php if (isset($_GET['lang'])) {echo $_GET['lang'];} ?>">

<head>
    <meta charset="UTF-8">
    <title>Comenity</title>
    <?php include "include/head.php" ?>
</head>

<body class="index">

    <div class="intro">
        <header class="intro-header">
            <div class="intro-header--bg">
                <video class="intro-header--bg-video" preload="metadata" autoplay loop>
                <source src="src/video.mp4" type="video/mp4">
                <source src="src/video.webm" type="video/webm">
            </video>
                <div class="intro-header--bg-gradient"></div>
            </div>
            <?php include "include/menu.php"; ?>
            <div class="intro-header--content">
                <img class="intro-header--logo" src="img/logo-white.svg" alt="Comenity">
                <h1 class="intro-header--slogan">
                    <?php echo T_("Soutenons-nous par le partage.") ?>
                </h1>
                <button class="intro-header--cta btn btn-cta"><?php echo T_("Deviens tuteur dès aujourd'hui !"); ?></button>
                <div class="intro-header--videoplay">
                    <img class="icon icon-middle" src="img/icon-play.svg" alt="play">
                    <p>
                        <?php echo T_("Voir le film"); ?>
                    </p>
                </div>
            </div>
            <div class="intro-header--video">

                <span class="close">&#10540;</span>
                <video class="intro-header--video-content" controls>
                <source src="src/comenity.mp4" type="video/mp4">
                <source src="src/comenity.webm" type="video/webm">
                </video>
            </div>
        </header>

        <div class="intro-present">
            <h2 class="intro-present--title stroke stroke-left">We are a student legion</h2>
            <img class="intro-present--quote icon icon-big" src="img/icon-quote.svg" alt="quote">
            <p class="intro-present--desc">
                <?php echo T_("Comenity est un plateforme belge pour les étudiants de hautes écoles et d'universités qui souhaite être accompagné d'un tuteur. Finis les examens et/ou les travaux pendant les vacances, vous pouvez désormais trouver la perle rare parmis nos membres tuteurs."); ?> </p>
            <p class="intro-present--author">Hamza KHADRI</p>
        </div>

    </div>

    <div class="role role-service">
        <h2 class="stroke stroke-left stroke-right">
            <?php echo T_("Nos services"); ?>
        </h2>
        <div class="role-container">
            <div class="role-unit">
                <img class="role-unit--icon icon icon-big" src="img/icon-strong.svg" alt="strong">
                <h3 class="role-unit--title">
                    <?php echo T_("Motivés !"); ?>
                </h3>
                <p class="role-unit--desc">
                    <?php echo T_("Nos tuteurs ont la convictions d'aider les étudiants dans leurs études et leurs projets scolaires/universitaires."); ?>
                </p>
            </div>
            <div class="role-unit">
                <img class="role-unit--icon icon icon-big" src="img/icon-approved.svg" alt="approved">
                <h3 class="role-unit--title">
                    <?php echo T_("Approuvés !"); ?>
                </h3>
                <p class="role-unit--desc">
                    <?php echo T_("Chacun de nos tuteurs ont leurs convictions et donc leurs bagages pour permettre leurs accompagnements.");?> </p>
            </div>
            <div class="role-unit">
                <img class="role-unit--icon icon icon-big" src="img/icon-confident.svg" alt="confident">
                <h3 class="role-unit--title">
                    <?php echo T_("Confiants !"); ?>
                </h3>
                <p class="role-unit--desc">
                    <?php echo T_("Primordial. La réussite d'un étudiant dans leurs parcours est assurés par nos tuteurs, aussi bien pour les étudiants que pour ses professeurs."); ?>
                </p>
            </div>
        </div>
    </div>

    <div class="tutor-section">
        <h2 class="stroke stroke-left stroke-right">
            <?php echo T_("Nos tuteurs"); ?>
        </h2>
        <div class="tutor">
            <div class="tutor-card">
                <img class="tutor-card--img" src="img/tutor-single.jpg" alt="tutor">
                <div class="tutor-card--info">
                    <p class="tutor-card--info-name">Prénom A</p>
                    <p class="tutor-card--info-subject">
                        <?php echo T_("Mathématique"); ?>
                    </p>
                    <div class="tutor-card--info-rate">
                        <img class="icon icon-little" src="img/icon-star.svg" alt="star" class="tutor-card--info-rate--star">
                        <img class="icon icon-little" src="img/icon-star.svg" alt="star" class="tutor-card--info-rate--star">
                        <img class="icon icon-little" src="img/icon-star.svg" alt="star" class="tutor-card--info-rate--star">
                        <img class="icon icon-little" src="img/icon-star.svg" alt="star" class="tutor-card--info-rate--star">
                    </div>
                    <p class="tutor-card--info-consult">
                        <a href="profil.php<?php keepurl(); ?>">
                            <?php echo T_("Consulter"); ?>
                        </a>
                    </p>
                </div>
            </div>
            <div class="tutor-card">
                <img class="tutor-card--img" src="img/tutor-single.jpg" alt="tutor">
                <div class="tutor-card--info">
                    <p class="tutor-card--info-name">Prénom A</p>
                    <p class="tutor-card--info-subject">
                        <?php echo T_("Mathématique"); ?>
                    </p>
                    <div class="tutor-card--info-rate">
                        <img class="icon icon-little" src="img/icon-star.svg" alt="star" class="tutor-card--info-rate--star">
                        <img class="icon icon-little" src="img/icon-star.svg" alt="star" class="tutor-card--info-rate--star">
                        <img class="icon icon-little" src="img/icon-star.svg" alt="star" class="tutor-card--info-rate--star">
                        <img class="icon icon-little" src="img/icon-star.svg" alt="star" class="tutor-card--info-rate--star">
                    </div>
                    <p class="tutor-card--info-consult">
                        <a href="profil.php<?php keepurl(); ?>">
                            <?php echo T_("Consulter"); ?>
                        </a>
                    </p>
                </div>
            </div>
            <div class="tutor-card">
                <img class="tutor-card--img" src="img/tutor-single.jpg" alt="tutor">
                <div class="tutor-card--info">
                    <p class="tutor-card--info-name">Prénom A</p>
                    <p class="tutor-card--info-subject">
                        <?php echo T_("Mathématique"); ?>
                    </p>
                    <div class="tutor-card--info-rate">
                        <img class="icon icon-little" src="img/icon-star.svg" alt="star" class="tutor-card--info-rate--star">
                        <img class="icon icon-little" src="img/icon-star.svg" alt="star" class="tutor-card--info-rate--star">
                        <img class="icon icon-little" src="img/icon-star.svg" alt="star" class="tutor-card--info-rate--star">
                        <img class="icon icon-little" src="img/icon-star.svg" alt="star" class="tutor-card--info-rate--star">
                    </div>
                    <p class="tutor-card--info-consult">
                        <a href="profil.php<?php keepurl(); ?>">
                            <?php echo T_("Consulter"); ?>
                        </a>
                    </p>
                </div>
            </div>
            <div class="tutor-card">
                <img class="tutor-card--img" src="img/tutor-single.jpg" alt="tutor">
                <div class="tutor-card--info">
                    <p class="tutor-card--info-name">Prénom A</p>
                    <p class="tutor-card--info-subject">
                        <?php echo T_("Mathématique"); ?>
                    </p>
                    <div class="tutor-card--info-rate">
                        <img class="icon icon-little" src="img/icon-star.svg" alt="star" class="tutor-card--info-rate--star">
                        <img class="icon icon-little" src="img/icon-star.svg" alt="star" class="tutor-card--info-rate--star">
                        <img class="icon icon-little" src="img/icon-star.svg" alt="star" class="tutor-card--info-rate--star">
                        <img class="icon icon-little" src="img/icon-star.svg" alt="star" class="tutor-card--info-rate--star">
                    </div>
                    <p class="tutor-card--info-consult">
                        <a href="profil.php<?php keepurl(); ?>">
                            <?php echo T_("Consulter"); ?>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php include "include/footer.php" ?>


</body>

</html>
