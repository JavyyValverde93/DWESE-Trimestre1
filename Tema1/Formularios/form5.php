<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> </title>
</head>
<body style="background:cadetblue;">
    <H3 class="TEXT-CENTER mt-3"> </H3>
    <div class="CONTAINER mt-3">
        <?php
            if(isset($_GET['null'])){
                echo "La variable num1 pasada por GET es igual a: ".$_GET['num1'];
            }else{
                echo "No has pasado num1 por GET!!!!!";
            }

        ?>
        <a href='<?php echo $_SERVER['PHP_SELF'].'?num1=56' ?>' class="btn btn-warning">
        Pasar 56</a>
        <a href='<?php echo $_SERVER['PHP_SELF']?>' class="btn btn-warning mt-1">
            PASAR NUM1</a>
    </div>
</body>
</html>