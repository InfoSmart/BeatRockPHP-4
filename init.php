<?
/**
 * BitYey
 *
 * Framework para el desarrollo de aplicaciones web.
 *
 * @author 		Iván Bravo <ivan-bravo@infosmart.mx> @Kolesias123
 * @copyright 	InfoSmart. Todos los derechos reservados.
 * @license 	http://creativecommons.org/licenses/by-sa/2.5/mx/  Creative Commons "Atribución-Licenciamiento Recíproco"
 * @link 		http://bityey.infosmart.mx/
 * @version 	1
 *
 * @package 	Init
 * Preparación del Kernel, encargado de iniciar y administrar
 * los procesos, módulos y controladores del sistema.
 *
*/

########################################
## Definimos las rutas.
########################################

# Ruta de la aplicación.
define('DS', 	DIRECTORY_SEPARATOR);
define('ROOT', 	dirname(__FILE__) . DS);

$PATHS = [];

# Rutas por donde buscar el Kernel
$paths4Kernel = [
    ROOT,
    dirname(ROOT),
    dirname( dirname(ROOT) )
];

# Buscamos en cada ruta.
foreach ( $paths4Kernel as $path )
{
	if ( is_dir($path . DS . 'kernel') )
	{
		$PATHS['Kernel'] = $path . DS . 'kernel' . DS;
		break;
	}
}

# Definimos las rutas.
# @TODO: ¿Algo mejor a esto?
$PATHS['KernelHelpers'] = $PATHS['Kernel'] . 'helpers' . DS;

########################################
## Iniciamos a BitRock
########################################

require $PATHS['KernelHelpers'] . 'Bit.php';