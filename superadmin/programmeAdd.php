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
    if($result) //IF SCHOOL FOUND
    {
        $row=$result->fetch();
    }
    else //school not found
    {
        $msg="Invalid School Id";
    }

?>
    <section class="wrapper">
        <div class="add-department-page">
            <?php
                if (isset($msg)) //INVALID SCHOOL ID MESSAGE
                {
                    echo "<div class='instruction-msg'>$msg</div>";
                    exit();
                }
            ?>
            <h2 class="hero"><?php echo $row['sch_name']; ?></h2>
            <form action="">
                <div class="form-wrapper">
                    <div>
                        <label for="p_id">Programme ID</label>
                        <input type="text" name="p_id[]" >
                    </div>
                    <div>
                        <label>Programme Name:</label>
                        <input type="text" name="p_name">
                    </div>
                </div>
                <div>
                    <input type="submit" value="Submit" name="programme_submit">
                </div>
            </form>
        </div>
    </section>
<?php
} //GET SID ELSE CLAUSE ENDS HERE
?>