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
    <form name="ej5" action="actionEj5.php" method="POST" enctype="multipart/form-data">
        Escriba los datos siguientes:<p></p>
        <table>
            <tr>
                <td><b>Nombre:</b></td>
                <td><b>Apellidos:</b></td>
                <td><b>Edad:</b></td>
            </tr>
            <tr>
                <td><input type='text' size='20' name='nombre' id='nombre'></td>
                <td><input type='text' size='20' name='apellidos' id='apellidos'></td>
                <td><input type='number' size='20' name='edad' id='edad'></td>
            </tr>
            <tr>
                <td><b>Peso:</b></td>
                <td><b>Sexo:</b></td>
                <td><b>Estado Civil:</b></td>
            </tr>
            <tr>
                <td><input type='text' size='17' name='peso' id='peso'>kg</td>
                <td><input type='radio' name='sexo' value='Hombre'>Hombre <input type='radio' name='sexo' value='Mujer'>Mujer </td>
                <td><input type='radio' name='estadoCivil' value='Soltero'>Soltero <input type='radio' name='estadoCivil' value='Casado'>Casado <input type='radio' name='estadoCivil' value='Otro'>Otro </td>
            </tr>
        </table>
        <p></p>
        <table>
            <tr>
                <td><b>Aficiones:</b></td>
           
                <td><input type='checkbox' name='aficiones[]' value='Cine'>Cine <input type='checkbox' name='aficiones[]' value='Literatura'>Literatura <input type='checkbox' name='aficiones[]' value='Tebeos'>Tebeos<p></p>
                <input type='checkbox' name='aficiones[]' value='Deporte'>Deporte <input type='checkbox' name='aficiones[]' value='Música'>Música <input type='checkbox' name='aficiones[]' value='Televisión'>Televisión </td>
            </tr>
        </table>
        <p></p>
        <button type='submit'>Enviar</button>
        <input type='reset' value='Borrar'>
</form>
    </div>
</body>
</html>
