<?php
if(isset($_GET['editar'])){
	$editar_id = $_GET['editar'];

	$consulta = "SELECT * FROM users WHERE id = '$editar_id'";
	$ejecutar = mysqli_query($con, $consulta);
	
    $fila = mysqli_fetch_array($ejecutar);

	$usuario = $fila['usuario'];
	$password = $fila['password'];
	$email = $fila['email'];
}
?>
<br />
<form method="POST" action="">
<input type="text" name="usuario" value="<?php echo $usuario; ?>"><br />
<input type="password" name="password" value="<?php echo $password; ?>"><br />
<input type="text" name="email" value="<?php echo $email; ?>"><br />
<input type="submiT" name="actualizar" value="ACTUALIZAR DATOS">
</form>

<?php
if (isset($_POST['actualizar'])){
$actualizar_nombre = $_POST['usuario'];
$actualizar_password = $_POST['password'];
$actualizar_email = $_POST['email'];

$actualizar = "UPDATE users SET usuario='$actualizar_nombre', password='$actualizar_password', email='$actualizar_email' WHERE id='$editar_id'";
$ejecutar = mysqli_query($con, $actualizar);

if ($ejecutar){
	echo "<script>alert('Datos Actualizados!')</script>";
	echo "<script>windoows.open('ABC.php','_self')</script>";
}
}

?>
