<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Inventario</title>

    <!-- Bootstrap Style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>    

    <?php  
        include "modulos/menu.php";
    ?>

 <section>
    <?php 

        $rutas = new RutasControlador();
        $rutas -> Rutas();

    ?>

 </section>

 <?php

 /*
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Col 1</h1>
            </div>
            <div class="col">
                <h1>Col 2</h1>
            </div>
        </div>
    </div>
    */
?>
    
</body>
</html>