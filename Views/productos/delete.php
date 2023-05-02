<?php
require_once("c:/xampp/htdocs/prueba_tecnica/Views/head/head.php");
require_once("c:/xampp/htdocs/prueba_tecnica/Controllers/productoController.php");
$obj = new productoController();
$date=$obj->delete($_GET['id']);
?>

