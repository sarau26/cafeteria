<?php
 require_once("c://xampp/htdocs/prueba_tecnica/Controllers/productoController.php");
 $obj = new productoController();
 $obj->update($_POST['id'], $_POST['nombre'], $_POST['referencia'], $_POST['precio'], $_POST['peso'], $_POST['categoria'], $_POST['stock'], $_POST['fecha']);
?>


