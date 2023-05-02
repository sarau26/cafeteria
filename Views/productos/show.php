<?php
require_once("c:/xampp/htdocs/prueba_tecnica/Views/head/head.php");
require_once("c:/xampp/htdocs/prueba_tecnica/Controllers/productoController.php");
$obj = new productoController();
$date=$obj->show($_GET['id']);

?>

<h2>El producto <?= $date[1]?> se ha registrado correctamente</h2>
<div>
    <a href="index.php" class="btn btn-primary">Regresar</a>
</div>

<?php
require_once("c:/xampp/htdocs/prueba_tecnica/Views/head/footer.php");
?>