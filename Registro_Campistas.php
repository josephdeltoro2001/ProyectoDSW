<?php
//Variables donde se igualan los names del formulario
$nombre = $_POST['nombre'];
$apellidos =$_POST['apellidos'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$ciudad = $_POST['ciudad'];
$otro1 = $_POST['otro'];
$otro2 =$_POST['otro2'];
$telefono = $_POST['celular'];
$transporte = $_POST['transporte'];
$comentarios = $_POST['comentarios'];
$camisa = $_POST['camisa'];
$talla = $_POST['tallas'];

//Datos del servidor y la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectofinal";

//Comando de conexión con la base de datos
$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);

//Se comprueba sí el botón fue presionado
if(!empty($_POST['enviar'])){

    //Comando para registrar en la tabla
    $sql = "INSERT INTO campistas(Nombre, Apellidos, Edad, Sexo, Ciudad, Otro1, Otro2, Celular, Transporte, Comentarios, Camisa, Talla) VALUES('$nombre', '$apellidos', '$edad', '$sexo', '$ciudad', '$otro1', '$otro2', '$telefono', '$transporte', '$comentarios', '$camisa', '$talla')";
    $conn->exec($sql);

    //Se muestra un mensaje en un alert de que se hizo de manera correcta el registro
    echo "<script>alert('Su inscripción se ha completado.');</script>";

   //Se direcciona a la página del Principal una vez mostrado el alert anterior
   echo "<script>window.location.href='Principal.html';</script>";
  }

//Se termina la conexión con la base de datos
$conn = null;
 ?>