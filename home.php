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
    <img src="https://bettingbonus.online/wp-content/uploads/2017/11/Leagues.png" width="100%" height="250px">
  </div>


    <div class="home_window">

  <div class="slideshow-container">
     <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="https://img.bleacherreport.net/img/images/photos/003/771/780/hi-res-2f4e843a650b1783971567cad27d4433_crop_north.jpg?h=533&w=800&q=70&crop_x=center&crop_y=top" style=" width:100% height: 400px " class="center">
    <div class="text"><a href="https://bleacherreport.com/articles/2803095-report-leicester-city-owner-vichai-srivaddhanaprabhas-helicopter-crashes">Leicester City Owner Vichai Srivaddhanaprabha's Helicopter Crashes</a></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="https://premierleague-static-files.s3.amazonaws.com/premierleague/photo/2018/10/27/b4a0d07a-ba31-4767-9af9-df133e31db19/1054274964.jpg" style="width:100% height: 400px" class="center">
    <div class="text"><a href="https://www.premierleague.com/news/889436">Mane double takes four-goal Liverpool top</a></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="https://statics.sportskeeda.com/editor/2018/10/35f91-15404956805100-800.jpg" style="width:100% height: 400px" class="center">
    <div class="text"><a href="https://www.telegraph.co.uk/football/2018/10/28/barcelona-vs-real-madrid-2007-lineups-last-clasico-without-messi/">El Classico without Messi and Ronaldo</a></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="https://premierleague-static-files.s3.amazonaws.com/premierleague/photo/2018/10/25/54e92b31-17e9-4411-a5a0-4a502478df22/Anthony-Martial-Man-Utd-v-Newcastle-lead.png" style="width:100% height: 400px" class="center">
    <div class="text"><a href="https://www.premierleague.com/news/887865">Mobile Martial can take Man Utd in right direction</a></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img src="https://www.thesun.co.uk/wp-content/uploads/2018/10/NINTCHDBPICT000444106858-e1540387950577.jpg?strip=all&w=960" style="width:100% height: 400px" class="center">
    <div class="text"><a href="http://www.espn.in/football/report?gameId=522723">Cristiano Ronaldo's stunning winner completes Juventus fightback win against Empoli</a></div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>  
<br>
 
<!-- The dots/circles -->
<div class="slider_dots" style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
</div>
      
   
      
    </div>
        
        
  <div class="schedule">
  
    <div data-sportreef-widget="f0547dc4-f507-1f85-a4ec-4a23d9d1681e"></div>
        
    <div data-sportreef-widget="80f501dc-6209-c0d0-c9a3-e321174741be"></div>
    
    <div data-sportreef-widget="94b636ce-df57-5ec5-cd75-ac8635b34085"></div>

    <div data-sportreef-widget="22dc0b4d-a2e0-83dc-4011-41ec823c6ffc"></div>

    <div data-sportreef-widget="baf14c92-e54b-c965-9dcd-3c717b5efcad"></div>

   <script src="https://gate.sports-widgets.com/widget/3.0/loader.js"></script>
  

</div>
    
<div class="home_video">

         <div class="news-home">
          <h1>Videos & Highlights</h1>
      </div>
      <div class="slider1">
     
        <div id="video1" class="slide1">
          <div class="video-container">
          <iframe class="vidclass" width="560" height="315" src="https://www.youtube.com/embed/JH6i4aJCdyk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          <div class="control-container">
          <a class="prev1" href="#video4"></a>
          <a class="next1" href="#video2"></a>
          </div>
        </div>
        
        <div id="video2" class="slide1">
          <div class="video-container">
          <iframe class="vidclass" width="560" height="315" src="https://www.youtube.com/embed/Fviz8fUk_sY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="control-container">
          <a class="prev1" href="#video1"></a>
          <a class="next1" href="#video3"></a>
          </div>
        </div>
        
        <div id="video3" class="slide1">
          <div class="video-container">
          <iframe class="vidclass" width="560" height="315" src="https://www.youtube.com/embed/0u-HPq_0gG0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="control-container">
          <a class="prev1" href="#video2"></a>
          <a class="next1" href="#video4"></a>  
          </div>
        </div>
        
        <div id="video4" class="slide1">
          <div class="video-container">
          <iframe class="vidclass" width="560" height="315" src="https://www.youtube.com/embed/3RKTudIEIr8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="control-container">
          <a class="prev1" href="#video3"></a>
          <a class="next1" href="#video1"></a>
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
      <h1>NEWS</h1>
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
<script type="text/javascript" src="slider.js"></script>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="menu.js"></script>
</html>