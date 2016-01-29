<?php
  class Config {
    var $vars = array();
    function __construct() {
      if(!file_exists("config.ini")) {
        die("Configuration file doesn't exist.");
      }
      $this->vars = unserialize(file_get_contents("config.ini"));
    }
    function __get($name) {
      return $this->vars[$name];
    }
    function __set($name, $value) {
      $this->vars[$name] = $value;
    }
    function save_config() {
      $fh = fopen("config.ini", "w") or die("Unable to open config.ini");
      $string = serialize($this->vars);
      fwrite($fh, $string);
      fclose($fh);
    }
  }
?>