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
    <form name="ej2" action="actionEj2.php" method="POST" enctype="multipart/form-data">
            <div class="form-group row"><p></p>
                <label for="text" class="col-sm-2 col-form-label">Escriba su edad:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="edad" step="any" > <!--step="any" es para que el input type permita decimales -->
                    </div>
            </div>
            <div class="form-group row">
                <label for="text" class="col-sm-2 col-form-label">Escriba su peso:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="peso" step="any" >
                    </div>
            </div>
            <button type="submit">Enviar</button>
            <input type="reset" value="Borrar">
        </form>
    </div>
</body>
</html>