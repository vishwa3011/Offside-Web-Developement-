<?php

$uri = 'http://api.football-data.org/v2/competitions/2015/teams';
$reqPrefs['http']['method'] = 'GET';
$reqPrefs['http']['header'] = 'X-Auth-Token: 9fc4e444434c487db0748b4e118a3930';
$stream_context = stream_context_create($reqPrefs);
$response = file_get_contents($uri, false, $stream_context);
echo $response;
$matches = json_decode($response,true);
?>