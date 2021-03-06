<!DOCTYPE html>
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="./Javier Valverde Rivera_files/style.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Javier Valverde Rivera_files/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="author" content="Javier Valverde Rivera">
    
    <title> Javier Valverde Rivera</title>
    
<style type="text/css"></style>
<body>
    <!--Javier Valverde Rivera-->
    <p></p><p></p>
    <div align="center"><h1>HOJA DE INSCRIPCIÓN <p>EN LOS CICLOS FORMATIVOS DE GRADO SUPERIOR</p></h1></div>
    <form action="actionEj6.php" method="POST" enctype="TECT/PLAIN" autocomplete="on">
        <fieldset id="DatosPersonales">
            <legend>Datos Personales</legend>
            <table>
                <tbody><tr>
                    <td>Nombre:</td>
                    <td>Apellidos:</td>
                    <td>DNI:</td>
                    <td>Teléfono:</td>
                </tr>
                <tr>
                    <td><input type="text" autofocus="" name="nombre" id='nombre' size="20" maxlenght="20"></td>
                    <td><input type="text" name="apellidos" size="20" id='apellidos' maxlenght="25"></td>
                    <td><abbr title="8 dígitos y una letra en mayúscula"><input type="text" name="DNI" id='DNI' pattern="[0-9]{8}[A-Z]{1}" size="20" placeholder="71231236A" maxlenght="9" required=""></abbr></td>
                    <td><input type="text" name="telefono" size="20" maxlenght="13" id='telefono' pattern="[0-9]{3}[-][0-9]{9}" required="" placeholder="034-654655493"></td>
                </tr>
                <tr>
                    <td>Localidad de Nacimiento:</td>
                    <td>Provincias favoritas: </td>
                    <td>Fecha de Nacimiento</td>
                </tr>
                <tr>
                    <td><input type="text" name="lugarNacimiento" size="20" id='lugarNacimiento' maxlenght="20"></td>
                    <td><select multiple required="" name="provincia[]" size='2' class="form-control" id='provincia' style=" width:150px">
                        <option value="">Elige las provincias que más te gusten: </option>
                        <option value="Álava/Araba">Álava/Araba</option>
                        <option value="Albacete">Albacete</option>
                        <option value="Alicante">Alicante</option>
                        <option value="Almería" selected="">Almería</option>
                        <option value="Asturias">Asturias</option>
                        <option value="Ávila">Ávila</option>
                        <option value="Badajoz">Badajoz</option>
                        <option value="Baleares">Baleares</option>
                        <option value="Barcelona">Barcelona</option>
                        <option value="Burgos">Burgos</option>
                        <option value="Cáceres">Cáceres</option>
                        <option value="Cádiz">Cádiz</option>
                        <option value="Cantabria">Cantabria</option>
                        <option value="Castellón">Castellón</option>
                        <option value="Ceuta">Ceuta</option>
                        <option value="Ciudad Real">Ciudad Real</option>
                        <option value="Córdoba">Córdoba</option>
                        <option value="Cuenca">Cuenca</option>
                        <option value="Gerona/Girona">Gerona/Girona</option>
                        <option value="Granada">Granada</option>
                        <option value="Guadalajara">Guadalajara</option>
                        <option value="Guipúzcoa/Gipuzkoa">Guipúzcoa/Gipuzkoa</option>
                        <option value="Huelva">Huelva</option>
                        <option value="Huesca">Huesca</option>
                        <option value="Jaén">Jaén</option>
                        <option value="La Coruña/A Coruña">La Coruña/A Coruña</option>
                        <option value="La Rioja">La Rioja</option>
                        <option value="Las Palmas">Las Palmas</option>
                        <option value="León">León</option>
                        <option value="Lérida/Lleida">Lérida/Lleida</option>
                        <option value="Lugo">Lugo</option>
                        <option value="Madrid">Madrid</option>
                        <option value="Málaga">Málaga</option>
                        <option value="Melilla">Melilla</option>
                        <option value="Murcia">Murcia</option>
                        <option value="Navarra">Navarra</option>
                        <option value="Orense/Ourense">Orense/Ourense</option>
                        <option value="Palencia">Palencia</option>
                        <option value="Pontevedra">Pontevedra</option>
                        <option value="Salamanca">Salamanca</option>
                        <option value="Segovia">Segovia</option>
                        <option value="Sevilla">Sevilla</option>
                        <option value="Soria">Soria</option>
                        <option value="Tarragona">Tarragona</option>
                        <option value="Tenerife">Tenerife</option>
                        <option value="Teruel">Teruel</option>
                        <option value="Toledo">Toledo</option>
                        <option value="Valencia">Valencia</option>
                        <option value="Valladolid">Valladolid</option>
                        <option value="Vizcaya/Bizkaia">Vizcaya/Bizkaia</option>
                        <option value="Zamora">Zamora</option>
                        <option value="Zaragoza">Zaragoza</option>
                      </select></td>
                      <td><input name="date" id="date" type="date"></td>
                </tr>
                <tr>
                    <td>Dirección:</td>
                    <td></td>
                    <td>Código Postal</td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" id='direccion' name="direccion" size="39" maxlenght="40"></td>
                    <td><input type="text" name="codigoPostal" id='codigoPostal' size="20" maxlenght="5"></td>
                </tr>

            </tbody></table>
            <p></p>
            </fieldset>
        

        <fieldset id="FormaAcceso">
            <legend>Forma de acceso</legend>
            <input type="radio" id="directo" name="access1" value="Directo">
            <label for="directo">Directo</label><p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="bach" name="access" value="Bachillerato Log Modalidad">
                <label for="bach">Bachillerato Log Modalidad</label></p><p></p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="exp" name="access" value="Experimental">
                <label for="exp">Experimental</label><p></p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="COU" name="access" value="COU Opción">
                <label for="COU">COU Opción</label><p></p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="fp2" name="access" value="FP2">
                <label for="fp2">FP2</label><p></p>
            <input type="radio" id="libre" name="access" value="Prueba Libre">
            <label for="libre">Prueba Libre</label><p></p>
        </fieldset>

        <fieldset id="DocumentosAdjuntados">
            <legend>Documentos Adjuntados</legend>
            <input type="checkbox" value='Fotocopia DNI' name='DocumentosAdj[]'> Fotocopia DNI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value='Certificado Académico' name='DocumentosAdj[]'> Certificado Académico &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name='Informe de Discapacidad' name='DocumentosAdj[]'> Informe de Discapacidad &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value='Pasaporte' name='DocumentosAdj[]'> Pasaporte &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value='Título' name='DocumentosAdj[]'> Títulos &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value='Currículum Vitae' name='DocumentosAdj[]'> Curriculum Vitae &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value='Foto' name='DocumentosAdj[]'> Foto &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value='Libro de Familia' name='DocumentosAdj[]'> Libro de Familia &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value='Permiso de conducir' name='DocumentosAdj[]'> Permiso de Conducir <p></p>

            <p></p>
        </fieldset>
        <fieldset id="OtrosCampos">
            <legend>Otros Campos</legend>
            Correo electrónico: <input type="text" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" id="correo" name="correo" required="">
            <p></p>¿Desea acceder a becas? <select required="" selected="none" name="becas" class="form-control" style=" width:150px">
                <option value=""></option>
                <option value="Sí">Sí</option>
                <option value="No">No</option>
            </select>
        </fieldset>
        <p></p>
        <button type="submit"><img src="./Javier Valverde Rivera_files/img1.png" height="70"></button>
        <p></p>
        <img src="./Javier Valverde Rivera_files/capcha.gif" height="70">
        </form>


    <address>
        <p>Javier Valverde Rivera</p>
        <p>javyyvalverde93@gmail.com</p>
    </address>
</body></html>