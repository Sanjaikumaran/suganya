<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/frontend/database.class.php';

class Operations
{

    public function bookRide(
        $empId,
        $rideType,
        $schedule
    ) {
        $conn = database::getConnection();

        $sql = "INSERT INTO `rides` (`EmployeeID`,`RideType`,`Schedule`)
        VALUES('$empId','$rideType','$schedule')";

        if ($conn->query($sql) == true) {
            return true;
        } else {
            return false;
        }
    }

    public static function getData($table, $empId)
    {
        $conn = database::getconnection();
        $sql = "SELECT * FROM `$table` WHERE `EmployeeID` = '$empId';
";
        $result = $conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
//registration::getProfile("EMP003");
