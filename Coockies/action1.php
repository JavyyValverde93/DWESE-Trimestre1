<?php
$usuario="admin";
$pass="secreto";
$miusuario=trim($_POST['usuario']);
$miPass=trim($_POST['pass']);
$miUsuario=trim($_POST(miUsuario));
$miPass=trim($_POST(miPass));
echo "<br>";
var_dump($_REQUEST);
if($miPass==$pass && $miusuario==$usuario){
    //Validación correcta
    if(isset($_POST['recordar'])){
        setcookie('usuario', $usuario, time()+7*24*3600);
        setcookie('pass', $pass, 7*24*3600);
    }
    echo "<p>Validación crrecta</p>";
    echo "<a href='formCoockie.php'><input='button' value='Volver'</a>";
}else{
     //Me he equivocado
     if(isset($_COOKIE['error'])){
        $cont=(int)($_COOKIE['error'])+1;
        setcookie('error',$cont,time()+24*3600);
    }else{
        setcookie('error',"1",time()+24*3600);
    }

    header('Location:formCoockie.php');
}
