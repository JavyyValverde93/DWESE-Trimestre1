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
        $DNI = trim($_POST['DNI']);
        $telefono = trim($_POST['telefono']);
        $lugarNacimiento = trim($_POST['lugarNacimiento']);
        //$provincia = trim($_POST['provincia']);
        $date = trim($_POST['date']);
        $direccion = trim($_POST['direccion']);
        $direccion = trim($_POST['direccion']);
        $codigoPostal = trim($_POST['codigoPostal']);

        //Datos Personales
        if(comprobarCadena($nombre)){
            echo "Nombre: $nombre";
        }else{
            echo "No se ha rellenado el campo Nombre";
        }
        intro();

        if(comprobarCadena($apellidos)){
            echo "Apellidos: $apellidos";
        }else{
            echo "No se ha rellenado el campo Apellidos";
        }
        intro();
        if(comprobarCadena($lugarNacimiento)){
            echo "Lugar de Nacimiento: $lugarNacimiento";
        }else{
            echo "No se ha rellenado el campo Localidad de Nacimiento";
        }
        intro();
        if(comprobarCadena($direccion)){
            echo "Dirección: $direccion";
        }else{
            echo "No se ha rellenado el campo Dirección";
        }
        intro();
        if(isset($_POST['date'])){
            echo "Fecha de Nacimiento: $date";
        }else{
            echo "No se ha rellenado el campo Fecha de Nacimiento";
        }
        intro();
        if(isset($_POST['provincia'])){
            $DA = $_POST['provincia'];
            echo "Provincias favoritas: ";
            $N = count($DA);
            for($i=0; $i<$N; $i++){
                echo "$DA[$i], ";
            }
        }else{
            echo "No se han definido provincias";
        }
        intro();
        if(comprobarCadena($codigoPostal)){
            echo "Código Postal: $codigoPostal";
        }else{
            echo "No se ha rellenado el campo Código Postal";
        }
        intro();

        //Forma de Acceso
        if(isset($_POST['access'])){
            $formaAcceso2 = $_POST['access'];
            echo "Forma de acceso: $formaAcceso2";
        }else{
            echo "No se ha seleccionado ninguna forma de acceso";
        }
        intro();

        //Documentos Adjuntados
        if(isset($_POST['DocumentosAdj'])){
            $DA = $_POST['DocumentosAdj'];
            echo "Documentos Adjuntados: ";
            $N = count($DA);
            for($i=0; $i<$N; $i++){
                echo "$DA[$i], ";
            }
        }else{
            echo "No se han definido documentos adjuntos";
        }

        intro();

        //Otros Campos
        $correo = trim($_POST['correo']);
        echo "Correo electrónico: $correo";
        intro();
        $becas = $_POST['becas'];
        echo "Acceso a becas: $becas";
        
        ?>
    </div>
</body>
</html>
