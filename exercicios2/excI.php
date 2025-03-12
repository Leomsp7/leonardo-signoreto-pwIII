<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="excI.php" method="POST">
        <label>Digite o valor do produto</label>
        <input type="text" name="val1">
        <input type="submit">
    </form>
    
</body>
</html>

<?php

$produto= $_POST['val1'];
$desconto= $produto*0.16;
$resultadofinal= $produto+$desconto;
$parcelas= $resultadofinal/10;

echo "O valor da parcela é de  ", $parcelas, ", então o valor final, após 10 parceelas é de ", $resultadofinal;





?>