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
        function tabla(){
            $filas=10;
            $col=10;
            $color =123456;
            echo "<table border=2 cellpadding=5 cellspacing=5 align='center'>\n";
            for($f=1;$f<$filas;$f++){
                $color = $color+10;
                echo "<tr bgcolor=#$color>\n";
                for($c=1;$c<$col;$c++){
                    $color = $color + 199;
                    echo "<td bgcolor=#$color>88888</td>\n";
                }
            
            }
            echo "</table>\n";
            echo "<br><br><br>";
        }
        tabla();
        ?>
    </div>
</body>
</html>
