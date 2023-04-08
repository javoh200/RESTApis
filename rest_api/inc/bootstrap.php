<?php
define("PROJECT_ROOT_PATH", __DIR__ . "/../");
// включить основной файл конфигурации
require_once PROJECT_ROOT_PATH . "/inc/config.php";
// включить файл базового контроллера 
require_once PROJECT_ROOT_PATH . "/Controller/Api/BaseController.php";
// включить файл модели использования
require_once PROJECT_ROOT_PATH . "/Model/UserModel.php";
?>