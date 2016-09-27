<?php
/**
 * Created by PhpStorm.
 * User: ivangarciafernandez
 * modelo.php
 */

function abrir_db()
{
    $enlace=new PDO("mysql:host=localhost;dbname=blog",'root','ivanphp');

    return $enlace;

}

function cerrar_db(&$enlace)
{
    $enlace = null;
}

function devolver_entradas()
{
    $enlace = abrir_db();

    $resultado = $enlace->query("SELECT id,titulo,descripcion FROM entradas");

    $entradas = array();
    while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
        $entradas[] = $fila;
    }

    cerrar_db($enlace);

    return $entradas;
}

function devolver_entrada_id($id)
{
    $enlace=abrir_db();

//Devolvemos la info.

    $consulta= "SELECT titulo,descripcion FROM entradas WHERE id=:id;";
    $statement=$enlace->prepare($consulta);
    $statement->bindValue(':id',$id,PDO::PARAM_INT);
    $statement->execute();

   /* $sql = "SELECT titulo,descripcion FROM entradas WHERE id=:id";
    $statement= $music->prepare($sql);
    $statement->execute(array(':name'=> $name,':pwd'=>$pwd));
    $music =  $statement->fetch();
    */
    $fila=$statement->fetch(PDO::FETCH_ASSOC);

    cerrar_db($enlace);

    return $fila;
}
?>