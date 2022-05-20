<?php
	$con = mysqli_connect('localhost','root','','bookingcalendar');
    $id = $_GET['dataDel'];
    $query="DELETE FROM temujanji WHERE id=$id";
    $result=mysqli_query($con,$query);

    $query2="DELETE FROM rujukan WHERE id=$id";
    $result2=mysqli_query($con,$query2);
    ?><script>
		alert('Data telah dipadam')
		window.location='view_appointment.php'
	</script>



Admin_login.php
<?php
session_start();
include("dbUser.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted

    $admin_name = $_POST['admin_name'];
    $admin_pass = $_POST['admin_pass'];
    
    

    if(!empty($admin_name) && !empty($admin_pass) && !is_numeric($admin_name))
    {

        //read from database
        $query = "select * from admin where admin_name = '$admin_name' limit 1";
        $result = mysqli_query($con, $query); 

        if($result){
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['admin_pass'] === $admin_pass)
                {
                    $_SESSION['admin_id'] = $user_data['admin_id'];
                    header("Location: admin_main.php");
                    die;
                }else
                {
                    ?>
                    <script>
                        alert('Wrong username or password!');
                        </script><?php
                }
            } else
            ?>
            <script>
            alert('Wrong username or password!');
            </script><?php
        }        
        
    }else
    {
        ?><script>
        alert('Wrong username or password!');
        </script><?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<style type="text/css">
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
        background-color: skyblue;
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
            <h1 class="h3 mb-0 text-gray-800" style="text-align: center;">Unit Kaunseling Politeknik Tuanku Syed Sirajuddin</h1>
        </nav>
    </div>
    
    <div id="box">

        <form method="post">
        <div style="font-size: 14px; margin: 10px; color: black;">Selamat datang:</div>
            <div style="font-size: 20px; margin: 10px; color: white;">Admin login</div>
            
            <input id="text" type="text" name="admin_name" placeholder="Username"><br><br>
            <input id="text" type="password" name="admin_pass" placeholder="Password"><br><br>
            <input id="button" class="btn-grad" type="submit" value="Login"><br><br>

        </form>

    </div>

</body>
</html>
