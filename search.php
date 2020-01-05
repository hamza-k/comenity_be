<?php include "/include/php_starting.php" ?>
<!DOCTYPE html>
<html lang="<?php if (isset($_GET['lang'])) {echo $_GET['lang'];} ?>">

<head>
    <meta charset="UTF-8">
    <title><?php echo T_("Recherche"); ?> - Comenity</title>
    <?php include "include/head.php" ?>
</head>

<body class="search">
    <?php include "include/menu.php"; ?>

    <header class="header">
    </header>
    <form class="search-form main" action="" type="get">
        <h1><?php echo T_("Que recherchez-vous ?"); ?></h1>
        <input class="input" type="text" placeholder="<?php echo T_("Recherche par matière"); ?>"><br>
        <input class="input" type="text" placeholder="<?php echo T_("Recherche par lieu d'étude"); ?>"><br>
        <label for=""><?php echo T_("Dans les alentours de"); ?></label>
        <select name="" id="">
            <option value="1">1 km</option>
            <option value="2">2 km</option>
            <option value="5">5 km</option>
            <option value="10">10 km</option>
        </select><br>
        <input  class="input btn" type="submit" value="<?php echo T_("Submit"); ?>" placeholder="<?php T_('Rechercher'); ?>">
    </form>
        <div class="search-result tutor-section">
            <h3 class="search-result--title"><?php echo T_("Nos tuteurs pour des cours de"); ?> XXX <br><?php echo T_("à"); ?> XXX <br><?php echo T_("Dans les alentours de"); ?> 10 km</h3>
            
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