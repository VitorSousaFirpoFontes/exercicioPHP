<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <label for="">1 - Ver saldo</label>
    <input type="checkbox" name="opcao[]" value = "Você selecionou a opção 1 "> <br>
    <label for="">2 - Depositar </label>
    <input type="checkbox" name="opcao[]" value= "Você selecionou a opção 2"> <br>
    <label for="">3 - Sacar </label>
    <input type="checkbox" name="opcao[]" value = "Você selecionou a opção 3"> <br>
    <label for="">4 - Sair </label>
    <input type="checkbox" name="sair">
    <br>
    <input type="submit">
    </form>

    



</body>

<?php

if (isset($_GET['opcao'])) {
    $opcoes = $_GET['opcao'];
    foreach ($opcoes as $opcao) {
        echo htmlspecialchars($opcao) . "<br>";
    }
}

?>

</html>