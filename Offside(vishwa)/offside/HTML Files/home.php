<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width">
	<style>
		.header
		{
			height:10px;
		}
	</style>
	<title>Welcome to Offside</title>
	<link rel="shortcut icon" href="../IMAGES/oglogo.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="../CSS Files/style.css">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <script type="text/javascript" src="mq.js"></script>
</head>
<body>
	<?php
    $conn=mysqli_connect('localhost','root','','offside');
    if($conn)
    {
      //echo"Connection established succesfully";
    }
  ?>
  <div class="container">
    <header>
      <div id="left-header">
        <a href="home.php"><img src="../IMAGES/oglogo.png" alt="Offside" width="50px" height="50px">
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
          <li ><a href="login.php">LOGIN</a></li>
          <li ><a href="signup.php">SIGNUP</a></li>
        </ul>
        
        <a class="burger_nav"></a>
			</nav>

      <div style="clear:both"></div>
      
    </header>
  <div class=" header1">
    <img src="https://bettingbonus.online/wp-content/uploads/2017/11/Leagues.png" width="100%" height="220px">
  </div>


    <div class="home_window">
<!--       <div class="snippet_home">
        <ul class="slides">
                        <input type="radio" name="radio-btn" id="img-1" checked />
                        <li class="slide-container">
                        <div class="slide">
                          <img src="../IMAGES/ronaldored.jpg" />
                            </div>
                        <div class="nav">
                          <label for="img-6" class="prev">&#x2039;</label>
                          <label for="img-2" class="next">&#x203a;</label>
                        </div>
                        </li>

                        <input type="radio" name="radio-btn" id="img-2" />
                        <li class="slide-container">
                            <div class="slide">
                              <img src="../IMAGES/mufcvschel.jpg" />
                            </div>
                        <div class="nav">
                          <label for="img-1" class="prev">&#x2039;</label>
                          <label for="img-3" class="next">&#x203a;</label>
                        </div>
                        </li>

                        <input type="radio" name="radio-btn" id="img-3" />
                        <li class="slide-container">
                            <div class="slide">
                              <img src="../IMAGES/sanchez.jpg" />
                            </div>
                        <div class="nav">
                          <label for="img-2" class="prev">&#x2039;</label>
                          <label for="img-4" class="next">&#x203a;</label>
                        </div>
                        </li>

                        <input type="radio" name="radio-btn" id="img-4" />
                        <li class="slide-container">
                            <div class="slide">
                              <img src="../IMAGES/modric.jpg" />
                            </div>
                        <div class="nav">
                          <label for="img-3" class="prev">&#x2039;</label>
                          <label for="img-5" class="next">&#x203a;</label>
                        </div>
                        </li>

                        <input type="radio" name="radio-btn" id="img-5" />
                        <li class="slide-container">
                            <div class="slide">
                              <img src="../IMAGES/Nuno-Espirito-Santo-Barclays-MOTM-Sep-2018-award.jpg" />
                            </div>
                        <div class="nav">
                          <label for="img-4" class="prev">&#x2039;</label>
                          <label for="img-6" class="next">&#x203a;</label>
                        </div>
                        </li>

                        <input type="radio" name="radio-btn" id="img-6" />
                        <li class="slide-container">
                            <div class="slide">
                              <img src="../IMAGES/skysports-thierry-henry-monaco_4450789.jpg" />
                            </div>
                        <div class="nav">
                          <label for="img-5" class="prev">&#x2039;</label>
                          <label for="img-1" class="next">&#x203a;</label>
                        </div>
                        </li>

                        <li class="nav-dots">
                          <label for="img-1" class="nav-dot" id="img-dot-1"></label>
                          <label for="img-2" class="nav-dot" id="img-dot-2"></label>
                          <label for="img-3" class="nav-dot" id="img-dot-3"></label>
                          <label for="img-4" class="nav-dot" id="img-dot-4"></label>
                          <label for="img-5" class="nav-dot" id="img-dot-5"></label>
                          <label for="img-6" class="nav-dot" id="img-dot-6"></label>
                        </li>
                    </ul>

             </div> -->
      
			<base href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/">
<div id="captioned-gallery">
  <figure class="slider_home">
    <figure>
      <img src="hobbiton-lake.jpg" alt>
      <figcaption>Hobbiton, New Zealand</figcaption>
    </figure>
    <figure>
      <img src="wanaka-drowned-tree.jpg" alt>
      <figcaption>Wanaka, New Zealand</figcaption>
    </figure>
    <figure>
      <img src="utah-peak.jpg" alt>
      <figcaption>Utah, United States</figcaption>
    </figure>
    <figure>
      <img src="bryce-canyon-utah.jpg" alt>
      <figcaption>Bryce Canyon, Utah, United States</figcaption>
    </figure>
    <figure>
      <img src="hobbiton-lake.jpg" alt>
      <figcaption>Hobbiton, New Zealand</figcaption>
    </figure>
  </figure>
