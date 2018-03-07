<?php
/**
 * Created by PhpStorm.
 * User: hussain-dev
 * Date: 07-Mar-18
 * Time: 7:22 AM
 */
class Login extends Database
{
//    login function ends here
    function login()
    {
       if(isset($_POST['login']))
       {
           $loginArray=array(
               'username'=>$_POST['username'],
               'password'=>$_POST['password']
           );
           $sql="SELECT * FROM `user` WHERE username=:username AND password=:password";
           $result=$this->runPrepare($loginArray,$sql);
           if($result)
           {
               if($result->rowCount()==1)
               {
                   $row=$result->fetch();
                   session_start();
                   $_SESSION['username']=$row['username'];
                   $_SESSION['type']=$row['type'];
//                DECIDING WHERE TO REDIRECT
                   $this->user_redirect($row['type']);
               }
           } //IF USER FOUND ENDS HERE
           else //login failed
           {
               return False;
           }
       } //POST SUBMIT CHECK
    } //LOGIN METHOD ENDS HERE

    function user_redirect($type)
    {
        switch ($type)
        {
            case '1':
                header('LOCATION: ./superadmin/');
                exit();
                break;
            case '2':
                header('LOCATION: ./admin/');
                exit();
                break;
            case '3':
                header('LOCATION: ./ldc/');
                exit();
                break;
            case '4':
                header('LOCATION: ./teacher/');
                exit();
                break;
            case '5':
                header('LOCATION: ./student/');
                exit();
                break;
        }
    } //USER REDIRECT FUNCTION ENDS HERE

//    CHECK LOGINs
    function check_login()
    {
        session_start();
        if(!isset($_SESSION['username']) && !isset($_SESSION['type']))
        {
            header('LOCATION: ../index.php');
        }
    }

//    login method
    function logout()
    {
        session_unset();
        session_destroy();
        header('LOCATION:../index.php ');
    }
}

$login = new Login();
?>