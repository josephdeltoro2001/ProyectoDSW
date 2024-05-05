<?php
//Variables donde se igualan los names del formulario
$nombres = $_POST['nombres'];
$apellidos =$_POST['apellidos'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$nombreUsuario = $_POST['nombreUsuario'];
$contraseña = $_POST['contraseña'];

//Datos del servidor y la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectofinal";

//Comando de conexión con la base de datos
$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);

//Se comprueba sí el botón fue presionado
if(!empty($_POST['guardar'])){
  
    //Se va a validar sí uno o varios de los campos están vacíos
    if (empty($nombres) || empty($apellidos) || empty($telefono) || empty($correo) || empty($nombreUsuario) || empty($contraseña)) {
  
      //Sí los campos están vacíos se muestra lo siguiente
      echo "<script>alert('Llenar todos los campos.');</script>";
      echo "<script>window.location.href='Registro_Usuario.html';</script>";
    
   //Sí los campos no están vacíos se procede a hacer todo el procedimiento
  }else {

    //Comando para registrar en la tabla
    $sql = "INSERT INTO usuarios(Nombres, Apellidos, Telefono, Correo, NombreUsuario, Contraseña) VALUES('$nombres', '$apellidos', '$telefono', '$correo', '$nombreUsuario', '$contraseña')";
    $conn->exec($sql);

    //Se muestra un mensaje en un alert de que se creo de manera correcta el usuario
    echo "<script>alert('Usuario creado correctamente.');</script>";

   //Se direcciona a la página del Login una vez mostrado el alert anterior
   echo "<script>window.location.href='Login.html';</script>";
   }
  }

//Se termina la conexión con la base de datos
$conn = null;
 ?>