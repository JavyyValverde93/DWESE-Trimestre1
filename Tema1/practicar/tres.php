<!DOCTYPE html>
<?php
        $b="Vielvo a ser b";ç
        function saludo(){
            echo "<br>Hola mundo"<br>;
        }
        function saludo1(){
            echo "<br>Hola $n<br>";
        }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>tres</title>
</head>
<body STYLE="BACKGROUND:CADETBLUE;">
    <H3 CLASS="TEXT-CENTER MT-3">Ejemplos PHP</H3>
    <DIV CLASS="CONTAINER MT-3">
        <?php
        $b="Vielvo a ser b";
        $a = "Variable a";
        echo "La variable \$a=$a<br>";
        echo "La variable \$b=$b<br>";

        saludo();
        $nombre = "Carlos";
        saludo1("Felipe");
        saludo1();

        //--------------------------------------
        //Funciones con un número variable de prámetros
        function saludo5(){
            $numero=func_num_args();
            echo "Has pasado $numero argumentos"<br>;
            for($i=0; $i<$numero;$i++){
                echo "El argumento $i es: ".func_get_arg($i);
            }
        }
        saludo5("Hola", 34, "Almería");
        //Arrays GLOBALS
        global $nombre;
        $nombre="Alandaluses";
        function prueba2(){
            $GLOBALS["nombre"]="Te cambié el nombre";
        }




        ?>
    </DIV>
</body>
</html>