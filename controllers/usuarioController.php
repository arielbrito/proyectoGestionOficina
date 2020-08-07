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
    }
}