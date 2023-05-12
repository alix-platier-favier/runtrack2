<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-J3job5</title>
</head>
<body>
<form method="post">
    <label for="Username">Username<br/></label>
    <input type="text" name="Username" id="Username"><br/>
    <label for="Password">Password<br/></label>
    <input name="Password" id="Password"><br/>

    <br/><input type="submit" value="Envoyer"><br/>
<?php 
    $username = $_POST["Username"];
    $password = $_POST["Password"];
    $i = 0;
    if(isset($_POST["Username"]) && ($_POST["Username"] == "John") && isset($_POST["Password"]) && ($_POST["Password"] == "Rambo")){
            echo "C'est pas ma guerre";
        }else{
            echo "Votre pire cauchemar";
        }
?>
</form>
</body>
</html>