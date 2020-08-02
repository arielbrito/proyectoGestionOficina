<?php
//Variables de la cadena de conexion
const SERVER= "localhost";
const DB="gestion";
const USER="root";
const PASS= "";
const PORT= 3308;

//Cadena de conexion a la base de datos
const SGBD= "mysql:host=".SERVER.";dbname=".DB.";port=".PORT;

const METHOD= "AES-256-CBC"; //Metodo de encriptacion.

const SECRET_KEY= '$GESTION@2020';

const SECRET_IV="01082020"; //ID SECRETO

