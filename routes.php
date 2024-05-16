<?php

$router->get('/', 'controllers/index.php');
$router->get('/inschrijf', 'controllers/inschrijf.php');
$router->get('/about', 'controllers/opleiding.php');
$router->get('/contact', 'controllers/contact.php');

$router->post('/inschrijf', 'controllers/create.php');
$router->get('/confirmation', 'controllers/confirmation.php');


