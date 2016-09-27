<?php
/**
 * Created by PhpStorm.
 * User: ivangarciafernandez
 * detalle.php
 */

require_once 'modelo.php';
$entrada = devolver_entrada_id($_GET['id']);
require 'Vista/show.php';
?>