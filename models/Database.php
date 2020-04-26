<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;

class Database
{
    public static function StartUp()
    {
        // bootstrap.php

		$curr_dir = dirname(__FILE__);
		require_once $curr_dir . "/../vendor/autoload.php";

		$paths = array($curr_dir . "/../config/yml");

		//$paths = "";
		$isDevMode = true;
		$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/models/entity"), $isDevMode);

		$driver = new AnnotationDriver(new AnnotationReader(), $paths);

		// registering noop annotation autoloader - allow all annotations by default
		AnnotationRegistry::registerLoader('class_exists');
		$config->setMetadataDriverImpl($driver);

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



		$config->setProxyDir(__DIR__ . '/Proxies');
		$config->setProxyNamespace('Proxies');





		//$config = Setup::createYAMLMetadataConfiguration($paths, $isDevMode);
		$entityManager = EntityManager::create($connectionOptions, $config);

		$platform = $entityManager->getConnection()->getDatabasePlatform();
		//ojo aqui: al no existir enum como un tipo de dato en doctrine, lo enlazamos a mano
		$platform->registerDoctrineTypeMapping('enum', 'string');

		return $entityManager;
    }
}