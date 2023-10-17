<?php declare(strict_types=1);

require_once 'Uznemumu Registrs API/ApiFetcher.php';
require_once 'Uznemumu Registrs API/Application.php';
require_once 'Uznemumu Registrs API/CompanyPresenter.php';
require_once 'Uznemumu Registrs API/Menu.php';

$app = new Application();
$app->run();