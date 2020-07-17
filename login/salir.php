<?php

//Borrar variables de sesión.
unset($_SESSION);

//Borrar la sesión.
session_destroy();

//Redireccionar a la pag. de inicio
define('PAGINA_INICIO','../index.php?mensaje=gracias');
header('Location: '.PAGINA_INICIO); //Header redirecciona donde queramos.

?>