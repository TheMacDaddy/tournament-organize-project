<div>
<table>
   <tr>
	  <td>Video ID</td>
	  <td>Video Title</td>
      <td>Video Path</td>
      <td>Video Likes</td>
      <td>Video Dislikes</td>
	  <td>Video Views</td>
   </tr>
   <?php
      foreach ($results as $row):
	  echo "<tr><td>".$row->vidid."</td>";
      echo "<td>".$row->vidname."</td>";
      echo "<td>".$row->vidpath."</td>";
      echo "<td>".$row->vidlikes."</td>";
	  echo "<td>".$row->viddislikes."</td>";
	  echo "<td>".$row->vidviews."</td>";
      endforeach;
   ?>
</table>
</div
<br></br>
<button type="button" onclick="window.location.href='homepage'">Return</button>