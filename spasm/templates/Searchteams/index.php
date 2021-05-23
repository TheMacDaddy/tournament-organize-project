<div>
<table>
   <tr>
	  <td>Team ID</td>
      <td>Team Name</td>
      <td>Game ID</td>
   </tr>
   <?php
      foreach ($results as $row):
	  echo "<tr><td>".$row->teamid."</td>";
      echo "<td>".$row->teamname."</td>";
      echo "<td>".$row->gameid."</td>";
      endforeach;
   ?>
</table>
</div>
<br></br>
<button type="button" onclick="window.location.href='homepage'">Return</button>