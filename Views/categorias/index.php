<?php
require_once("c:/xampp/htdocs/prueba_tecnica/Views/head/head.php");
require_once("c:/xampp/htdocs/prueba_tecnica/Controllers/categoriaController.php");
$obj = new categoriaController();
$rows = $obj->index_categoria();
?>

<table class="table">
<thead>
<tr>
    <th scope="col">ID</th>
    <th scope="col">NOMBRE</th>
    <th scope="col">ACCIONES</th>
</tr>
</thead>

    <tbody>
    <?php if($rows) :?>
        <?php foreach($rows as $row): ?>
        <tr>
            <th><?= $row[0]?></th>
            <th><?= $row[1]?></th>
            <th>
            <a href="categorias.php?nombre=<?= $row[1]?>" class="btn btn-success">Ver</a>
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



<?php
require_once("c:/xampp/htdocs/prueba_tecnica/Views/head/footer.php");
?>