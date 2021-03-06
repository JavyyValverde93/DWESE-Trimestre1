<!DOCTYPE html>
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
                $nombre = "./documentos/".$_FILES['documento']['name'];
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
    

//Si se quiere subir una imagen
if (isset($_POST['enviarimg'])) {
   //Recogemos el archivo enviado por el formulario
   $archivo = $_FILES['archivo']['name'];
   //Si el archivo contiene algo y es diferente de vacio
   if (isset($archivo) && $archivo != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo = $_FILES['archivo']['type'];
      $tamano = $_FILES['archivo']['size'];
      $temp = $_FILES['archivo']['tmp_name'];
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 5000000))) {
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 5 mb como máximo.</b></div>';
     }
     else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, './documentos/'.$archivo)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            chmod('documentos/'.$archivo, 0777);
            //Mostramos el mensaje de que se ha subido co éxito
            echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
            //Mostramos la imagen subida
            echo '<p><img src="documentos/'.$archivo.'"></p>';
        }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
           echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
        }
      }
   }
}
?>
</head>
<body style="background:cadetblue;">
    <H3 class="text-center mt-3"> </H3>
    <div class="container mt-3">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data"/>
    <label for='fich'>Seleccione un archivo (pdf):</label>
                    <!--Si queremos especificar el tamaño maximo -->
                    <input type='hidden' name='MAX_FILE_SIZE' class='5000000'>
                    <input type='file' name='documento' class='form-control-file' id='fich'>

Añadir imagen: <input name="archivo" id="archivo" type="file"/>
<input type="submit" name="enviarimg" value="Subir Imagen"/>
<input type="submit" name="enviar" value="Subir archivos"/>

</form>
    </div>
</body>
</html>
