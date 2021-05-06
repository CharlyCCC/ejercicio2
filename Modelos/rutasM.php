<?php

class Modelo{

    static public function RutasModelo($rutas){

        if($rutas == "inicio" || $rutas == "listado" || $rutas == "agregar" || $rutas == "editar"){

            $pagina = "Vistas/modulos/".$rutas.".php";

        }
        else if($rutas == "index"){
            $pagina = "Vistas/modulos/listado.php";
        }
        else{
            $pagina = "Vistas/modulos/inicio.php";
        }

        return $pagina;
    }

}