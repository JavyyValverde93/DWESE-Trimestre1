<?php
require_once "../src/Producto.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>POO_1</title>
</head>
<body style="background: cadetblue;">
    <h3 class="my-3 text-center">Ejemplo POO</h3>
    <div class="container mt-3">
        <?php
            $producto = new Producto(1);
            $producto -> codigo = 56;
            echo "El código es: $producto->codigo";
            //Podemos acceder al id que es estatico con el nombre de la clase y con el operador ::
            echo "<br>El valor del id es: ".Producto::$id;
            $producto->setStock(45);
            echo "<br> El stock es: " .$producto->getStock();
            //---------------------------------------------
            $producto3 = new Producto(1200, "TC 16", 45);
            echo "<br>";
            var_dump($producto3);
            echo "<br>Has instanciado un total de ".Producto::$id;

            echo $producto3;
            //---------------------------------------------
            //1. get_class()
            echo "<br>La clase de \$producto3 es ".get_class($producto3);
            //2. class_exist
            if (class_exists('Producto')) {
                echo "<br>La clase existe";
            } else {
                echo "<br>La clase no existe";
            }
            //3. get_declared_classes()
            echo "<br>";
            var_dump(get_declared_classes());
            //4. get_class_methods
            echo "<br>";
            var_dump(get_class_methods('Producto'));
            //5. get_class_vars
            echo "<br>";
            var_dump(get_class_vars('Producto'));
            //6. method_exists()
            if (method_exists('Producto', 'getStock')) {
                echo "<br>El método existe";
            }
        ?>
    </div>
</body>
</html>