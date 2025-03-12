<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="excH.php" method="POST">
        <label>Digite o valor</label>
        <input type="text" name="val1">
        <input type="submit">
    </form>
    
</body>

<?php

$val1=$_POST['val1'];
$valorfinal=$val1*0.63;

echo "O valor que foi digitado com 27% de desconto é      ", $valorfinal;



?>