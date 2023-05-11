<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-J3-job3</title>
</head>
<body>
    <?php
        $str = "I'm sorry Dave I'm afraid I can't do that";
        $voyelle = array("a", "i", "u", "e", "o", "A", "I", "U", "E", "O");
        $i = 0;

        while(isset($str[$i])){
            if (in_array($str[$i], $voyelle)){
                echo $str[$i];
            }
            $i++;
        }
    ?>
</body>