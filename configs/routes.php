<?php

$router = new AltoRouter();
$router->setBasePath(APP_NAME);

$router->map('GET', '/', array('c' => 'ControleurHome', 'a' => 'actionIndex'), 'home_index');

$router->map('GET', '/products', array('c' => 'ControleurProduct', 'a' => 'actionIndex'), 'product_index');

$router->map('GET', '/customers', array('c' => 'ControleurCustomer', 'a' => 'actionIndex'), 'customer_index');

$router->map('GET', '/suppliers', array('c' => 'ControleurSupplier', 'a' => 'actionIndex'), 'supplier_index');

$router->map('GET', '/orders', array('c' => 'ControleurOrder', 'a' => 'actionIndex'), 'order_index');
