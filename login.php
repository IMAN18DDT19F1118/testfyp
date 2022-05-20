<?php
session_start();
include("dbUser.php");
include("functions.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<style>
    #text{
        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
    }

    #button{
        padding: 10px;
        width: 100px;
        color: white;
        background-color: blue;
        border: none;
    }

    #box{
        background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
        margin: auto;
        width: 300px;
        padding: 20px;
    }

    body{
        background-image: linear-gradient(to left, #fbc2eb 0%, #a6c1ee 100%);
    }
    
    
    .btn-grad {background-image: linear-gradient(to right, #1FA2FF 0%, #12D8FA  51%, #1FA2FF  100%)}
         .btn-grad {
            margin: 10px;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
         
</style>

<body>

    <div id="content">
    <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">  
            <h1 class="h3 mb-0 text-gray-800" style="text-align: center;">Unit Pengurusan Psikologi Politeknik Tuanku Syed Sirajuddin</h1>
        </nav>
    </div>
    
    <div id="box">

        <form action="login/login.php" method="post">
        <div style="font-size: 14px; margin: 10px; color: black;">Selamat datang:</div>
            <div style="font-size: 20px; margin: 10px; color: black;">Log masuk</div>
            
            <input id="text" type="text" name="user_name" placeholder="Username"><br><br>
            <input id="text" type="password" name="password" placeholder="Password"><br><br>
            <input class="btn-grad" id="button"  type="submit" value="Log masuk"><br><br>

            <a href="signup.php">Click to Signup</a><br><br>
        </form>
    </div>

</body>
</html>
