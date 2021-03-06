<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>uno</title>
</head>
<body STYLE="BACKGROUND:CADETBLUE;">
    <H3 CLASS="TEXT-CENTER MT-3">Ejemplos PHP</H3>
    <DIV CLASS="CONTAINER MT-3">
        <?php
            echo "Hola mundo\n";
            echo '<hr>Hola otra vez\n';
            //Comentario de una línea
            /*Comentario
            de muchas
            líneas*/
            //Variables-----------------
            $nombre="Carlos";
            $edad=34;
            echo "<br>El nombre es $nombre";
            echo '<br>El nombre es $nombre';
            echo "<br>\"Entrecomillado\"";
            echo '<br>Hola ' .$nombre.' tu edad es ' .$edad.PHP_EOL;
            $apellidos="Garcia Vaquero";
            $NombreCompleto=$apellidos.", " .$nombre;
            echo "<br>La variable de $nombre es de tipo: " gettype($nombre);
            

        ?>
    </DIV>
</body>
</html>