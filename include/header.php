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
        <link rel="stylesheet" href="<?php if(isset($css_link)){ echo $css_link; } else{ echo "./static/css/main.css";} ?>">
    </head>
<body>
    <header>
        <div class="search-box">
            <input type="search" name="search" placeholder="Search">
            <img src="../static/icon/search.svg" alt="">
        </div>
    </header>
