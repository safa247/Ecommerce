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
    <?php include '../include/nav.php'; ?>
    <!-- Map Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111551.9926412813!2d-90.27317134641879!3d38.606612219170856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1597926938024!5m2!1sen!2sbd" height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Map End -->
        <!-- Contact Section Begin -->
        <section class="contact spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__text">
                            <div class="section-title">
                                <span>Information</span>
                                <h2>Contact Us</h2>
                                <p>Welcome to our online clothing store! At BellaWear , we are dedicated to providing you with the latest fashion trends and high-quality garments. If you have any questions about our products, sizing, or need assistance with your order, our friendly customer support team is here to help. Feel free to contact us via the form below. Your satisfaction is our priority, and we look forward to assisting you in creating a stylish and enjoyable shopping experience.
    
    
    
    
                                    .</p>
                            </div>
                            <ul>
                                <li>
                                    <h4>America</h4>
                                    <p>195 E Parker Square Dr, Parker, CO 801 <br />+43 982-314-0958</p>
                                </li>
                                <li>
                                    <h4>France</h4>
                                    <p>109 Avenue Léon, 63 Clermont-Ferrand <br />+12 345-423-9893</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__form">
                            <form method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
    <textarea name="message" placeholder="Message"></textarea>
    <button type="submit" name="submit" class="site-btn">Send us a Message</button>
</div>

                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
include '../include/database.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $email = $_POST['email'];

    if (!empty($message) && !empty($email)) {
        $sqlState = $pdo->prepare('INSERT INTO contact (email, name, message) VALUES (?, ?, ?)');
        $sqlState->execute([$email, $name, $message]);
    }
}
?>
            </div>
        </section>
        <!-- Contact Section End -->

    
    
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
        <?php  include 'footer.php'?>
    </body>
    
    </html>