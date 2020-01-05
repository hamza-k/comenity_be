<?php include "localization.php" ?>
<!DOCTYPE html>
<html lang="<?php if (isset($_GET['lang'])) {echo $_GET['lang'];} ?>">

<head>
    <meta charset="UTF-8">
    <title>Administration - Comenity</title>
    <?php include "include/head.php" ?>
</head>

<body class="admin">
    <?php include "include/menu.php"; ?>

    <header class="header">
    </header>
    <form class="admin-form" action="adminboard.php">
        <h1>Accès à l'interface d'administration</h1>
        <p>Afin de sécuriser l'interface et donc la gestion de l'administration du site de Comenity, veuillez entrer le mot de passe.</p>
        <input type="password" placeholder="Mot de passe">
        <input type="submit" value="submit" placeholder="Rechercher">
    </form>
        
    <?php include "include/footer.php" ?>
</body>

</html>