<?php include "include/register-login.php" ?>
<nav>
    <ul>
        <li class="logo"><a href="index.php<?php keepurl(); ?>"><img src="img/logo-color.svg" alt="logo"></a></li>
        <li>
            <a href="aboutus.php<?php keepurl(); ?>">
                <?php echo T_("À propos de nous"); ?>
            </a>
        </li>
        <li>
            <a href="faq.php<?php keepurl(); ?>">
                <?php echo T_("FAQ"); ?>
            </a>
        </li>
        <li>
            <a href="cgu.php<?php keepurl(); ?>">
                <?php echo T_("Mentions légales"); ?>
            </a>
        </li>
        <li>
            <a href="contact.php<?php keepurl(); ?>">
                <?php echo T_("Contact"); ?>
            </a>
        </li>
    </ul>
    <ul>
        <li><a href="search.php<?php keepurl(); ?>"><img class="icon icon-little" src="img/icon-search.svg" alt=""></a></li>
        <li class="share"><img class="icon icon-little" src="img/icon-share.svg" alt="">
            <ul>
                <li><img class="icon-middle" src="/img/icon-facebook.svg" alt=""></li>
                <li><img class="icon-middle" src="/img/icon-twitter.svg" alt=""></li>
                <li><img class="icon-middle" src="/img/icon-instagram.svg" alt=""></li>
            </ul>
        </li>
        <li class="li-session">
        <?php
            if (isset($_SESSION['active']) && $_SESSION['active'] == 1){
                ?>
                <form class="session1" action="" method="post">
                   <div class="img">
                       <img src="/img/profil.jpg" alt="">
                   </div>
                   <ul>
                   <li>Victor Vanickstael</li>
                    <li><a href="profil.php<?php keepurl(); ?>">Profil</a></li>
                    <li><a href="diary.php<?php keepurl(); ?>">Suivi</a></li>
                    <li><input type="submit" class="logout" name="submitkillsess" value="<?php echo T_("Déconnecter") ;?>"></li>
                   </ul>
                </form>
                <?php
            } else {
                ?>
                    <input class="nav-login" type="button" value="<?php echo T_("Connexion"); ?>">
                <?php
            }
            ?>
        </li>
        <li>
            <form method="get" action="<?php $actualurl; ?>">
                <select name="lang" id="lang" class="input input-select input-select--lang" onchange='this.form.submit()'>
            <option value="fr_FR" <?php keeplang('fr_FR') ?> >Fr</option>
            <option value="en_USA" <?php keeplang('en_USA') ?> >En</option>
            <option value="nl_NL" <?php keeplang('nl_NL') ?> >Nl</option>
        </select>
            </form>
        </li>
    </ul>
</nav>
