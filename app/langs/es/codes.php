<?
# Acción ilegal.
if ( !class_exists('Bit', false) )
	return;

Lang::Add([

	'boot.fail.load.config' 	=> 'No ha sido posible cargar el archivo de configuración, puede estar dañado, protegido o no existe.',
	'boot.mysql.config' 		=> 'Los campos para la conexión al servidor MySQL son incorrectos o no se han definido.',
	'boot.sqlite.name' 			=> 'La base de datos para SQLite es inválido o no existe.',

	'view.fail.load' 			=> 'No ha sido posible cargar la vista.',

	'lang.load' 				=> 'No ha sido posible cargar el lenguaje: "%s"',

	'assets.third.load' 		=> 'No ha sido posible cargar la librería de terceros: %s - Se contruyo la siguiente ruta: %s',

	'memcache.connect' 			=> 'No ha sido posible establecer conexión con el servidor Memcache',

	'sql.driver.invalid' 		=> 'El driver %s no es válido.',
	'mysql.connect' 			=> 'Ha ocurrido el siguiente error al intentar conectarse con el servidor MySQL: <strong>%s</strong>',
	'mysql.select.db' 			=> 'Ha ocurrido el siguiente error al intentar seleccionar la base de datos "%s": <strong>%s</strong>',
	'mysql.query' 				=> 'Error al ejecutar la consulta: %s ( %s )'

]);