<?php
    require "../src/ejemplo.php";
    use const Proyecto\PI;
    use function Proyecyo\saludo;
    use Proyecto\Prueba;
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
            echo Proyecto\PI;
            echo Proyecto\saludo();
            $miPrueba->saludoClase("Manolo");
        ?>
    </div>
</body>
</html>
