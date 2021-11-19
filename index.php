<!DOCTYPE html>
<html>
<head>
	<title>Empleados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta Empleados</h1>
    	<input type="text" name="name" placeholder="Nombre">
		<input type="text" name="lastname" placeholder="Apellido">
		<input type="text" name="departamento" placeholder="Departamento que atiende">
		<input type="text" name="productos" placeholder="Productos vendidos">
		<input type="text" name="horario" placeholder="Horario de trabajo">
    	<input type="submit" name="empleado">
    </form>
        <?php 
        include("empleado.php");
        ?>
</body>
</html>