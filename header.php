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

    <link rel="icon" href="assets/img/logo.jpg">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Hoho-san</title>
    <meta name="keywords" content="<?php echo $meta_keyword_home; ?>">
    <meta name="description" content="<?php echo $meta_description_home; ?>">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
</head>

<body>
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
            </div>
        </div>
    </div>