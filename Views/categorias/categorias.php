<?php
require_once("c:/xampp/htdocs/prueba_tecnica/Views/head/head.php");
require_once("c:/xampp/htdocs/prueba_tecnica/Controllers/categoriaController.php");
$obj = new categoriaController();
$products=$obj->productos($_GET['nombre']);
?>

<table class="table">
<thead>
<tr>
    <th scope="col">ID</th>
    <th scope="col">NOMBRE</th>
    <th scope="col">REFERENCIA</th>
    <th scope="col">PRECIO</th>
    <th scope="col">PESO</th>
    <th scope="col">CATEGORIA</th>
    <th scope="col">STOCK</th>
    <th scope="col">FECHA</th>
    <th scope="col">ACCIONES</th>
</tr>
</thead>

    <tbody>
    <?php if($products) :?>
        <?php foreach($products as $row): ?>
        <tr>
            <th><?= $row[0]?></th>
            <th><?= $row[1]?></th>
            <th><?= $row[2]?></th>
            <th><?= $row[3]?></th>
            <th><?= $row[4]?></th>
            <th><?= $row[5]?></th>
            <th><?= $row[6]?></th>
            <th><?= $row[7]?></th>
            <th><a href="/prueba_tecnica/Views/productos/edit.php?id=<?= $row[0]?>" class="btn btn-primary">Modificar</a>
            <a href="/prueba_tecnica/Views/productos/delete.php?id=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
            <a href="/prueba_tecnica/Views/productos/vender.php?id=<?= $row[0]?>" class="btn btn-success">Vender</a>
        </th>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
            <tr>
                <td>No hay registros</td>
            </tr>
        <?php endif; ?>

    </tbody>
</table>








