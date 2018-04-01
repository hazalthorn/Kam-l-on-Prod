    <?php
    require('control-session.php');
    ?>
     
    <!-- ici le reste de la page ... HTML ou PHP ... -->

<div class="cadredumenudroite">
<h1>Navigation</h1>
 
<ul>
  <li><a class="menu" title="Administration" href="admin.php">Administration</a></li>
  <li><a class="menu" title="Ajouter une cat&eacute;gorie" href="ajouter-categorie.php">
Ajouter une cat&eacute;gorie</a></li>
  <li><a class="menu" title="Ajouter une page" href="ajouter-page.php">Ajouter une page
</a></li>
  <li><!--<a class="menu" title="Sortir" href="http://<?php echo $_SERVER['HTTP_HOST'];?>">
Sortir de l'admin.</a> --> <a href="../index.php"> Sortir de l'admin</a></li>
</ul>
 
</div>