<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD']=="POST"){
        //something was posted
        $user_id = random_num(20);
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            //save to database
            $query = "insert into users(user_id, user_name, password) values ($user_id, $user_name, $password)";
            mysqli_query($conn, $query);

            header(location: "login.php");
            die;
        }else{
            echo("please enter some valid information");
        }

     }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    

</head>
<body style = "background-color: lightgrey">
    <style type = "text/css">
        #text{
            heigt: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin $aaa;
            width: 100%;
        }


        #button{
            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightblue;
            border: none;
        }


        #box{
            padding: 20px;
            width: 300px;
            background-color: grey;
            margin: auto;
        }
    </style>


    <div id="box">

      <form action="" method = "post">
        <div style="font-size: 20px;margin: 10px;">signup</div>
        <input type="text" id="text" name="user_name" placeholder="user name"><br><br>
        <input type="password" id="text" name="password" placeholder="password"><br><br>

        <input type="submit" id="button" value="signup"><br><br>

        <a href="login.php">click to login</a>

      </form>
    </div>

</body>
</html>