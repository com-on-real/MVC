<?php
$title = "Com'On Réal - Erreur";
ob_start();
?>
<h1>Erreur</h1>
<div class="alert alert-danger" role="alert">
 <?= $messageError ?>
</div>
<? $content = ob_get_clean();