</div>
	
		  
      
      
      </div>
        <!-- <div id="side-bar">
            <header id="latest_news">
              <a href="#club-feed"><h4 >LATEST NEWS</h4></a>
            </header>
          </div>    -->
            <!-- <ul id="ul2">
              
              <marquee ><li><a href="https://twitter.com/English_AS/status/1051466015236911104?ref_src=twsrc%5Etfw%7Ctwcamp%5Etweetembed%7Ctwterm%5E1051466015236911104&ref_url=https%3A%2F%2Fbleacherreport.com%2Fworld-football">EDEN HAZARD INTERVIEW</a></li></marquee>
              <marquee><li><a href="http://www.goal.com/en/news/liverpool-left-sweating-over-van-dijk-injury-as-he-withdraws/rb6l6jui8jq0zf7qtmze9zwk">VIRGIL VAN DIJK INJURY</a></li></marquee>
              <marquee><li><a href="https://twitter.com/ESPNFC/status/1051453849783939072/photo/1?ref_src=twsrc%5Etfw%7Ctwcamp%5Etweetembed%7Ctwterm%5E1051453849783939072&ref_url=https%3A%2F%2Fbleacherreport.com%2Fworld-football">NETHERLANDS 3-0 GERMANY</a></li></marquee>
              <marquee><li><a href="https://twitter.com/footballitalia/status/1051452671838830592?ref_src=twsrc%5Etfw%7Ctwcamp%5Etweetembed%7Ctwterm%5E1051452671838830592&ref_url=https%3A%2F%2Fbleacherreport.com%2Fworld-football">MUFC TRANSFER RUMOUR</a></li></marquee>
              <marquee><li><a href="https://www.bbc.com/sport/football/45848579">NEW MONACO MANAGER</a></li></marquee>
            </ul>  -->
         
        
</div>
      

  <div class="news-home">
          <h1>Videos & Highlights</h1>
      </div>

      <div class="home_video">

        
      <div class="slider1">
     
        <div id="video1" class="slide1">
          <div class="video-container">
          <iframe class="vidclass" width="560" height="315" src="https://www.youtube.com/embed/JH6i4aJCdyk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          <div class="control-container">
          <a class="prev" href="#video4"></a>
          <a class="next" href="#video2"></a>
          </div>
        </div>
        
        <div id="video2" class="slide1">
          <div class="video-container">
          <iframe class="vidclass" width="560" height="315" src="https://www.youtube.com/embed/Fviz8fUk_sY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="control-container">
          <a class="prev" href="#video1"></a>
          <a class="next" href="#video3"></a>
          </div>
        </div>
        
        <div id="video3" class="slide1">
          <div class="video-container">
          <iframe class="vidclass" width="560" height="315" src="https://www.youtube.com/embed/0u-HPq_0gG0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="control-container">
          <a class="prev" href="#video2"></a>
          <a class="next" href="#video4"></a>  
          </div>
        </div>
        
        <div id="video4" class="slide1">
          <div class="video-container">
          <iframe class="vidclass" width="560" height="315" src="https://www.youtube.com/embed/3RKTudIEIr8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="control-container">
          <a class="prev" href="#video3"></a>
          <a class="next" href="#video1"></a>
          </div>
        </div>   
        <p></p>
      </div>

    </div>
	

		

    <div class="video_links">
      <h3 class="links">OTHER VIDEO LINKS</h3>

            <ul id="ul3">
              <li><a href="https://twitter.com/raioxdabola/status/1051288484512706561?ref_src=twsrc%5Etfw%7Ctwcamp%5Etweetembed%7Ctwterm%5E1051288484512706561&ref_url=https%3A%2F%2Fbleacherreport.com%2Fworld-football">BRAZIL VS CHILE U20- VINICIUS JR RUN</a></li>
              <li><a href="https://www.youtube.com/watch?v=xNOcLnsMCHw">GARY NEVILLE REACTS TO REPORTS JOSE MOURINHO IS SET TO BE SACKED BY MANCHESHTER UNITED</a></li>
              <li><a href="https://www.youtube.com/watch?v=oF-HxdIZjeM">LIVERPOOL VS CHELSEA 26/09/18 PREMIER LEAGUE </a></li>
              <li><a href="https://www.youtube.com/watch?v=OxQK8mMcMlU">MBAPPE 4 GOALS IN 13 MINUTES</a></li>
              <li><a href="https://www.youtube.com/watch?v=4mr2pwXnutc">BAYERN MUNICH 0 - 3 BORUSSIA MONCHENGLADBACH</a></li>
            </ul> 

    </div>

    <div id="club-feed">
          <div class="club-articles" align="left">
            <h3>FEED</h3></div>

            <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="93734"></script>

            </div>

    <div class="transfer-feed">
          <div class="club-articles" align="left">
            <h3>TRANSFER  RUMOURS</h3></div>

            <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="93735"></script>

            </div>

		<footer>
      <p>
        <div id="footerimg">
        <a href="home.html"><img src="../IMAGES/oglogo.png" alt="Offside" width="50px" height="50px"></a>
      </div>
        <small>&copy; <i>OFFSIDE</i></small>
        <a href="about.html"><small>&nbsp ABOUT US</small></a>
      </p>
    </footer>

</div>
</div>
</body>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="menu.js"></script>
</html>