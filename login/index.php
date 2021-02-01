<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <title>Login/Registration form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="login-form">
        <img src="logo.png" width="95%">
    <div class = "form">
    <form class = "register-form" action = "user/register.php" method = "POST">
        <input type ="text" name = "user_name" id = "user_name" placeholder="name"/>
        <input type ="password" name = "user_password" id = "user_password" placeholder="password"/>
        <input type ="text" name = "user_emailId" id = "user_emailId" placeholder="email id"/>

        <button>Create</button>
        <p class="message">Already Registered?  <a href = "#">Login</a></p>
    </form>

    <form class="login-page" action = "index.php">
        <input type ="text" name = "user_emailId" id = "user_emailId" placeholder="email id">
        <input type ="password" name = "password" placeholder="password"/>

        <dev id = "alert">
        <?php

        if (empty($_GET['user_emailId']) == false && empty($_GET['user_emailId']) == false){
            $conn = mysqli_connect("localhost", "root", "mysun1020", "appointmentapp");

            $result = mysqli_query($conn, "
            select password from user where emailId = '{$_GET['user_emailId']}'
            ");

            $name = mysqli_query($conn, "
            select name from user where emailId = '{$_GET['user_emailId']}'
            ");

            if($result){
                $row = $result->fetch_object();
                if($row != NULL){
                    $get_password = $row->password;

                    if($_GET['password'] == $get_password)
                    {echo "환영합니다 ".$name->fetch_object()->name.'님 :)';}
                    else{
                        echo "비밀번호가 일치하지 않습니다";
                    }
                }else{
                    echo "존재하지 않는 사용자입니다.";
                }
            }else{
                echo false;
            }
        }

        ?>
        </dev>

        <button>login</button>

        <p class="message">Not Registered?  <a href="#">Register</a></p>
        

    </form>
    </div>
    </div>

    <script src='https://code.jquery.com/jquery-3.5.1.min.js'>
    </script>

    <script>
        $('.message a').click(function(){
            $('form').animate({height : "toggle", opacity: "toggle"}, "slow");
        });
    </script>
    
</body>
</html>