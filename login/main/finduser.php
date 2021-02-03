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
        <a href = "#">
        <div class = "icon">
        <i class="fas fa-search"aria-hidden = "true"></i>
        </div>
        </a>
    </li>
    <li>
        <a href = "#">
        <div class = "icon">
        <i class="fas fa-bars"aria-hidden = "true"></i>
        </div>
        </a>
    </li>    
</ul>


<form class = "searchform" action = "finduser.php" method = "POST">
    <input type ="text" name = "nameTofind" id = "nameTofind"/>
    <button>Search</button>
</form>

<div class = "result">
<?php
if (empty($_POST['nameTofind']) == false ){
            $conn = mysqli_connect("localhost", "root", "mysun1020", "appointmentapp");
            $name = $_POST['nameTofind'];
            $sql = "select * from user where name = '{$_POST['nameTofind']}'";
            $result = mysqli_query($conn, $sql);


            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)) {

                    echo "이름: " . $row["name"]. "<br>". $row["emailId"]. "<br>";
                    }

                if($row != NULL){
                    $get_email = $row->emailId;

                    echo "{$name}<br>";
                    echo $get_email;}
            }   
            else{
                    echo "검색결과를 찾을 수 없습니다.";
                }
        }else{
            echo false;
        }
?>
</div>

</body>
</html>