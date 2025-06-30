<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLIPCART.com</title>
    <link rel="stylesheet" type="text/css" href="styles/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="myHOME - real estate template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/about.css">
    <link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
</head>

<body>
    <!--ICON-->
    <link rel="shortcut icon" href="images/logo.svg">

    <!--EXTERNAL CSS-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--PLUGIN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!--for scrolling text on home page-->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Fredoka+One&family=Kanit:wght@300&display=swap"
        rel="stylesheet">
    </head>

    <!--NAV-BAR-->
    <header>
    </header>
    <div id="navbar">
        <?php include_once('includes/header.php'); ?>
    </div>
    <!--MAIN-->
    <div class="main">
        <table>
            <tr>
                <td>
                    <section>
                        <h5 class="sub-title">Welcome To FLIPCART</h5>
                        <h1 class="hometitle" id="element">YOUR ULTIMATE PARTNER IN EVERY SALES JOURNEY</h1>
                        <a href="index.php" class="btn1">Explore More</a>
                    </section>
                </td>
                <td>
                    <img src="images/home.png" class=" show-on-scroll" alt="INFERNO">
                </td>
            </tr>
        </table>
    </div>


    <!--CARDS-->
    <section class="section0" id="sections">
        <div class="card banner">
            <h1 class="title">Our Featured Services</h1>
            <h5 class="sub-title">Experience success with our specialized services, carefully designed to meet your
                business
                goals and provide the support you need.</h5>
        </div>

        <div href="index.php" class="card show-on-scroll">
            <i class="fa-solid fa-cart-shopping"></i>
            <a href="index.php">
                <h3>Shopping Section</h3>
            </a>
        </div>

       
      
    </section>


    <!--CONTAINER-->
    <div class="container">
        <table>
            <tr>
                <td>
                    <img src="images/home2.png" class="show-on-scroll" alt="About Us">
                </td>
                <td>
                    <h6 class="sub-title">Discover Our Company</h6>
                    <h1 class="title">We Help Shopkeepers To Grow Their Business</h1>
                    <p>Welcome to FLIPCART, your premier e-commerce destination. We blend technology and commerce for an
                        exceptional online shopping experience. Our mission: empower businesses, support shopkeepers,
                        and enhance
                        your journey.</p>
                    <p>FLIPCART gives help to get daily changing prices of every item.</p>
                    
                    <a href="#moreaboutus" class="btn2">Discover More</a>
                </td>
            </tr>
        </table>
    </div>


    <!-- Photo 2 -->
    <div class="card_part card_part-two">
    </div>

    <!-- Photo 3 -->
    <div class="card_part card_part-three">
    </div>

    <!-- Photo 4 -->
    <div class="card_part card_part-four">
    </div>
    </div>
    </td>
    <td>

    </td>
    </tr>
    </table>
    </section>




    <!--FOOTER-->
    <footer>
        <div class="footer">
            <section>
                <p>
                <div class="logo"><a href="index.php"><span style="color: #fff;  font-size:300%;
  font-family: Fredoka One ,  cursive;">FLIPCART</span></a></div>
                </p>
            </section>

            <section>
                <p class="title">INFORMATION</p>
                <div class="">
                    <div class="footer_column">
                        <div class="footer_info">
                            <?php
                            $query = mysqli_query($con, "select * from  tblpage where PageType='contactus'");
                            while ($row = mysqli_fetch_array($query)) {
                                ?>
                                <ul>
                                    <!-- Phone -->
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div><img src="images/phone-call.svg" alt=""></div>
                                        <span>
                                         <p><a href=""><?php echo $row['MobileNumber']; ?></a></p>   
                                        </span>
                                    </li>


                                    <!-- Email -->
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div><img src="images/envelope.svg" alt=""></div>
                                        <span>
                                        <p><a href=""><?php echo $row['Email']; ?></a></p>    
                                        </span>
                                    </li>
                                </ul>
                            <?php } ?>
                        </div>
            </section>

            <section>
                <p class="title">SHORT CUT</p>
                <p><a href="contact.php">Contact Us</a></p>
                <p><a href="about.php">About Us</a></p>
                <p><a href="my-order.php">My Order</a></p>
                <p><a href="detailed-page.php">Site Detailed</a></p>

            </section>

            <section>
                <p class="title">News Letter</p>
                <p><input type="email" placeholder="Email*" style="height:40px; font-size:20px;" required><button type="submit"><i
                            class="fa fa-paper-plane"></i></button></p>
                <p><a title="Address, Country, Pincode"><i class="fa fa-map-marker"></i></a> <a href="#"><i
                            class="fa fa-phone"></i></a> <a href="#"><i class="fa fa-envelope"></i></a></p>
            </section>
        </div>

    </footer>


    <a href="#" id="scroll-up"><i class="fa fa-angle-up"></i></a>
    </div>

    <!--JAVASCRIPT-->
    <script src="../javascripts/home.js"></script>
    <script>
        var typed = new Typed('#element', {
            strings: ['YOUR ULTIMATE PARTNER IN EVERY SALES JOURNEY', 'CONNECTING COMMERCE, CULTIVATING GROWTH', 'NURTURING BUSINESSES, FOSTERING SUCCESS.', 'EMPOWERING COMMERCE, ENABLING PROSPERITY', 'CULTIVATING GROWTH, CONNECTING FUTURES.', 'SEEDS OF SUCCESS, ROOTED IN CONNECTIVITY', 'WHERE COMMERCE BLOSSOMS, GROWTH FLOURISHES.', 'UNLEASHING POTENTIAL, ONE CONNECTION AT A
