<?php

require_once "_clases.php";
require_once "_dao.php";

$productos = DAO::productoObtenerTodos();

?>



<html>

<head>
    <meta charset="UTF-8">
</head>

<body>

<table border="2">

    <tr>
        <th>Producto</th>
        <th>Precio</th>
        <th>Añadir</th>
    </tr>

    <?php foreach ($productos as $producto) { ?>
        <tr>
            <td>
                <a href='producto-detalle.php?id=<?=$producto->getId()?>'><?=$producto->getNombre()?></a>

            </td>
            <td>
                <a href='producto-detalle.php?id=<?=$producto->getId()?>'><?=$producto->generarPrecioFormateado()?></a>
            </td>
            <td>
                <a href='carrito-gestionar-producto.php
?productoId=<?=$producto->getId()?>&variacionUnidades=1'>Al carrito</a>
            </td>
        </tr>
    <?php } ?>

</table>

</body>

</html>
