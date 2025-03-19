<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exc02.php" method="POST">
        <input type="text" name="num1">
        <input type="submit">
    </form>
    
</body>
</html>

<?php
$num1= $_POST['num1'];
$resultado= $num1*0.15;

echo "15% desse valor é ", $resultado; 

?>