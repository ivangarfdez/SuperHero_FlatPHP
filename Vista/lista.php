<?php $titulo = "Cosas que le pasan a los superheroes" ?>

<?php ob_start()?>

<h1>Cosas de superheroes</h1>


<ul>
    <?php foreach ($entradas as $entrada): ?>
    <li>
        <a href="/FlatPHP/detalle.php?id=<?= $entrada['id'] ?>">
            <?= $entrada['titulo'] ?>
            </a>
        </li>
    <?php endforeach ?>
    </ul>
<?php $contenido = ob_get_clean() ?>

<?php include 'plantilla.php'?>
