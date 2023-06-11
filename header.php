<!-- This is main configuration File -->
<?php
ob_start();
session_start();
include("admin/inc/config.php");
include("admin/inc/functions.php");
include("admin/inc/CSRF_Protect.php");
$csrf = new CSRF_Protect();
$error_message = '';
$success_message = '';
$error_message1 = '';
$success_message1 = '';

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <!-- Favicon -->
<<<<<<< HEAD
    <link rel="icon" href="assets/img/logo.jpg">
=======
    <link rel="icon" href="assets/img/logo.png">
>>>>>>> 83b1e762d57ca68568e08d5e86fb7d759ad07c33

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/bootstrap-touch-slider.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/tree-menu.css">
    <link rel="stylesheet" href="assets/css/select2.min.css"> -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- <link rel="stylesheet" href="assets/css/responsive.css"> -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<<<<<<< HEAD
    <title>Hoho-san</title>
    <meta name="keywords" content="<?php echo $meta_keyword_home; ?>">
    <meta name="description" content="<?php echo $meta_description_home; ?>">

=======
    <title>Redstar</title>
>>>>>>> 83b1e762d57ca68568e08d5e86fb7d759ad07c33
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    


</head>

<body>
<<<<<<< HEAD
    <div class="nav">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pl_0 pr_0">
                    <div class="menu-container">
                        <div class="menu">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About Me</a></li>
                                <li><a href="certificate.php">Certificates</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
=======



    <div class="header">
        <div class="container">
            <div class="row inner">
                <div class="col-md-4 logo">
                    <a href="index.php"><img src="assets/img/logo.png" alt="logo image"></a>
                </div>

                <div class="col-md-12 right">
                    <ul>
                        <?php
                        if (isset($_SESSION['customer'])) {
                        ?>
                            <li><i class="fa fa-user"></i> <?php echo $_SESSION['customer']['cust_name']; ?></li>
                            <li><a href="dashboard.php"><i class="fa fa-home"></i> Account Settings</a></li>
                        <?php
                        } else {
                        ?>
                            <li><a href="login.php"><i class="fa fa-sign-in"></i> Login</a></li>
                            <li><a href="registration.php"><i class="fa fa-user-plus"></i> Register</a></li>
                        <?php
                        }
                        ?>

                        <li>
                            <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i> Cart
                                (
                                <?php
                                if (isset($_SESSION['cart_p_id'])) {
                                    $table_total_price = 0;
                                    $i = 0;
                                    foreach ($_SESSION['cart_p_qty'] as $key => $value) {
                                        $i++;
                                        $arr_cart_p_qty[$i] = $value;
                                    }
                                    $i = 0;
                                    foreach ($_SESSION['cart_p_current_price'] as $key => $value) {
                                        $i++;
                                        $arr_cart_p_current_price[$i] = $value;
                                    }
                                    for ($i = 1; $i <= count($arr_cart_p_qty); $i++) {
                                        $row_total_price = $arr_cart_p_current_price[$i] * $arr_cart_p_qty[$i];
                                        $table_total_price = $table_total_price + $row_total_price;
                                    }
                                    echo $table_total_price;
                                } else {
                                    echo '0.00';
                                }
                                ?> )</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="nav">
        <div class="menu-container">
            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>

                    <li><a href="contact.php">Contact</a></li>
                </ul>
>>>>>>> 83b1e762d57ca68568e08d5e86fb7d759ad07c33
            </div>
        </div>
    </div>