<table>
   <tr>
	  <td>Game ID</td>
	  <td>Game Name</td>
	  <td>Game System</td>
      <td>Game Developer</td>
      <td>Game Genre</td>
   </tr>
   <?php
      foreach ($results as $row):
	  echo "<tr><td>".$row->gameid."</td>";
      echo "<td>".$row->gamename."</td>";
	  echo "<td>".$row->gamesystem."</td>";
      echo "<td>".$row->developer."</td>";
      echo "<td>".$row->genre."</td><tr>";
      endforeach;
   ?>
</table>
<br></br>
<button type="button" onclick="window.location.href='homepage'">Return</button>