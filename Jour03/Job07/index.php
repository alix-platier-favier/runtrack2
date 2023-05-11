<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-J3-job7</title>
</head>
<body>
    <?php
        $str = "Certaines choses changent, et d'autres ne changeront jamais.";  
        $string = "";
        $i = 0;
        $first_char = $str[0];

        while (isset($str[$i])){
            $i++;
        }
        
        $next_char = $str[$i - 1];
        $string .= $next_char;
        $string .= $first_char;
        
        echo $string;
    ?>
</body>
</html>