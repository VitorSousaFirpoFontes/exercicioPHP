<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="get">
    <label for="">Digite a nota</label>
    <input type="number" name="nota">
    <br>
    <input type="submit">
    </form>





</body>

<?php 
$nota = $_GET['nota'];

if (isset ($nota))  {
switch($nota) {
    case $nota==10: echo "Nota A";
    break;
    case $nota==9: echo "Nota B";
    break;
    case $nota==8 or $nota==7 : echo "Nota C";
    break;
    case $nota==6 or $nota==5: echo "Nota D";
    break;
    case $nota<5 : echo "Nota E";
    break;
    
}

}
?>



</html>