<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="excJ.php" method="POST">
        <center><label>VAMOS CALCULAR O CONSUMO MÉDIO DE GASOLINA!!!</label></center>
        <br><br><br>
<label> Digite a distância percorrida pelo automóvel (Km)  </label>
<input type="text" name="km">
<br><br>
<label>Digite o consumo de gasolina desse percurso (L) </label>
<input type="text" name="gasolina">

<input type="submit">



    </form>
    
</body>
</html>

<?php

$km=$_POST['km'];
$gasolina=$_POST['gasolina'];
$consmed= $km/$gasolina;

echo "O consumo médio de gasolina é de ", $consmed," KM/L";



?>