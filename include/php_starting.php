<?php
session_save_path();
session_start();

if (isset($_POST['submitsession'])){
    $_SESSION['active'] = 1;
    header("location:profil.php");
};
if (isset($_SESSION['active']) && isset($_POST['submitkillsess'])){
    session_destroy();
    header("location:index.php");
}
include "localization.php";
?>