<?php
//comenzar sesion 
session_start();

//archivo config
require_once 'config.php';

//incluir helpers
require_once 'helpers/system_helper.php';

//auto cargador
function __autoload($class_name){
  require_once 'lib/'.$class_name. '.php';
}
