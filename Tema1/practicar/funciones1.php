<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Funcion1 </title>
</head>
<body STYLE="BACKGROUND:CADETBLUE;">
    <H3 CLASS="TEXT-CENTER MT-3">Ejemplos PHP</H3>
    <DIV CLASS="CONTAINER MT-3">
        <?php
        //Funciones que no necesitan nombre
        $saludo = function($n){
            return "<br>Hola Te estoy saludando, soy $n<br>";
        };
        //Usemos la funcion anterior
        echo $saludo("MANOLO");
        //la otra forma que hay de usar esta función es:
        function decir($texto){
            echo "<br>Te estoy saludando desde una función anónima";
        }
        decir(function(){
            return "<br>Te estoy saludando desde una función anónima";
        })
        ?>
    </DIV>
</body>
</html>