<?php

$router = new AltoRouter();
$router->setBasePath(APP_NAME);

$router->map('GET', '/', array('c' => 'ControleurHome', 'a' => 'actionIndex'), 'home_index');


