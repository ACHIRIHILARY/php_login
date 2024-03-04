<php


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    session_start();
    include("connection.php");
    include("functions.php");
?>
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
        <div style="font-size: 20px;margin: 10px;">login</div>
        <input type="text" id="text" name="user_name" placeholder="user name"><br><br>
        <input type="password" id="text" name="password" placeholder="password"><br><br>

        <input type="submit" id="button" value="login"><br><br>

        <a href="signup.php">click to signup</a>

      </form>
    </div>

</body>
</html>