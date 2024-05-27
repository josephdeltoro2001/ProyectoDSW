<!-- Del Toro Cruz Joseph Vladimir -->
<!-- Jiménez García Juan Emanuel -->

<html>
<head>
    <meta charset='utf-8'>
	<title>Lista de vacacionistas</title>
	<link rel="stylesheet" href="css/admin.css">
	<link rel="shortcut icon" href="img/logotipo.png" type="image/x-icon">
	<style>
		body {
    		background-image: url(img/isla.jpg);
    		background-repeat: no-repeat;
    		background-position: center;
    		background-size: cover;
    		font-family: Arial, sans-serif;
    		margin: 0;
    		padding: 0;
		}

		header {
    		height: 1%;
    		width: 1270px;
    		display: table;
    		background-image: url(img/CATEMACO.png);
    		background-size: calc(1px + 300px);
    		background-repeat: no-repeat;
    		background-position: center;
    		background-color: rgba(14, 170, 197, 0.863);
    		padding: 30px;
		}
	</style>
</head>
<script type="text/javascript">
	function confirmar(){
		return confirm('¿Seguro qué quiere eliminar este registro?');
	 }
</script>
<header>
        <div class="menu_logo">  
        <button id="menu-toggle">☰</button>
        <div class="logo_contenedor">
            <img src="img/logo.jpeg" alt="logo Fundación" class="logo">
        </div>
        </div>
        <nav id="menu">
            <ul>
                <li><a href="menu.html">Inicio</a></li>
                <li><a href="historia.html">Historia de Catemaco</a></li>
                <li><a href="lugaresT.html">Lugares Turistico</a></li>
                <li><a href="comida.html">Comida Tipica</a></li>
				<li><a href="../registro_usuarios.html">Registrar Usuario</a></li>
                <li><a href="registro_vacacionistas.php">Registrar Vacacionista</a></li>
                <li><a href="administrar_vacacionistas.php">Admin</a></li>
                <li><a href="../menu.html">Cerrar Sesion</a></li>
            </ul>
        </nav>
    </header>
<body>
	<?php
		$conexion = mysqli_connect("localhost", "root", "", "practica30") or die("Problemas con la conexión");
		$sql="SELECT * FROM vacacionistas";	
		$resultado = mysqli_query($conexion,$sql)
	?>
	<center><h1>Administración de vacacionistas</h1></center>
	 <center><p>Sí desea hacer una modificación haga clic <a href="buscar_vacacionista.html">Aquí</a></p></center>
	<table align='center'>
		<thead>
			<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Edad</th>
            <th>Sexo</th>
			<th>Ciudad</th>
			<th>Celular</th>
			<th>Transporte</th>
			<th>Comentarios</th>
			<th>Camisa</th>
			<th>Talla</th>
			</tr>
		</thead>
		<tbody>

		<!-- Mientras se encuentren registros en la tabla los registros irán apareciendo -->
		<?php
		while($vacacionistas = mysqli_fetch_assoc($resultado)){
		?>
			<tr>
				<td><?php echo $vacacionistas['Id_Vacacionista']?></td>
				<td><?php echo $vacacionistas['Nombre']?></td>
				<td><?php echo $vacacionistas['Apellidos']?></td>
				<td><?php echo $vacacionistas['Edad']?></td>
                <td><?php echo $vacacionistas['Sexo']?></td>
				<td><?php echo $vacacionistas['Ciudad']?></td>
				<td><?php echo $vacacionistas['Celular']?></td>
				<td><?php echo $vacacionistas['Transporte']?></td>
				<td><?php echo $vacacionistas['Comentarios']?></td>
				<td><?php echo $vacacionistas['Camisa']?></td>
				<td><?php echo $vacacionistas['Talla']?></td>
				
				<td><?php echo "<a href='eliminar_vacacionista.php?ide=".$vacacionistas['Id_Vacacionista']."' onclick='return confirmar()'>Eliminar</a>";?></td>
			</tr>
			<?php
			 }
			?>
		</tbody>
	</table>
	<script src="js/admin.js"></script>
</body>
</html>