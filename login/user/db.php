<?php

function dbconn()
{
    $host_name = "127.0.0.1";
    $db_user_id = "root";
    $db_name = "appointmentapp";
    $db_pw = "mysun1020";
    $conn = mysqli_connect($host_name, $db_user_id, $db_pw , $db_name);

    if($conn == false){
        echo "db 접속 실패";
        die('connect error : '.$conn->connect_errno);
    }
    return $conn;
}

?>