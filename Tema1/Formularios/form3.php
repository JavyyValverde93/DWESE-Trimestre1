<!DOCTYPE html>
<?php

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> </title>
</head>
<body style="background:cadetblue;">
    <H3 class="text-center mt-3"> Usuarios</H3>
    <div class="container mt-3">
        <?php
        if(isset($_POST['enviar'])){
            //Proceso el formulario, le he dado a enviar
            echo "Has pulsado enviar";
        }else{
            //Pinto el formulario NO le he dado a enviar
            //el else lo cierro abajo CUIDADO!!!!
        
        ?>
        <form name="form3" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="radio" class="form-check-input" name="edad" value="-1" checked>
                    Menor de edad 
                </div>
                <div class="col">
                    <input type="radio" class="form-check-input" name="edad" value="1">
                    Mayor de edad 
                </div>
            </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <input type="checkbox" class="form-check-input" name="idiomas[]" value="ingles">
                        Ingles
                    </div>
                    <div class="col-2">
                        <input type="checkbox" class="form-check-input" name="idiomas[]" value="Frances">
                        Frances 
                    </div>
                    <div class="col-2">
                        <input type="checkbox" class="form-check-input" name="idiomas[]" value="Aleman">
                        Aleman 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col mt-3">
                    <input type="submit" value="Enviar" class="btn btn-primary mr-4">
                    <input type="reset" value="limpiar" class="btn btn-warning">
                </div>        
                
            </div>
        </form>
        </div>
    <?php }; ?>
</body>
</html>