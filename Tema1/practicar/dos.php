<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>dos</title>
</head>
<body STYLE="BACKGROUND:CADETBLUE;">
    <H3 CLASS="TEXT-CENTER MT-3">Ejemplos PHP</H3>
    <DIV CLASS="CONTAINER MT-3">
        <?php
            //Bucles---------------
            //for()     do while        while

            //1.--For
            for($i=0; $i<10;$i++){
                echo "Linea $i<br>".PHP_EOL;
            }
            do{
                echo "Linea $i<br>".PHP_EOL;
                $i++;
            }while($i<10);
            //---------------------------------
            $i=0;
            while($i<10){
                echo "Linea ".$i++."<br>".PHP_EOL;
            }
            //Tabla----------------------------------
            $filas=5;
            $col=7;
            echo "<table border=2 cellpadding=2 cellspacing=2 align='center'>\n";
            for($i=0;$i<$filas;$i++){
                echo "<tr>\n";
                for($a=0;$a<$col;$a++){
                    echo "<td>Celda[$i][$a]</td>\n";
                }
                echo "<tr>\n";
            }
            echo "</table>\n";
            echo "<br><br><br>";

        ?>
    </DIV>
</body>
</html>