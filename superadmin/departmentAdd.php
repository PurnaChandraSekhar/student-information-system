<?php
/**
 * Created by PhpStorm.
 * User: hussain-dev
 * Date: 09-Mar-18
 * Time: 6:21 AM
 */

require_once '../include.php';
require_once '../include/header.php';
require_once '../include/sidebar.php';
$login->check_login();
if(!isset($_GET['sid']))
{
    header('LOCATION:index.php');
} //GET sid CHECK
else
{
    //    CHECKINGG WHETHER PASSED SCHOOL ID IS VALID OR NOT
    $result = $sAdmin->checkSchoolId($_GET['sid']);
    var_dump($result);
    if($result)
    {
        $row=$result->fetch();
    }
    else
    {
        $msg="Invalid School Id";
    }

?>
    <section class="wrapper">
        <div class="add-department-page">
            <?php print_r($row);
            if($msg){echo $msg;}

            ?>

        </div>
    </section>
<?php
} //GET SID ELSE CLAUSE ENDS HERE
?>