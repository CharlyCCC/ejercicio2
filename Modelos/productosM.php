<?php

require_once "ConexionBD.php";

class ProductosM extends ConexionBD{

    //Registrar Productos
    static public function RegistrarProductosM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (nombre, unidad_medida, precio, stock) VALUES (:nombre, :unidad_medida, :precio, :stock)");

        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":unidad_medida", $datosC["unidad_medida"], PDO::PARAM_STR);
        $pdo -> bindParam(":precio", $datosC["precio"], PDO::PARAM_STR);
        $pdo -> bindParam(":stock", $datosC["stock"], PDO::PARAM_INT);

        if($pdo -> execute()){

            return "Bien";

        }else{

            return "Error";

        }

        $pdo -> close();

    }


    //Mostrar Productos
    static public function MostrarProductosM($tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD");

        $pdo -> execute();

        return $pdo->fetchAll();

        $pdo -> close();

    }


    //Editar Producto
    static public function EditarProductoM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE id = :id");

        $pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);

        $pdo -> execute();

        return $pdo->fetch();

        $pdo -> close();

    }


    //Actualzar Producto
    static public function ActualizarProductoM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET nombre = :nombre, unidad_medida = :unidad_medida, precio = :precio, stock = :stock WHERE id = :id");

        $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":unidad_medida", $datosC["unidad_medida"], PDO::PARAM_STR);
        $pdo -> bindParam(":precio", $datosC["precio"], PDO::PARAM_STR);
        $pdo -> bindParam(":stock", $datosC["stock"], PDO::PARAM_INT);

        if($pdo -> execute()){

            return "Bien";

        }else{

            return "Error2";

        }

        $pdo -> close();
    }

    //Borrar Producto
    static public function BorrarProductoM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("DELETE from $tablaBD WHERE id = :id");

        $pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);

        if($pdo -> execute()){

            return "Bien";

        }else{

            return "Error3";

        }

        $pdo -> close();

    }

}