<?php

function dbconn()
{
    $host_name = "localhost";
    $db_user_id = "root";
    $db_name = "appointmentapp";
    $db_pw = "mysun1020";
    $conn = mysqli_connect($host_name, $db_user_id, $db_pw , $db_name);

    if($conn->connect_errno){
        die('connect error : '.$conn->connect_errno);
    }
    return $conn;
}

?>