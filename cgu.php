<?php include "/include/php_starting.php" ?>
<!DOCTYPE html>
<html lang="<?php if (isset($_GET['lang'])) {echo $_GET['lang'];} ?>">

<head>
    <meta charset="UTF-8">
    <title><?php echo T_("Condition général d'utilisation"); ?> - Comenity</title>
    <?php include "include/head.php" ?>
</head>

<body class="cgu">
    <?php include "include/menu.php"; ?>

    <header class="header">
    </header>
    <main>
        <h1 class="stroke stroke-left stroke-right"><?php echo T_("Mentions légales"); ?></h1>
        <div class="side">
            <h2><?php echo T_("Table de matière"); ?></h2>
            <ul>
                <li class="side-intro"><?php echo T_("Introduction"); ?></li>
                <li class="side-cgumain"><?php echo T_("Condition générale d'utilisation"); ?></li>
                <li class="side-desc"><?php echo T_("Description du site"); ?></li>
                <li class="side-ad"><?php echo T_("Dépots d'annonce"); ?></li>
                <li class="side-security"><?php echo T_("Confiance/sécurité"); ?></li>
                <li class="side-certif"><?php echo T_("Certification scolaire"); ?></li>
                <li class="side-table"><?php echo T_("Tableau de bord"); ?></li>
            </ul>
        </div>
        <div class="content">
        <div class="content-cgu content-cgu--intro">
            <h2 class="stroke stroke-left"><?php echo T_("Introduction"); ?></h2>
            <p><?php echo T_("En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site www.comenity.be l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :"); ?></p>
            <li><?php echo T_("Propriétaire"); ?> : Hamza Khadri – 91938 – 13 Rue Yvonne Jaset</li>
            <li><?php echo T_("Créateur"); ?> : Hamza Khadri</li>
            <li><?php echo T_("Responsable publication"); ?> : Jean Twijrel – jean.twijrel@gmail.com (<?php echo T_("Le responsable publication est une personne physique ou une personne morale."); ?>)</li>
            <li><?php echo T_("Webmaster"); ?> : Hamza Khadri – hamza.khadri.pro@gmail.com</li>
            <li><?php echo T_("Hébergeur"); ?> : OVH – 1000 - <?php echo T_("Crédits"); ?> : Hamza Khadri, Jean Twijrel, Arnaud Duret, Nathalie Bireto <?php echo T_("et"); ?> Roger Vinsmoke</li>
        </div>
        <div class="content-cgu content-cgu--cgumain">
            <h2 class="stroke stroke-left"><?php echo T_("Conditions générales d'utilisation"); ?></h2>
            <p><?php echo T_("L’utilisation du site www.comenity.be implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site www.comenity.be sont donc invités à les consulter de manière régulière."); ?></p>
            <p><?php echo T_("Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par Hamza Khadri, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention."); ?></p>
            <p><?php echo T_("Le site www.comenity.be est mis à jour régulièrement par Jean Twijrel. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance."); ?></p>
        </div>
        <div class="content-cgu content-cgu--desc">
            <h2 class="stroke stroke-left"><?php echo T_("Description du Site"); ?></h2>
            <p><?php echo T_("Le site www.comenity.be a pour objet de fournir une information concernant l’ensemble des activités de la société."); ?></p>
            <p><?php echo T_("Hamza Khadri s’efforce de fournir sur le site www.comenity.be des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations."); ?></p>
            <p><?php echo T_("Tous les informations indiquées sur le site www.comenity.be sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site www.comenity.be ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne."); ?></p>
        </div>
        <div class="content-cgu content-cgu--ad">
            <h2 class="stroke stroke-left"><?php echo T_("Dépots d'annonce"); ?></h2>
            <p><?php echo T_("Le site utilise la technologie JavaScript."); ?></p>
            <p><?php echo T_("Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour."); ?></p>
        </div>
        <div class="content-cgu content-cgu--security">
            <h2 class="stroke stroke-left"><?php echo T_("Confiance/Sécurité"); ?></h2>
            <p><?php echo T_("Hamza Khadri est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels."); ?></p>
            <p><?php echo T_("Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : Hamza Khadri."); ?></p>
            <p><?php echo T_("Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle."); ?></p>
        </div>
        <div class="content-cgu content-cgu--certif">
            <h2 class="stroke stroke-left"><?php echo T_("Certification scolaire"); ?></h2>
            <p><?php echo T_("Hamza Khadri ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site www.comenity.be, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité."); ?></p>
            <p><?php echo T_("Hamza Khadri ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site www.comenity.be."); ?></p>
            <p><?php echo T_("Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. Hamza Khadri se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, Hamza Khadri se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…)."); ?></p>
        </div>
        <div class="content-cgu content-cgu--table">
            <h2 class="stroke stroke-left"><?php echo T_("Carnet de bord"); ?></h2>
            <p><?php echo T_("Le site www.comenity.be contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de Hamza Khadri. Cependant, Hamza Khadri n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait."); ?></p>
            <p><?php echo T_("La navigation sur le site www.comenity.be est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation."); ?></p>
            <p><?php echo T_("Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :"); ?></p>
            <p><?php echo T_("Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok."); ?></p>
            <p><?php echo T_("Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l'onglet Options. Cliquer sur l'onglet Vie privée. Paramétrez les Règles de conservation sur : utiliser les paramètres personnalisés pour l'historique. Enfin décochez-la pour désactiver les cookies."); ?></p>
            <p><?php echo T_("Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section 'Confidentialité', cliquez sur Paramètres de contenu. Dans la section 'Cookies', vous pouvez bloquer les cookies."); ?></p>
            <p><?php echo T_("Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section 'Confidentialité', cliquez sur préférences. Dans l'onglet 'Confidentialité', vous pouvez bloquer les cookies."); ?></p>
        </div>
        </div>
    </main>

    <?php include "include/footer.php" ?>
</body>

</html>