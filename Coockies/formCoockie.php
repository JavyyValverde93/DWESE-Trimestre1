<!DOCTYPE html>
<?php
if(isset($_GET['borrar'])){
    //Borro coockies
    setcookie('usuario', "", time()-100);
    setcookie('pass', "", time()-100);
    header('Location:formCoockie.php');
}
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="background-color:cadetblue">
    <h3 class="text-center mt-3">Login</h3>
    <div class="container mt-3">
        <div class="card text-white bg-secondary mb-3 mx-auto" style="max-width:619px;">
            <div class="card-header text-center font-weight-bold" style="font-size:x-large;">Login</div>
            <div class="card-body">
                <form name="f1" action="action1.php" method='POST'>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <?php
                        if(!isset($_COOKIE['usuario'])){
                            echo "<input type='text' class='form-control' placeholder='usuario' name='usuario' required />";
                        }else{
                            echo "<input type='text' class='form-control' value='{$_COOKIE['usuario']}' name='usuario' required />";
                        }
                        if(!isset($_COOKIE['pass'])){
                            echo "<input type='text' class='form-control' placeholder='contraseña' name='usuario' required />";
                        }else{
                            echo "<input type='text' class='form-control' value='{$_COOKIE['pass']}' name='usuario' required />";
                        }
                        ?>
                                            </div>
                    <div class="input-group form-group mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type='password' class='form-control' placeholder='contraseña' name='pass' required />                    </div>

                    <div class='row mt-3'>
                        <div class='col'>
                            <div class='form-group form-check text-nowrap'>

                                <input type='checkbox' name='recordar' value='si' class='form-check-input mr-3' id='ckr'>
                                <label id='ckr' class='form-check-label'>Recordar</label>

                                <a href='<?php echo $_SERVER['PHP_SELF']."?borrar=si"?>' class='btn btn-warning float-right ml-4'>Borrar Cookies</a>
                                <input type='submit' value='Login' class='btn btn-primary float-right' />
                                <?php
                                if(isset($_COOKIE['error']) && $_COOKIE['error']==3){
                                    echo "<input type='submit' value='login' class='btm btn-primary float-right' disabled='true' />";
                                }else{
                                    echo "<input type='submit' value='login' class='btm btn-primary float-right' />";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>

</body>

</html>