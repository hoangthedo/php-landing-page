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
    if ($_GET['page'] == "login") {
        $title = "Đăng nhập";
        $content = "views/login.php";
    }
    if ($_GET['page'] == "bills") {
        $title = "Giỏ hàng";
        $content = "views/bills.php";
    }
    if ($_GET['page'] == "cart") {
        $title = "Giỏ hàng";
        $content = "views/cart.php";
    }
    if ($_GET['page'] == "product") {
        $title = "Food Cricle";
        $content = "views/product.php";
    }
    if ($_GET['page'] == "contact") {
        $title = "Contact";
        $content = "views/contact.php";
    }
    if ($_GET['page'] == "signup") {
        $title = "Đăng ký";
        $content = "views/signup.php";
    }
    if ($_GET['page'] == "logout") {
        $title = "Food Cricle";
        session_destroy();
        $content = "views/home.php";
    }
    include('layouts/application.php');
?>