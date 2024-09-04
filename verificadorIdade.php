<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="get">
    <label for="">Digite o ano de nascimento</label>
    <input type="number" name="ano">
    <br>
    <input type="submit">
    </form>



    <?php   

    if (isset ($_GET['ano'])) {
    $ano= $_GET['ano'];
    $resultado = 2024- $ano;
    
    if ($resultado<18) {
        echo "Proibido menores de 18";
    }
    else {
    echo "Sua idade é ". $resultado; 
    }
    }
    
    
    ?>



</body>
</html>