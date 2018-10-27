<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Offside</title>
	<link rel="shortcut icon" href="../IMAGES/oglogo.png" type="image/png">
<link rel="stylesheet" type="text/css" href="../CSS Files/style_home_nav_table.css">
<link rel="stylesheet" type="text/css" href="../CSS Files/style1.css">

</head>
<h1>
</h1>
<body>
	<div class="container">
		<header>
			<div id="left-header">
				<a href="home.html"><img src="../IMAGES/oglogo.png" alt="Offside" width="50px" height="50px"></a>
			</div>
			<nav>
				<ul id="ul1">
					<li class="hoverWrapper"><a href="pl.html">PREMIER LEAGUE</a>
                       <div id="hoverShow1">
                       	<table>
                       	<tr><th>Premier League Clubs</th></tr><br>
                       	<div id="clubs">

                       		<tr>
                       		<td><a href="#">AFC Bournemouth</a><br></td>
                       		<td><a href="#">Arsenal</a><br></td>
                       		<td><a href="#">Brighton & Hove Albion</a><br></td></tr>
                       		<tr>
                       		<td><a href="#">Burnley</a><br></td>
                       		<td><a href="#">Cardiff City</a><br></td>
                       		<td><a href="#">Chelsea</a><br></td></tr>
                       		<tr>
                       		<td><a href="#">Crystal Palace</a><br></td>
                       		<td><a href="#">Everton</a><br></td>
                       		<td><a href="#">Fulham</a><br></td></tr>
                       		<tr>
                       		<td><a href="#">Huddersfield Town</a><br></td>
                       		<td><a href="#">Leicester City</a><br></td>
                       		<td><a href="#">Liverpool</a><br></td></tr>
                       		<tr>
                       		<td><a href="#">Manchester City</a><br></td>
                       		<td><a href="#">Manchester United</a><br></td>
                       		<td><a href="#">Newcastle United</a><br></td></tr>
                       		<tr>
                       		<td><a href="#">Southampton</a><br></td>
                       		<td><a href="#">Tottenham Hotspur</a><br></td>
                       		<td><a href="#">Watford</a><br></td></tr>
                       		<tr>
                       		<td><a href="#">West Ham United</a><br></td>
                       		<td><a href="#">Wolverhampton Wanderers</a><br></td></tr>

                       	</div>
                       	</table>
                       </div>
					</li>
					<li class="hoverWrapper2"><a href="laliga.html">LA LIGA</a>
						<div id="hoverShow2">
						<table>
                       			<tr><th>La Liga Clubs</th></tr><br>
                       	<div id="laligaclubs">

                       		<tr>
                       			<td><a href="#">Athletico Madrid</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">Barcelona</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">Real Madrid</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">Valencia</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">Sevilla</a><br></td>
                       		</tr>
                       	</div>
                       </table>
						</div>	
					</li>
					<li class="hoverWrapper3"><a href="bundesliga.html">BUNDESLIGA</a>
						<div id="hoverShow3">
						<table>
                       			<tr><th>Bundesliga Clubs</th></tr><br>
                       	<div id="bundesligaclubs">

                       		<tr>
                       			<td><a href="#">FC Bayern Munich</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">Borussia Dortmund</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">RB Leipzig</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">Borussia Mönchengladbach</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">Bayer Leverkusen</a><br></td>
                       		</tr>
                       	</div>
                       </table>
						</div>	
					</li>
					<li class="hoverWrapper4"><a href="serie-a.html">SERIE A</a>
						<div id="hoverShow4">
						<table>
                       			<tr><th>Serie-A Clubs</th></tr><br>
                       	<div id="seriaAclubs">

                       		<tr>
                       			<td><a href="#">Juventus</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">SSC Napoli</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">AS Roma</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">Inter Milan</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">AC Milan</a><br></td>
                       		</tr>
                       	</div>
                       </table>
						</div>
					</li>
					<li class="hoverWrapper5"><a href="ligue-1.html">LIGUE 1</a>
						<div id="hoverShow5">
						<table>
                       			<tr><th>Ligue-1 Clubs</th></tr><br>
                       	<div id="ligue1clubs">

                       		<tr>
                       			<td><a href="#">Paris Saint-Germain</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">Olympique de Marseille</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">AS Monaco</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">Olympique Lyonnais</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">OGC Nice</a><br></td>
                       		</tr>
                       	</div>
                       </table>
						</div>
					</li>
					<li ><a href="login.php">LOGIN</a></li>
					<li ><a href="signup.php">SIGNUP</a></li>
				</ul>
			</nav>
			<div style="clear:both"></div>
		</header>
	<div id="loginc">
		<h2>LOGIN
		</h2>
		<BR>
		<FORM  action="logincheck.php" method="POST">

		EMAIL:
		<br>
		<input type="email" placeholder="Enter Email" name="email" required>
		<br>
		PASSWORD:<br>
		<input type="password" name="password" placeholder="Enter Password" required>
		<br>
		<button type="submit" name="login">login </button>
		<br>
		<a href="signup.php">SIGN-UP IF NOT AN EXISTING USER</a>
		<BR>
	

		</FORM>
	</div>
</body>
</html>