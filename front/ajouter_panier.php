<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: ../signin.php');
}

$id = $_POST['id'];
$qty = $_POST['qty'];
$idUtilisateur = $_SESSION['user']['id'];
if (!isset($_SESSION['panier'][$idUtilisateur])) {
    $_SESSION['panier'][$idUtilisateur] = [];
}
if($qty == 0){
    unset($_SESSION['panier'][$idUtilisateur][$id]);
}else{
    $_SESSION['panier'][$idUtilisateur][$id] = $qty;
}

header("location:".$_SERVER['HTTP_REFERER']);
