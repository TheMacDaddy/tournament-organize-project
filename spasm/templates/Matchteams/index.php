<button type="button" onclick="window.location.href='matchteams/add'">Add Match-Team</button>
<div>
<table>
   <tr>
	  <td>Match-Team ID</td>
      <td>Match Number</td>
      <td>Team One</td>  
	  <td>Team Two</td> 
	  <td>Winner</td> 
	  <td>Score</td> 
      <td>Edit</td>
      <td>Delete</td>
   </tr>
   <?php
      foreach ($results as $row):
	  echo "<tr><td>".$row->mtid."</td>";
      echo "<td>".$row->matchnumber."</td>";
      echo "<td>".$row->matchpar1."</td>";
	  echo "<td>".$row->matchpar2."</td>";
	  echo "<td>".$row->matchwinner."</td>";
	  echo "<td>".$row->matchscore."</td>";
      echo "<td><a href='".$this->Url->build(["controller" => "Matchteams","action" => "edit",$row->mtid])."'>Edit</a></td>";
      echo "<td><a href='".$this->Url->build(["controller" => "Matchteams","action" => "delete",$row->mtid])."'>Delete</a></td></tr>";
      endforeach;
   ?>
</table>
</div
<br></br>
<button type="button" onclick="window.location.href='organizerhomepage'">Return</button>