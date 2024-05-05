<?php
//Datos del servidor y la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectofinal";

//Conexión con la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Recuperar los datos del formulario
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

//Se comprueba sí el botón fue presionado
if(!empty($_POST['ingresar'])){
  
  //Se va a validar sí uno o varios de los campos están vacíos
  if (empty($usuario) || empty($contraseña)) {

    //Sí los campos están vacíos se muestra lo siguiente
  echo "<script>alert('Llenar todos los campos.');</script>";
  echo "<script>window.location.href='Login.html';</script>";
  
}else {
    //Consultar si el usuario y la contraseña existen en la base de datos
    $sql = "SELECT * FROM usuarios WHERE NombreUsuario = '$usuario' AND Contraseña = '$contraseña'";

    //Se realiza la consulta y se almacena en la variable resultados
    $resultado = mysqli_query($conn, $sql);

    //Sí la variable resultados tiene una fila registrada (los datos de la consulta son correctos)
    if(mysqli_num_rows($resultado) == 1) {

        //Se muestra el siguiente mensaje
        echo "<script>alert('Bienvenido $usuario.');</script>";

        //Se direcciona a la página principal
        echo "<script>window.location.href='Principal.html';</script>";
      } else {
        //Si los datos no coinciden entonces se muestra este mensaje
        echo "<script>alert('Usuario y/o contraseña incorrectos.');</script>";

        //Después se redireccionará a la página del Login
        echo "<script>window.location.href='Login.html';</script>";
    }
 }
}

//Se cierra la conexión con la base de datos
mysqli_close($conn);
?>