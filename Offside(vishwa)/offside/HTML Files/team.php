<?php if(isset($_GET['team_id'])){ 


$conn=mysqli_connect('localhost','root','','offside');
$query = "Select * from teams where t_id=".$_GET['team_id'];
$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result)>0){ $row = mysqli_fetch_assoc($result);?>

		<!DOCTYPE html>
		<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<script type="text/javascript">
				function openmodal(id)
				{
					document.getElementById(id).style.display="flex";
				}
				function closeModal(id) {

					// body...
					document.getElementById(id).style.display="none";
				}
			</script>

			<?php
				function hteamdetails($id)
				{
					$uri = 'http://api.football-data.org/v2/teams/'.$id;
					$reqPrefs['http']['method'] = 'GET';
					$reqPrefs['http']['header'] = 'X-Auth-Token:2d45bc97becc4e018dfaeed4aa44c081';
					$stream_context = stream_context_create($reqPrefs);
					$response = file_get_contents($uri, false, $stream_context);
					$tlalogo = json_decode($response,true);
					return $tlalogo;
				}
				function ateamdetails($id)
				{
					$uri = 'http://api.football-data.org/v2/teams/'.$id;
					$reqPrefs['http']['method'] = 'GET';
					$reqPrefs['http']['header'] = 'X-Auth-Token:0e0a131adea24c77a2d4901ba2395dcb';
					$stream_context = stream_context_create($reqPrefs);
					$response = file_get_contents($uri, false, $stream_context);
					$tlalogo = json_decode($response,true);
					return $tlalogo;
				}

			?>
		    

			<link rel="stylesheet" type="text/css" href="../CSS Files/style_home_nav_table.css">
			<title><?php 
			$teamname=$row['t_name'];
			$apiid=$row['api_id'];
			echo $row['t_name']; ?></title>
		</head>
		<body id="clubs-body">

			<header>
				<div id="header-id">
				<div id="left-header">
					<img src="../IMAGES/oglogo.png" alt="Offside" width="50px" height="50px">
				</div>
				<nav>
					<ul id="ul1">
						<li class="hoverWrapper"><a href="pl.html">PREMIER LEAGUE</a>
	                       <div id="hoverShow1">
	                       	<table>
	                       		<?php
	                       			$query = "Select t_name, t_id from teams where l_name='premier league'";
	                       			$result=mysqli_query($conn,$query);
	                       			$row_count=mysqli_num_rows($result);

	                       			$count=2;
	                       			
	                       			while($row1=mysqli_fetch_assoc($result)){
	                       				$link = "http://localhost:8080/offside/offside/HTML%20Files/team.php?team_id=".$row1['t_id'];	
	                       				if($count>0)
	                       				{
	                       					echo '<td><a href="'.$link.'">'.$row1['t_name'].'</td>';
	                       					$count--;
	                       				}
	                       				else
	                       				{		
	                       					echo '<td><a href="'.$link.'">'.$row1['t_name'].'</td>';
	                       					echo "</tr>";
	                       					$count=2;
	                       					echo "<tr>";
	                       				}
	                       				
	                       			}
	                       			
	                       		?>
	               
	                       	</table>
	                       </div>
						</li>
						<li class="hoverWrapper2"><a href="laliga.html">LA LIGA</a>
							<div id="hoverShow2">
								<table>
									<?php
										$query="Select t_id,t_name from teams where l_name='la-liga'";
										$result=mysqli_query($conn,$query);
										while($row1=mysqli_fetch_assoc($result))
										{
											$link = "http://localhost:8080/offside/offside/HTML%20Files/team.php?team_id=".$row1['t_id'];	
	                       				
	                       					echo '<tr><td><a href="'.$link.'">'.$row1['t_name'].'</td></tr>';
	                       				
										}
									?>
								</table>
							</div>	
						</li>
						<li class="hoverWrapper3"><a href="bundesliga.html">BUNDESLIGA</a>
							<div id="hoverShow3">
								<table>
								<?php
									$query="Select t_id,t_name from teams where l_name='bundesliga'";
									$result=mysqli_query($conn,$query);
									while($row1=mysqli_fetch_assoc($result))
									{
										$link = "http://localhost:8080/offside/offside/HTML%20Files/team.php?team_id=".$row1['t_id'];	
	                       				
	                       				echo '<tr><td><a href="'.$link.'">'.$row1['t_name'].'</td></tr>';
	                       				
									}
								?> 
							</table>
							</div>	
						</li>
						<li class="hoverWrapper4"><a href="serie-a.html">SERIE A</a>
							<div id="hoverShow4">
								<table>
								<?php
									$query="Select t_id,t_name from teams where l_name='serie a'";
									$result=mysqli_query($conn,$query);
									while($row1=mysqli_fetch_assoc($result))
									{
										$link = "http://localhost:8080/offside/offside/HTML%20Files/team.php?team_id=".$row1['t_id'];	
	                       				
	                       				echo '<tr><td><a href="'.$link.'">'.$row1['t_name'].'</td></tr>';
	                       				
									}
								?>
							</table>
							</div>
						</li>
						<li class="hoverWrapper5"><a href="ligue-1.html">LIGUE 1</a>
							<div id="hoverShow5">
								<table>
								<?php
									$query="Select t_id,t_name from teams where l_name='ligue 1'";
									$result=mysqli_query($conn,$query);
									while($row1=mysqli_fetch_assoc($result))
									{
										$link = "http://localhost:8080/offside/offside/HTML%20Files/team.php?team_id=".$row1['t_id'];	
	                       				
	                       				echo '<tr><td><a href="'.$link.'">'.$row1['t_name'].'</td></tr>';
	                       				
									}
								?>
							</table>
							</div>
						</li>
						<li><a href="login.php">LOGIN</a></li>
						<li><a href="signup.php">SIGNUP</a></li>
					</ul>
				</nav>
			<div style="clear:both"></div>
		</header>
		<h1><?php echo $row['t_name'];?></h1><br><hr>
		<main>
			<?php
				$query="Select l_name from teams where t_id=".$_GET["team_id"].";";
				echo $query;
				$result=mysqli_query($conn,$query);
				
					while($row=mysqli_fetch_assoc($result))
					{
						$lname=$row['l_name'];
						echo $lname;
					}
				
			?>
			<aside>
				<div id="side-bar">
					<nav>
						<ul id="ul2">
						
							<li><a href="#" onclick="openmodal('id01')">STANDINGS</a></li>
							<li><a href="#" onclick="openmodal('id02')">FIXTURES</a></li>
							<li><a href="#" onclick="openmodal('id03')">RESULT</a></li>
							<li><a href="#">NEWS</a></li>
							<li><a href="#">TRANSFERS</a></li>
							
						
							
						</ul>
					</nav>
				</div>
				<div style="clear: right "></div>
			</aside>

			<section>
												echo "</td>";
												echo"<td>";
												print_r($matches['standings'][0]['table'][$i]["goalsAgainst"]);
												echo"</td>";
												echo"<td>";
												print_r($matches['standings'][0]['table'][$i]["goalDifference"]);
												echo"</td>";
												echo "</tr>";


											}
				<div id="id01">
								
								<div id=ptable>
									<span class="closeBtn" onclick="closeModal('id01')">&times;</span>
									<?php
									
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
									<table id="table1">
				
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
											$api_team_name=$matches['standings'][0]['table'][$i]["team"]["name"];
											$apteamname=strtolower($api_team_name);
											if(strpos($apteamname,$teamname)!==false)
											{
												echo"<tr style='background-color:black;color:white;' >";
												echo"<td>";
												
												print_r($matches['standings'][0]['table'][$i]["position"]);
												echo"</td>";

				0								echo"<td>";
												print_r($matches['standings'][0]['table'][$i]["team"]["name"]);
												echo"</td>";
												echo "<td>";
												print_r($matches['standings'][0]['table'][$i]["points"]);

											
										
											/*print_r($matches['standings'][0]['table'][$i]["team"]["name"]);
											echo"<td>";*/

											
											
											else
											{
												echo"<tr>";
												echo"<td>";
												print_r($matches['standings'][0]['table'][$i]["position"]);
												echo "</td>";
												echo "<td>";
												print_r($matches['standings'][0]['table'][$i]["team"]["name"]);
												echo "</td>";
												echo "<td>";
												print_r($matches['standings'][0]['table'][$i]["points"]);
												echo "</td>";
												echo"<td>";
												print_r($matches['standings'][0]['table'][$i]["goalsAgainst"]);
												echo"</td>";
												echo"<td>";
												print_r($matches['standings'][0]['table'][$i]["goalDifference"]);
												echo"</td>";
												echo "</tr>";
											}
											
										}
									?>
							</table>

								</div>
								
							</div>
				<div id="id02">
					<div id="fixtures">
						<span class="closeBtn" onclick="closeModal('id02')">&times;</span>
						<?php
							$uri = 'http://api.football-data.org/v2/teams/'.$apiid.'/matches?status=SCHEDULED&limit=10';
						    $reqPrefs['http']['method'] = 'GET'; 
						    $reqPrefs['http']['header'] = 'X-Auth-Token:9fc4e444434c487db0748b4e118a3930';
						    $stream_context = stream_context_create($reqPrefs);
						    $response = file_get_contents($uri, false, $stream_context);
						    $matches = json_decode($response,true);
						    echo"<table id='ftable'>";

						    for($i=0;$i<sizeof($matches['matches']);$i++)
						    {
						    	echo"<tr>";
						    	echo"<td>";
						    	
						    	$home=$matches['matches'][$i]['homeTeam']['id'];
								$tlalogo=hteamdetails($home);
								$shortname=$tlalogo['tla'];
								$logo=$tlalogo['crestUrl'];    	
							    echo "<img src=$logo alt='homecrest' width='10%' height='10%'></img>";
							    echo"<td>";
							    echo $matches['matches'][$i]['homeTeam']['name'];
							    echo"</td>";
						    	$away=$matches['matches'][$i]['awayTeam']['id'];
						    	$tlalogo=ateamdetails($away);
							    $shortname=$tlalogo['tla'];
							    $logo=$tlalogo['crestUrl'];
						    	echo"<td>";
						    	echo "<img src=$logo alt='homecrest' width='10%' height='10%'></img>";
							    echo"</td>";
							    echo"<td>";
							    echo $matches['matches'][$i]['awayTeam']['name'];
							    echo"</td>";
							    echo "<td>";
							   	$date_of_fixture=$matches['matches'][$i]['utcDate'];
							   	$date=substr($date_of_fixture,0,10);
							   	echo"$date";
							   	echo"</td>";
							   	echo "<td>";
							   	$time=substr($date_of_fixture,11);
							   	echo"$time";
							   	echo"</td>";
							    echo "</tr>";
						    	
						    }
						    echo "</table>";
						?>
					</div>
				</div>
			
			<div id="id03">
				<div id="RESULTS">
					<span class="closeBtn" onclick="closeModal('id03')">&times;</span>
					<?php
							$uri = 'http://api.football-data.org/v2/teams/'.$apiid.'/matches?status=FINISHED';
						    $reqPrefs['http']['method'] = 'GET'; 
						    $reqPrefs['http']['header'] = 'X-Auth-Token:e2fae907fb314818a2b60cc2682202f5';
						    $stream_context = stream_context_create($reqPrefs);
						    $response = file_get_contents($uri, false, $stream_context);
						    $matches = json_decode($response,true);
						    echo"<table id='ftable'>";

							    for($i=0;$i<sizeof($matches['matches']);$i++)
							    {
							    	echo"<tr>";
							    	echo"<td>";
							    	
							    	$home=$matches['matches'][$i]['homeTeam']['id'];
									$details=hteamdetails($home);
									$shortname=$details['tla'];
									$logo=$details['crestUrl'];    	
								    echo "<img src=$logo alt='homecrest' width='10%' height='10%'></img>";
								    echo"<td>";
								    echo $matches['matches'][$i]['homeTeam']['name'];
								    echo"</td>";
							    	$away=$matches['matches'][$i]['awayTeam']['id'];
							    	$details=ateamdetails($away);
								    $shortname=$details['tla'];
								    $logo=$details['crestUrl'];
							    	echo"<td>";
							    	echo "<img src=$logo alt='homecrest' width='10%' height='10%'></img>";
								    echo"</td>";
								    echo"<td>";
								    echo $matches['matches'][$i]['awayTeam']['name'];
								    echo"</td>";
								    echo "<td>";
								   	$date_of_fixture=$matches['matches'][$i]['utcDate'];
								   	$date=substr($date_of_fixture,0,10);
								   	echo"$date";
								   	echo"</td>";
								   	echo "<td>";
								   	$time=substr($date_of_fixture,11);
								   	echo"$time";
								   	echo"</td>";
								    echo "</tr>";
							  	  	
							    }
							    echo "</table>";
						?>
				</div>
			</div>
		</section>
		</main>
		
							
		</body>
		</html>
		
	<?php }else{ ?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Error 404</title>
		</head>
		<body>
			<h1>404. Object not found.</h1><br><hr>
			Team for the supplied id was not found on the server.
		</body>
		</html>
	<?php } ?>

<?php } else { ?>

<!DOCTYPE html>
<html>
<head>
	<title>Error 404</title>
</head>
<body>
	<h1>404. Object not found.</h1><br><hr>
	Team for the supplied id was not found on the server.
</body>
</html>

<?php } ?>

<?php
 mysqli_close($conn);
?>