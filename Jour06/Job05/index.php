<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-J6job5</title>
</head>
<body>
    <?php

function occurrences($str, $char){
    $count=0;
    $i=0;

    while(isset($str[$i])){
        if($str[$i] === $char){
            $count++;
        }
        $i++;
    }
    return $count;
}

$str = "This is my nono square";
$char = "s";
$result = occurrences($str, $char);

echo "Le nombre d'occurrences de '$char' dans '$str' est : " . $result;

?>
</body>
</html>

