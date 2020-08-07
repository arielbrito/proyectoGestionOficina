<?php
require_once 'mainModel.php';

/****************************************
 ********* MODELO USUARIO **************
****************************************/

class usuarioModel extends mainModel{

    //Metodo para agregar usuario
    protected static function agregar_usuario_model($datos)
    {
        $sql= mainModel::conectar()->prepare("INSERT INTO usuarios(nombre, usuario, password, perfil, foto )VALUES(:nombre, :usuario, :password, :perfil,:foto)");
        $sql->bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
        $sql->bindParam(":usuario",$datos['usuario'],PDO::PARAM_STR);
        $sql->bindParam(":password",$datos['password'],PDO::PARAM_STR);
        $sql->bindParam(":perfil",$datos['perfil'],PDO::PARAM_STR);
        $sql->bindParam(":foton",$datos['foton'],PDO::PARAM_STR);
        $sql->execute();
        return $sql;
    }

}