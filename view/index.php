<?php
$title = "Com'On Réal - Index";
ob_start();
?>
<a href ="?page=login" type="button" class="btn btn-primary btn-lg btn-block">Login</a>
<a href ="?page=register" type="button" class="btn btn-secondary btn-lg btn-block">Register</a>
<a href ="?page=admin" type="button" class="btn btn-secondary btn-lg btn-block">Admin</a>
<? $content = ob_get_clean();