<!-- Del Toro Cruz Joseph Vladimir -->
<!-- Jiménez García Juan Emanuel -->

<html>
<head>
    <meta charset='utf-8'>
	<title>Lista de vacacionistas</title>
</head>
<script type="text/javascript">
	function confirmar(){
		return confirm('¿Seguro qué quiere eliminar este registro?');
	 }
</script>

<body align="center">
	<?php

		$conexion = mysqli_connect("localhost","root","","practica30") or die("Problemas con la conexion");
		$sql="SELECT * FROM vacacionistas";	
		$resultado = mysqli_query($conexion,$sql)

		
	?>
	<h1>Administración de vacacionistas</h1>

	 <p>Sí desea hacer una modificación haga clic <a href="buscar_vacacionista.html">Aquí</a></p>
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

	<form action="principal_admin.html" method="post">
                <input type="submit" class="regresar" value="Regresar">
            </form>
</body>
</html>