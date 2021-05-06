<?php
require_once "Controladores/rutasC.php";
require_once "Controladores/productosC.php";


require_once "Modelos/rutasM.php";
require_once "Modelos/productosM.php";


$rutas = new RutasControlador();
$rutas -> Plantilla();