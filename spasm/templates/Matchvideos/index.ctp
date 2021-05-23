<button type="button" onclick="window.location.href='matchvideos/add'">Add Match-Video</button>
<div>
<table>
   <tr>
	  <td>Match-Video ID</td>
      <td>Video ID</td>
      <td>Match Number</td>  
      <td>Edit</td>
      <td>Delete</td>
   </tr>
   <?php
      foreach ($results as $row):
	  echo "<tr><td>".$row->mvid."</td>";
      echo "<td>".$row->vidid."</td>";
      echo "<td>".$row->matchnumber."</td>";
      echo "<td><a href='".$this->Url->build(["controller" => "Matchvideos","action" => "edit",$row->mvid])."'>Edit</a></td>";
      echo "<td><a href='".$this->Url->build(["controller" => "Matchvideos","action" => "delete",$row->mvid])."'>Delete</a></td></tr>";
      endforeach;
   ?>
</table>
</div
<br></br>
<button type="button" onclick="window.location.href='homepage'">Return</button>