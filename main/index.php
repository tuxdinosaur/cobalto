<?php

include('funciones/menu.php');

session_start();

//Impedimos el acceso sin login.

if($_SESSION['nivel']==1 || $_SESSION['nivel']==2){

//Asignamos el menú en función del nivel ya sea 1 o 2.

if($_SESSION['nivel']==1){
	$menu = getMenuAdmon();
	$perfil = 'Administrador';
}else{
	$menu = getMenuUser();
	$perfil = 'Usuario';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio COBALTO</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
<div class="container">
	<header>
		<h1>Intranet COBALTO</h1>
		<h2>Bienvenido a COBALTO, <?= $_SESSION['nombre'] ?> </h2>
		<div class="cerrar_sesion">
			<a href="../login/salir.php">Cerrar sesión</a>
		</div> <!--END .cerrar_sesion-->
	</header>
<?= $menu ?>
</div> <!--END .container-->

<footer><?= $_SESSION['nombre'] ?>, has entrado con el perfil de <strong><?= $perfil ?></strong></footer>
	
</body>
</html>

<?php

}else{
	define('PAGINA_INICIO','../index.php?mensaje=no_tiene_permiso');
	header('Location: '.PAGINA_INICIO);
}

?>










