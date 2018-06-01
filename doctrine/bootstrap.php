<?php
require_once "vendor/autoload.php";
 
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
 
$classes = array("mapeamento/");
$isDevMode = true;
 
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => 'root',
    'dbname'   => 'cinema',
);

$conf = Setup::createAnnotationMetadataConfiguration($classes, $isDevMode);
$entityManager = EntityManager::create($dbParams, $conf);
?>