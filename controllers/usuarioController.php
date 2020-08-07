<?php
if($peticionAjax){
    require_once './models/usuarioModel.php';

}else{
    require_once '../models/usuarioModel.php';
}

/*******************************************************
 * *************CONTROLADOR DE USUARIO******************
 *****************************************************/
class usuarioController extends usuarioModel{

    //Metodo para agregar un usuario
    public function agregar_usuario_controller()
    {
        //Limpiar Las Cadenas de textos que nos llegan por post
        $nombre=mainModel::limpiar_cadena(  $_POST['usuario_nombre_new']);
        $usuario=mainModel::limpiar_cadena($_POST['usuario_usuario_new']);
        $clave=mainModel::limpiar_cadena($_POST['usuario_clave-new']);
        $perfil=mainModel::limpiar_cadena($_POST['usuario_perfil_new']);
        $foto=mainModel::subir_imagen_modelo($_FILES['usuario_foto_new']);

        //Comprobar que no hay campos vacios
        if($nombre=="" || $usuario=="" || $clave=="" || $foto=="" || $perfil==""){
            $alerta=[
                "Alerta"=>"simple",
                 "Titulo"=>"Ocurrió un error inesperado",
                 "Texto"=> "No has llenado todos los campos requeridos",
                 "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }

        


        


    
    }
}