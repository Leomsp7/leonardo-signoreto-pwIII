<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="excG.php" method="POST">
        <center><label>VAMOS CALCULAR O VOLUME DA CAIXA RETANGULAR!!!</label></center>
        <br><br><br>
<label> Digite o valor do comprimento   </label>
<input type="text" name="comprimento">
<br><br>
<label>Digite o valor da largura    </label>
<input type="text" name="largura">
<br><br>
<label>Digite o valor da altura</label>
<input type="text" name="altura">
<br><br>
<input type="submit">



    </form>
    
</body>
</html>

<?php

$comprimento=$_POST['comprimento'];
$largura=$_POST['largura'];
$altura=$_POST['altura'];
$volume=$comprimento*$largura*$altura;

echo "O volume da caixa retangular é ", $volume;






?>