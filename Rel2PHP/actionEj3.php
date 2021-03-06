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

        if(isset($_POST['sexo'])){
            $sexo=trim($_POST['sexo']); 
            echo "El sexo es: $sexo";                      
        }else{
            echo "No se ha definido el sexo";
        }

        echo "<p></p>";

        if(isset($_POST['aficiones'])){
            $aficiones=$_POST['aficiones'];
            $N = count($aficiones);
            echo "Las aficiones son: ";
            for($i=0; $i < $N; $i++){
                if($i==$N-1){
                    echo "$aficiones[$i]";
                }else{
                    echo($aficiones[$i] . ", ");
                }
            }
        }else{
            echo "No se ha seleccionado ninguna afición";
        }
        
        ?>
        </DIV>
</body>
</html>
