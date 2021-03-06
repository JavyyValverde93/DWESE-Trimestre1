<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Cadena </title>
</head>
<body STYLE="BACKGROUND:CADETBLUE;">
    <H3 CLASS="TEXT-CENTER MT-3">Ejemplos PHP</H3>
    <DIV CLASS="CONTAINER MT-3">
        <?php
            $cad1 = "Hola mundo, adiós mundo";
            //La longitud 
            echo "<br>La longitud de \"$cad1\" es: ".strlen($cad1);
            //podemos recorrerlas con un for
            echo "<br>";
            for($i=0;$i<strlen($cad1);$i++){
                echo $cad1[$i]. " - ";
            }
            //manipular cadenas
            echo "<br>Mayusculas<Br>";
            echo strtoupper($cad1);
            echo "<br>Primera letra mayúscula<br>";
            echo ucfirst($cad1);
            echo "<br>Primera letra de cada palabra mayuscula<br>";
            echo ucwords($cad1);

            //-----------------------------------------
            $cad2="          Hola Mundo   ";
            $lcad2=ltrim($cad2);
            $rcad2=rtrim($cad2);
            $cad2limpia=trim($cad2);
            echo "<br>";
            echo "La longitud es :".strlen($cad2);
            echo "<br>";
            echo "la longitud es: ".strlen($lcad2);
            echo "<br>";
            echo "La longitud es: ".strlen($cad2limpia);
            //Rellenar cadenas
            $cad3="Hola mundo";
            $acadenaRellena = str_pad($cad3, 30, "@", STR_PAD_LEFT);
            echo "<br>Cadena rellena: $acadenaRellena";
            $acadenaRellena = str_pad($cad3, 30, "@", STR_PAD_RIGHT);
            echo "<br>Cadena rellena: $acadenaRellena";
            $acadenaRellena = str_pad($cad3, 30, "@", STR_PAD_BOTH);
            echo "<br>Cadena rellena: $acadenaRellena";
            //Algunas funciones de búsqueda 
            echo "<br>";
            $mail1="TitoJavi@gmail.com";
            //Veamos la posicion de la arroba 
            echo "@ esta en la posicion: " .strpos($mail1, "@");
            //Me devuelve la subcadena desde el caracterbuscado al final
            echo "<br>strstr(\$mail1)-".strstr($mail1, "@");
            echo "<br>strstr(\$mail1)-".strstr($mail1, "@", true);

            //--------------------------------
            $cad="Hola Mundo";
            echo "<br>La primera aparición de o es: ".strpos($cad, "o", 3);
            echo "<br>La ultima posicion de o es: ".strrpos($cad, "o");

            //reemplazar caracteres str_replace
            $cadena="Manuel Fernandez Gines";
            echo "<br>\$cadena= ".$cadena;
            echo "<br>"
        ?>
    </DIV>
</body>
</html>