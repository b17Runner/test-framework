<?php

require_once dirname(__DIR__).'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();
$routes = include dirname(__DIR__).'/routes.php';
$container = include dirname(__DIR__).'/container.php';

$response = $container->get('framework')->handle($request);
$response->send();
