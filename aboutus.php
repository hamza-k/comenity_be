<?php include "/include/php_starting.php" ?>
<!DOCTYPE html>
<html lang="<?php if (isset($_GET['lang'])) {echo $_GET['lang'];} ?>">

<head>
    <meta charset="UTF-8">
    <title><?php echo T_("À propos de nous"); ?> - Comenity</title>
    <?php include "include/head.php" ?>
</head>

<body class="aboutus">
    <?php include "include/menu.php"; ?>

    <header class="aboutus-intro header">
        <div class="aboutus-intro-content">
            <h1 class="stroke stroke-left stroke-right"><?php echo T_("Qui sommes-nous ?"); ?></h1>
            <p><?php echo T_("Comenity est un plateforme belge composé d'étudiants, mais aussi de tuteurs, étudiants ou non. Leurs buts respectifs est de réussir dans leurs études et d'accompagner les étudiants dans leurs projets d'études. Comenity veut communiquer l'entraide."); ?></p>
        </div>
    </header>

    <div class="aboutus-role role role-mission">
        <h2 class="stroke stroke-left stroke-right"><?php echo T_("Notre mission"); ?></h2>
        <div class="role-container">
        <div class="role-unit">
            <img class="role-unit--icon icon icon-big" src="img/icon-checked.svg" alt="strong">
            <h3 class="role-unit--title"><?php echo T_("La réussite"); ?></h3>
            <p class="role-unit--desc"><?php echo T_("La raison d'exister de Comenity est de renforcer la réussite des étudiants dans leurs projets d'études."); ?></p>
        </div>
        <div class="role-unit">
            <img class="role-unit--icon icon icon-big" src="img/icon-fist.svg" alt="approved">
            <h3 class="role-unit--title"><?php echo T_("La solidarité"); ?></h3>
            <p class="role-unit--desc"><?php echo T_("Le partage de savoir, de connaissance et de technique est l'un des plus grands moyens d'atteindre ses objectifs, via le tutorat."); ?></p>
        </div>
        <div class="role-unit">
            <img class="role-unit--icon icon icon-big" src="img/icon-link.svg" alt="confident">
            <h3 class="role-unit--title"><?php echo T_("La liaison"); ?></h3>
            <p class="role-unit--desc"><?php echo T_("Comenity a pour but la liaison et donc la fondation d'une communauté d'étudiants souhaitant réussir dans leurs projets de vie."); ?></p>
        </div>
        </div>
    </div>

    <div class="aboutus-team team">
        <h2 class="team-title stroke stroke-left stroke-right"><?php echo T_("Notre équipe"); ?></h2>
        <p class="team-desc"><?php echo T_("L'équipe de Comenity est essentiellement composé de quatres jeunes entrepreneurs qui souhaite améliorer la société par le biais d'études. Leurs envies de progrès dans la société pour chacun est le pourquoi de leurs aventures chez Comenity."); ?></p>
        <div class="team-container">
        <div class="team-unit">
            <div class="team-unit--img">
            <img src="img/tutor-single.jpg" alt="team 1">
            </div>
            <h3 class="team-unit--name">Johnatan</h3>
            <p class="team-unit--role">Manager</p>
        </div>
        <div class="team-unit">
            <div class="team-unit--img">
            <img src="img/tutor-single.jpg" alt="team 1">
            </div>
            <h3 class="team-unit--name">Johnatan</h3>
            <p class="team-unit--role">Manager</p>
        </div>
        <div class="team-unit">
            <div class="team-unit--img">
            <img src="img/tutor-single.jpg" alt="team 1">
            </div>
            <h3 class="team-unit--name">Johnatan</h3>
            <p class="team-unit--role">Manager</p>
        </div>
        <div class="team-unit">
            <div class="team-unit--img">
            <img src="img/tutor-single.jpg" alt="team 1">
            </div>
            <h3 class="team-unit--name">Johnatan</h3>
            <p class="team-unit--role">Manager</p>
        </div>
        </div>
    </div>

    <div class="aboutus-end">
      <div class="aboutus-end--content">
       <img src="img/icon-cta.svg" class="icon icon-bigger" alt="">
        <h2 class="aboutus-end--title stroke stroke-left stroke-right"><?php echo T_("Tu sais tout !"); ?></h2>
        <p class="aboutus-end--desc"><?php echo T_("L'équipe de Comenity espère que le message que nous essayons de vous apporter concernant notre rôle et notre ambition soit clair, et que nous vous avons convaincu un minimum pour intégrer la communauté de Comenity. Si oui, inscrivez vous: c'est gratuit !") ?></p>
        <button class="aboutus-end--cta btn btn-cta"><?php echo T_("Deviens tuteur dès aujourd’hui"); ?></button>
        </div>
    </div>

    <?php include "include/footer.php" ?>
</body>

</html>
