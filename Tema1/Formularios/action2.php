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
            //Procesamos lo que me venga del formulario
            $nombre=trim($_POST['nombre']);
            $apellidos=trim($_POST['apellidos']);
            function mostrar($text){
                echo $text;
            }
            if(isset($_POST['edad'])){
                $edad=$_POST['edad'];
                if($edad==-1){
                    mostrar("Menor de edad");
                }else{
                    mostrar("Mayor de edad");
                }
            }
            if(!comprobarCadena($nombre)){
                echo "<p class='text-danger'>Error, rellene el campo nombre";
            }
            if(!comprobarCadena($apellidos)){
                echo "<p class='text-danger'>Error, rellene el campo apellido";
            }
            echo "<br>";
            echo var_dump($_POST);

            if(isset($idiomas)){
                $idiomas=$_POST['idiomas'];
                $misidiomas="Has elegido ".count($idiomas). ", idiomas: ";
                foreach($idiomas as $idioma){
                    $misidiomas .= " $idioma";
                }
                mostrar($misidiomas);
            }

        ?>
    </DIV>
</body>
</html>