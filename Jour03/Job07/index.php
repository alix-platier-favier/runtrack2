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
        
        for($i = 0; isset($str[$i]); $i++){
            if(!isset($str[$i+1])){
                $string .= $str[0];
            }else{
                $string .= $str[$i+1];
            }
        }

        echo $string;
    ?>
</body>
</html>