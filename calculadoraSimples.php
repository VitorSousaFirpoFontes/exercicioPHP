<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <label for="">Digite um numero</label>
    <input type="number" name="numero">
    <label for="">Digite o segundo numero</label>
    <input type="number" name="numero2">
    <label for="">Digite a operação</label>
    <input type="text" name="operacao">
    <br>
    <input type="submit">
    </form>

</body>

<?php 

if (isset($_GET['numero']) && isset($_GET['numero2']) && isset($_GET['operacao'])) {
$numero = $_GET['numero'];
$numero2 = $_GET['numero2'];
$operacao = $_GET['operacao'];
$resultado = 0;

if (is_numeric($numero) && is_numeric($numero2)) {
switch ($operacao) {

case ("+"):
    $resultado = $numero + $numero2;  
    echo $resultado;
     break;

 case ("-"):
    $resultado = $numero - $numero2;  
    echo $resultado;
    break;


case ("/"):
    $resultado = $numero / $numero2;  
    echo $resultado;
    break;   

}

}

}

?>



</html>