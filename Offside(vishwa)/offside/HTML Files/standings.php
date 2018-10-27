<?php
	if(isset($_GET['league_name']))
	{
		$lname=$_GET['league_name'];
		if($lname=='premier league')
		{
			$uri = 'http://api.football-data.org/v2/competitions/2021/standings';
		}
		elseif($lname=='la-liga')
		{
			$uri = 'http://api.football-data.org/v2/competitions/2014/standings';
		}
		elseif ($lname=='bundesliga') {
			# code...
			$uri = 'http://api.football-data.org/v2/competitions/2002/standings';
		}
		elseif($lname=='serie a')
		{
			$uri = 'http://api.football-data.org/v2/competitions/2019/standings';
		}
		else
		{
			$uri = 'http://api.football-data.org/v2/competitions/2015/standings';
		}
		$reqPrefs['http']['method'] = 'GET';
		$reqPrefs['http']['header'] = 'X-Auth-Token: 9fc4e444434c487db0748b4e118a3930';
		$stream_context = stream_context_create($reqPrefs);
		$response = file_get_contents($uri, false, $stream_context);
		$matches = json_decode($response,true);
		?>
		<!DOCTYPE html>
			<html>
			<head>
			<link rel="stylesheet" type="text/css" href="../CSS Files/style_home_nav_table.css">
			<title>GHGFGRFDGFS</title>
			</head>
			<body >

				<div id="points_table">
					<table>
							<h1 class="ptable">POINTS TABLE</h1>
								<tr>
									<th>Position</th>
									<th>TeamName</th>
									<th>Points</th>
									<th>GA(Goals Against)</th>
									<th>GD(Goals Difference)</th>
								</tr>
								<?php
														
									for($i=0;$i<sizeof($matches['standings'][0]['table']);$i++)
									{
										echo"<tr>";
										echo"<td>";
										print_r($matches['standings'][0]['table'][$i]["position"]);
										echo "</td>";
										echo"<td>";
										print_r($matches['standings'][0]['table'][$i]["team"]["name"]);
										echo"<td>";
										print_r($matches['standings'][0]['table'][$i]["points"]);
										echo"<td>";
										print_r($matches['standings'][0]['table'][$i]["goalsAgainst"]);
										echo"</td>";
										echo"<td>";
										print_r($matches['standings'][0]['table'][$i]["goalDifference"]);
										echo"</td>";
										echo "</tr>";
									}

								?>
							</table>
					</div>
			</body>
			</html>
								
?>
	
<?php}else{?>
<!DOCTYPE html>
<html>
<head>
	<title>Error 404</title>
</head>
<body>
	<h1>404. Object not found.</h1><br><hr>
	League name not correct.
</body>
</html>

<?php } ?>
	
