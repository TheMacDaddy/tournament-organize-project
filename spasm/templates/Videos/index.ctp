<button type="button" onclick="window.location.href='videos/add'">Add Video</button>
<div>
<table>
   <tr>
	  <td>Video ID</td>
	  <td>Video Title</td>
      <td>Video Path</td>
      <td>Video Likes</td>
      <td>Video Dislikes</td>
	  <td>Video Views</td>  
      <td>Edit</td>
      <td>Delete</td>
   </tr>
   <?php
      foreach ($results as $row):
	  echo "<tr><td>".$row->vidid."</td>";
      echo "<td>".$row->vidname."</td>";
      echo "<td>".$row->vidpath."</td>";
      echo "<td>".$row->vidlikes."</td>";
	  echo "<td>".$row->viddislikes."</td>";
	  echo "<td>".$row->vidviews."</td>";
      echo "<td><a href='".$this->Url->build(["controller" => "Videos","action" => "edit",$row->vidid])."'>Edit</a></td>";
      echo "<td><a href='".$this->Url->build(["controller" => "Videos","action" => "delete",$row->vidid])."'>Delete</a></td></tr>";
      endforeach;
   ?>
</table>
</div
<br></br>
<button type="button" onclick="window.location.href='homepage'">Return</button>