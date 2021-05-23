<button type="button" onclick="window.location.href='matches/add'">Add Match</button>
<table>
   <tr>
	  <td>Match Number</td>
      <td>Event ID</td>
      <td>Match Date</td>
	  <td>Edit</td>
	  <td>Delete</td>
   </tr>
   <?php
      foreach ($results as $row):
      echo "<td>".$row->matchnumber."</td>";
      echo "<td>".$row->eventid."</td>";
      echo "<td>".$row->matchdate."</td>";
	  echo "<td><a href='".$this->Url->build(["controller" => "Matches","action" => "edit",$row->matchnumber])."'>Edit</a></td>";
      echo "<td><a href='".$this->Url->build(["controller" => "Matches","action" => "delete",$row->matchnumber])."'>Delete</a></td></tr>";
      endforeach;
   ?>
</table>
<br></br>
<button type="button" onclick="window.location.href='homepage'">Return</button>