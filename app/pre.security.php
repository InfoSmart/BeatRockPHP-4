<?
# MD5
# Solo esta aquí por compatibilidad, no debe ser usado...
Secure::OnEncrypt(1, function($str, $hash)
{
	return md5($str . $hash);
});

# SHA1
# Algo más seguro pero no tanto.
Secure::OnEncrypt(2, function($str, $hash)
{
	# SHA1
	return sha1($str . $hash);
});

# SHA256 con SHA1
# Aquí hablamos de seguridad, aunque genera cadenas muy largas.
Secure::OnEncrypt(3, function($str, $hash)
{
	$s = hash_init('sha256', HASH_HMAC, $hash);
	hash_update($s, sha1($str));
	hash_update($s, $hash);

	return hash_final($s);
});

# SHA256 con SHA1 y MD5
# Seguridad al tope con una cadena pequeña.
Secure::OnEncrypt(4, function($str, $hash)
{
	$s = hash_init('sha256', HASH_HMAC, $hash);
	hash_update($s, sha1($str));
	hash_update($s, $hash);

	$str = hash_final($s);
	return md5($hash . $str);
});

# Codificación reversible.
# Solo usarse en información algo delicada que deba ser leible.
Secure::OnEncrypt(5, function($str, $hash)
{
	$result = '';

	for ( $i = 0; $i < strlen($str); ++$i )
	{
		$char 		= substr($str, $i, 1);
		$keychar 	= substr($hash, ( $i % strlen($hash) )-1, 1);
		$char 		= chr( ord($char) + ord($keychar) );

		$result 	.= $char;
	}

	return base64_encode($result);

});

# Codificación reversible
# Función para descodificar una cadena con el nivel 5 de codificación.
Secure::OnDecrypt(5, function($str, $hash)
{
	$result = '';
	$str 	= base64_decode($str);

	for ( $i = 0; $i < strlen($str); ++$i )
	{
		$char 		= substr($str, $i, 1);
		$keychar	= substr($hash, ( $i % strlen($hash) )-1, 1);
		$char 		= chr( ord($char) - ord($keychar) );

		$result 	.= $char;
	}

	return $result;
});