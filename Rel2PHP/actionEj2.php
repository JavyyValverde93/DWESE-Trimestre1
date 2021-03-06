<!DOCTYPE html>
<?php
function comprobarCadena($c){
    return strlen($c); //Devolvemos la longitud, si es 0 es falso
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> </title>
</head>
<body style="background:cadetblue;">
    <H3 class="text-center mt-3"></H3>
    <DIV class="container mt-3">
        <?php
        if(isset($_POST['edad'])){
            $edad=trim($_POST['edad']);
            if(!comprobarCadena($edad)){
                echo "<p class='text-danger'>Error, no se ha rellenado el campo edad";
            }else{
                if(is_numeric($edad)){
                    if($edad<=0){
                        echo "El valor introducido para edad no es positivo";
                    }else{
                        if($edad!=round($edad)){
                            echo "La edad debe ser un número entero";
                        }else{
                            if($edad>=5 && $edad<=130){
                                echo "La edad es: $edad";
                            }else{
                                echo "Error, el valor de edad no está comprendido entre 5 y 130";
                            }
                        }
                    }
                }
            }
        }else{
            echo "<p class='text-danger'>Error, no se ha rellenado el campo edad";
        }
        echo "<p></p>";
        if(isset($_POST['peso'])){
            $peso=trim($_POST['peso']);
            if(!comprobarCadena($peso)){
                echo "<p class='text-danger'>Error, no se ha rellenado el campo peso";
            }else{
                if($peso<=10 || $peso>=150){
                    echo "Error, el peso no está comprendido entre 10 y 150";
                }else{
                    echo "El peso es: $peso";
                }
            }
        }else{
            echo "<p class='text-danger'>Error, no se ha rellenado el campo peso";
        }


        
        
        ?>
        </DIV>
</body>
</html>
