<?php
	$uri = 'http://api.football-data.org/v2/teams/65/matches?status=SCHEDULED';
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token:9fc4e444434c487db0748b4e118a3930';
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);
    $matches = json_decode($response,true);
    for($i=0;$i<sizeof($matches['matches']);$i++)
    {
    	print_r($matches['matches'][$i]['competition']['name']);
    }
?>
<?php
    $uri = 'http://api.football-data.org/v2/teams/65';
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token:9fc4e444434c487db0748b4e118a3930';
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);
    $tlalogo = json_decode($response,true);
    $shortname=$tlalogo['tla'];
    $logo=$tlalogo['crestUrl'];
    print_r($tlalogo);
    print($shortname);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php
 		echo "$logo";
 		echo "<img src=$logo alt='homecrest' width='7%' height='7%'></img>";
 	?>
 </body>
 </html>
