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
    




}