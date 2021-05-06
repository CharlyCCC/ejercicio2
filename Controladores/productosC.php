<?php 

class ProductosC{

    //Registrar Productos
    public function RegistrarProductosC(){

        if(isset($_POST["nombreR"])){

            $datosC = array("nombre"=>$_POST["nombreR"], "unidad_medida"=>$_POST["unidadR"], "precio"=>$_POST["precioR"], "stock"=>$_POST["cantidadR"]);
            $tablaBD = "materiales";

            $respuesta = ProductosM::RegistrarProductosM($datosC, $tablaBD);

            if($respuesta == "Bien"){

                header("location:index.php?ruta=listado");

            }else{

                echo "error";

            }

        }

    }

    //Mostrar Productos
    public function MostrarProductosC(){

        $tablaBD = "materiales";

        $respuesta = ProductosM::MostrarProductosM($tablaBD);

        foreach($respuesta as $key => $value){
            echo '<tr>
                    <td>'.$value["nombre"].'</td>
                    <td>'.$value["unidad_medida"].'</td>
                    <td>'.$value["precio"].'</td>
                    <td>'.$value["stock"].'</td>
                    <td>'.$value["total"].'</td>

                    <td><a href="index.php?ruta=editar&id='.$value["id"].'"><button>Editar</button></a></td>';

            if($value["stock"] == 0){
                echo '<td><a href="index.php?ruta=listado&idB='.$value["id"].'"><button>Borrar</button></a></td>';
            }
                    
             echo '</tr>';
        }

    }


    //Editar productos
    public function EditarProductoC(){

        $datosC = $_GET["id"];
        $tablaBD = "materiales";

        $respuesta = ProductosM::EditarProductoM($datosC, $tablaBD);

        echo '<div class="row">
        <div class="col">

        <input type="hidden" value="'.$respuesta["id"].'" name="idE">
                <h2 style="color:white">Nombre: </h2>
                <input type="text" name="nombreE" value="'.$respuesta["nombre"].'" placeholder="Nombre del producto" required>
            </div>
            <div class="col">
                <h2 style="color:white">Unidad: </h2>
                <input type="text" value="'.$respuesta["unidad_medida"].'" disabled>
                <select name="unidadE" value="'.$respuesta["unidad_medida"].'" required>
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
                <input type="number" name="precioE" value="'.$respuesta["precio"].'" placeholder="Precio por unidad" required step="0.01">
                <!-- <input type="text" name="precioE" value="'.$respuesta["precio"].'" placeholder="Precio por unidad" required step="0.01">  -->
            </div>
            <div class="col">
                <h2 style="color:white">Cantidad: </h2>
                <input type="number" name="cantidadE" value="'.$respuesta["stock"].'" placeholder="Cantidad a agregar"required>
                <!-- <input type="text" name="cantidadE" value="'.$respuesta["stock"].'" placeholder="Cantidad a agregar"required> -->

        </div>
    </div>
        
    <br><br>

    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">
               Editar
            </button>
        </div>
        <div class="col">
            <button type="reset" class="btn btn-danger">
                Borrar toddo
            </button>
        </div>
    </div>
        
    <br><br>';

    }

    //Actualiza Productos
    public function ActualizarProductoC(){

        if(isset($_POST["nombreE"])){

            $datosC = array("id"=>$_POST["idE"], "nombre"=>$_POST["nombreE"], "unidad_medida"=>$_POST["unidadE"], "precio"=>$_POST["precioE"], "stock"=>$_POST["cantidadE"]);

            $tablaBD = "materiales";

            $respuesta = ProductosM::ActualizarProductoM($datosC, $tablaBD);

            if($respuesta == "Bien"){

                header("location:index.php?ruta=listado");

            }else{

                echo "Error2";

            }

        }

    }


    //Eliminar Producto
    public function BorrarProductoC(){

        if(isset($_GET["idB"])){

            $datosC = $_GET["idB"];

            $tablaBD = "materiales";

            $respuesta = ProductosM::BorrarProductoM($datosC, $tablaBD);

            if($respuesta == "Bien"){

                header("location:index.php?ruta=listado");

            }else{

                echo "Error3";

            }


        }


    }

}

?>