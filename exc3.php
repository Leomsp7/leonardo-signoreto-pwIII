<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exc3.php" method="POST">
        <input type="text" name="num1">
        <input type="submit">
    </form>
    
</body>
</html>

<?php
$num1= $_POST['num1'];
$resultado1= $num1*0.05;
$resultado2= $num1*0.5;

echo "5% desse valor é ", $resultado1, "e 50% desse valor é ", $resultado2; 

?>