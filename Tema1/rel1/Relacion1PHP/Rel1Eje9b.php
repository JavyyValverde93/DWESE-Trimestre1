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
        $a = 3;
        $b = 9;
        $c = 4;
        $x = 0;
        $x2 = 0;
        
        if($a!=0){
            if($b*$b - 4*$a*$c<=0){
                echo "No hay solución";
            }else{
                $x = (-1*$b + sqrt($b*$b - 4*$a*$c))/2*$a;
                $x2 = ($b + sqrt($b*$b - 4*$a*$c))/2*$a;
                if($x>0 || $x2>0){
                    echo "Las soluciones son $x y $x2";
                }else{
                    if($x==0){
                        echo "La solución es $x2";
                    }else{
                        echo "La solución es $x";
                    }
                }
            }

        }
        ?>
    </div>
</body>
</html>
