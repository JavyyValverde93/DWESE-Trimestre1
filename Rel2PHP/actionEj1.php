<!DOCTYPE html>
<?php
function comprobarCadena($c){
    return strlen($c); //Devolvemos la longitud, si es 0 es falso
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> </title>
</head>
<body style="background:cadetblue;">
    <H3 class="text-center mt-3"></H3>
    <DIV class="container mt-3">
        <?php
        $nombre=trim($_POST['nombre']);
        $apellido=trim($_POST['apellido']);

        if(!comprobarCadena($nombre)){
            echo "<p class='text-danger'>Error, no se ha rellenado el campo nombre";
        }else{
            echo "Nombre: $nombre";
        }
        echo "<p></p>";
        if(!comprobarCadena($apellido)){
            echo "<p class='text-danger'>Error, no se ha rellenado el campo apellido";
        }else{
            echo "Apellidos: $apellido";
        }
        ?>
        </DIV>
</body>
</html>
