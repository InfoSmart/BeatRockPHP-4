<?
# Acción ilegal.
if ( !class_exists('Bit', false) )
	return;

Lang::Add([

	'boot.start' 				=> '[BIT] BeatRock ha comenzado',
	'boot.warn.mysql.user'		=> '[BIT] ¡El nombre de usuario para la conexión al servidor MySQL es root o admin! Recomendamos establecer un nombre de usuario más seguro.',
	'boot.tip.mysql.host' 		=> '[BIT] El Host para la conexión al servidor MySQL es localhost, puede ser más eficiente y rápido usar la dirección IP real (o 127.0.0.1).',
	'boot.warn.hash' 			=> '[BIT] La llave de seguridad ( Hash ) no se ha establecido. Esta llave proporciona un nivel de encriptación personalizado y más díficil de desencriptar.',
	'boot.presetup' 			=> '[BIT] El archivo de configuración ha sido cargado y aplicado.',
	'boot.using.zlib' 			=> '[BIT] La compresión GZIP no es soportada por el servidor y se activo la compresión ZLIB en su lugar.',
	'boot.using.gzip' 			=> '[BIT] La compresión GZIP ha sido activada.',
	'boot.restore.config' 		=> '[BIT] ¡El archivo de configuración se ha restaurado! Al parecer había sido eliminado.',
	'boot.finish' 				=> 'BeatRock tardo %.6fs en ejecutarse con un uso de %s MB de Memoria.',

	'assets.load.link'			=> '[ASSETS] El archivo "%s" se cargará como un <link>',
	'assets.load.script'		=> '[ASSETS] El archivo "%s" se cargará como un JavaScript',

	'headers.crossdomain' 		=> '[HEADERS] La página "%s" ha ajustado que la dirección "%s" puede acceder a ella (Crossdomain).',
	'headers.as.download' 		=> '[HEADERS] La página "%s" ha sido manipulado como una descarga hacia el archivo: %s',

	'dl.exist' 					=> 'La función dl() no existe en esta distribución de PHP, se intento cargar la librería: %s',
	'memcache.connected' 		=> '[MEMCACHE] Se ha establecido la conexión con Memcache en %s:%s',
	'memcache.fail.connect' 	=> '[MEMCACHE] No se ha podido establecer conexión con el servidor de Memcache en: %s:%s',

	'addons.loaded' 			=> '[ADDONS] Se han cargado %s addon(s)',
	'addons.load.file' 			=> '[ADDONS] Se ha cargado el archivo: %s',

	'mysql.connected' 			=> '[MYSQL] Se ha establecido la conexión con el servidor MySQL en %s:%s',
	'mysql.query' 				=> '[MYSQL] Ejecución de consulta: %s en %.6fs'

]);