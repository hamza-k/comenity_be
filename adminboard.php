<?php include "localization.php" ?>
<!DOCTYPE html>
<html lang="<?php if (isset($_GET['lang'])) {echo $_GET['lang'];} ?>">

<head>
    <meta charset="UTF-8">
    <title>Gestion d'administration - Comenity</title>
    <?php include "include/head.php" ?>
</head>

<body class="adminboard search">
    <?php include "include/menu.php"; ?>

    <header class="header">
    </header>
    <form class="search-form">
        <h1>Que recherchez-vous ?</h1>
        <input type="text" placeholder="Recherche par ID">
        <input type="text" placeholder="Recherche par lieu d'étude">
        <input type="text" placeholder="Recherche par nom/prénom">
        <input type="submit" value="submit" placeholder="Rechercher">
    </form>
        <div class="search-result">
            <h3 class="search-result--title">Liste des membres</h3>
            <div class="tutor-card">
            <img class="tutor-card--img" src="img/tutor-single.jpg" alt="tutor">
            <div class="tutor-card--info">
                <p class="tutor-card--info-name">Prénom A</p>
                <p class="tutor-card--info-subject">Mathématique</p>
                <div class="tutor-card--info-rate">
                    <img src="img/icon-star.svg" alt="star" class="tutor-card--info-rate--star">
                    <img src="img/icon-star.svg" alt="star" class="tutor-card--info-rate--star">
                    <img src="img/icon-star.svg" alt="star" class="tutor-card--info-rate--star">
                    <img src="img/icon-star.svg" alt="star" class="tutor-card--info-rate--star">
                </div>
                <a href="#">Consulter</a>
            </div>
        </div>
        </div>
        
    <?php include "include/footer.php" ?>
</body>

</html>