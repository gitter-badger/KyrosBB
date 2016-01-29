<?php
  class Template {
    var $vars = array();
    function __get($name) {
      return $this->vars[$name];
    }
    function __set($name, $value) {
      $this->vars[$name] = $value;
    }
    function render($file) {
      extract($this->vars);
      ob_start();
      include($file);
      return ob_get_clean();
    }
  }
?>