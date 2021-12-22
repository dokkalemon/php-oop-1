<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Import data -->
<?php
    require_once __DIR__ . '/data/database.php';
?>

<h2 class="title-film"><?php echo $matrix->title ?></h2>
<ul>
    <li>Regista: <?php echo $matrix->director ?></li>
    <li>Genere: <?php echo $matrix->genre ?></li>
    <li>Description: <?php echo $matrix->reduceDescrition() ?> <a href="">Leggi di più</a></li>
    <li>Cast Principale: <?php echo $matrix->cast ?></li>
    <li>Voto: <?php echo $matrix->vote ?></li>
    <img width="300" src="<?php echo $matrix->thumbnail ?>" alt="">
</ul>

<h2 class="title-film"><?php echo $pirates->title ?></h2>
<ul>
    <li>Regista: <?php echo $pirates->director ?></li>
    <li>Genere: <?php echo $pirates->genre ?></li>
    <li>Description: <?php echo $pirates->reduceDescrition() ?> <a href="">Leggi di più</a></li>
    <li>Cast Principale: <?php echo $pirates->cast ?></li>
    <li>Voto: <?php echo $pirates->vote ?></li>
    <img width="300" src="<?php echo $pirates->thumbnail ?>" alt="">
</ul>

<h2 class="title-film"><?php echo $harry->title ?></h2>
<ul>
    <li>Regista: <?php echo $harry->director ?></li>
    <li>Genere: <?php echo $harry->genre ?></li>
    <li>Description: <?php echo $harry->reduceDescrition() ?> <a href="">Leggi di più</a></li>
    <li>Cast Principale: <?php echo $harry->cast ?></li>
    <li>Voto: <?php echo $harry->vote ?></li>
    <img width="300" src="<?php echo $harry->thumbnail ?>" alt="">
</ul>

<h2 class="title-film"><?php echo $signore->title ?></h2>
<ul>
    <li>Regista: <?php echo $signore->director ?></li>
    <li>Genere: <?php echo $signore->genre ?></li>
    <li>Description: <?php echo $signore->reduceDescrition() ?> <a href="">Leggi di più</a></li>
    <li>Cast Principale: <?php echo $signore->cast ?></li>
    <li>Voto: <?php echo $signore->vote ?></li>
    <img width="300" src="<?php echo $signore->thumbnail ?>" alt="">
</ul>



    
</body>
</html>