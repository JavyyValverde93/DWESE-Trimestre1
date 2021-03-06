<?php
    require_once "../src/Producto.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>POO_1 </title>
</head>
<body style="background:cadetblue;">
    <H3 class="text-center mt-3">Ejemplo POO </H3>
    <div class="container">
        <?php
            $producto = new Producto();
            $producto -> codigo=56;
            echo "El código es: {$producto ->codigo}";
            //Podemos acceder al id que es estático con el nombre de la clase y el operador ::
            echo "<br>El valor de id es ".Producto::$id;
            $producto->setStock(45);
            echo "El stock es: ".$producto->getStock();
            $producto1 = new Producto();
            /* $producto::$id=123;
            echo "<br>".$producto1::$id;
            echo "<br>".Producto::$id; */
            //--------------------------------------------
            $producto3 = new Producto(1200, "TC LG", 45);
            echo "<br>";
            var_dump($producto3);
            echo "Has instanciado un total de: ".Producto::$id;
            echo $producto3;
            //1.-get_class()
            echo "<br>La clase de \$producto3 es ".get_class($producto3);
            //2.-class_exists
            if(class_exists('Producto')){
                echo "<br>La clase existe";
            }else{
                echo "<br>La clase no existe";
            }
            //3.-get_declared
            echo "<br>";
            var_dump(get_declared_classes());

            //4.-get_class_methods
            echo "<br>";
            var_dump(get_class_methods('Producto'));
            //5.-get_class_vars
            echo "<br>";
            var_dump(get_class_vars('Producto'));
            //6.-method_exists()
            if(method_exists('Producto', 'getStock')){
                echo "<br>El método existe";
            }
        ?>
    </div>
</body>
</html>
