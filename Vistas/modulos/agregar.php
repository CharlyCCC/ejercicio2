<br>
<div class="container" align="center" style="background-color:#907474;">
<br>
    <h1 style="color:white">Ingresa los datos del nuevo producto</h1>
    <br>
    <hr style="border-color:white;">
<form action="" method="post">
    <div class="row">
        <div class="col">
            <h2 style="color:white">Nombre: </h2>
            <input type="text" name="nombreR" placeholder="Nombre del producto" required>
        </div>
        <div class="col">
            <h2 style="color:white">Unidad: </h2>
            <select name="unidadR"required>
                <option value=""> ---- </option>
                <option value="Kg">Kilo</option>
                <option value="Oz">Onza</option>
                <option value="Inch">Pulgada</option>
                <option value="Cm">Centímetro</option>
                <option value="Pie">Pie</option>
                <option value="Mt">Metro</option>
                <option value="Lt">Litro</option>
                <option value="Galon">Galón</option>
                <option value="Pack">Paquete</option>
                <option value="Unidad">Unidad</option>
            </select>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col">
            <h2 style="color:white">Precio: </h2>
            <input type="number" name="precioR" id="" placeholder="Precio por unidad" required step="0.01">
            <!-- <input type="text" name="precioR" id="" placeholder="Precio por unidad" required step="0.01">  -->
        </div>
        <div class="col">
            <h2 style="color:white">Cantidad: </h2>
            <input type="number" name="cantidadR" id="" placeholder="Cantidad a agregar"required>
            <!-- <input type="text" name="cantidadR" id="" placeholder="Cantidad a agregar"required> -->
        </div>
    </div>
        
    <br><br>

    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">
               Enviar
            </button>
        </div>
        <div class="col">
            <button type="reset" class="btn btn-danger">
                Borrar toddo
            </button>
        </div>
    </div>
        
    <br><br>

</form>

<?php

    $registrar = new ProductosC();
    $registrar -> RegistrarProductosC();

?>
</div>

