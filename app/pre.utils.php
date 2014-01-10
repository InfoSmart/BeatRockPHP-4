<?
# Tipos de validaciones para usarse en
# Utils::IsValid(valor, tipo);
Utils::AddRegexValidation([
    'email' 		=> '^[^0-9][a-zA-Z0-9_-]+([.][a-zA-Z0-9_-]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,48}$/', # ¡Importante! Es usado por algunas otras funciones.
    'username' 		=> '^[a-z\d_.]{5,32}$/i',
    'ip' 			=> '^(([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5]).){3}([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/',
    'credit.card'	=> '^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6011[0-9]{12}|3(?:0[0-5]|[68][0-9])[0-9]{11}|3[47][0-9]{13})$/',
    'url' 			=> '^(http|https):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i',
    'password' 		=> '^[a-z+0-9]/i',
    'subdomain' 	=> '^[a-z]{3,10}$/i',
    'domain' 		=> '^([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i'
]);