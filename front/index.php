<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/style.css" type="text/css">

    <title>Document</title>
</head>
<body>
    <?php
    include '../include/nav.php';
    include '../include/database.php';

    $categories = $pdo->query('SELECT * FROM categorie')->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <div class="container mt-100">
        <div class="row">
            <?php foreach ($categories as $category) : ?>
                <div class="col-md-3 mb-4"> <!-- Adjusted column width to md-4 for smaller cards -->
                    <div class="card">
                        <a class="card-img-tiles" href="#" data-abc="true">
                            <div class="inner">
                                <div class="main-img"><img src="<?php echo $category['icon'] ?>" alt="Category"></div>
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h4 class="card-title"><?php echo $category['libelle'] ?></h4>
                            <p class="text-muted"><?php echo $category['description'] ?></p>
                            <a class="btn btn-outline-primary btn-sm" href="categorie.php?id=<?php  echo $category['id']?>" data-abc="true">View Products</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <style>
        body {
            background-color: #eee
        }

        .mt-100 {
            margin-top: 100px;
        }

        .card {
            width: 100%; /* Adjusted width to 100% */
            border-radius: 7px !important;
            border-color: #e1e7ec;
            margin-bottom: 20px; /* Adjusted margin to create space between cards */
        }

        .card-img-tiles {
            display: block;
            border-bottom: 1px solid #e1e7ec;
        }

        a {
            color: #0da9ef;
            text-decoration: none !important;
        }

        .card-img-tiles > .inner {
            display: table;
            width: 100%;
        }

        .card-img-tiles .main-img,
        .card-img-tiles .thumblist {
            display: table-cell;
            width: 65%;
            padding: 15px;
            vertical-align: middle;
        }

        .card-img-tiles .main-img>img:last-child,
        .card-img-tiles .thumblist>img:last-child {
            margin-bottom: 0;
        }

        .card-img-tiles .main-img>img,
        .card-img-tiles .thumblist>img {
            display: block;
            width: 100%;
            margin-bottom: 6px;
        }

        .thumblist {
            width: 35%;
            border-left: 5px solid #e1e7ec !important;
            display: table-cell;
            width: 65%;
            padding: 50px;
            vertical-align: middle;
        }

        .card-img-tiles .thumblist>img {
            display: block;
            width: 100%;
            margin-bottom: 6px;
        }

        .btn-group-sm > .btn,
        .btn-sm {
            padding: .45rem .5rem !important;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem;
        }

    </style>
      <style>
        /* Your existing styles */
        
        /* Add the following styles for card transitions */
        .card {
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }
    </style>
    <?php include 'footer.php'?>
    </body>
</html>
