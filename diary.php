<?php include "/include/php_starting.php" ?>
<!DOCTYPE html>
<html lang="<?php if (isset($_GET['lang'])) {echo $_GET['lang'];} ?>">

<head>
    <meta charset="UTF-8">
    <title><?php echo ('Carnet de suivi'); ?> - Comenity</title>
    <?php include "include/head.php" ?>
</head>

<body class="diary">
    <?php include "include/menu.php"; ?>

    <header class="header">
    </header>
    <main>
        <h1 class="stroke stroke-left stroke-right"><?php echo T_("Mon carnet de suivi"); ?></h1>
        <div class="side">
            <h2><?php echo T_('Liste des étudiants et des tuteurs');?></h2>
            <input type="text" placeholder="<?php echo T_('Rechercher'); ?>">
            <ul>
                <li class="side-linkmember selected">Laurent Dielberg <span>- <?php echo T_('tuteur'); ?></span></li>
                <li class="side-linkmember">Lucie Spiengen <span>- <?php echo T_('étudiant');?></span></li>
                <li class="side-linkmember">Joanne Kruuwen <span>- <?php echo T_('tuteur'); ?></span></li>
            </ul>
        </div>
        <div class="content content-diary">
            <h2>Laurent Dielberg</h2>
            <button class="content-diary--print"><?php echo T_("Imprimer");?></button>
            <form action="" class="content-diary--form">
                <input type="text" placeholder="Date">
                <input type="text" placeholder="Matière suivi">
                <textarea placeholder="Remarque, note, critique, etc"></textarea>
                <input class="btn" type="submit" value="Envoyer">
            </form>
            <div class="content-session">
                <p class="content-session-time">Dec 10, 2019</p>
                <h3 class="content-session-title">Physique</h3>
                <p class="content-session-text">Il maitrise mieux les calculs mentaux et peut donc mieux résoudre les exercices du cours.</p>
                <div class="content-session-setting">
                   <span>&#8230;</span>
                    <ul>
                    <li><a href=""><?php echo T_('Modifier'); ?></a></li>
                    <li><a href=""><?php echo T_('Effacer');?></a></li>
                </ul>
                </div>
            </div>
            <div class="content-session">
                <p class="content-session-time">Dec 8, 2019</p>
                <h3 class="content-session-title">Physique</h3>
                <p class="content-session-text">Il peut désormais maitriser la théorie sur les lois de Newton, mais pas dans problématique concret. Il a du mal aussi dans les calculs mentals.</p>
                <div class="content-session-setting">
                   <span>&#8230;</span>
                    <ul>
                    <li><a href=""><?php echo T_('Modifier'); ?></a></li>
                    <li><a href=""><?php echo T_('Effacer');?></a></li>
                </ul>
                </div>
            </div>
        </div>
    </main>
    <?php include "include/footer.php" ?>
    
</body>

</html>