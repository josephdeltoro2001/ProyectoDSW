<?php
echo "<head>
<meta charset='UTF-8'>
<title>Usuarios en el sistema</title>
<link rel='stylesheet' href='css/Consulta.css'>
<link rel='icon' href='imagenes/icono.png'>
</head>";

//Datos del servidor y la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectofinal";

//Conexión con la base de datos
$conn1 = mysqli_connect($servername, $username, $password, $dbname);

//Consulta para obtener todos los datos de la tabla
$sql1 = "SELECT * FROM usuarios";
$resultado1 = mysqli_query($conn1, $sql1);

//Se crea la tabla HTML
echo "<center>";
echo "<table>";
echo "<tr>";
echo "<th>Nombres</th>";
echo "<th>Apellidos</th>";
echo "<th>Teléfono</th>";
echo "<th>Correo</th>";
echo "<th>Nombre de usuario</th>";
echo "<th>Contraseña</th>";
echo "</tr>";

//Iterar sobre los resultados y generar las filas de la tabla
while ($fila = mysqli_fetch_assoc($resultado1)) {
    echo "<tr>";
    echo "<td>" . $fila['Nombres'] . "</td>";
    echo "<td>" . $fila['Apellidos'] . "</td>";
    echo "<td>" . $fila['Telefono'] . "</td>";
    echo "<td>" . $fila['Correo'] . "</td>";
    echo "<td>" . $fila['NombreUsuario'] . "</td>";
    echo "<td>" . $fila['Contraseña'] . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "</center>";

// Cerrar la conexión a la base de datos
mysqli_close($conn1);
?>