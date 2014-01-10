<?
/**
 * Configuración para la conexión a un servidor de base de datos.
 * Esto es solo la base, necesita instalar el addon correspondiente para usar una base de datos.
 *
 * @param string $driver 			Tipo de driver a utilizar para la conexión. ( mysql, sqlite, none ) - none: No usar SQL
 * @param string prefix 			Prefijo de las tablas.
 * @param boolean repair 			¿Reparar las tablas al iniciar?
 * @param boolean repair.on.error 	¿Reparar las tablas cuando ocurra un error?
 */
$config['sql'] = [

	'driver' 	=> 'mysql',
	'prefix' 	=> '',

	'repair' 			=> false,
	'repair.on.error' 	=> true

];

/**
 * Configuración de la aplicación.
 *
 * @param boolean $development 	¿Aplicación en estado de desarrollo? ( La constante DEVELOPMENT se definirá como el valor indicado )
 * @param string $timezone 		Zona horaria predeterminada para la aplicación.
 * @param string $path 			Dirección ( Sin http:// al comenzar ni / al final ) donde se podrá acceder al sitio.
 * @param string $admin 		Dirección donde se encuentra la administración.
 * @param string $assets 		' los recursos para la aplicación.
 * @param string $assets.global ' recursos para todas las aplicaciones.
 * @param string $css 			Nombre de la carpeta que contiene los archivos CSS.
 * @param string $images 		' de Imagenes
 * @param string $js 			' los archivos JavaScript
 * @param string $third 		' archivos de terceros. ( jQuery, etc )
 */
$config['app'] = [

	'development' 	=> true,
	'timezone' 		=> 'America/Mexico_City',

	'path' 			=> '127.0.0.1/beatrock4',
	'admin' 		=> '127.0.0.1/beatrock4/admin',

	'css' 			=> 'css',
	'images' 		=> 'images',
	'js' 			=> 'js',
];

/**
 * Direcciones de carga de recursos.
 *
 * Puede agregar más y usarlas con las funciones de "Assets"
 */
$config['assets'] = [

	'main'		=> '//127.0.0.1/beatrock4/assets',
	'global' 	=> '//127.0.0.1/assets/global',

	'js.libs' 		=> '//ajax.googleapis.com/ajax/libs/',
	'js.libs.alt'	=> '//cdn.jsdelivr.net/'
];

/**
 * Seguridad
 *
 * @param boolean $secure.mode 		¿Activar modo seguro? (Filtro de todos los inputs, eliminación de información delicada, etc)
 * @param integer $encrypt.level 	Nivel de encriptación predeterminado para la función Secure::Encrypt
 * @param string  $hash 			Hash para la encriptación.
 */
$config['security'] = [

	'secure.mode' 	=> false,
	'encrypt.level' => 4,
	'hash' 			=> 'asdasd'

];

/**
 * Errores
 *
 * @param boolean 	$show 			¿Mostrar en pantalla los errores que ocurran?
 * @param mixed 	$email.reports 	Email o array de emails a donde enviar un reporte en caso de error.
 * @param integer 	$status 		Código de respuesta HTTP (http://es.wikipedia.org/wiki/Anexo:C%C3%B3digos_de_estado_HTTP)
 */
$config['errors'] = [

	'show' 				=> true,
	'emails.reports' 	=> 'kolesias17@gmail.com',
	'status' 			=> 503
];

/**
 * Logs
 *
 * @param boolean 	$capture 	¿Capturar los logs?
 * @param mixed 	$save 		¿Que logs se guardaran?
 * - all: Todos
 * - 1: Informativos
 * - 2: Alertas
 * - 3: Errores
 * - on.error: Solo en caso de que ocurra un error.
 * - none/false: Ninguno
 */
$config['logs'] = [
	
	'capture' 	=> true,
	'save' 		=> 'all'
];

/**
 * Configuración interna.
 *
 * @param boolean $gzip 			¿Usar compresión GZIP?
 * @param boolean $detect.host  	¿Detectar el host del visitante?
 * @param boolean $detect.timezone 	¿Detectar zona horaria del visitante?
 * @param integer $use.ssl 			¿Oblugar acceso mediante HTTPS? (0 = No, 1 = Si, 3 = Los dos)
 * @param boolean $smart.backup 	¿Usar el sistema de recuperación inteligente?
 */
$config['server'] = [

	'gzip' 				=> false,
	'detect.host' 		=> true,
	'detect.timezone' 	=> true,

	'use.ssl' 			=> 0,
	'smart.backup' 		=> true
];

/**
 * Configuración para BeatRock
 *
 * @param string $mime.types 	Archivo para usarse en la función IO::Mimetype()
 * @param array  $helpers.load  Rutas donde buscar la carga de ayudantes.
 */
$config['beat'] = [

	'mime.types' 		=> 'http://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types',
	'helpers.load' 		=> [ 
		PATH('App') . 'helpers',
		PATH('Kernel') . 'helpers',
		PATH('Controllers')
	]
];