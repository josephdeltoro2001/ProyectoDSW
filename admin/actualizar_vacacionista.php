<!-- Del Toro Cruz Joseph Vladimir -->
<!-- Jiménez García Juan Emanuel -->

<?php
$conexion = mysqli_connect("localhost", "root", "", "practica30") or die("Problemas con la conexión");

//Se evalua si en camisa se puso NO, si es cierto en la base de datos se registrará NINGUNA en el campo talla, sino pondrá lo que se haya puesto en talla
$talla = ($_POST['camisaNuevo'] == 'NO') ? 'NINGUNA' : $_POST['tallasNuevo'];

mysqli_query($conexion, "UPDATE vacacionistas SET Nombre='$_REQUEST[nombreNuevo]', Apellidos='$_REQUEST[apellidosNuevo]', Edad='$_REQUEST[edadNuevo]', Sexo='$_REQUEST[sexoNuevo]', Ciudad='$_REQUEST[ciudadNuevo]', Celular='$_REQUEST[celularNuevo]', Transporte='$_REQUEST[transporteNuevo]', Camisa='$_REQUEST[camisaNuevo]', Talla='$talla' WHERE Id_Vacacionista='$_REQUEST[idVacacionista]'") or 
die("Problemas en el select:". mysqli_error($conexion));
mysqli_close($conexion); 

echo "<script>alert('Registro modificado correctamente.')</script>";
echo "<script>window.location.href='administrar_vacacionistas.php';</script>";
?>