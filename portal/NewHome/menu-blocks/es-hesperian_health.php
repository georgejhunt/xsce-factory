<!-- This is a rachel-index.php file. It is the file that RACHEL uses to
     display your module on the RACHEL front page. You should place this file
     in your module's directory. It's under 50 lines including comments, so
     just read it through and edit as needed for your module, leaving the PHP
     tags in place.
-->

<div class="indexmodule">

<!-- Search form - uncomment this section only if you set up search
     functionality. See the RACHEL search documentation for details.
-->
<!--
<form action="<?php echo $dir ?>/search/search.php">
<input name="query" id="<?php echo $moddir ?>_search">
<input type="submit" value="Search">
</form>
-->

<!-- Logo and link to your module's index.html - PHP will fill the path to your
     module's directory, so just complete the path from there. To support
     filesystem browsing, it is recommended that you include the full
     filename, even if it is "index.html", instead of relying on the server.
-->
<img src="<?php echo $dir ?>/logo.png" alt="">

<!-- Title and link to your module's index.html - same as above. -->
<h2>Gu&iacute;as de la Salud de Hesperian</h2>

<!-- Description of your module -->
<p>Informaci&oacute;n de alta calidad, pr&aacute;cticas, f&aacute;ciles de entender, confiables y que contienen una gran riqueza de ilustraciones sobre temas de salud. Referencias muy &uacute;tiles en zonas remotas donde el acceso a personal m&eacute;dico es limitado.</p>

<!-- Links to specific parts of your content - only required if it makes sense.
     Try to keep the list size reasonable (i.e. not too long). You can make
     multi-column lists by adding "double", "triple", or "quad" as the <ul>
     class. For example, <ul class="double"> will create a two-column list.
-->
<ul class="double">
<li><a href="<?php echo $dir ?>/donde_no_hay_doctor.pdf">Donde no hay doctor</a></li>
<li><a href="<?php echo $dir ?>/donde_no_hay_dentista.pdf">Donde no hay dentista</a></li>
<li><a href="<?php echo $dir ?>/agua_para_vivir.pdf">Agua para vivir</a></li>
<li><a href="<?php echo $dir ?>/apoyar_ninos_ciegos.pdf">Apoyar ninos ciegos</a></li>
<li><a href="<?php echo $dir ?>/apoyar_ninos_sordos.pdf">Apoyar ninos sordos</a></li>
<li><a href="<?php echo $dir ?>/saneamiento.pdf">Saneamiento y limpieza para un ambiente sano</a></li>
</ul>

<!-- And you're done! -->
</div>