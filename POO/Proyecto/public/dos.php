<?php
    spl_autoload_register(function($clase){
        require_once "../src//$clase.php";
    });
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> </title>
</head>
<body style="background:cadetblue;">
    <H3 class="text-center mt-3"> </H3>
    <div class="container mt-3">
        <?php
            $producto = new Producto(1200, "TC LG", 45);
            $copia=$producto;
            $copia->codigo=234;
            echo $producto;
            //Para tener una copia independiente
            $copia1 = clone($producto);
            $copia1->codigo=15000;
            echo "<br>".$producto;
            //-----------------------------------------------
            $producto2 = new Producto();
            echo $producto2;

            //--------------------------------------------
            $persona1 = new Persona();
            echo $persona1;
            $persona2 = new Persona("Juan", "Fernandez");
            echo $persona2;
            $persona3 = new Persona("Juan", "Garcia", 45);
            echo $persona3;
            echo "<br>He instanciado un total de ".Persona::$cont. " personas";

        ?>
</body>
</html>
