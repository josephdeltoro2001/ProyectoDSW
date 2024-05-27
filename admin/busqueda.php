<!-- Del Toro Cruz Joseph Vladimir -->
<!-- Jiménez García Juan Emanuel -->

<head>
		<meta charset="utf-8">
		<title>Modificaciones</title>
		<link rel="stylesheet" href="css/busqueda.css">
		<link rel="shortcut icon" href="img/logotipo.png" type="image/x-icon">
	</head>

<?php
$conexion = mysqli_connect("localhost", "root", "", "practica30") or die("Problemas con la conexión");

$registros = mysqli_query($conexion, "SELECT * FROM vacacionistas WHERE Id_Vacacionista='$_REQUEST[clave]'")
or die ("Problemas en el select").mysqli_error($conexion);

if ($reg = mysqli_fetch_array($registros)) {
	mysqli_close($conexion);
?>

<center>
<h1>Modificación de datos</h1>
		<form action="actualizar_vacacionista.php" method="post" enctype="multipart/form-data">
			<label>Aqui los datos</label><br>

			<table>
				<tr>
		         	<td>NOMBRE: <br><input type="text" value="<?php echo $reg['Nombre']; ?>" name="nombreNuevo" class="informacion" placeholder="Ingresar nombre" oninput="validarLetras(this)" onkeyup="this.value = this.value.toUpperCase()" required/></td>
         			<td>APELLIDOS: <br><input type="text" value="<?php echo $reg['Apellidos']; ?>" name="apellidosNuevo" class="informacion" placeholder="Ingresar apellidos" oninput="validarLetras(this)" onkeyup="this.value = this.value.toUpperCase()" required/></td>
       			</tr>

				<tr>
         			<td>EDAD: <br><input type="number" value="<?php echo $reg['Edad']; ?>" name="edadNuevo" class="informacion" placeholder="Ingresar edad" min="18" max="60" required/></td>
         			<td>SEXO: <br><select name="sexoNuevo" class="informacion2">
           				<option value= "MASCULINO" <?php if($reg['Sexo'] == 'MASCULINO') echo 'selected'; ?>>MASCULINO</option>
           				<option value= "FEMENINO" <?php if($reg['Sexo'] == 'FEMENINO') echo 'selected'; ?>>FEMENINO</option>
         			</select></td>
       			</tr>

				<tr>
         			<td>CIUDAD: <br><select name="ciudadNuevo" class="informacion2" id="ciudad">
          				<option value= "TECATE" <?php if($reg['Ciudad'] == 'TECATE') echo 'selected'; ?>>TECATE</option>
           				<option value= "ENSENADA" <?php if($reg['Ciudad'] == 'ENSENADA') echo 'selected'; ?>>ENSENADA</option>
          				<option value= "TIJUANA" <?php if($reg['Ciudad'] == 'TIJUANA') echo 'selected'; ?>>TIJUANA</option>
           				<option value= "ROSARITO" <?php if($reg['Ciudad'] == 'ROSARITO') echo 'selected'; ?>>ROSARITO</option>
           				<option value= "MEXICALI" <?php if($reg['Ciudad'] == 'MEXICALI') echo 'selected'; ?>>MEXICALI</option>
         			</select></td>
        			 <td>CELULAR (10 DIGITOS): <br><input type="text" value="<?php echo $reg['Celular']; ?>" name="celularNuevo" placeholder="Ingresar número teléfonico" class="informacion" pattern="[0-9]{10}" oninput="validarNumeros(this)" required></td>
       			</tr>

				<tr>
					<td>TRANSPORTE: <br><select name="transporteNuevo" class="informacion2" id="transporte">
           				<option value= "SI">SI</option>
          		 		<option value= "NO">NO</option></td>
				</tr>

				<tr>
         			<td>CAMISA: <br><select name="camisaNuevo" class="informacion2" onchange="desaparecer_talla()" id="camisa">
           			<option value= "SI" <?php if($reg['Camisa'] == 'SI') echo 'selected'; ?>>SI</option>
           			<option value= "NO" <?php if($reg['Camisa'] == 'NO') echo 'selected'; ?>>NO</option></select></td>
       			</tr>

				<!-- Sí en la base de datos en el campo Camisa esta NO entonces la fila de talla no aparecerá en pantalla -->
      		 	<tr id="fila_talla" <?php if($reg['Camisa'] == 'NO') echo 'style="display: none;"'; ?>>
         			<td>TALLA: <br><select name="tallasNuevo" class="informacion2" id="talla">
           				<option value= "CHICA" <?php if($reg['Talla'] == 'CHICA') echo 'selected'; ?>>CHICA</option>
           				<option value= "MEDIANA" <?php if($reg['Talla'] == 'MEDIANA') echo 'selected'; ?>>MEDIANA</option>
          			 	<option value= "GRANDE" <?php if($reg['Talla'] == 'GRANDE') echo 'selected'; ?>>GRANDE</option>
           				<option value= "EXTRA GRANDE" <?php if($reg['Talla'] == 'EXTRA GRANDE') echo 'selected'; ?>>EXTRA GRANDE</option>
          			</select></td>
      			</tr>

				<tr>
					<td><input type="submit" name="enviar" class="boton" value="Actualizar"></td>
				</tr>
				<td>
					<form action="principal_admin.html" method="post">
            			<input type="submit" class="boton" value="Regresar">
        			</form>
				</td>
		</table>
		<!-- Este input guarda el id de la base de datos -->
		<input type="hidden" name="idVacacionista" value="<?php echo $reg['Id_Vacacionista']; ?>">
</center>
	
<?php	
}else{
	echo "<script>alert('Vacacionista no encontrado.')</script>";
	echo "<script>window.location.href='busqueda.php';</script>"; 
}
?>

<script type="text/javascript" src="js/busqueda.js"></script>