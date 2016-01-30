<?php
  $html = new Template;
  $html->message = "Requested module ({$act}) doesn't exist.";
  $page = $html->render("{$config->theme_dir}error_404.php");
?>