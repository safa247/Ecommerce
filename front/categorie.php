<?php
session_start();
require_once '../include/database.php';
$id = $_GET['id'];
$sqlState = $pdo->prepare("SELECT * FROM categorie WHERE id=?");
$sqlState->execute([$id]);
$categorie = $sqlState->fetch(PDO::FETCH_ASSOC);

$sqlState = $pdo->prepare("SELECT * FROM produit WHERE id_categorie=?");
$sqlState->execute([$id]);
$produits = $sqlState->fetchAll(PDO::FETCH_OBJ);
?>
<!doctype html>
<html lang="en">
<head>
    <?php include '../include/head.php' ?>
    <link rel="stylesheet" href="../css/style.css" type="text/css">

    <title>Categorie | <?php echo $categorie['libelle'] ?></title>
</head>
<body>
<?php include '../include/nav.php' ?>
<div class="container py-2">
    <h4><?php echo $categorie['libelle'] ?> </span></h4>
    <div class="container">
        <div class="row">
            <?php require_once '../include/front/product/afficher_product.php'; ?>
        </div>
    </div>
    <script src="..\include\js\produit\counter.js"></script>


</div>
<?php include 'footer.php'?>

</body>
</html>