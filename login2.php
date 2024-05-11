<!-- Del Toro Cruz Joseph Vladimir -->
<!-- Jiménez García Juan Emanuel -->

<?php
$conexion = mysqli_connect("localhost","root","","practica30") or die("Problemas con la conexion");

$sql = "SELECT * FROM usuarios WHERE Usuario = '$_REQUEST[nombre_usuario]' AND Contraseña = '$_REQUEST[contraseña]'";	
$resultado = mysqli_query($conexion, $sql);

// Si se encontró un usuario, iniciar sesión
if ($fila = mysqli_fetch_assoc($resultado)) {
    $tipo_usuario = $fila['Tipo'];
        
    if ($tipo_usuario == 'Administrador') {
        header('Location: admin/administrar_vacacionistas.php');

    } elseif ($tipo_usuario == 'Usuario') {
        header('Location: principal.html');
    }
    
} else {
    // Si no se encontró un usuario, mostrar un mensaje de error
    echo "<script>alert('Usuario y/o contraseña incorrectos.')</script>";
    echo "<script>window.location.href='login.html';</script>";
    }

mysqli_close($conexion);
?>