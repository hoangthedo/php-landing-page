<?php
    if ($_GET['page'] == ""){
        $title = "Food Cricle";
        $content = "src/home.php";
    }
    if ($_GET['page'] == "login") {
        $title = "Đăng nhập";
        $content = "src/login.php";
    }
    if ($_GET['page'] == "bill") {
        $title = "Giỏ hàng";
        $content = "src/bill.php";
    }
    if ($_GET['page'] == "cart") {
        $title = "Giỏ hàng";
        $content = "src/cart.php";
    }
    if ($_GET['page'] == "product") {
        $title = "Food Cricle";
        $content = "src/product.php";
    }
    if ($_GET['page'] == "contact") {
        $title = "Contact";
        $content = "src/contact.php";
    }
    if ($_GET['page'] == "signup") {
        $title = "Đăng ký";
        $content = "src/signup.php";
    }
    include('layouts/application.php');
?>