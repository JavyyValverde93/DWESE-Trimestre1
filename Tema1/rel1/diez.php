<!DOCTYPE html>
<?php
    function isNegativo(){
        global $a, $b, $c;
        return [($b*$b-4*$a)]
        //($b*$b-4*$a*$c)<0 ? true: false;
    }
    function calcularSolucion(){
        global $a, $b, $c;
        $sol1=(-$b+sqrt($b*$b-4*$a*$c))/2*$a;
        $sol2=(-$b+sqrt($b*$b-4*$a*$c))/2*$a;
        echo "<br>La solucion 1 es: ".$sol1;
        echo "<br>La solucion 2 es: ".$sol2;

    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> </title>
</head>
<body STYLE="BACKGROUND:CADETBLUE;">
    <H3 CLASS="TEXT-CENTER MT-3">Ejemplos PHP</H3>
    <DIV CLASS="CONTAINER MT-3">
        <?php
        $a=1;
        $b=1;
        $c=1;
        //----------Comprobamos el discriminante
        if(isNegativo($a, $b, $c)){
            echo "El discriminante es NEGATIVO, no hay solución!!!!!";
        }else{
            calcularSolucion();
        }

        

        ?>
    </DIV>
</body>
</html>