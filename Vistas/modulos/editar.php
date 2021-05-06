<br>
<div class="container" align="center" style="background-color:#907474;">
<br>
    <h1 style="color:white">Editar Valores de Producto</h1>
    <br>
    <hr style="border-color:white;">
<form method="post">
    
    <?php

        $editar = new ProductosC();
        $editar -> EditarProductoC();

        $actualizar = new ProductosC();
        $actualizar -> ActualizarProductoC();

    ?>

</form>

</div>

