<!DOCTYPE html>
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
            function comprobarCadena($c){
                return strlen($c); //Devolvemos la longitud, si es 0 es falso
            }

            $correo = trim($_POST['correo']);
            $comprobarCorreo = trim($_POST['comprobarCorreo']);
            $recibirCorreo = trim($_POST['recibirCorreo']);

            if(!comprobarCadena($correo)){
                echo "No se ha introducido el correo";
            }else{
                if(filter_var($correo, FILTER_VALIDATE_EMAIL)){
                    if(!comprobarCadena($comprobarCorreo)){
                        echo "No se ha introducido el correo para verificar";
                    }else{
                        if($correo==$comprobarCorreo){
                            echo "El correo introducido es correcto";
                        }else{
                            echo "Los correos no coinciden";
                        }
                    }
                }else{
                    echo "El correo no existe";
                }
            }

            echo "<p></p>";

            if($recibirCorreo=="No"){
                echo "No desea recibir correos nuestros";
            }else{
                if($recibirCorreo=="Sí"){
                    echo "Sí, desea recibir correos nuestros";
                }else{
                    echo "No se ha indicado si desea recibir correos nuestros o no";
                }
            }
        ?>

    </DIV>
</body>
</html>