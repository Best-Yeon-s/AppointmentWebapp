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
        <a href = "friendlist.php">
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


<dev class = "calendar">
<?php
// 파일 열기
$fp = fopen("../../calendar/index.html", "r") or die("파일을 열 수 없습니다！");

// 파일 내용 출력
while( !feof($fp) ) {
echo fgets($fp);
}

// 파일 닫기
fclose($fp);







?>
</dev>
</body>
</html>