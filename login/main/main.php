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
        <a href = "#">
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


<div class = "message">
<?php
if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
           
            echo "로그인 하셔야죠\n<a href=\"../index.php\">[로그인]</a></p>";
                
            } else {
                $conn = mysqli_connect("localhost", "root", "mysun1020", "appointmentapp");
                $name = mysqli_query($conn, "
                select name from user where emailId = '{$_SESSION['user_id']}'
                ");

                echo "환영합니다 ".$name->fetch_object()->name.'님 :)<br>';

                echo "<a href=\"../user/logout.php\">   [로그아웃]</a></p>";

            }
?>
</div>


</body>
</html>