<?php 

$user = "sebastian";
$password = "123";

if ($_POST['usuario']==$user && $_POST['contrasena']==$password) {
	
	session_start();
	$_SESSION['usuario'] = "Sebastian Fredriksson";
	$_SESSION['pais'] = "Argentina";
	header('location: dos.php');
}else {
	echo "Su  nombre de usuario o contraseña no es valido, pruebe de nuevo.<br>";
	echo "<a href='index.php'>Intentar aca</a>";

}

?>