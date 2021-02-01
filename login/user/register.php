<?php

$conn = mysqli_connect("localhost", "root", "mysun1020", "appointmentapp");

$mysql = mysqli_query($conn, "
   insert into user(emailId, password, name) 
   value('{$_POST['user_emailId']}','{$_POST['user_password']}','{$_POST['user_name']}' )
");

if($mysql){
    echo "등록에 성공했습니다.
    <a href = '../index.php'>로그인<a/>";
}else{
    echo "실패했어요";
}

?>