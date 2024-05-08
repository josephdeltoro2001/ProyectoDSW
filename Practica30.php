<!-- Del Toro Cruz Joseph Vladimir -->
<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "practica30";

$conexion = mysqli_connect ($servidor, $usuario, $clave, $bd);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Práctica 30</title>
    <link rel="stylesheet" href="css/Practica30.css">
  </head>
  <body>
    <table>
     <form action="#" method="post" id="formulario">
         <h1 align="center">REGISTRO</h1>
       <tr>
         <td>NOMBRE: <br><input type="text" name="nombre" class="informacion" placeholder="Ingresar nombre" oninput="validarLetras(this)" onkeyup="this.value = this.value.toUpperCase()" required/></td>
         <td>APELLIDOS: <br><input type="text" name="apellidos" class="informacion" placeholder="Ingresar apellidos" oninput="validarLetras(this)" onkeyup="this.value = this.value.toUpperCase()" required/></td>
       </tr>

       <tr>
         <td>EDAD: <br><input type="number" name="edad" class="informacion" placeholder="Ingresar edad" min="18" max="60" required/></td>
         <td>SEXO: <br><select name="sexo" class="informacion2">
           <option value= "MASCULINO">MASCULINO</option>
           <option value= "FEMENINO">FEMENINO</option>
         </select></td>
       </tr>

       <tr>
         <td>CIUDAD: <br><select name="ciudad" class="informacion2" id="ciudad">
          <option value= "TECATE">TECATE</option>
           <option value= "ENSENADA">ENSENADA</option>
           <option value= "TIJUANA">TIJUANA</option>
           <option value= "ROSARITO">ROSARITO</option>
           <option value= "MEXICALI">MEXICALI</option>
         </select></td>
         <td>CELULAR (10 DIGITOS): <br><input type="text" name="celular" placeholder="Ingresar número teléfonico" class="informacion" pattern="[0-9]{10}" oninput="validarNumeros(this)" required></td>
       </tr>

       <tr>
         <td>TRANSPORTE: <br><select name="transporte" class="informacion2" id="transporte">
           <option value= "SI">SI</option>
           <option value= "NO">NO</option></td>
         <td rowspan="2">COMENTARIOS: <br><textarea name="comentarios" rows="7" cols="30" placeholder="Ingresar comentarios" class="comentarios" onkeyup="this.value = this.value.toUpperCase()" required></textarea></td>
       </tr>
       <tr>
         <td>CAMISA: <br><select name="camisa" class="informacion2" onchange="desaparecer_talla()" id="camisa">
           <option value= "SI">SI</option>
           <option value= "NO">NO</option></select></td>
       </tr>
       <tr>
         <td>TALLA: <br><select name="tallas" class="informacion2" id="talla">
           <option value= "CHICA">CHICA</option>
           <option value= "MEDIANA">MEDIANA</option>
           <option value= "GRANDE">GRANDE</option>
           <option value= "EXTRA GRANDE">EXTRA GRANDE</option>
           <!-- <option value="NINGUNA" id="opcion_ninguna">NINGUNA</option> -->
          </select></td>
       </tr>
       <tr>
         <td colspan="2"><input type="submit" name="enviar" class="boton" value="ENVIAR"></td>
       </tr>
     </form>
   </table>

  </body>

<?php
if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $ciudad = $_POST['ciudad'];
    $celular = $_POST['celular'];
    $transporte = $_POST['transporte'];
    $comentarios = $_POST['comentarios'];
    $camisa = $_POST['camisa'];
    $talla = $_POST['tallas'];

    $guardar = "INSERT INTO vacacionistas VALUES ('$nombre', '$apellidos', '$edad', '$sexo', '$ciudad', '$celular', '$transporte', '$comentarios', '$camisa', '$talla', '')";

    $ejecutar = mysqli_query ($conexion, $guardar);
}
?>
  <script type="text/javascript" src="js/Practica30.js"></script>
</html>
