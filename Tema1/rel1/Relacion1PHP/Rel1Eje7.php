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
        //Contar divisores
        $num1 = 4;
        $cont = 0;
        echo "Divisores de $num1: ";
        for($i=1;$i<=$num1; $i++){
            if($num1%$i==0){
                echo "$i, ";
                $cont ++;
            }
        }
        echo "<p></p>";
        echo "El número $num1 tiene $cont divisores";
        ?>
    </div>
</body>
</html>
