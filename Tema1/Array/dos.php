<!DOCTYPE html>
<?php
function verArray($a){
    foreach($a as $k=>$v){
       echo "'{$k}' ===> <span class={$v}'<br>";
    }
    echo "<br>";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> </title>
</head>
<body STYLE="BACKGROUND:CADETBLUE;">
    <H3 CLASS="TEXT-CENTER MT-3">Ejemplos PHP</H3>
    <DIV CLASS="CONTAINER MT-3">
        <?php
        $frutas2=[
            "uno"=>"Pera",
            "dos"=>"Melocoton",
            "tres"=>"Avellana",
            "cuatro"=>"Zruta",
            "als"=>"Naranja",
            "bios"=>"Frambuesa",
        ];
        $frutas3=[
            "uno"=>"Pera",
            "dos"=>"Melocoton",
            "tres"=>"Avellana",
            "cuatro"=>"Zruta",
            "als"=>"Naranja",
            "bios"=>"Frambuesa",
        ];
        $frutas4=[
            "uno"=>"Pera",
            "dos"=>"Melocoton",
            "tres"=>"Avellana",
            "cuatro"=>"Zruta",
            "als"=>"Naranja",
            "bios"=>"Frambuesa",
        ];
        $frutas5=[
            "uno"=>"Pera",
            "dos"=>"Melocoton",
            "tres"=>"Avellana",
            "cuatro"=>"Zruta",
            "als"=>"Naranja",
            "bios"=>"Frambuesa",
        ];
        $frutas6=[
            "uno"=>"Pera",
            "dos"=>"Melocoton",
            "tres"=>"Avellana",
            "cuatro"=>"Zruta",
            "als"=>"Naranja",
            "bios"=>"Frambuesa",
        ];
        //Metoddos de Ordenacion de arrays
        echo "Array Original<br> ";
        var_dump($frutas2);
        sort($frutas2);
        echo "<br>";
        var_dump($frutas2);
        //-----------------------rsort
        echo "Array Original<br>";
        var_dump($frutas3);
        asort($frutas3);
        echo "<br>";
        var_dump($frutas3);
        //---------------------arsort
        echo "Array Original <br>";
        verArray($frutas4);
        arsort($frutas4);
        echo "<br>Array ordenado con arsort()<br>";
        verArray($frutas4);
        //--------------ksort
        echo "Array Original <br>";
        verArray($frutas5);
        ksort($frutas5);
        echo "<br>Array ordenado con ksort()<br>";
        verArray($frutas5);
        //-------------krsort
        echo "Array Original <br>";
        verArray($frutas6);
        krsort($frutas6);
        echo "<br>Array ordenado con krsort()<br>";
        verArray($frutas6);
       






        ?>
    </DIV>
</body>
</html>