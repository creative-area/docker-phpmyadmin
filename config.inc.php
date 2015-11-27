<?php
include 'config.sample.inc.php';

$server_host = (!empty($_ENV['MYSQL_SERVER_HOST'])) ? $_ENV['MYSQL_SERVER_HOST'] : 'mysql';

$cfg['Servers'][1]['host'] = $server_host;
$file_with_secret = 'config.inc.secret.php';

if (!file_exists($file_with_secret)) {
	$secret = hash('sha512', openssl_random_pseudo_bytes(1000));
	file_put_contents(
		$file_with_secret,
		"<?php \$cfg['blowfish_secret'] = '$secret';"
	);
}

include $file_with_secret;
