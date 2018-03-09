<?php
/**
 * Created by PhpStorm.
 * User: hussain-dev
 * Date: 08-Mar-18
 * Time: 6:07 AM
 */
require_once '../include.php';
$login->check_login();
require_once '../include/header.php';
require_once '../include/sidebar.php';
?>
<section class="wrapper">
    <?php
    if(isset($_GET['submit']))
    {
        $id=$_GET['school_id'];
        $name=$_GET['school_name'];
        if((ctype_alpha($id) && ctype_alpha(str_replace(' ', '', $name))) && strlen($name)>5 && strlen($id)>2)
        {
            $result = $sAdmin->add_school();
            if($result)
            {
                header('LOCATION:departmentAdd.php?sid='.$id);
            }
            else
            {
                $msg="School id already exists";
            }
        }
        else
        {
            $msg="Invalid Inputs, please read instructions carefully";

        }

    }
    ?>
    <section class="add-school-page">
        <div class="instruction-msg">
            <ul>
                <li>Only alphabets are allowed</li>
                <li>School name must be atleast 6 character long</li>
                <li>School id must be atleast 2 character long</li>
                <li><strong><?php if(isset($msg)){ echo $msg;} ?></strong></li>
            </ul>
        </div>
        <form class="add-school-form" method="GET" action="school.php">
            <div>
                <label for="school_id">School Id</label>
                <input required type="text" name="school_id" id="school_id">
            </div>
            <div>
                <label for="school_name">School name</label>
                <input required type="text" name="school_name" id="school_name">
            </div>
            <div>
                <input type="submit" name="submit" value="Go Ahead!">
            </div>
        </form>
    </section>
</section>
