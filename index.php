<?php
/**
 * Created by PhpStorm.
 * User: hussain-dev
 * Date: 06-Mar-18
 * Time: 7:51 AM
 */

?>
<html>
<head>
    <title>Title goes here</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="static/css/mobile.css">
</head>
<body>

<!--LOGIN FORM SUBMISSION-->
<?php

    if(isset($_POST['login']))
    {
        require_once 'include.php';
        if(!empty($_POST))
        {
            $result = $login->login();
            if(!$result) // IF LOGIN SUCCES
            {
                $msg="Username or password is invalid";
            }
        }
        else
        {
            $msg="All fields are mandatory";
        }
    }
?>
<!--LOGIN FORM SUBMISSION ENDS HERE-->
    <header class="login-header">
        <h2>Mizoram University</h2>
    </header>
    <form autocomplete="off" action="index.php" method="POST" class="login-form">
        <div>
            <p>Password and username must be at least 6 character long  </p>
            <?php if(isset($msg))
            {
                echo '<p>'.$msg.'</p>';
            }
            ?>
        </div>
        <label for="username">Username</label>
        <input  type="text" name="username" id="username">
        <label for="password">Password</label>
        <input  type="password" name="password" id="password">
        <input type="submit" name="login" value="Login">
    </form>
</body>

