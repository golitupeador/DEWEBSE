<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__."/App/Entidades");

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => 'higuera2@',
    'dbname'   => 'inventario',
);
// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
$entityManager = EntityManager::create($dbParams, $config);
$a=5;