<h1>Hola como estas...<?php echo $nombre."<br>".$apellido?> <?= $apellido?> <?= $edad?></h1>

<!-- como redireccionar a otro archivo -->
<a href="<?php echo base_url();?>welcome/despedir">ir a despedir</a>
<a href="<?= base_url('');?>welcome/nombres">nombres</a>