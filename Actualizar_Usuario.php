<?php
//Datos del servidor y la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectofinal";

//Conexión con la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Consulta para recuperar los registros de la base de datos
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

//Verificar si se han recuperado registros
if ($result->num_rows > 0) {
    //Obtener el primer registro
    $row = $result->fetch_assoc();
    $id = $row['idUsuario'];
    $nombres1 = $row['Nombres'];
    $apellidos1 = $row['Apellidos'];
    $telefono1 = $row['Telefono'];
    $correo1 = $row['Correo'];
    $nombreUsuario1 = $row['NombreUsuario'];
    $contraseña1 = $row['Contraseña'];
} else {
    echo "<script>alert('Este registro no existe')</script>";
    echo "<script>window.location.href='Actualizar_Usuario.php';</script>";
}

// Verificar si se ha enviado el formulario de actualización
if (isset($_POST['actualizar'])) {
    $nombres2 = $_POST['nombres'];
    $apellidos2 = $_POST['apellidos'];
    $telefono2 = $_POST['telefono'];
    $correo2 = $_POST['correo'];
    $nombreUsuario2 = $_POST['usuario'];
    $contraseña2 = $_POST['contraseña'];

    //Consulta de actualización
    $sql = "UPDATE usuarios SET Nombres = '$nombres2', Apellidos = '$apellidos2', Telefono = '$telefono2', Correo = '$correo2', NombreUsuario = '$nombreUsuario2', Contraseña = '$contraseña2' WHERE idUsuario = '$id'";

    //Sí el comando UPDATE se ejecuta correctamente aparecerá lo siguiente y redireccionando a la página principal
    if ($conn->query($sql) == TRUE) {
        echo "<script>alert('Sus datos han sido actualizados con éxito')</script>";
        echo "<script>window.location.href='Principal.html';</script>";
    } else {
        //Sino aparecerá este mensaje redireccioando a la misma página
        echo "<script>alert('Error al actualizar sus datos')</script>" . $conn->error;
        echo "<script>window.location.href='Actualizar_Usuario.php';</script>";
    }
}

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistema de actualización</title>
    <link rel="stylesheet" href="css/Actualizar_Usuario.css">
    <link rel="icon" href="imagenes/icono.png">
</head>

<body>
    <header>
        <A href="Principal.html"><button class="regresar"><h3>Regresar</h3></button></A>
        </header>
<form method="POST" action="Actualizar_Usuario.php">
    <table>
    <h1>Actualización de datos</h1>
    <h2>Corrija los datos que desee</h2>
        <tr>
        <td align="right">Nombres: </td>
        <td><input type="text" name="nombres" class="caja" id="cajaLetras" value="<?php echo $nombres1; ?>" placeholder="Nombres" oninput="sololetras()"><br><p id="mensajeError1">Por favor, ingrese solo letras.</p></td>
        </tr>

        <tr>
            <td align="right">Apellidos: </td>
            <td><input type="text" name="apellidos" class="caja" id="cajaLetras2" value="<?php echo $apellidos1; ?>" placeholder="Apellidos" oninput="sololetras1()"><br><p id="mensajeErrorA">Por favor, ingrese solo letras.</p></td>
        </tr>

        <td align="right">Teléfono: </td>
        <td><input type="tel" name="telefono" class="caja" id="cajaNumeros" value="<?php echo $telefono1; ?>" placeholder="Número telefónico" oninput="solonumeros()"><br><p id="mensajeError2">Por favor, ingrese solo números.</p></td>
        </tr>

        <tr>
            <td align="right">Correo: </td>
            <td><input type="email" name="correo" class="caja" id="cajaLetras3" value="<?php echo $correo1; ?>" placeholder="Correo electrónico" oninput="correo()"><br><p id="mensajeErrorB">La estructura de del correo debe ser: usuario@extencion.mx</p></td>
        </tr>

        <tr>
        <td align="right">Nombre de usuario: </td>
        <td><input type="text" name="usuario" class="caja" id="cajaLetras4" value="<?php echo $nombreUsuario1; ?>" placeholder="Nombre de usuario" oninput="sololetras3()"><br><p id="mensajeErrorC">Por favor, ingrese solo letras.</p></td>
        </tr>

        <tr>
            <td align="right">Contraseña: </td>
            <td><input type="password" name="contraseña" class="caja" id="cajaNumeros2" value="<?php echo $contraseña1; ?>" placeholder="Contraseña" oninput="solonumeros2()"><br><p id="mensajeErrorD">Por favor, ingrese solo números.</p></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" name="actualizar" class="boton" value="Actualizar"></td>
        </tr>
        
    </table>
</form>
</body>
<script type="text/javascript" src="js/Validaciones.js"></script>
</html>