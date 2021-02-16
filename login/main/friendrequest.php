<?php session_start();

if(isset($_GET["type"], $_GET["user1_id"], $_GET["user2_id"]))
{

$type = $_GET["type"];

$id_1 = (int)$_GET["user1_id"]; // 콘텐츠 아이디
$id_2 = (int)$_GET["user2_id"];
$conn = mysqli_connect("127.0.0.1", "root", "mysun1020", "appointmentapp");

if($type == "request")
{
    $query = "insert into relationship(one_id, two_id, status, action_user_id) 
    value('{$id_1}','{$id_2}',0,'{$id_1}' )";
    mysqli_query($conn, $query);
    header("location:finduser.php");


}elseif($type == "accept"){
    $query = "
    update relationship set status = 1, action_user_id = {$id_1}
    where one_id = {$id_2} and two_id = {$id_1};
    ";
    mysqli_query($conn, $query);
    header("location:friendlist.php");
}
}
?>