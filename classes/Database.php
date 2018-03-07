<?php
/**
 *
 */
class Database
{
//  DATABASE CONNECTION VARIABLE


    function __construct()
    {
        global $db;
        try
        {
            $db = new PDO("mysql:host=localhost;dbname=student-info-system;", 'root', '1mlRgbdmMBj2LQeW');
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        }
        catch(PDOException $e)
        {
            echo "Database Connection failed";
            exit();
        }
    }

    function runPrepare($data,$sql)
    {
        global $db;

        $stmt=$db->prepare($sql);
        $result=$stmt->execute($data);
        if($result)
        {
            return $stmt;
        }
        else
        {
            return False;
        }
    }

    function runQuery($sql)
    {
        global $db;
        $result=$db->query($sql);
        return $result;
    }
}

$dbob=new Database();
?>