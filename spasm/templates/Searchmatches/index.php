
<table>
   <tr>
	  <td>Match Number</td>
      <td>Event ID</td>
      <td>Match Date</td>
   </tr>
   <?php
      foreach ($results as $row):
      echo "<td>".$row->matchnumber."</td>";
      echo "<td>".$row->eventid."</td>";
      echo "<td>".$row->matchdate."</td>";
      endforeach;
   ?>
</table>
<br></br>
<button type="button" onclick="window.location.href='homepage'">Return</button>