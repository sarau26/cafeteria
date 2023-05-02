<?php
require_once("c:/xampp/htdocs/prueba_tecnica/Views/head/head.php");
require_once("c:/xampp/htdocs/prueba_tecnica/Controllers/productoController.php");
$obj = new productoController();
$product=$obj->show($_GET['id']);

?>


<form action="stock.php" method="post">
<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
    <div class="col-sm-10">
      <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $product[0]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">NOMBRE</label>
    <div class="col-sm-10">
      <input type="text" name="nombre" readonly value="<?= $product[1]?>" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">CANTIDAD</label>
    <div class="col-sm-10">
      <input type="text" name="cantidad" value="" class="form-control" id="inputPassword">
    </div>
  </div>
    <input type="submit" class="btn btn-primary" value="Realizar venta">
  </div>
</form>







<?php
require_once("c:/xampp/htdocs/prueba_tecnica/Views/head/footer.php");
?>