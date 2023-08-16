<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Digite la siguiente info:</h1>
    <form action = "" method="get">
        Nombre:
        <input type="text" name = "nombre" id="" />
        <br>
    Fecha:
    <input type="date" name = "fecha" id="" />
    <br>
    Observacion:
    <input type= "text" name="obs">
    <br>
    <input type="submit" value="Enviar">
    
</form>
<h2>Informacion enviada es:</h2>
<?php
print_r($_POST);
?>
</body>
</html>