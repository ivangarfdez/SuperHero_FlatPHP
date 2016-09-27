<?php
/**
 * Created by PhpStorm.
 * User: ivangarciafernandez
 * index.php
 */

if (isset( $_GET['id'] ) && !empty( $_GET['id'] ) )
 {
    require_once 'detalle.php';
}else{
    require_once 'todo.php';
}
?>