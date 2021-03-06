<?php
    echo "Variable \$_REQUEST";
    var_dump($_REQUEST);
    echo "<br>Array \$_POST<br>";
    var_dump($_POST);
    $correo=$_POST['email'];
    echo "<br>El correo es: ".$correo;



    //no cierro php