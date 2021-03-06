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
            $tv1 = new Tv();
            $tv1->cod=15000;
            $tv1->nombre="Tv Samsung 45 Pulgadas HCFJHI";
            $tv1->nom_corto="Samsung 45";
            $tv1->pulgadas=45;
            $tv1->resolucion="4k";
            echo $tv1;

            $tele = new Tv(10000, "Tv Samsung 45 Pulgadas HCFJHI", "Samsung 45", 1234.56, 45, "4k");
            echo $tele;

            //1.-get_parent_class()
            echo "<br>".get_parent_class($tele);
            //2.- is_subclass_of
            if(is_subclass_of($tele, "Articulo")){
                echo "<br>Cierro";
            }
        ?>
    </div>
</body>
</html>
