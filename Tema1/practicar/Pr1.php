<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Tabla </title>
</head>
<body STYLE="BACKGROUND:CADETBLUE;">
    <H3 CLASS="TEXT-CENTER MT-3">Ejemplos PHP</H3>
    <DIV CLASS="CONTAINER MT-3">
        <?php
        function tabla(){
            $filas=11;
            $col=11;
            $cont=1;
            $color=0;
            $primo=0;
            echo "<table border=2 cellpadding=5 cellspacing=5 align='center'>\n";
            for($f=1;$f<$filas;$f++){
                if($color==0){
                    echo "<tr bgcolor=aqua>\n";
                    $color=1;
                }else{
                    echo "<tr bgcolor=orange>\n";
                    $color=0;
                }
                for($c=1;$c<$col;$c++){
                    
                    for($p=1;$p<$cont;$p++){
                        if($cont%$p==0){
                            $primo++;
                        }
                    }
                    if($primo=0){
                        echo "<td>$cont</td>\n";
                    }else{
                        echo "<td>$cont<td>\n";
                    }
                    $cont++;
                }
                echo "<tr>\n";
            }
            echo "</table>\n";
            echo "<br><br><br>";
        }
        tabla();
        ?>
    </DIV>
</body>
</html>


