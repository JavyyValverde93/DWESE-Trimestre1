<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Tabla </title>
</head>
<body STYLE="BACKGROUND:CADETBLUE;">
    <H3 CLASS="TEXT-CENTER MT-3">Eje1</H3>
    <DIV CLASS="CONTAINER MT-3">
        <?php
        function tabla(){
            $filas=11;
            $col=5;
            $cont=1;
            $color=0;
            $mult=1;
            $num=3;
            echo "<table border=2 text-align:'center' cellpadding=8 cellspacing=8 align='center'>\n";
            echo "<tr bgcolor=white>\n";
            echo "<td colspan=5>Tabla de multiplicar del 3";
            echo "<tr>\n";
            for($f=1;$f<$filas;$f++){
                if($color==0){
                    echo "<tr bgcolor=white>\n";
                    $color=1;
                }else{
                    echo "<tr bgcolor=#45F912>\n";
                    $color=0;
                }
                echo "<td>$num";
                echo "<td>x";
                echo "<td>$mult";
                echo "<td>=";
                $res = $num*$mult;
                $mult ++;
                echo "<td>$res";
                echo "<tr>\n";
            }
        }
        tabla();
        ?>
    </DIV>
</body>
</html>



