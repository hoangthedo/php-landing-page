<?php
class Helper {
    function __construct(){}
    function redirect($url){
        echo "<script type='text/javascript'>window.top.location='".$url."';</script>";
    }

    function require_user(){
        if (!isset($_SESSION["email"])){
            $this->redirect('/index.php?page=login');
        }
    }
}
?>