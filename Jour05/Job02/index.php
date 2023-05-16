<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-J5job2</title>
</head>
<body>
<?php
$nbvisites = 0;

if (isset($_COOKIE["nbvisites"])) {
    $nbvisites = $_COOKIE["nbvisites"] + 1;
}

if (isset($_POST["reset"])) {
    $nbvisites = 1;
}

setcookie("nbvisites", $nbvisites, time() + (60 * 60 * 24));

echo $nbvisites;
?>
<form method="post">
<button type="submit" name="reset">Reset</button>

</form>
</body>
</html>