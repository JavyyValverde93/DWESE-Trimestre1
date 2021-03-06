<!DOCTYPE html>
<?php
$paises = ["España", "Alemania", "Francia", "Portugal", "Polonia", "Suiza", "Finlandia"];
sort($paises);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Paises </title>
</head>
<body style="background:cadetblue;">
    <H3 class="TEXT-CENTER mt-3"> </H3>
    <div class="CONTAINER mt-3">
    <?php
    if (isset($_POST['paises'])){
        $misPaises = $_POST['paises'];
        echo "<p>Has elegido: ".count($misPaises)." paises, estos son: </p>";
        echo "<ul>";
        foreach ($misPaises as $pais){
            echo "<li>$pais";
        }
        echo "<ul>";
    }else{
        echo "<p class='text-danger'>NO has elegido ningún país</p>";
    }else{
        //Pintamos el formulario
    ?>
    <form name="form4" action="">
        <div class="form-group">
            <label for="Lista">Example multiple select</label>
            <select multiple class="form-control" id="lista" name="paises[]">
        <?php
        foreach ($paises as $pais){
            echo "<option>$pais</option>";
        }
        ?>
        </select>
        </div>
        <div class="form-group mt-4">
            <input type="submit" value="Enviar" name="enviar" class="btn btn-warning">
        </div>
        <?php }?>
    </div>
    </form>
</body>
</html>