<?
require 'init.php';

# Sin código de error.
if ( empty($G['code']) )
{
	http_response_code(404);
	exit;
}

echo View::Make('/responses/' . $G['code'] . '.html')->Build();