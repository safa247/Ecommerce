<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: ../signin.php');
}

$idUtilisateur = $_SESSION['user']['id'];

$id = $_POST['id'];
unset($_SESSION['panier'][$idUtilisateur][$id]);
header("location:".$_SERVER['HTTP_REFERER']);