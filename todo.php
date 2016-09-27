<?php
/**
 * Created by PhpStorm.
 * User: ivangarciafernandez
 //Copia index.php
 */
require_once "modelo.php";
$entradas = devolver_entradas();
require 'Vista/lista.php';
?>