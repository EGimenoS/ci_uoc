<h1><?php echo $new['titulo']; ?></h1>
<h3> <small class="noticia-date">Creado en: <?php echo $new['fecha']; ?> </small> por: <?php echo $new['autor']; ?></h3>

<img src="<?php echo base_url(); ?><?php echo $new['imagen']; ?> " alt="<?php echo $new['titulo']; ?>" />
<p><?php echo $new['contenido']; ?></p>