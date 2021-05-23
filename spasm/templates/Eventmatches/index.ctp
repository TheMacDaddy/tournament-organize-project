<button type="button" onclick="window.location.href='eventmatches/add'">Add Event-Match</button>
<div>
<table>
   <tr>
	  <td>Event-Match ID</td>
      <td>Event ID</td>
      <td>Match Number</td>
      <td>Match Order</td> 
      <td>Edit</td>
      <td>Delete</td>
   </tr>
   <?php
      foreach ($results as $row):
	  echo "<tr><td>".$row->emid."</td>";
      echo "<td>".$row->eventid."</td>";
      echo "<td>".$row->mtachnumber."</td>";
      echo "<td>".$row->matchorder."</td>";
      echo "<td><a href='".$this->Url->build(["controller" => "Eventmatches","action" => "edit",$row->emid])."'>Edit</a></td>";
      echo "<td><a href='".$this->Url->build(["controller" => "Eventmatches","action" => "delete",$row->emid])."'>Delete</a></td></tr>";
      endforeach;
   ?>
</table>
</div
<br></br>
<button type="button" onclick="window.location.href='homepage'">Return</button>