<?php
if($peticionAjax){
 require_once '../config/SERVER.php';
}else{
 require_once './config/SERVER.php';
}
/*************************************************************** 
***************** MODELO PRINCIPAL DEL SISTEMA*******************
*****************************************************************/

class mainModel{
    //METODO PARA CONECTAR A LA BASE DE DATOS
    protected static function conectar()
    {
        $conexion= new PDO(SGBD, USER, PASS);
        $conexion->exec("SET CHARACTER SET utf8");
        return $conexion;
    }//fin conectar


    //Metodo para ejecutar consulta simple
    protected static function ejecutar_consulta_simple($consulta)
    {
        $sql= self::conectar()->prepare($consulta);
        $sql->execute();
        return $sql;
    }//fin consulta simple

    //Metodo para encriptar 
    public function encryption($string)
     {
        $output=FALSE;
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_encrypt($string, METHOD, $key, 0, $iv);
        $output=base64_encode($output);
        return $output;
    }//fin encriptar

    //Metodo para desencriptar
    protected static function decryption($string)
    {
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
        return $output;
    }//Fin desencriptar

    //Metodo para generar un codigo aleatorio
    protected static function generar_codigo_aleatorio($letra, $longitud, $numero)
    {
        for ($i=1; $i <=$longitud ; $i++)
        { 
            $aleatorio=rand(0,9);
            $letra.=$aleatorio;            
        }

        return $letra."-".$numero;        
    }//fin aleatorio

  //Metodo para limpiar cadenas de texto
  protected static function limpiar_cadena($cadena)
     {
        $cadena=trim($cadena);//Eliminar espacios
        $cadena=stripslashes($cadena);//Eliminar las flechas invertidas
        $cadena=str_ireplace("<script>","",$cadena);//Eliminar etiquetas de javascript
        $cadena=str_ireplace("</script>","",$cadena);
        $cadena=str_ireplace("<script src","",$cadena);
        $cadena=str_ireplace("<script type=","",$cadena);
        $cadena=str_ireplace("SELECT * FROM","",$cadena);
        $cadena=str_ireplace("DELETE * FROM","",$cadena);
        $cadena=str_ireplace("INSERT INTO","",$cadena);
        $cadena=str_ireplace("DROP TABLE","",$cadena);
        $cadena=str_ireplace("DROP DATABASE","",$cadena);
        $cadena=str_ireplace("TRUNCATE TABLE","",$cadena);
        $cadena=str_ireplace("SHOW TABLES","",$cadena);
        $cadena=str_ireplace("SHOW DATABASES","",$cadena);
        $cadena=str_ireplace("<?php","",$cadena);
        $cadena=str_ireplace("?>","",$cadena);
        $cadena=str_ireplace("--","",$cadena);
        $cadena=str_ireplace("<","",$cadena);
        $cadena=str_ireplace(">","",$cadena);
        $cadena=str_ireplace("[","",$cadena);
        $cadena=str_ireplace("]","",$cadena);
        $cadena=str_ireplace("^","",$cadena);
        $cadena=str_ireplace("==","",$cadena);
        $cadena=str_ireplace(";","",$cadena);
        $cadena=str_ireplace("::","",$cadena);
        $cadena=stripslashes($cadena);//Eliminar las flechas invertidas
        $cadena=trim($cadena);//Eliminar espacios
        return $cadena;
     }//fin limpiar cadenas

     //Metodo para validar campo
     protected static function validar_campo($filtro, $cadena)
     {
         if(preg_match("/^".$filtro."$/",$cadena))
         {
             return false;
         }else{
             return true;
         }
     }//fin validar campo

     //Metodo para validar fecha
     protected static function validar_fecha($fecha)
     {
         $valores=explode("-", $fecha);
         if(count($valores)==3 && checkdate($valores[1], $valores[2],$valores[0]))
         {
             return false;
         }else{
             return true;
         }
     }//fin validar fecha





}