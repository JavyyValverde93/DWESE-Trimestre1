<!DOCTYPE html>
<html lang="en">
<?php
    $fecha = new DateTime("now");
    $miFecha = $fecha -> format("m/d/Y H:i:s");
    if(isset($_COOKIE['visita'])){
        //Es pq ya he visitado la página alguna vez
        //muestro la fecha de la última visita y actualizo la cockie
        $mensaje=$_COOKIE['visita'];
        $contador=(int)($_COOKIE['contador'])+1;
        $mensCont=$contador;
        setcookie('contador', $mensCont, time()+30*24*3600);
        setcookie('visita', $miFecha, time()+30*24*3600);
    }else{
        //si entro aquí es pq es la primera vez, muestro la primera vez
        //y creo la cockie
        $mensaje="No has visitado la página nunca ";
        $mensCont=1;
        setcookie('contador', "1", time()+30*24*3600);
        setcookie('visita', $miFecha, time()+30*24*3600);
    }
?>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Cockies </title>
</head>
<body style="background:cadetblue;">
    <H3 class="text-center mt-3"> </H3>
    <div class="container mt-3">
        <?php
            echo "<p class='font-weight-bold'>Visitaste la página por última vez: $mensaje</p>";
            echo "<p xlass='font-weight-bold'>Has visitado la página un total de: $mensCont veces</p>";
        ?>
    </div>
</body>
</html>