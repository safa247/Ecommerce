
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <?php include 'include\nav.php' ?>

       <!-- Breadcrumb Section Begin -->
       <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6 class="checkout__title">Sign up now!</h6>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>First Name<span>*</span></p>
                                        <input type="text" name="firstName" required>
                                    </div>
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text" name="lastName" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email Address<span>*</span></p>
                                        <input type="email" name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Username<span>*</span></p>
                                <input type="text" name="username" required>
                            </div>
                            <div class="checkout__input">
                                <p>Password<span>*</span></p>
                                <input type="password" name="password" required>
                            </div>
                           
                           
                            <div class="checkout__input__checkbox">
                                <input type="checkbox" id="termsAgreement" name="termsAgreement" required>
                                <label for="termsAgreement">I agree to the Terms and Conditions</label>
                            </div>
                            <button type="submit" name="submit" class="site-btn">Sign up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

  
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <?php
    include 'include\database.php';
            if (isset($_POST['submit']))
            {
                $firstname = $_POST['firstName'];
                $lastname = $_POST['lastName'];
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                if(!empty($username) && !empty($password)){
                   //ajouter a la base de donnees
                   //nayto lel basededonee
                   require_once 'include/database.php';
                  
                   //l'ajout d'un nouveau utilisaateur
                   $sqlState=$pdo->prepare('INSERT INTO user VALUES(null,?,?,?,?,?)');//elle prepare une requete 
                   //?->login ?->password...
                   $sqlState->execute([$username,$password,$firstname,$email,$lastname]);
                   //redirection
                   header('Location: signin.php');
                   ob_end_flush(); // Flush the output buffer and send the header
                   exit(); // Make sure to exit after header redirection
           

                }
                else{
                    ?>
                    <div class="alert alert-danger" role="alert">
                        Login,password sont obligatoire!
                </div>
                <?php
                }


            }
            ?>
                <?php include 'front/footer.php'?>

</body>

</html>