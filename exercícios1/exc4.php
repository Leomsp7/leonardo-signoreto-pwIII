<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exc4.php" method="POST">
        <input type="text" name="num1">
        <input type="text" name="num2">
        <input type="submit">
    </form>
    
</body>
</html>

<?php
$num1= $_POST['num1'];
$num2= $_POST['num2'];
$quadrado1= $num1*$num1;
$quadrado2= $num2*$num2;
$resultado= $quadrado1+$quadrado2;

echo "A soma dos quadrados dos valores é ", $resultado; 

?>