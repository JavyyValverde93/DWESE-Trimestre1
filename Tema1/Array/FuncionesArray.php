<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Funciones Array </title>
</head>
<body STYLE="BACKGROUND:CADETBLUE;">
    <H3 CLASS="TEXT-CENTER MT-3">Ejemplos PHP</H3>
    <DIV CLASS="CONTAINER MT-3">
        <?php
            //Arrays de mas de una dimension
            $tablero=[];
            $tablero[0] = ["Uno", "Dos", "Tres", 4];
            $tablero[1] = ["Cuatro", "Cinco", "Seis", 7, 8];
            var_dump($tablero);
            echo "<br>";
            //Otra forma
            $tablero1 = array();
            $tablero1[0] = ["Uno", "Dos", "Tres", 4];
            $tablero1[1] = ["Cuatro", "Cinco", "Seis", 7, 8];
            var_dump($tablero);
            //Mas para no aburrirnos
            $tablero2=[
                ["Uno", "Dos", "Tres", 4],
                ["Cuatro", "Cinco", "Seis", 7, 8]
            ];
            var_dump($tablero2);
            echo "<br>";
            //Varias dimensiones asociativas
            $comunidades = [
                "Andalucia"=>["Almeria", "Cadiz", "Cordoba", "Granada", "Huelva", "Jaen", "Sevilla"],
                "Extremadura"=>["Badajoz", "Caceres"],
                //45
            ];
            var_dump($comunidades);
            echo "<br>";
            //-------------------------
            $and = ["Almeria", "Cadiz", "Cordoba", "Granada", "Huelva", "Jaen", "Sevilla"];
            $ext = ["Badajoz", "Caceres"];
            $comunidades1 = [
                "Andalucia"=>$and,
                "Extremadura"=>$ext
            ];
            var_dump($comunidades1);
            echo "<br>";
            $comunidades2=[$and, $ext];

            var_dump($comunidades2);
            echo "<br>";
            //---------------------Vamos a recorrer los arrays
                foreach($comunidades as $comu=>$prov){
                    foreach($prov as $k=>$v){
                        echo "$comu:<br>";
                        echo $v.", ";
                    }
                    echo "<br>";
                }

            //-----------------------------Algunas funciones usuales con Arrays
            //1.- Compact
            $a=["Uno", "Dos", "Segovia", "Manolo"];
            $b=["Juan", "Manolo"];
            $c=compact('a', 'b');
            //$c=['a'=>$a, 'b'=$b];
            echo "<br>================<<<<<<compact>>>>>>>=====================<br>";
            var_dump($c);

            //2.-Implode y explode
            //2.1- Implode convierte array en string (n es la pancea)
            $cadena=implode("_", $a);
            echo "<br>\$cadena=$cadena";
            //2.2 explode convierte una cadena en un array
            $user="usuario:x:1000:1000:usuario:/home/usuario:/bin/bash";
            $arrayUser=explode(":", $user);
            echo "<br>Explode<br>";
            var_dump($arrayUser);
            echo "<br>";
            foreach($arrayUser as $v){
                echo "$v";
            };
            $ejemplo="Fernandez, Lucas, Manuel";
            $array1=explode(", ", $ejemplo);
            echo "<br>";
            var_dump($array1);
            //3.- List asigna elementos de una array a una variable solo con arrays NUMERICOS
            $comida=("Tostada", "Lentejas", "Sandwich");
            list($desayuno, $comida, $cena)=$comida;
            echo "<br>$desayuno";
            echo "<br>$comida";
            echo "<br>$cena";
            // Se suele usar conjuntamente con explode
            $nomCompleto="Fernandez Lucas, Manuel";
            list($apellidos, $nombre)=explode(", ", $nomCompleto);
            echo "<br>$apellidos";
            echo "<br>$nombre";
            //4.-In array
            $tiposMimeImagen=["image/gif", "image/x-icon", "image/jpeg", "image/svg+xml", "image/"];
            $miArchivo="application/pdf";
            $miArchivo1="image/gif";
            if(in_array($miArchivo1, $tiposMimeImagen)){
                echo "<br>Archivo invalido";
            }else{
                echo "<br>Formato invalido, debes subir un archivo de imagen";
            }
            
            //range me crea un vector en un rango
            $vector=range(0, 100);
            echo "<br>";
            var_dump($vector);
            //shuffle desordena un array
            $vector1=range(1, 6);
            echo "<br>";
            foreach($vector1 as $v){
                echo " $v ";
            };
            //------------------------------
            $and1 = ["Almeria", "Cadiz", "Cordoba", "Granada", "Huelva", "Jaen", "Sevilla"];
            echo "<br>";
            //shuffle
            foreach($and1 as $v){
                echo " $v ";
            };
            //array_slice nos quedamos con un trozo del array
            $prov=array_slice($and1, 0, 3);
            var_dump($prov);
            $prov=array_slice($and1, 1, 4);
            echo "<br>";
            var_dump($prov);
            //array fill crea un array como "range" pero puedo meter cadenas
            $prueba=array_fill(0, 6, "Cadena");
            $prueba1=array_fill(3, 6, "Cadena");
            echo "<br>";
            var_dump($prueba);
            echo "<br>";
            var_dump($prueba1);

            //Otras funciones interesantes
            //Para que eheis un vitazo
            //Array_search(), array_sum(), array_values(), array_keys()




        ?>
    </DIV>
</body>
</html>