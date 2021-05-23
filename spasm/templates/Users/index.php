<button type="button" onclick="window.location.href='users/add'">Add User</button>
<div>
<table>
   <tr>
	  <td>User ID</td>
      <td>Username</td>
      <td>Password</td>
      <td>Email Address</td>
	  <td>Profile Photo</td>
	  <td>Verified Developer</td>
	  <td>Verified Organizer</td>
	  <td>Date Of Birth</td>
	  <td>Permission Value</td>	  
      <td>Edit</td>
      <td>Delete</td>
   </tr>
   <?php
      foreach ($results as $row):
	  echo "<tr><td>".$row->userid."</td>";
      echo "<td>".$row->username."</td>";
      echo "<td>".$row->password."</td>";
      echo "<td>".$row->emailadd."</td>";
	  echo "<td>".$row->profilephoto."</td>";
	  echo "<td>".$row->developerverified."</td>";
	  echo "<td>".$row->organizerverified."</td>";
	  echo "<td>".$row->dateofbirth."</td>";
	  echo "<td>".$row->permissionval."</td>";
      echo "<td><a href='".$this->Url->build(["controller" => "Users","action" => "edit",$row->userid])."'>Edit</a></td>";
      echo "<td><a href='".$this->Url->build(["controller" => "Users","action" => "delete",$row->userid])."'>Delete</a></td></tr>";
      endforeach;
   ?>
</table>
</div>
<br>
<button type="button" onclick="window.location.href='adminhomepage'">Return</button>
