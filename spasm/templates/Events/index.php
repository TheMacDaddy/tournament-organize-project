<button type="button" onclick="window.location.href='events/add'">Add Event</button>
<table>
   <tr>
	  <td>Event ID</td>
	  <td>Event Name</td>
	  <td>Game ID</td>
      <td>Event Rules</td>
      <td>Entry Requirements</td>
      <td>Bracket Type</td>
      <td>Bracket Size</td>
      <td>Prize</td>
	  <td>Start Date</td>
	  <td>End Date</td>
	  <td>Edit</td>
	  <td>Delete</td>
	  
   </tr>
   <?php
      foreach ($results as $row):
	  echo "<tr><td>".$row->eventid."</td>";
      echo "<td>".$row->eventname."</td>";
	  echo "<td>".$row->gameid."</td>";
      echo "<td>".$row->eventrules."</td>";
      echo "<td>".$row->requirements."</td>";
      echo "<td>".$row->brackettype."</td>";
      echo "<td>".$row->bracketsize."</td>";
	  echo "<td>".$row->prize."</td>";
	  echo "<td>".$row->startdate."</td>";
	  echo "<td>".$row->enddate."</td>";
	  echo "<td><a href='".$this->Url->build(["controller" => "Events","action" => "edit",$row->eventid])."'>Edit</a></td>";
      echo "<td><a href='".$this->Url->build(["controller" => "Events","action" => "delete",$row->eventid])."'>Delete</a></td></tr>";
      endforeach;
   ?>
</table>
<br></br>
<button type="button" onclick="window.location.href='organizerhomepage'">Return</button>
