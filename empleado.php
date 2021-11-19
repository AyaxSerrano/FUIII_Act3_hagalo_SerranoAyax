<?php 

include("con_db.php");
if (isset($_POST['empleado'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['departamento']) >= 1 && strlen($_POST['productos']) >= 1 && strlen($_POST['horario']) >= 1 && strlen($_POST['lastname']) >= 1) {
	    $name = trim($_POST['name']);
		$lastname = trim($_POST['lastname']);
		$departamento = trim($_POST['departamento']);
	    $productos = trim($_POST['productos']);
		$horario = trim($_POST['horario']);
	    $consulta = "INSERT INTO empleado(Nombre, Apellido, Departamento que atiende, Productos Vendidos, Horario de trabajo) VALUES ('name','lastname','departamento','productos','horario')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">UPSS</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>