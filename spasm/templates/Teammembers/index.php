<button type="button" onclick="window.location.href='teammembers/add'">Add Team Members</button>
<div>
<table>
   <tr>
	  <td>Team-Member ID</td>
      <td>Team ID</td>
      <td>User ID</td>  
      <td>Edit</td>
      <td>Delete</td>
   </tr>
   <?php
      foreach ($results as $row):
	  echo "<tr><td>".$row->tmid."</td>";
      echo "<td>".$row->teamid."</td>";
      echo "<td>".$row->userid."</td>";
      echo "<td><a href='".$this->Url->build(["controller" => "Teammembers","action" => "edit",$row->tmid])."'>Edit</a></td>";
      echo "<td><a href='".$this->Url->build(["controller" => "Matchvideos","action" => "delete",$row->tmid])."'>Delete</a></td></tr>";
      endforeach;
   ?>
</table>
</div
<br></br>
<button type="button" onclick="window.location.href='playershomepage'">Return</button>