<button type="button" onclick="window.location.href='games/add'">Add Game</button>
<table>
   <tr>
	  <td>Game ID</td>
	  <td>Game Name</td>
	  <td>Game System</td>
      <td>Game Developer</td>
      <td>Game Genre</td>
	  <td>Edit</td>
	  <td>Delete</td>
   </tr>
   <?php
      foreach ($results as $row):
	  echo "<td>".$row->gameid."</td>";
      echo "<td>".$row->gamename."</td>";
	  echo "<td>".$row->gamesystem."</td>";
      echo "<td>".$row->developer."</td>";
      echo "<td>".$row->genre."</td>";
	  echo "<td><a href='".$this->Url->build(["controller" => "Games","action" => "edit",$row->gameid])."'>Edit</a></td>";
      echo "<td><a href='".$this->Url->build(["controller" => "Games","action" => "delete",$row->gameid])."'>Delete</a></td></tr>";
      endforeach;
   ?>
</table>
<br></br>
<button type="button" onclick="window.location.href='homepage'">Return</button>