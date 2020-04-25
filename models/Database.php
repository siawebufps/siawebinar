<?php
require_once 'models/config.ini.php';
class Database {

	public static function start() {
		$archivo = 'config.ini.php';
        $variables = parse_ini_file($archivo, true);
        $host = $variables['basedatos']['host'];
        $user = $variables['basedatos']['user'];
        $pass = $variables['basedatos']['pass'];
        $dbname = $variables['basedatos']['dbname'];
        $charset = $variables['basedatos']['charset'];
		$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $pass);
    	$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	return $pdo;
	}
}

?>