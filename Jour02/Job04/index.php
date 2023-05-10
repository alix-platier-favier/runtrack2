<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-J2job4</title>
</head>
<body>
    <?php
        for ($x =1; $x <=100; $x++){
			if ($x % 3 == 0 && $x % 5 == 0){
				echo "FizzBuzz <br/>";
			}elseif ($x % 3 == 0){
				echo "Fizz <br/>";
			}elseif ($x % 5 == 0){
				echo "Buzz <br/>";
			}else {
				echo $x . "<br/>";
			}
		}
    ?>
</body>
</html>