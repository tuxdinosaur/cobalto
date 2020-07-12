<?php

session_start();
echo "<h1>Bienvenido a la PAGINA PRINCIPAL, ".$_SESSION['nombre']."</h1>";

if($_SESSION['nivel']=='1'){
	echo "<p>Eres un maestro</p>";
}else{
	echo "<p>Eres un alumno</p>";
}

?>











