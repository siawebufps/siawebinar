<?php
// bootstrap.php
// Include Composer Autoload (relative to project root).
$curr_dir = dirname(__FILE__);
require_once $curr_dir . "/../vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array($curr_dir . "/../config/yml");
$isDevMode = false;

require_once dirname(__FILE__) . '/../models/settings.php';

$connectionOptions = array(
    'driver'   => 'pdo_mysql',
    'host'     => db_host,
    'port'     => db_port,
    'user'     => db_user,
    'password' => db_pass,
    'dbname'   => db_name,
    'charset'  => db_char,
    'mapping_types'   => array ('enum' => 'string') 
);

$config = Setup::createYAMLMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($connectionOptions, $config);

$platform = $entityManager->getConnection()->getDatabasePlatform();
//ojo aqui: al no existir enum como un tipo de dato en doctrine, lo enlazamos a mano
$platform->registerDoctrineTypeMapping('enum', 'string');

?>