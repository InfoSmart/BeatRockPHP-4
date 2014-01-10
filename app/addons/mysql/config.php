<?
/**
 * Configuración para la conexión a MySQL, SQLite, etc...
 *
 * @param string $charset 	Codificación de letras para la conexión.
 * @param string $host 		Dirección para la conexión al servidor. ( En caso de SQLITE: La dirección donde esta la DB )
 * @param string $user 		Nombre de usuario
 * @param string $pass 		Contraseña
 * @param string $name 		Nombre de la base de datos
 * @param integer $port 	Puerto a usar para la conexión.
 */
Config::SetArray('sql', [
	
	'charset' 	=> 'utf8',

	'host' 		=> '127.0.0.1',
	'user' 		=> 'root',
	'pass' 		=> 'XyoInfo',
	'name' 		=> 'beat4',

	'port' 		=> 3306,
	
]);