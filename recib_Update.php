
<?php
include('config.php');
$idRegistros = $_REQUEST['id'];
$nombre      = $_REQUEST['nombre'];
$correo 	 = $_REQUEST['correo'];
$celular 	 = $_REQUEST['celular'];

$update = ("UPDATE clientes 
	SET 
	nombre  ='" .$nombre. "',
	correo  ='" .$correo. "',
	celular ='" .$celular. "' 

WHERE id='" .$idRegistros. "'
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'>
        window.location='index.php';
    </script>";

?>
