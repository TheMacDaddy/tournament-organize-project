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
	  echo "<td>".$row->enddate."</td><tr>";
      endforeach;
   ?>
</table>
<br></br>

<button type="button" onclick="window.location.href='homepage'">Return</button>