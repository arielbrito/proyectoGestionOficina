<?php
/*Mode de las vistas
  En este modelo creamos una plantilla para manejar las vistas del proyecto
*/

class viewsModels{

    //Metodo para renderizar las vistas 

    protected static function get_views_model($vista){
        $listaBlanca= [
            "home", "usuario"

        ];

        if(in_array($vista, $listaBlanca)){
            if(is_file("./views/contents/".$vista."-view.php")){
                $contenido="./views/contents/".$vista."-view.php";
            }else{
                $contenido="404";
            }
        }elseif($vista=="login" || $vista=="index"){
            $contenido="login";
        }else{
            $contenido="404";
        }
        return $contenido;
    }//final metodo get_views

}