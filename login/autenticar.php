<?php

//Recuperación de usuario mediante metodo POST y lo filtramos para evitar códigos maliciosos
$usuario = $_POST['p_username'];
$usuario = addslashes($usuario);
$usuario = strip_tags($usuario);

//Recuperación de contraseña mediante el método POST y lo filtramos para evitar códigos maliciosos
$contrasena = $_POST['p_password'];
$contrasena = addslashes($contrasena);
$contrasena = strip_tags($contrasena);

/*CONEXIÓN CON BASE DE DATOS
	...
	Conexión
	...
*/

//Comprobación manual que el usuario y la contraseña es correcta

if($usuario=='Jorge Peña' && $contrasena==1234){
	
	//Una vez comprobamos que el login es correcto, asignamos las variables de sesión
	session_start();
	$_SESSION['nombre']='Alumno';
	$_SESSION['nivel']='1';
	
	define('PAGINA_INICIO','../main/index.php');
	header('Location: '.PAGINA_INICIO);
}else{
	//redireccionar a la página de inicio
	define('PAGINA_INICIO','../index.php?mensaje=mensaje_error');
	header('Location: '.PAGINA_INICIO); //header redirecciona a donde queramos
}


?>










