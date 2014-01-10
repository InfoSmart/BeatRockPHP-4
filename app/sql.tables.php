<?
# Acción ilegal.
if ( !class_exists('Bit', false) )
	exit;

DB::SetTable([
    'config' 	=> 'app_config',
    'tools' 	=> 'tools'
]);