<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exc6.php" method="POST">
        <label>Digite o valor do produto</label>
        <input type="text" name="val1">
        <input type="submit">
    </form>
    
</body>
</html>

<?php

$produto= $_POST['val1'];
$desconto= $produto*0.07;
$resultadofinal= $produto-$desconto;

echo "O valor do produto é ", $produto, " reais, o desconto é de ",$desconto, "reais, e o valor final do produto é ",$resultadofinal; 





?>