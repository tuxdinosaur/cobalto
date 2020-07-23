<?php session_start();
if (isset($_SESSION['usuario'])) {
	require 'view/contenidoV.php';
} else {
	header('Location: login.php');
}
?>