<?php
session_start();
    global $db;
    global $helper;
    if (!isset($helper)) {
        require_once 'helpers/helper.php';
        $helper = new Helper();
        $GLOBALS['helper'] = $helper;
    }
    if (!isset($db)) {
        require_once 'db/db.php';
        $db = new Db();
        $GLOBALS['db'] = $db;
    }
    if ($_GET['page'] == ""){
        $title = "Food Cricle";
        $content = "views/home.php";
    }
    else if ($_GET['page'] == "login") {
        $title = "Đăng nhập";
        $content = "views/login.php";
    }
    else if ($_GET['page'] == "bills") {
        $title = "Giỏ hàng";
        $content = "views/bills.php";
    }
    else if ($_GET['page'] == "cart") {
        $title = "Giỏ hàng";
        $content = "views/cart.php";
    }
    else if ($_GET['page'] == "product") {
        $title = "Food Cricle";
        $content = "views/product.php";
    }
    else if ($_GET['page'] == "contact") {
        $title = "Contact";
        $content = "views/contact.php";
    }
    else if ($_GET['page'] == "signup") {
        $title = "Đăng ký";
        $content = "views/signup.php";
    }
    else if ($_GET['page'] == "logout") {
        session_destroy();
        $title = "Food Cricle";
        $content = "views/home.php";
    } else {
        $title = "Not Found";
        $content = "views/not_found.php";
    }
    include('layouts/application.php');
    
?>