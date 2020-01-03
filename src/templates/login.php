<?php
require_once './../bootFiles.php';
//Base Template
$templateParams["title"] = "Login - Safety Mode";
$templateParams["pageIcon"] = "./../../res/images/logoForse.png";
$templateParams["header"] = "./../php/header.php";
$templateParams["main"] = "./../php/loginForm.php";
$templateParams["css"] = array("./../css/main.css", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", "./../css/provaD.css");;
$templateParams["js"] = array("./../js/jquery-1.11.3.min.js");

require 'ticketTemplate.php';
?>
