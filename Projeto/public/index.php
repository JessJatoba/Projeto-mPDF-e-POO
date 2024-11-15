<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\ProdutoController;

$controller = new ProdutoController();
$controller->gerarRelatorio();
