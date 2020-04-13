<h2 class="mt-4"><?= $title ?></h2>
<?php foreach ($news as $new) : ?>
  <div class="noticia mt-3">
    <h3 class="mb-2"><?php echo $new['titulo']; ?></h3>
    <small class="noticia-date">Creado en: <?php echo $new['fecha']; ?> por: <?php echo $new['autor']; ?></small>
    <p class="mt-2"><?php echo $new['contenido']; ?></p>
  </div>
  <p><a class="btn btn-default" href="<?php echo site_url('/posts/' . $post['slug']); ?>">Read More</a></p>
<?php endforeach; ?>