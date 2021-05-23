<style>


h1 {text-align: center; 
	color: black;
	size: 50px;}
	
p0 {color: black;
	size: 40px}
	
p1 {color: black;
	size: 40px}
	
p2 {color: black;
	size: 40px}
	
body {background-image: url('https://wallpapercave.com/wp/wp870455.jpg');
	background-repeat: no-repeat;
  	background-attachment: fixed;
  	background-size: cover;
	text-align: center;}

}
</style>

<h1>Matches</h1>
<hr>
<br> <br>

</head>

<body>

<div style="background-color: white; padding: 8px 10px; width: 88%; margin: 0 auto; border: 1px solid #333; box-shadow: 8px 8px 5px #444; background-image: linear-gradient(180deg,#fff,#ddd 40%, #ccc); background-color: white;">
<p0>League of Legends</p0> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<p1>Halo</p1> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<p2>World of Warcraft</p2><br>


<a href="http://3.129.58.132/spasm/searchgames/League_of_Legends">
<img alt="LOL" src="https://lolstatic-a.akamaihd.net/frontpage/apps/prod/rg-league-display-2017/en_US/cb24025fade09e3f965776440dffcc65024d3266/assets/img/content/splash/content-original-championillustrations-group-slashes.jpg"
   width="300" height="150">
</a>

<a href="http://3.129.58.132/spasm/searchgames/Halo">
<img alt="HALO" src="https://wallpaperaccess.com/full/50054.jpg"
   width="300" height="150">
</a>

<a href="http://3.129.58.132/spasm/searchgames/World_of_Warcraft">
<img alt="WOW" src="https://wallpapercave.com/wp/jejd0Tz.jpg"
   width="300" height="150">
</a>
</div>
<br><br>
<button type="button" class="homebutt" onclick="window.location.href='searchgames'">Search by Game</button> 

<br>

<div>
<table>
   <tr>
	  <td>Match Number</td>
      <td>Event ID</td>
      <td>Match Date</td>
      <td>Team 1</td>
	  <td>Team 2</td>
	  <td>Winner</td>
	  <td>Score</td>

   </tr>
   <?php
      foreach ($results as $row):
	  echo "<tr><td>".$row->matchnumber."</td>";
      echo "<td>".$row->eventid."</td>";
      echo "<td>".$row->matchdate."</td>";
      echo "<td>".$row->matchpar1."</td>";
	  echo "<td>".$row->matchpar2."</td>";
	  echo "<td>".$row->matchwinner."</td>";
	  echo "<td>".$row->matchscore."</td>";
      endforeach;
   ?>
</table>
</div>


</body>
