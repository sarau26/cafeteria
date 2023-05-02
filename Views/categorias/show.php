<?php
require_once("c:/xampp/htdocs/prueba_tecnica/Views/head/head.php");
require_once("c:/xampp/htdocs/prueba_tecnica/Controllers/categoriaController.php");
$obj = new categoriaController();
$date=$obj->show($_GET['nombre']);

?>

<h2>La categoria <?= $date[1]?> se ha registrado correctamente</h2>
<div>
    <a href="index.php" class="btn btn-primary">Regresar</a>
</div>

<?php
require_once("c:/xampp/htdocs/prueba_tecnica/Views/head/footer.php");
?>