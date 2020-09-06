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
    $helper->require_user();
    if ($_SESSION["user"]['role'] == 'admin'){
        if ($_GET['page'] == ""){
            $title = "Admin";
            $content = "views/admin.php";
        }
        else if ($_GET['page'] == "users") {
            $title = "Quản lý người dùng";
            $content = "views/admin/users.php";
        }else if ($_GET['page'] == "products"){
            $title = "Quản lý sản phẩm";
            $content = "views/admin/products.php";
        } else if ($_GET['page'] == "edit_user"){
            $title = "Chỉnh sửa người dùng";
            $content = "views/admin/edit_user.php";
        }
        else {
            $title = "Không tìm thấy";
            $content = "views/admin/not_found.php";
        }
        include('layouts/admin.php');
    } else {
        session_destroy();
        $title = "Food Cricle";
        $content = "views/home.php";
        include('layouts/application.php');
    }
?>