<?php include "/include/php_starting.php" ?>
<!DOCTYPE html>
<html lang="<?php if (isset($_GET['lang'])) {echo $_GET['lang'];} ?>">

<head>
    <meta charset="UTF-8">
    <title><?php echo T_("FAQ"); ?> - Comenity</title>
    <?php include "include/head.php" ?>
</head>

<body class="faq">
    <?php include "include/menu.php"; ?>

    <header class="header">
    </header>
    <main>
       
       
        <h1 class="stroke stroke-left stroke-right"><?php echo T_("Avez-vous des questions ?"); ?></h1>
        <div class="side">
            <ul>
                <li class="side-general"><?php echo T_("Général"); ?></li>
                <li class="side-tutor"><?php echo T_("Tuteurs"); ?></li>
                <li class="side-student"><?php echo T_("Étudiants"); ?></li>
                <li class="side-other"><?php echo T_("Autres"); ?></li>
            </ul>
        </div>
        <div class="content">      
        <div class="content-faq content-general">
            <h2 class="stroke stroke-left"><?php echo T_("Général"); ?></h2>
            <div class="content-question">
                <h3><?php echo T_("Comment puis-je trouver un tuteur ?"); ?></h3>
                <p><?php echo T_("C’est simple ! La recherche de tuteur se fait depuis le moteur de recherche (l'icone de la loupe dans le menu). Sélectionnez votre matière, votre ville ou votre lieu d'étude, et hop ! Des milliers de tuteurs fantastiques, disponibles et proche de chez vous. Une fois le tuteur sélectionné, vous pourrez le contacter en cliquant sur le bouton « contacter », en bas de son profil."); ?></p>
            </div>
            <div class="content-question">
                <h3><?php echo T_("Est-ce gratuit ?"); ?></h3>
                <p><?php echo T_("L'inscription chez Comenity est totalement gratuit."); ?></p>
            </div>
            <div class="content-question">
                <h3><?php echo T_("Je souhaite commencer à accompagner un étudiant, comment m’y prendre ?"); ?></h3>
                <p><?php echo T_("Pour bénéficier de notre réseau d'étudiant (plus de 60 000 recherches d'élèves par jour), nous vous invitons à déposer votre annonce. Si vous avez déjà créé un compte chez nous, vous pouvez publier votre première annonce. Afin de mettre toutes les chances de votre côté, nous vous conseillons de prendre le temps de rédiger une annonce complète, de mettre une photo en portrait pour illustrer votre annonce et de demander des recommandations à vos proches. En effet, un profil complet avec photo a 100 fois plus de chances d'être sollicité. Comenity vous permet de travailler librement et de fixer vos propres tarifs sur lesquels nous ne prenons aucune commission."); ?></p>
            </div>
            <div class="content-question">
                <h3><?php echo T_("Comment être sûr que mon tuteur peut assurer la matière où j’ai des lacunes ?"); ?></h3>
                <p><?php echo T_("Un système est établi pour que le tuteur précise la matière qu'il peut accompagner, mais aussi les études et la haute école/l'université concernant. De plus, chaque tuteur se voit attribuer une note par l'étudiant en fonction de la qualité de suivi du tuteur."); ?></p>
            </div>
        </div>
        <div class="content-faq content-tutor">
            <h2 class="stroke stroke-left"><?php echo T_("Tuteur"); ?></h2>
            <div class="content-question">
                <h3><?php echo T_("Qui peut s'inscrire chez Comenity, et peut-être suivre un étudiant ?"); ?></h3>
                <p><?php echo T_("Nous avons tous quelque chose à enseigner et à transmettre. Étudiants, enseignants, autodidactes, passionnés, diplômés, professionnels... Rejoignez la communauté des Super Professeurs ! On vous attend."); ?></p>
            </div>
            <div class="content-question">
                <h3><?php echo T_("Est-ce gratuit ?"); ?></h3>
                <p><?php echo T_("L'inscription chez Comenity est totalement gratuit."); ?></p>
            </div>
            <div class="content-question">
                <h3><?php echo T_("Je souhaite commencer à accompagner un étudiant, comment m’y prendre ?"); ?></h3>
                <p><?php echo T_("Pour bénéficier de notre réseau d'étudiant (plus de 60 000 recherches d'élèves par jour), nous vous invitons à déposer votre annonce. Si vous avez déjà créé un compte chez nous, vous pouvez publier votre première annonce. Afin de mettre toutes les chances de votre côté, nous vous conseillons de prendre le temps de rédiger une annonce complète, de mettre une photo en portrait pour illustrer votre annonce et de demander des recommandations à vos proches. En effet, un profil complet avec photo a 100 fois plus de chances d'être sollicité. Comenity vous permet de travailler librement et de fixer vos propres tarifs sur lesquels nous ne prenons aucune commission."); ?></p>
            </div>
            <div class="content-question">
                <h3><?php echo T_("Comment choisir mon tarif et par qui serai-je payé ?"); ?></h3>
                <p><?php echo T_("Vous définissez vous-même le tarif de vos cours en fonction de votre formation, votre expérience, de la concurrence et donc du marché dans votre secteur. Le règlement de vos cours et ses modalités est à voir directement avec les élèves qui vous contactent."); ?></p>
            </div>
            <div class="content-question">
                <h3><?php echo T_("Je ne parviens pas à importer mon CV, comment faire ?"); ?></h3>
                <p><?php echo T_("L'importation d'un CV est limité à un poids de 2Mo et de type PDF. Si vous ne parvenez toujours pas à importer votre CV, vous pouvez toujours nous l'envoyer par mail."); ?></p>
            </div>
            <div class="content-question">
                <h3><?php echo T_("Comment supprimer mon profil ?"); ?></h3>
                <p><?php echo T_("Si vous souhaitez supprimer votre profil sur Superprof, connectez-vous directement à celui-ci. Nous espérons vous revoir bientôt sur Comenity."); ?></p>
            </div>
        </div>
        <div class="content-faq content-student">
            <h2 class="stroke stroke-left"><?php echo T_("Étudiants"); ?></h2>
            <div class="content-question">
                <h3><?php echo T_("Comment puis-je trouver un tuteur ?"); ?></h3>
                <p><?php echo T_("C’est simple ! La recherche de tuteur se fait depuis le moteur de recherche (l'icone de la loupe dans le menu). Sélectionnez votre matière, votre ville ou votre lieu d'étude, et hop ! Des milliers de tuteurs fantastiques, disponibles et proche de chez vous. Une fois le tuteur sélectionné, vous pourrez le contacter en cliquant sur le bouton « contacter », en bas de son profil."); ?></p>
            </div>
            <div class="content-question">
                <h3><?php echo T_("Cela ne s’est pas passé comme je le souhaitais avec mon professeur, que faire ?"); ?></h3>
                <p><?php echo T_("Vous pouvez contacter autant de professeurs que vous le souhaitez. Vous pouvez donc encore trouver le professeur parfait ! L’équipe de Comenity est là pour vous. Décrivez-nous votre situation par mail, nous reviendrons vers vous au plus vite."); ?></p>
            </div>
            <div class="content-question">
                <h3><?php echo T_("Je n’ai pas encore reçu de réponse de mon tuteur"); ?></h3>
                <p><?php echo T_("Lorsque le tuteur dépasse son temps de réponse habituel, notre équipe le contacte afin qu’il vous réponde au plus vite."); ?></p>
            </div>
            <div class="content-question">
                <h3><?php echo T_("Je ne parviens pas à ajouter une photo sur mon profil"); ?></h3>
                <p><?php echo T_("Si vous n’arrivez pas à ajouter votre photo sur votre profil, vous pouvez nous la joindre depuis votre tableau de bord."); ?></p>
            </div>
            <div class="content-question">
                <h3><?php echo T_("Comment supprimer mon profil ?"); ?></h3>
                <p><?php echo T_("Si vous souhaitez supprimer votre profil sur Superprof, connectez-vous directement à celui-ci. Nous espérons vous revoir bientôt sur Comenity."); ?></p>
            </div>
        </div>
        <div class="content-faq content-other">
            <h2 class="stroke stroke-left"><?php echo T_("Autres"); ?></h2>
            <div class="content-question">
                <h3><?php echo T_("Besoin d'aide ? Une idée de génie à partager avec nous ou une irrésistible envie d'en savoir plus sur l'aventure Comenity ?"); ?></h3>
                <p><?php echo T_("Ecrivez-nous un message par la page de contact. Notre équipe vous répond par mail, par nos divers réseaux sociaux, etc."); ?></p>
            </div>
            <div class="content-question">
                <h3><?php echo T_("Vous souhaitez rejoindre l'aventure Comenity et changer soignez nos étudiants par le partage ?"); ?></h3>
                <p><?php echo T_("Envoyez-nous votre plus belle candidature à l'adresse info@comenity.be"); ?></p>
            </div>
        </div>
        </div>
    </main>

    <?php include "include/footer.php" ?>
</body>

</html>