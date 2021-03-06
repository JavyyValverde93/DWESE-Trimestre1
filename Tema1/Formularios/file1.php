<!DOCTYPE html>
<html lang="es">
<?php
    function isTipo0k($tipo){
        return $tipo=='application/pdf';
    }
    function comprobarError($i){
        switch($i){
            case 1:
                echo "<p class='text-warning>F</p>";
            break;
            case 2:
                echo "<p class='text-warning'>Fallo teknikossssss</p>";
            break;
        }
    }
?>

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
        if(isset($_POST['enviar'])){
            //Procesamos el formulario
            //var_dump($_FILES['documento']);
            if(is_uploaded_file($_FILES['documento']['tmp_name'])){
                //Si pasa esto he subido el archivo sin problema pero
                //está en una carpeta temporal, tengo que decidir si
                //guardo o no
                //comprobamos el tipo
                if(isTipo0k($_FILES['documento']['type'])){
                    //El tipo es correcto lo pasamos de temporal a Documentos
                    $nombre = "./Documentos/".$_FILES['documento']['name'];
                    if(!move_uploaded_file($_FILES['documento']['tmp_name'], $nombre)){
                        die("Error al mover el archivo desde la carpeta temporal");
                    }else{
                        echo "<p class='text-warning'>Archivo subido</p>";
                    }
                }else{
                    "<p class='text-warning'>El archivo no es un pdf!!!</p>";
                }
            }else{
                comprobarError($_FILES['documento']);
            }
        }
        
    ?>

        <form name="f1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST' enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <label for='fich'>Elige un archivo (pdf)</label>
                    <!--Si queremos especificar el tamaño maximo -->
                    <input type='hidden' name='MAX_FILE_SIZE' class='99999910000'>
                    <input type='file' name='documento' class='form-control-file' id='fich'>
                </div>
            </div>
            <div class="row mt-4">
                <div class="row">
                    <input type="submit" class='btn btn-danger' name='enviar' value='submit'>
                </div>
            </div>
        </form>
        <?php

        ?>
    </div>
</body>
</html>