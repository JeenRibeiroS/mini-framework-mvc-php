<?php 

require_once __DIR__ . '/../vendor/autoload.php';
require_once ('../app/functions/functions.php');

use app\controller\TesteController;
new \app\core\RouterCore();
$controller = new TesteController();

dd($controller->seta());