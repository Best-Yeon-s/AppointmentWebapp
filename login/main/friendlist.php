<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <title>Login/Registration form</title>
    <link rel = "stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" rel="stylesheet" >
</head>
<body>

<ul>
    <li>
        <a href = "main.php">
            <div class = "icon">
                <i class="fas fa-calendar-alt"aria-hidden = "true"></i>
            </div>
        </a>
    </li>
    <li>
        <a href = "#">
        <div class = "icon">
        <i class="fas fa-user-friends" aria-hidden = "true"></i>
        </div>
        </a>
    </li>
    <li>
        <a href = "finduser.php">
        <div class = "icon">
        <i class="fas fa-search"aria-hidden = "true"></i>
        </div>
        </a>
    </li>
    <li>
        <a href = "setting.php">
        <div class = "icon">
        <i class="fas fa-bars"aria-hidden = "true"></i>
        </div>
        </a>
    </li>    
</ul>

<div class = "result">
<?php
    $conn = mysqli_connect("localhost", "root", "mysun1020", "appointmentapp");

    echo "<h1> 친구 요청 </h1>";

    $sql = "  select id,emailId,name from relationship left join user 
    on if (one_id = {$_SESSION['user_id']}, two_id, one_id) = user.id 
    where (status = 0) and (action_user_id !={$_SESSION['user_id']})  
    and (relationship.one_id = {$_SESSION['user_id']} OR relationship.two_id = {$_SESSION['user_id']});";

    $request_received = mysqli_query($conn, $sql);

    if(mysqli_num_rows($request_received) > 0){
        while($row = mysqli_fetch_assoc($request_received)) {

            echo "이름: " . $row["name"]. 
                    "<br>". $row["emailId"].
                    "<br>".
                    '<a href="friendrequest.php?type=accept&user1_id='
                    .$_SESSION['user_id'].'&user2_id='.$row["id"].'">친구수락</a><br><br>';
            }
        if($row != NULL){
            $get_email = $row->emailId;
            echo "{$name}<br>";
            echo $get_email;}
    }   
    else{
            echo "받은 친구 요청이 없습니다";
        }


    echo "<h1> 친구 목록 </h1>";
    $sql = "  select id,emailId,name from relationship left join user 
    on if (one_id = {$_SESSION['user_id']}, two_id, one_id) = user.id 
    where (status = 1) and (relationship.one_id = {$_SESSION['user_id']} OR relationship.two_id = {$_SESSION['user_id']}) ;";
    $result = mysqli_query($conn, $sql);


    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)) {

            echo "이름: " . $row["name"]. 
                    "<br>". $row["emailId"].
                    "<br><br>";
            }
        if($row != NULL){
            $get_email = $row->emailId;
            echo "{$name}<br>";
            echo $get_email;}
    }   
    else{
            echo "친구가 없습니다.";
        }
?>
</div>

</body>
</html>