<?php
    session_start();

    include("connection.php");
    include("functions.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //read to database
            $query = "select * from users where user_name = '$user_name' limit 1";

            $result = mysqli_query($con,$query);

            if($result)
            {
                if($result && mysqli_num_rows($result) >0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] === $password)
                    {
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                        die;
                    }
                }
            }
            echo "wrong username or password!";
        }else
        {
            echo "wrong username or password!";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<style>
    body {
        background-image: url('dwow.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover; 
        }
</style>
    
<body>

    <style type="text/css">
    
    #text{

        height: 30px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
    }

    #button{

        padding: 10px;
        width: 300px;
        color: white;
        background-color: darkblue;
        border: none;
    }

    #box{

        background-color: none;
        margin: auto;
        width: 300px;
        padding: 20px;
    }

    </style>    

    <div id="box">
        
        <form method="post">
            
            <div style="font-size: 50px;margin: 10px;color: black; text-align: center;">Welcome</div>
            <div style="font-size: 30px;margin: 10px;color: black; text-align: center;">LOGIN</div>

            <input id="text" type="text" name="user_name" placeholder="username"><br><br>
            <input id="text" type="password" name="password" placeholder="password"><br><br>

            <input id="button" type="submit" value="SUBMIT"><br><br>

            <div stylecolor: red;>"</div>Don't have account?<br><a href="signup.php">Click to signup</a><br><br>

        </form>
    </div>
</body>
</html>