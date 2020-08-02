<?php
require_once './models/viewsModel.php';
/* Controlador para renderizar las vistas */

class viewsController extends viewsModels{
    //Metodo para obtener plantilla y renderizarla
    public function get_plantilla_controlador(){
        return require_once './views/plantilla.php';
    }//final get_plantilla

     //Metodo para obtener vistas
    public function get_views_controller(){
        if(isset($_GET['views'])){
            $ruta=explode("/",$_GET['views']);
            $respuesta= viewsModels::get_views_model($ruta[0]);
        }else{
            $respuesta="login";
        }
        return $respuesta;
    }//final de metodo obtener vistas

}