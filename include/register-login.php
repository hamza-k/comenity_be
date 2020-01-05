<div class="register login">
    <span class="close">&#10540;</span>
    <div class="register-content content">
        <h2 class="content--title stroke stroke-left stroke-right">
            <?php echo T_("Inscris-toi, c'est gratuit!"); ?>
        </h2>
        <h3 class="content--subtitle">
            <?php echo T_("Deviens membre, et accompagne les étudiants dans leurs réussites"); ?>
        </h3>
        <form class="content--form" action="" method="post">
            <input type="text" placeholder="<?php echo T_(" Adresse e-mail "); ?>"><br>
            <input type="text" placeholder="<?php echo T_(" Confirmer l 'adresse e-mail"); ?>"><br>
            <input type="password" placeholder="<?php echo T_("Mot de passe"); ?>"><br>
            <input type="password" placeholder="<?php echo T_("Confirmer le mot de passe"); ?>"><br>
            <input type="checkbox" name="" value="readcgu"> <label for=""><?php echo T_("J'ai lu et accepté les conditions générales d 'utilisation, ainsi que le reste de l'ensemble des mentions légales. "); ?></label><br>
            <input type="submit" name="submitsession" value="<?php echo T_( "Je m'inscris !"); ?>">
        </form>
        <span class="link switch switch--register-login"><?php echo T_("Déjà membre ? Connecte-toi !"); ?></span>
    </div>

    <div class="login-content content">
        <h2 class="content--title stroke stroke-left stroke-right">
            <?php echo T_("Connexion"); ?>
        </h2>
        <h3 class="content--subtitle">
            <?php echo T_("Pas encore membre ?"); ?> <span class="link switch switch--login-register"><?php echo T_("Inscris-toi !"); ?></span></h3>
        <form class="content--form" action="" method="post">
            <input type="text" placeholder="<?php echo T_(" Adresse e-mail "); ?>">
            <input type="password" placeholder="<?php echo T_(" Mot de passe "); ?>">
            <input type="submit" name="submitsession" value="<?php echo T_("Envoyer"); ?>">
        </form>
    </div>

</div>
