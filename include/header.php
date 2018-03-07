<?php
/**
 * Created by PhpStorm.
 * User: hussain-dev
 * Date: 06-Mar-18
 * Time: 7:52 AM
 */


?>
<html>
    <head>
        <title>Title goes here</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php if(isset($css_link)){ echo $css_link; } else{ echo "../static/css/main.css";} ?>">
        <link rel="stylesheet" href="<?php if(isset($mobile_css_link)){ echo $mobile_css_link; } else{ echo "../static/css/mobile.css";} ?>">
        <script src="<?php if(isset($jquery_link)){ echo $jquery_link; } else{ echo "../static/js/jquery.min.js";}
        ?>"></script>
        <script src="<?php if(isset($script_link)){ echo $script_link; } else{ echo "../static/js/script.js";}
        ?>"></script>
    </head>
<body>
    <header class="main-header">
        <div class="menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="new_menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="search-box">
            <input type="search" name="search" placeholder="Search">
            <img src="../static/icon/search.svg" alt="">
        </div>
    </header>
