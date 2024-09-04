<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <label for="">Digite um número</label>
    <input type="number" name="numero">
    <br>
    <input type="submit">
    </form>


    <?php 
    
    $numero= $_GET['numero'];



    if ($numero  % 2 == 0) {
       echo "O numero é par";
    }
    else {
        echo "O numero é impar";
        
    }
              
       
    ?>



</body>
</html>