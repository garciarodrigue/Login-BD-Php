<?php
$usuario= $_POST['usuario'];
$password= $_POST['password'];
session_start();
$_SESSION['usuario'] = $usuario;

include('login.php');

//$conexion=mysqli_connect('localhost','tenshi', ' ', 'login' );

$consulta = "SELECT*FROM login WHERE login ='$usuario' and password = '$password' ";

$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
	header("home.html");
}else{
	?>
	<?php 
	include("index.html");
	?>
	<h1 class="bad">Error</h1>
	<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
