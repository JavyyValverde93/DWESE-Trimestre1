<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title> </title>
</head>
<body STYLE="BACKGROUND:CADETBLUE;">
    <H3 CLASS="TEXT-CENTER MT-3">PHP</H3>
    <DIV CLASS="CONTAINER MT-3">
        <?php
            echo "<br><br>";
            $numero = 7;
            $contadorPrimo = 0;

            for($contador = 1; $contador<=$numero; $contador++){
                if($numero % $contador == 0){
                    $contadorPrimo = $contadorPrimo + 1;
                }
            }

            if($numero == 1 or $contadorPrimo == 2){
                echo "El numero ".$numero." es primo";
            }
            else{
                echo "El numero ".$numero." NO es primo";
            }
        ?>
    </DIV>
</body>
</html>