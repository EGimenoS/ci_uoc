<h2 class="mt-4"><?= $title ?></h2>
<?php foreach ($news as $new) : ?>
  <div class="noticia">
    <h3><?php echo $new['titulo']; ?></h3>
    <small>Creado en: <?php echo $new['fecha']; ?></small>
    <?php echo $new['contenido']; ?>
  </div>

<?php endforeach; ?>