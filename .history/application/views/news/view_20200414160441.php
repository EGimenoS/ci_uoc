<h1><?php echo $new['titulo']; ?></h1>
<h3> <small class="noticia-date">Creado en: <?php echo $new['fecha']; ?> </small> por: <?php echo $new['autor']; ?></h3>

<?php foreach ($categories as $category) : ?>
  <span class="badge badge-pill badge-success mr-2"><?php echo $category['nombre']; ?></span>
<?php endforeach; ?>

<div><img src="<?php echo base_url(); ?>/assets/images/<?php echo $new['imagen']; ?> " alt="<?php echo $new['titulo']; ?>" /></div>
<p><?php echo $new['contenido']; ?></p>