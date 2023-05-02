<?php

require_once("c://xampp/htdocs/prueba_tecnica/Controllers/categoriaController.php");
$obj = new categoriaController();
$obj->guardar($_POST['nombre']);

?>