

<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array("src");
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driver' => 'pdo_sqlite',
    'path' => 'sqlite.db'
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

