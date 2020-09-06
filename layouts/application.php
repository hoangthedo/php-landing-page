<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php $title ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/style.css">
        <link rel="stylesheet" href="/assets/head-foot.css"> 
    </head>

    <style>
        body {
            font-family: Arial;
            font-size: 1.5vw;
        }
        li {line-height: 200%;}


        #container{
            width: 95%;
            margin:auto;
        }

        #header {
            display:inline-block;
            border-radius: 2vw;
            margin:auto;
            background-image: url("/picture/head-background.png");
            vertical-align: text-bottom;
        }

        #footer {
            display: inline-block;
            border-radius: 2vw;
            width: 100%;
            background-image: url("/picture/footer-background.png");
            margin-top: 10vw;
        }

        .img-box {
            display: inline-block;
            width: 15%;
            border-top-left-radius: 2vw;
            border-bottom-left-radius: 2vw;
            vertical-align:text-bottom;
            float:left;
        }

        .btnswitch {
            background: none;
            border: none;
            margin-right: 1%;
            display: inline-block;
            font-size: larger;
            font-weight: bolder;
            color: lightgreen;
        }

        .btnswitch:hover {
            background-color: brown;
        }

        .slide {
            margin:auto;
            width:100%;
            margin-top: 2vw;
        }

        .label-introduction {
            font-size: 3vw;
            text-align: center;
            background-color: pink;
            font-weight: bolder;
            border-radius: 2vw;
        }

        .content-introduction {
            border-left-style: double;
            border-bottom-style: double;
            border-color: red;
            width: 80%;
            margin:auto;
            line-height: 200%;
            text-indent: 3%;
            padding-left: 3%;
            border-width: thick;

        }

        .label-process {
            font-size: 3vw;
            text-align: center;
            background-color: lightskyblue;
            font-weight: bolder;
            border-radius: 2vw;
        }

        .label-box-process {
            font-size: 1.8vw; 
            text-align: center; 
            width: 100%;
            font-weight: bolder;
            color:orangered;
            padding: 2% 2%;
        }

        .box-footer {
            
            width: 43%;
            padding: 2% 2%;
            color:blanchedalmond;
            display: inline-block;
        }

        .help-title {
            font-weight: bolder;
            color:crimson;

        }

        .title-footer-help { 
            color:cyan;
            font-size: 1.8vw;
            font-weight: bolder;
            text-align: center;
        }
        .fab {
            padding: 2% 2%;
            font-size: 2vw;
            width: 10%;
            text-align: center;
            text-decoration: none;
            margin: auto; 
            margin-right: 8%;
        }

        .fab:hover {
            opacity: 0.7;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-twitter {
            background: #55ACEE;
            color: white;
        }

        .fa-skype {
            background: #00aff0;
            color: white;
        }
        .btn-store {
            color: palegoldenrod;
            border-color: #dddddd !important;
            width: 40%;
            
        }

        .btn-store:focus, 
        .btn-store:hover {
            color: #ffffff !important;
            background-color: #168eea;
            border-color: #168eea !important;
        }

        .btn-store .btn-label, 
        .btn-store .btn-caption {
            display: block;
            text-align: left;
            line-height: 1.5;
            font-size: 1vw;
        }

        .btn-store .btn-caption {
            font-size: 1.5vw;
        }

        .btn-danger-add {
            display:inline-block; 
            margin-right: 2%; 
            font-size: 1.5vw;
        }


        .form-search-add {
            float:right;
            vertical-align: text-bottom;
            padding:0;
            padding-top: 1%;
        }

        #myBtn {
            display: block;
            position: fixed;
            bottom: 2vw;
            right: 3vw;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 1%;
            border-radius: 1vw;
        }

        #myBtn:hover {
            background-color: brown;
        }

    
    </style>

    <body>
    <div id="container">
        <button onclick="topFunction()" id="myBtn" title="Go Home">Home</button>
        <?php
            include('layouts/header.php');
        ?>
        
        <?php
            include $content;
        ?>

        <?php
            include('layouts/footer.php');
        ?>
    </div>

    
    <script>
        mybutton = document.getElementById("myBtn");
        window.onscroll = function(){
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        function topFunction() {
            document.body.scrollTop = 0; 
            document.documentElement.scrollTop = 0; 
        }

        function scrollelement(element){
            switch (element.id){
                case "home": 
                   document.querySelector("#header").scrollIntoView({behavior: "smooth"});
                   break;
                case "introduction": 
                   document.querySelector(".introduction").scrollIntoView({behavior: "smooth"});
                   break;
                case "contact":
                    window.location("/contact.html");
                    break;
                case "instruction":
                    document.querySelector(".process").scrollIntoView({behavior: "smooth"});
                    break;
            }
        }

        $("#contact").click(function(){
            document.querySelector("#footer").scrollIntoView({behavior: "smooth"});
        });

        $("#instruction").click(function(){
            window.location = "/";
        });

        $("#buy").click(function(){
            window.location = "index.php?page=bills";
        });



        function navigation(element){
            switch (element.id){
                case "food":
                  window.location = "index.php?page=product";
                  break;
                case "login":
                  window.location = "index.php?page=login";
                  break;
                case "cart":
                  window.location = "index.php?page=cart";
                  break;
                case "introduction": 
                    window.location = "/#intro";
                   break;
                case "contact":
                    window.location = "index.php?page=contact";
                    break;
                case "instruction":
                    window.location = "/"; 
                    break;
                case "home":
                    window.location = "/"; 
                    break;
                case "register":
                    window.location = "index.php?page=signup"; 
                    break;
            }
        }
    </script>
    </body>
</html>