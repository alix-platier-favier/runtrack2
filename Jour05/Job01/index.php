<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-J5job1</title>
</head>
<body>
<?php
session_start();

if(isset($_POST["reset"])){
    $_SESSION["nbvisites"] = 0;
}elseif(isset($_SESSION["nbvisites"])){
    $_SESSION["nbvisites"] += 1;
}else{
    $_SESSION["nbvisites"] = 1;
}

echo $_SESSION["nbvisites"];
?>
<form method = "post">
    <button type="submit" name="reset">Reset</button>
</form>
</body>
</html>