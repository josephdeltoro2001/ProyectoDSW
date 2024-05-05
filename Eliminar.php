<?php
//Datos del servidor y la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectofinal";

//Conexión con la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Recuperar los datos del formulario
$Nombreusuario = $_POST['usuario'];
$Contraseña1 = $_POST['contraseña1'];
$Contraseña2 = $_POST['contraseña2'];

// Conectar a la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Se comprueba sí el botón fue presionado
if(!empty($_POST['eliminar'])){
  
    //Se va a validar sí uno o varios de los campos están vacíos
    if (empty($Nombreusuario) || empty($Contraseña1) || empty($Contraseña2)) {
  
      //Sí los campos están vacíos se muestra lo siguiente
      echo "<script>alert('Llenar todos los campos');</script>";
      echo "<script>window.location.href='Eliminar_Usuario.html';</script>";
    
   //Sí los campos no están vacíos se procede a hacer todo el procedimiento
  }else {
    if($Contraseña1 == $Contraseña2){
        //Consultar sí el usuario  existe en la base de datos
      $sql = "SELECT * FROM usuarios WHERE NombreUsuario = '$Nombreusuario' AND Contraseña = '$Contraseña1'";

      //Se realiza la consulta y se almacena en la variable resultados
      $resultado = mysqli_query($conn, $sql);

      //Sí la variable resultados tiene una fila registrada (los datos de la consulta son correctos)
      if (mysqli_num_rows($resultado) == 1) {

      //El usuario existente procede a ser eliminado
      $sql_eliminar = "DELETE FROM usuarios WHERE NombreUsuario = '$Nombreusuario' AND Contraseña = '$Contraseña1'";

      if (mysqli_query($conn, $sql_eliminar)) {
          //Si se ejecuta correctamente el eliminar entonces aparecerá el siguiente mensaje y se redireccionará al Login
          echo "<script>alert('Su cuenta ha sido eliminada');</script>";
          echo "<script>window.location.href='Login.html';</script>";
      }else {
          //Sino se ejecuta el eliminar entonces aparecerá el siguiente mensaje y se redireccionará a la misma página
          echo "<script>alert('Error al eliminar el usuario');</script>";
          echo "<script>window.location.href='Eliminar_Usuario.html';</script>";
      }
      }else{
          //Sino hay fila registrada entonces aparecerá este mensaje y se redireccionará a la misma página
          echo "<script>alert('Usuario no encontrado');</script>";
          echo "<script>window.location.href='Eliminar_Usuario.html';</script>";
      }
    }else{
        echo "<script>alert('Las contraseñas no coinciden')</script>";
        echo "<script>window.location.href='Eliminar_Usuario.html';</script>";
    }
   }
  }
//Se cierra la conexión con la base de datos
mysqli_close($conn);
 ?>