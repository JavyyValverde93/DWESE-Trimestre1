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
        $num1 = 300;
        $num2 = 100;
        $cont = 0;

        if($num1<$num2){
            if($num2-$num1>=100){
                echo "Múltiplos de 3 entre $num1 y $num2: ";
                for($i=$num1; $i<=$num2; $i++){
                    if($i%3==0){
                        echo "$i, ";
                        $cont ++;                    }
                }
                echo "<p></p>";
                echo "Hay $cont múltiplos";
            }else{
                echo "Los números deben tener una diferencia mínima de 100";
            }
        }else{
            if($num2<$num1){
                if($num1-$num2>=100){
                    echo "Múltiplos de 3 entre $num2 y $num1: ";
                    for($i=$num2; $i<=$num1; $i++){
                        if($i%3==0){
                            echo "$i, ";
                            $cont ++;                    }
                    }
                    echo "<p></p>";
                    echo "Hay $cont múltiplos";
                }
            }else{
                echo "Los números deben tener una diferencia mínima de 100";
            }

        }

        ?>
    </div>
</body>
</html>
