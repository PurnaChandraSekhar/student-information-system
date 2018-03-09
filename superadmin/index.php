<?php
/**
 * Created by PhpStorm.
 * User: hussain-dev
 * Date: 06-Mar-18
 * Time: 7:52 AM
 *
 */
require_once '../include.php';
$login->check_login();
$css_link="../static/css/main.css";
$mobile_css_link="../static/css/mobile.css";

include '../include/header.php';
include '../include/sidebar.php';
?>
<section class="wrapper">
    <div class="admin-container">
        <h2>School list</h2>
        <p><a href="school.php">Add New</a></p>

        <div class="school-list"> <!-- school listing div starts-->
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div> <!-- school listing div ends-->

    </div> <!-- admin-container ends here-->
</section>
