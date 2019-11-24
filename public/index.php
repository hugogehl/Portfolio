<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../src/routing.php';

// rooting twig
$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View/');
$twig = new Twig\Environment($loader);