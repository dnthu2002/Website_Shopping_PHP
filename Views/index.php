<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Website 2021</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://code.jquery.com/git/ui/jquery-ui-git.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">

    <script src="assets/js/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script><script src="https://code.jquery.com/git/ui/jquery-ui-git.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.hoverIntent.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/superfish.min.js"></script>
<script src="assets/js/wNumb.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/bootstrap-input-spinner.js"></script>
<script src="assets/js/jquery.elevateZoom.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- <script src="assets/js/nouislider.min.js"></script> -->
<!-- Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/login.js"></script>
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <div class="page-wrapper">
        <?php require_once("header-footer/header.php"); ?>
   
    <?php 
    $act = isset($_GET['act']) ? $_GET['act'] : "home";
    switch ($act) {
        case "home":
            require_once("home/home.php");
            break;
        case "shop":
            require_once("shop/shop.php");
            break;
        // case "checkout":
        //     $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
        //     switch ($act) {
        //         case 'list':
        //             require_once("order/checkout.php");
        //             break;
        //         case 'order_complete':
        //             require_once("order/order_complete.php");
        //             break;
        //         default:
        //             require_once("order/checkout.php");
        //             break;
        //     }
        //     break;
        case "detail":
            require_once("product-detail/productdetails.php");
            break;
        case "about":
            require_once("introduce/about.php");
            break;
        case "contact":
            require_once("introduce/contact.php");
            break;
        case "blog":
            require_once("introduce/blog.php");
            break;
        case "cart":
            require_once("cart/cart.php");
            break;
        case "account":
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "login";
            if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true) {
                switch ($act) {
                    case 'login':
                        require_once("login/login.php");
                        break;
                    case 'account':
                        require_once("login/accountmanagement.php");
                        break;
                    default:
                        require_once("login/login.php");
                        break;
                }
            } else {
                if ((isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) || (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true)) {
                    switch ($act) {
                        case 'login':
                            require_once("login/login.php");
                            break;
                        case 'account':
                            require_once("login/accountmanagement.php");
                            break;
                        default:
                            require_once("login/login.php");
                            break;
                    }
                } else {
                    switch ($act) {
                        case 'login':
                            require_once("login/login.php");
                            break;
                        default:
                            require_once("login/login.php");
                            break;
                    }
                }
                break;
            }
        default:
            require_once("404.php");
            break;
    }
    ?>
    <?php require_once('header-footer/footer.php'); ?>
    <?php require_once('mobile-nav.php');?>
    




</body>

</html>