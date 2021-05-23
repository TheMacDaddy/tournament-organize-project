<button type="button" onclick="window.location.href='teams/add'">Add Team</button>
<div>
<table>
   <tr>
	  <td>Team ID</td>
      <td>Team Name</td>
      <td>Game ID</td>
      <td>Edit</td>
      <td>Delete</td>
   </tr>
   <?php
      foreach ($results as $row):
	  echo "<tr><td>".$row->teamid."</td>";
      echo "<td>".$row->teamname."</td>";
      echo "<td>".$row->gameid."</td>";
      echo "<td><a href='".$this->Url->build(["controller" => "Teams","action" => "edit",$row->teamid])."'>Edit</a></td>";
      echo "<td><a href='".$this->Url->build(["controller" => "Teams","action" => "delete",$row->teamid])."'>Delete</a></td></tr>";
      endforeach;
   ?>
</table>
</div>
<br></br>
<button type="button" onclick="window.location.href='homepage'">Return</button>