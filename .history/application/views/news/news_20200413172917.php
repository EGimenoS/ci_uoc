<h2 class="mt-4"><?= $title ?></h2>
<?php foreach ($news as $new) : ?>
  <h3><?php echo $new['titulo']; ?></h3>
  <small>Creado en: <?php echo $new['fecha']; ?></small>
  <? php echo $new['contenido']; ?>
<?php endforeach; ?>