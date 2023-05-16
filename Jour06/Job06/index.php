<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-J6job6</title>
</head>
<body>
    <?php

function leetSpeak($str){
    $english = array("a", "e", "s", "S", "A", "o", "O", "t", "l", "ph", "y", "H", "W", "M", "D", "V", "x"); 
    $leet = array("4", "3", "z", "Z", "4", "0", "0", "+", "1", "f", "j", "|-|", "\\/\\/", "|\\/|", "|)", "\\/", "><");
    $result = '';
    $i = 0;
    
    while (isset($str[$i])) {
        $char = $str[$i];
        if (false !== ($pos = array_search($char, $english))) {
            $char = $leet[$pos];
        }
        $result .= $char;
        $i++;
    }
    
    return $result; 
}
    
$str = "I would if I could. But I can't so I won't.";
$result = leetSpeak($str);
echo $result;

?>
</body>
</html>

