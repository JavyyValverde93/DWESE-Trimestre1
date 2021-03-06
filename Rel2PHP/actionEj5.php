<!DOCTYPE html>
<?php
function comprobarCadena($c){
    return strlen($c); //Devolvemos la longitud, si es 0 es falso
}
function intro(){
    echo "<p></p>";
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
    <H3 class="text-center mt-3"> </H3>
    <div class="container mt-3">
        <?php
        $nombre = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellidos']);
        $edad = trim($_POST['edad']);
        $peso = trim($_POST['peso']);

        if(comprobarCadena($nombre)){
            echo "Nombre: $nombre";
        }else{
            echo "No se ha introducido ningún nombre";
        }

        intro();

        if(comprobarCadena($apellidos)){
            echo "Apellidos: $apellidos";
        }else{
            echo 'No se han introducido los apellidos';
        }
        
        intro();

        if(comprobarCadena($edad)){
            echo "Edad: $edad";
        }else{
            echo 'No se ha introducido la edad';
        }

        intro();

        if(comprobarCadena($peso)){
            echo "Peso: $peso";
        }else{
            echo "No se ha introducido el peso";
        }

        intro();

        if(isset($_POST['sexo'])){
            $sexo = $_POST['sexo'];
            echo "Sexo: $sexo";
        }else{
            echo "No se ha seleccionado ningún sexo";
        }

        intro();

        if(isset($_POST['estadoCivil'])){
            $estadoCivil = trim($_POST['estadoCivil']);
            echo "Estado Civil: $estadoCivil";
        }else{
            echo "No se ha seleccionado ningún estado civil";
        }

        intro();

        if(isset($_POST['aficiones'])){
            $aficiones = $_POST['aficiones'];
            echo "Aficiones seleccionadas: ";
            $N = count($aficiones);
            for($i=0; $i<$N; $i++){
                echo "$aficiones[$i] ";
            }
        }else{
            echo "No se han definido aficiones";
        }

        ?>
    </div>
</body>
</html>
