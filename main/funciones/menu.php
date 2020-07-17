<?php

//Mostrar el menú del Admon con variable de sesión $_SESSION['nivel']==1 .

function getMenuAdmon(){
    $resultado='
		<nav class="menu">
			<ul>
				<li><a href="index.php" title="Inicio">Inicio</a></li>
				<li><a href="usuarios.php" title="Usuarios">Usuarios</a></li>
				<li><a href="clases.php" title="Clases">Clases</a></li>
			</ul>
		</nav>
	';
	return $resultado;
}

//Mostrar el menú del Admon con variable de sesión $_SESSION['nivel']==2 .

function getMenuUser(){
	$resultado='
		<nav class="menu">
			<ul>
				<li><a href="index.php" title="Inicio">Inicio</a></li>
				<li><a href="clases.php" title="Clases">Clases</a></li>
			</ul>
		</nav>
	';
	return $resultado;
}

?>