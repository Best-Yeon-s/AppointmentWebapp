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
    <form class = "register-form" action = "register.php">
        <input type ="text" name = "user_name" id = "user_name" placeholder="name"/>
        <input type ="password" name = "user_password" id = "user_password" placeholder="password"/>
        <input type ="text" name = "user_emailId" id = "user_emailId" placeholder="email id"/>

        <button>Create</button>
        <p class="message">Already Registered?  <a href = "#">Login</a></p>
    </form>

    <form class="login-page" action = "index.php">
        <input type ="text" name = "name" placeholder="name"/>
        <input type ="password" name = "password" placeholder="password"/>

        <dev id = "alert">
        <?php
            if(empty($_GET['name']) == false && empty($_GET['password']) == false)
            {
                $password = $_GET["password"];
                $name = $_GET["name"];
    
                if($name == "sunkite3030"){
    
                    if($password == "12345"){
                        header( 'Location: root.html' );
                    }else{
                        echo "비밀번호가 일치하지 않습니다.";
                    }
                }else{
                    echo "존재하지 않는 회원입니다.";
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