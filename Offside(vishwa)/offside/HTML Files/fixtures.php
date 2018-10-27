<!DOCTYPE html>
<html>
<head>
	<title>Standings</title>
	<link rel="stylesheet" type="text/css" href="../CSS Files/style_home_nav.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
</head>
<body>
	<?php
		$conn=mysqli_connect('localhost','root','','offside');
		if($conn)
		{
			//echo"Connection established succesfully";
		}
		$uri = 'http://api.football-data.org/v2/competitions/2021/standings';
		$reqPrefs['http']['method'] = 'GET';
		$reqPrefs['http']['header'] = 'X-Auth-Token: 9fc4e444434c487db0748b4e118a3930';
		$stream_context = stream_context_create($reqPrefs);
		$response = file_get_contents($uri, false, $stream_context);
		$matches = json_decode($response,true);

	?>
	<div class="container">
		<header>
			<div id="left-header">
				<img src="../IMAGES/oglogo.png" alt="Offside" width="50px" height="50px">
			</div>
			<nav>
				<ul id="ul1">
					<li class="hoverWrapper"><a href="pl.html">PREMIER LEAGUE</a>
                       <div id="hoverShow1">
                       	<table>
                       		<?php
                       			$query = "Select t_name from teams where l_name='premier league'";
                       			$result=mysqli_query($conn,$query);
                       			$row_count=mysqli_num_rows($result);

                       			$count=2;
                       			
                       			while($row1=mysqli_fetch_assoc($result)){
                       				/*$link = "http://localhost:8080/offside/offside/HTML%20Files/team.php?team_id=".$row1['t_id'];*/		
                       				if($count>0)
                       				{
                       					echo '<td><a href=#>'.$row1['t_name'].'</td>';
                       					$count--;
                       				}
                       				else
                       				{		
                       					echo '<td><a href=#>'.$row1['t_name'].'</td>';
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
									$query="Select t_name from teams where l_name='la-liga'";
									$result=mysqli_query($conn,$query);
									while($row1=mysqli_fetch_assoc($result))
									{
										echo '<tr><td><a href=#>'.$row1['t_name'].'</td>';
									}
								?>
							</table>
						</div>	
					</li>
					<li class="hoverWrapper3"><a href="bundesliga.html">BUNDESLIGA</a>
						<div id="hoverShow3">
							<table>
							<?php
								$query="Select t_name from teams where l_name='bundesliga'";
								$result=mysqli_query($conn,$query);
								while($row1=mysqli_fetch_assoc($result))
								{
									echo '<tr><td><a href=#>'.$row1['t_name'].'</td>';
								}
							?>
						</table>
						</div>	
					</li>
					<li class="hoverWrapper4"><a href="serie-a.html">SERIE A</a>
						<div id="hoverShow4">
							<table>
							<?php
								$query="Select t_name from teams where l_name='serie a'";
								$result=mysqli_query($conn,$query);
								while($row1=mysqli_fetch_assoc($result))
								{
									echo '<tr><td><a href=#>'.$row1['t_name'].'</td>';
								}
							?>
						</table>
						</div>
					</li>
					<li class="hoverWrapper5"><a href="ligue-1.html">LIGUE 1</a>
						<div id="hoverShow5">
							<table>
							<?php
								$query="Select t_name from teams where l_name='ligue 1'";
								$result=mysqli_query($conn,$query);
								while($row1=mysqli_fetch_assoc($result))
								{
									echo '<tr><td><a href=#>'.$row1['t_name'].'</td>';
								}
							?>
						</table>
						</div>
					</li>
					<?php
						mysqli_close($conn);
					?>
					<li ><a href="LOGIN.html">LOGIN</a></li>
					<li ><a href="signup.php">SIGNUP</a></li>
				</ul>
			</nav>
			<div style="clear:both"></div>
		</header>

		<div class="plpic">
      <img src="../IMAGES/pl.png" alt="premier league" width="1366" height="400">
    </div>
    <main>
    <div class="tablestat">
		
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
							
							for($i=0;$i<20;$i++)
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
		</main>
</div>
</body>
</html>

<?php

/*foreach ($matches as $match) {
	# code...
	foreach($match as $rows )
		echo $rows;

}
echo "<div>";
echo"<table>";
echo"<tr>";
echo "<th>Position</th>";
echo"<th>TeamName</th>";
echo"<th>Points</th>";
echo"<th>GA(Goals Against)</th>";
echo"<th>GD(Goals Difference)</th>";
echo"</tr>";
for($i=0;$i<19;$i++)
{
	print_r($matches['standings'][0]['table'][$i]["team"]["id"]);
}
echo "</div>"

*/
#echo $response; 
?>


