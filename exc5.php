<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exc5.php" method="POST">
        <label>Peso:</label>
        <input type="text" name="peso">
        <br>
        <br>
        <label>Altura:</label>
        <input type="text" name="altura">
        <br>
        <br>
        <input type="submit">
    </form>
    
</body>
</html>

<?php

$peso= $_POST['peso'];
$altura= $_POST['altura'];
$imc= $peso/($altura*$altura);

echo "Seu IMC é ", $imc;





?>