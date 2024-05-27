<!-- Del Toro Cruz Joseph Vladimir -->
<!-- Jiménez García Juan Emanuel -->

<?php
$conexion = mysqli_connect("localhost", "root", "", "practica30") or die("Problemas con la conexión");

if (isset($_GET['ide'])) {
    $id = $_GET['ide'];

    mysqli_query($conexion, "DELETE FROM vacacionistas WHERE Id_Vacacionista ='$id'")or die("Problemas en el select:". mysqli_error($conexion));
    mysqli_close($conexion);

    echo "<script>alert('El vacacionista con la clave $id ha sido eliminado.')</script>";
    echo "<script>window.location.href='administrar_vacacionistas.php';</script>";
}
?>