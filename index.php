<?php
  /*
    Copyright 2016 Avestri Softworks (http://www.avestri.co)
  */
  include("inc/class.config.php");
  include("inc/class.template.php");
  $config = new Config;
  $db = new mysqli(
    $config->sql["hostname"],
    $config->sql["username"],
    $config->sql["password"],
    $config->sql["database"]
  );
  if($db->connect_error) {
    die($db->connect_error);
  }
  $config->theme_dir = "themes/{$config->theme}/";
  $wrapper = new Template;
  $wrapper->site_name = $config->site_name;
  $page = "";
  $wrapper->content = $page;
  echo $wrapper->render("{$config->theme_dir}wrapper.php");
?>
