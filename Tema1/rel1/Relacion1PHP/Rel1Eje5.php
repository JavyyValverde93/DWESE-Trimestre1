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
        <?php //Válido para numeros de 4 cifras
            $num = 4567;
            $d4 = $num%10;
            $d3 = ($num-$d4)%100/10;
            $d2 = ($num - $d3*10-$d4)%1000/100;
            $d1 = ($num - $d2*100-$d3*10-$d4)%10000/1000;
            echo "$num => $d1*10^3 + $d2*10^2 + $d3*10 + $d4"; 
        ?>
    </DIV>
</body>
</html>