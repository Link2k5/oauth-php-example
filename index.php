<?php

use League\OAuth2\Client\Provider\GenericProvider;

require_once __DIR__ . '/bootstrap.php';

// Criando o provider
$provider = new GenericProvider([
    'clientId' => getenv('CLIENT_ID'),
    'clientSecret' => getenv('CLIENT_SECRET'),
    'urlAccessToken' => getenv('URL_ACCESS_TOKEN'),
    'urlResourceOwnerDetails' => '',
    'urlAuthorize' => ''
]);

$accessToken = $provider->getAccessToken('client_credentials');

echo 'Token: ' . $accessToken->getToken() . '<br>'; 
echo 'Refresh Token: ' . $accessToken->getRefreshToken() . '<br>';
echo 'Expira em: ' . $accessToken->getExpires() . '<br>';
