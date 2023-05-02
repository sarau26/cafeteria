<?php
 require_once("c://xampp/htdocs/prueba_tecnica/Controllers/productoController.php");
 $obj = new productoController();
 $obj->vender($_POST['id'], $_POST['cantidad']);
?>