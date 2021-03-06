<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> </title>
</head>
<body STYLE="BACKGROUND:CADETBLUE;">
    <H3 CLASS="TEXT-CENTER MT-3">Arrays PHP</H3>
    <DIV CLASS="CONTAINER MT-3">
        <?php
            //Arrays dos de definirlos
            //1.-La clasica
            $nombres=array();
            $nombres[]="Juan Andres";
            $nombres[]="Perico Lopez";
            $nombres[]="Carlos Duty";
            //--------------------
            var_dump($nombres);
            $frutas=array("Limon", "Pera", "Melon", "Naranja");
            echo "<br>";
            var_dump($frutas);
            $frutas[]="Mandarina";
            echo "<br>";
            var_dump($frutas);
            //-----------------------
            echo "<br>";
            print_r($frutas);
            //------------------------
            $frutas[10]="Sandia";
            $frutas[]="Pomelo";
            echo "<br>";
            var_dump($frutas);
            $frutas[5]="Melocoton";
            echo "<br>";
            var_dump($frutas);
            $frutas[]="Mango";
            echo "<br>";
            var_dump($frutas);
            //-----------------------
            //2.-No es necesario utilizar la palabra array
            $marcas=[];
            $marcas[]="Seat";
            $marcas[]="Renault";
            $marcas[]="Toyota";
            echo "<br>";
            var_dump($marcas);
            $modelos=["Ibiza", "Toledo", "Ateca"];
            echo "<br>";
            var_dump($modelos);
            $modelos[]="Otro modelo";
            echo "<br>";
            var_dump($modelos);
            //------------------------Arrays asociativos(clave=>valor)
            $frutas1=[
                "primera"=>"Sandia",
                "segunda"=>"Pera",
                "tercera"=>"Naranja",
            ];
            $frutas1["cuarta"]="Fresa";
            $frutas1[]="Otra fruta";
            echo "<br>";
            var_dump($frutas1);
            echo "<br>";
            print_r($frutas1);
            //--------------------
            $marcas1=array(
                "primera"=>"Seat",
                "segunda"=>"Mazda",
            );
            $marcas1["tercera"]="Renault";
            echo "<br>";
            //----------------------
            echo "La longitud del array de \$frutas1 es  " .count($frutas1);
            echo "<br>";
            //Formas de recorrerse un array
            foreach($marcas as $marca){
                echo "$marca <br>";
            };
            echo "<br>";
            foreach($frutas as $miFruta){
                echo "$miFruta<br>";
            };
            //---------------------------
            echo "<br>";
            foreach($frutas1 as $myFruta){
                echo "$myFruta<br>";
            };
            //Mostrando claves y valores
            echo "<br>";
            foreach($nombres as $k=>$v){
                echo "Clave=$k, Valor=$v<br>";
            };
            //--------------
            echo "<br>".$frutas1["primera"];
            //-----------Reescribimos frutas1
            $i=1;
            foreach($frutas1 as $k=>$v){
                $frutas1[$k]="Fruta_".$i++;
            };
            echo "<br>";
            var_dump($frutas1);
            











        ?>
    </DIV>
</body>
</html>