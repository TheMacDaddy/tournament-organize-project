<button type="button" onclick="window.location.href='players/add'">Add Player</button>
<table>
   <tr>
	  <td>Username</td>
      <td>Password</td>
      <td>Email Address</td>
      <td>Date of Birth</td>
      <td>Team Name</td>
   </tr>
   <?php
      foreach ($results as $row):
      echo "<td>".$row->username."</td>";
      echo "<td>".$row->passcode."</td>";
      echo "<td>".$row->emailadd."</td>";
      echo "<td>".$row->dateofbirth."</td>";
      echo "<td>".$row->teamname."</td>";
      endforeach;
   ?>
</table>
<br></br>
<button type="button" onclick="window.location.href='homepage'">Return</button>