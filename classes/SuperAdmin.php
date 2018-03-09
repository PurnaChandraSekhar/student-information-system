<?php
/**
 * Created by PhpStorm.
 * User: hussain-dev
 * Date: 08-Mar-18
 * Time: 7:04 AM
 */

/*
 * THIS CLASS CONTAINS CODE FOR OPERATION THAT WILL BE PERFORMED BY SUPER ADMIN
 * /*/
class SuperAdmin extends Database
{
//    ADD SCHOOL METHOD STARTS HERE
   function add_school()
   {
       $school_array=array(
           'id'=>'',
           's_id'=>$_GET['school_id'],
           'name'=>$_GET['school_name']
       );
       $sql="INSERT INTO school VALUES (:id, :s_id,:name)";
       $result=$this->runPrepare($school_array, $sql);
       return $result;
   } //add school method ends here3

//    FUNCTION FOR CHECKING THAT PASSED SCHOOL ID IS VALID OR NOT
    function checkSchoolId($id)
    {
        $sql="SELECT * FROM school WHERE sch_id=:sid";
        $data=array('sid'=>$id);
        $result=$this->runPrepare($data, $sql);
        if($result) //QUERY SUCCESS
        {
            if($result->rowCount()) //school found or not
            {
                return $result;
            }
        }
        else //QUERY FAILS OR NO SCHOOL FOUND
        {
            return False;
        }
    }
}
$sAdmin= new SuperAdmin();